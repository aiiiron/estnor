<?php
/**
 * db/migrate.php — create the tables (if missing) and load every JSON file
 * under content/db/ into i18n_strings.
 *
 * Run it once after setting up config.php, and again any time a file under
 * content/db/ changes:
 *
 *   php db/migrate.php
 *
 * CLI only — db/ is blocked from direct HTTP access by its .htaccess (see
 * inc/.htaccess for the same pattern), so this never runs over the web.
 * No SSH on your Hostinger plan? Run it locally instead, pointed at the
 * same credentials as config.php — Hostinger's MySQL is usually reachable
 * remotely once "Remote MySQL" access is enabled in hPanel -> Databases.
 */

if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    die('Run this from the CLI: php db/migrate.php');
}

require_once __DIR__ . '/../inc/db.php';

header('Content-Type: text/plain; charset=utf-8');

$pdo = db();

$pdo->exec('CREATE TABLE IF NOT EXISTS languages (
  code       VARCHAR(5)  NOT NULL PRIMARY KEY,
  name       VARCHAR(40) NOT NULL,
  is_default TINYINT(1)  NOT NULL DEFAULT 0
)');

$pdo->exec('CREATE TABLE IF NOT EXISTS i18n_strings (
  lang_code  VARCHAR(5)   NOT NULL,
  section    VARCHAR(80)  NOT NULL,
  content    LONGTEXT     NOT NULL,
  updated_at TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (lang_code, section)
)');

echo "Tables ready.\n";

$languages = [
    'et' => 'Eesti',
    'en' => 'English',
    'de' => 'Deutsch',
    'sv' => 'Svenska',
    'nb' => 'Norsk',
];
$upsertLang = $pdo->prepare('UPDATE languages SET name = ?, is_default = ? WHERE code = ?');
$insertLang = $pdo->prepare('INSERT INTO languages (code, name, is_default) VALUES (?, ?, ?)');
foreach ($languages as $code => $name) {
    $isDefault = $code === 'et' ? 1 : 0;
    $upsertLang->execute([$name, $isDefault, $code]);
    if ($upsertLang->rowCount() === 0) {
        $insertLang->execute([$code, $name, $isDefault]);
    }
}
echo "Languages seeded: " . implode(', ', array_keys($languages)) . "\n";

/** Upsert one (lang, section) row without relying on DB-specific "ON CONFLICT"/"ON DUPLICATE KEY" syntax. */
function put_section(PDO $pdo, string $lang, string $section, array $content): void {
    static $update = null, $insert = null;
    $update ??= $pdo->prepare('UPDATE i18n_strings SET content = ? WHERE lang_code = ? AND section = ?');
    $insert ??= $pdo->prepare('INSERT INTO i18n_strings (lang_code, section, content) VALUES (?, ?, ?)');
    $json = json_encode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $update->execute([$json, $lang, $section]);
    if ($update->rowCount() === 0) {
        $insert->execute([$lang, $section, $json]);
    }
}

$contentDir = __DIR__ . '/../content/db';
$count = 0;

// content/db/global.json = { "et": {...}, "en": {...}, ... } -> section 'global'
$globalPath = $contentDir . '/global.json';
if (is_file($globalPath)) {
    $byLang = json_decode(file_get_contents($globalPath), true);
    foreach ($byLang as $lang => $content) {
        put_section($pdo, $lang, 'global', $content);
        $count++;
    }
    echo "Loaded global.json (" . count($byLang) . " languages).\n";
} else {
    echo "WARNING: content/db/global.json not found — nav/footer/home strings not loaded.\n";
}

// content/db/pages/{slug}.json = { "et": {...}, ... } -> section "page:{slug}"
foreach (glob($contentDir . '/pages/*.json') as $path) {
    $slug = basename($path, '.json');
    $byLang = json_decode(file_get_contents($path), true);
    if (!is_array($byLang)) {
        echo "SKIPPED $path: invalid JSON.\n";
        continue;
    }
    foreach ($byLang as $lang => $content) {
        put_section($pdo, $lang, "page:{$slug}", $content);
        $count++;
    }
    echo "Loaded pages/{$slug}.json (" . count($byLang) . " languages).\n";
}

echo "Done — {$count} (language, section) rows written.\n";
