<?php
/**
 * inc/db.php — thin PDO wrapper + content lookup for the DB-backed
 * multilingual content (see db/schema.sql and db/migrate.php).
 *
 * One page load needs at most two rows: the 'global' section (nav, footer,
 * home hero — everything partials/head.php and partials/footer.php need)
 * and the current page's own "page:{slug}" section. Both are cached in a
 * static array for the lifetime of the request, so a page never issues more
 * than 2 queries no matter how many times load_lang()/load_page() are
 * called while rendering.
 */

function db(): PDO {
    static $pdo = null;
    if ($pdo !== null) return $pdo;

    $configPath = __DIR__ . '/../config.php';
    if (!is_file($configPath)) {
        http_response_code(500);
        die('Missing config.php — copy config.example.php to config.php and fill in your database credentials.');
    }
    $config = require $configPath;
    $pdo = new PDO($config['dsn'], $config['user'] ?? null, $config['pass'] ?? null, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    return $pdo;
}

/** Fetch one (lang_code, section) row's JSON content, decoded. Null if absent. */
function db_get_section(string $lang, string $section): ?array {
    static $cache = [];
    $key = $lang . ':' . $section;
    if (array_key_exists($key, $cache)) return $cache[$key];

    $stmt = db()->prepare('SELECT content FROM i18n_strings WHERE lang_code = ? AND section = ?');
    $stmt->execute([$lang, $section]);
    $row = $stmt->fetch();
    return $cache[$key] = ($row ? json_decode($row['content'], true) : null);
}

/**
 * Load a language's site-chrome strings (common/brand_caption/nav/footer/
 * meta/home) — same shape the old lang/{code}.php files returned, so
 * partials/head.php, partials/footer.php and partials/home.php need no
 * changes. Falls back to English, then Estonian, if a language is missing
 * (should not happen once db/migrate.php has run, but keeps a bad/partial
 * DB from producing a hard crash).
 */
function load_lang(string $code): array {
    return db_get_section($code, 'global')
        ?? db_get_section('en', 'global')
        ?? db_get_section('et', 'global')
        ?? [];
}

/**
 * Load one page's own body content (hero copy, cards, steps, etc.) for a
 * language. Every page template in pages/*.php reads its content through
 * this, keyed by the same slug used in its DB section name ("page:{slug}").
 */
function load_page(string $slug, string $code): array {
    return db_get_section($code, "page:{$slug}")
        ?? db_get_section('en', "page:{$slug}")
        ?? db_get_section('et', "page:{$slug}")
        ?? [];
}
