<?php
require_once __DIR__ . '/db.php';

/**
 * inc/i18n.php — language detection for estnor.ee (concept).
 *
 * Unlike seriell-sanierung.de (one URL, ?lang= switches content), this site
 * gives every language its own folder: / (Estonian), /en/, /de/, /sv/, /nb/.
 * So detection only has one job: decide where a visitor lands on the site's
 * root "/" — every other URL is already an explicit choice and must never
 * be redirected.
 *
 * Order of precedence, root only:
 *   1. ?lang=xx on the request       (explicit override, always wins)
 *   2. 'lang' cookie                 (remembered from a previous visit)
 *   3. Accept-Language header        (first visit, no cookie yet)
 *   4. $LANG_DEFAULT ('et')          (nothing matched / no header sent)
 *
 * A resolved language that is not 'et' (the language actually served at
 * root) triggers a 302 redirect to that language's home and sets the
 * cookie, so the decision sticks for a year without re-parsing the header
 * on every request.
 *
 * Include this at the very top of the root index.php, before any output
 * (it may send a Location header or set a cookie). Language-folder pages
 * (en/, de/, ...) do NOT include this — they just set $LANG themselves.
 */

$LANGS        = ['et' => 'Eesti', 'en' => 'English', 'de' => 'Deutsch', 'sv' => 'Svenska', 'nb' => 'Norsk'];
$LANG_DEFAULT = 'et';   // language actually served at the bare "/"
$LANG_FALLBACK_FOREIGN = 'en'; // unsupported browser language -> this, not $LANG_DEFAULT

/**
 * Parse an Accept-Language header into supported language codes, best first.
 * "sv-SE,sv;q=0.9,en-US;q=0.8,en;q=0.7" -> ['sv','en']
 */
function accept_language_matches(string $header, array $supported): array {
    $weighted = [];
    foreach (explode(',', $header) as $part) {
        $part = trim($part);
        if ($part === '') continue;
        [$tag, $q] = array_pad(explode(';q=', $part, 2), 2, '1');
        $primary = strtolower(substr(trim($tag), 0, 2)); // "sv-SE" -> "sv"
        if (!in_array($primary, $supported, true)) continue;
        $weighted[$primary] = max($weighted[$primary] ?? 0.0, (float) $q);
    }
    arsort($weighted);
    return array_keys($weighted);
}

function set_lang_cookie(string $code): void {
    if (!headers_sent()) {
        setcookie('lang', $code, [
            'expires'  => time() + 31536000,
            'path'     => '/',
            'samesite' => 'Lax',
        ]);
    }
}

/** Home URL for each language, used by the header's language switcher. */
$LANG_HOME = [
    'et' => '/index.php',
    'en' => '/en/index.php',
    'de' => '/de/index.php',
    'sv' => '/sv/index.php',
    'nb' => '/nb/index.php',
];

/**
 * Resolve the language for the root page and, if it isn't 'et', redirect.
 * Call this as the very first thing in root index.php.
 */
function i18n_resolve_root(array $langs, string $default, string $fallback): string {
    global $LANG_HOME;
    $supported = array_keys($langs);

    if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $langs)) {
        $lang = $_GET['lang'];
        set_lang_cookie($lang);
    } elseif (isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $langs)) {
        $lang = $_COOKIE['lang'];
    } else {
        $header  = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
        $matches = $header !== '' ? accept_language_matches($header, $supported) : [];
        $lang    = $matches[0] ?? $fallback; // browser language unsupported/absent -> English
        set_lang_cookie($lang);
    }

    if ($lang !== $default && array_key_exists($lang, $langs) && !headers_sent()) {
        // Redirect to the explicit file (e.g. /en/index.php), not the bare
        // directory (/en/) — a bare directory URL only resolves if the
        // server is configured to auto-serve index.php for it, which isn't
        // a safe assumption across every host. url() prefixes this with
        // the deployment's base path (config.php's 'base_path') in case
        // the site itself lives in a subfolder rather than at its domain's
        // root.
        header('Location: ' . url($LANG_HOME[$lang]), true, 302);
        exit;
    }

    return $default;
}

// load_lang() and load_page() now live in inc/db.php — every page's
// content (site chrome + page body alike) comes from the database, not
// per-language PHP files. See db/schema.sql and db/migrate.php.

/** aria-current="page" helper for the top-level nav item matching $active. */
function nav_active(string $key, string $active): string {
    return $key === $active ? ' aria-current="page"' : '';
}
