<?php
/**
 * inc/db.php — content lookup, reading directly from the JSON files under
 * content/db/ (no database in between).
 *
 * This used to be a PDO wrapper over a MySQL table that db/migrate.php
 * loaded content/db/*.json into — every content change needed a code
 * deploy AND a separate database re-import. It now reads those same JSON
 * files straight off disk at request time, so a deploy alone is enough;
 * there is nothing left to re-import. The file keeps its old name and
 * these two functions' exact signatures/behavior so nothing elsewhere
 * (partials/head.php, partials/footer.php, every pages/*.php template)
 * needed to change.
 *
 * One page load needs at most two files: content/db/global.json (nav,
 * footer, home hero) and the current page's own content/db/pages/{slug}.json.
 * Each file is decoded at most once per request (cached by path in a
 * static array), no matter how many times load_lang()/load_page() are
 * called while rendering.
 */

/** Print a plain, safe explanation and stop. */
function content_fail(string $message): never {
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    die($message . "\n");
}

/** Decode one content/db/*.json file, cached per request by its path. */
function load_content_file(string $path): array {
    static $cache = [];
    if (array_key_exists($path, $cache)) return $cache[$path];

    if (!is_file($path)) {
        content_fail("Missing content file: " . basename($path) . "\n\nExpected it at content/db/ (or content/db/pages/) — check the file wasn't renamed or deleted.");
    }
    $raw = file_get_contents($path);
    $data = ($raw === false) ? null : json_decode($raw, true);
    if (!is_array($data)) {
        content_fail("Malformed JSON in content file: " . basename($path) . (json_last_error() !== JSON_ERROR_NONE ? ' — ' . json_last_error_msg() : ''));
    }
    return $cache[$path] = $data;
}

/** Fetch one (lang, section) content block. Null if that language/section is absent. */
function content_get_section(string $lang, string $section): ?array {
    if ($section === 'global') {
        $path = __DIR__ . '/../content/db/global.json';
    } elseif ($section === 'references') {
        $path = __DIR__ . '/../content/db/references.json';
    } elseif (str_starts_with($section, 'page:')) {
        $slug = substr($section, 5);
        $path = __DIR__ . '/../content/db/pages/' . $slug . '.json';
    } else {
        content_fail("Unknown content section: {$section}");
    }
    $data = load_content_file($path);
    return $data[$lang] ?? null;
}

/**
 * Load a language's site-chrome strings (common/brand_caption/nav/footer/
 * meta/home) — same shape the old lang/{code}.php files returned, so
 * partials/head.php, partials/footer.php and partials/home.php need no
 * changes. Falls back to English, then Estonian, if a language is missing
 * (should not happen once content/db/global.json has that language, but
 * keeps a partial edit from producing a hard crash).
 */
function load_lang(string $code): array {
    return content_get_section($code, 'global')
        ?? content_get_section('en', 'global')
        ?? content_get_section('et', 'global')
        ?? [];
}

/**
 * Load one page's own body content (hero copy, cards, steps, etc.) for a
 * language. Every page template in pages/*.php reads its content through
 * this, keyed by the same slug used in its content/db/pages/{slug}.json filename.
 */
function load_page(string $slug, string $code): array {
    return content_get_section($code, "page:{$slug}")
        ?? content_get_section('en', "page:{$slug}")
        ?? content_get_section('et', "page:{$slug}")
        ?? [];
}

/**
 * Load the canonical list of reference projects (content/db/references.json)
 * for a language — one shared list, ordered newest-first, that both the
 * homepage (its 3 latest) and pages/references.php (all of them) read
 * from, instead of each keeping its own separate, hand-typed copy.
 * Photos are not stored here — see inc/references.php.
 */
function load_references(string $code): array {
    return content_get_section($code, 'references')
        ?? content_get_section('en', 'references')
        ?? content_get_section('et', 'references')
        ?? [];
}
