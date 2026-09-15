<?php
/**
 * inc/references.php — reference project lookup, reading straight from
 * assets/img/references/ on disk (no content JSON, no database).
 *
 * Each reference project is one folder there, named however you like
 * (its "slug" — used only internally, never shown to visitors):
 *
 *   assets/img/references/<slug>/
 *     en.txt, et.txt, de.txt, sv.txt, nb.txt   — one per language, all optional
 *     1.jpg, 2.jpg, ...                        — any number, any names
 *
 * Both photos and text are uploaded straight to the server (FTP / your
 * host's file manager) — neither is tracked as bulky content in this
 * git repo (photos are gitignored entirely; the .txt files ARE tracked,
 * since they're small plain-text content, not bulky like photos — see
 * assets/img/references/README.md for the exact format and workflow).
 * A deploy (git pull) never needs to touch this folder for a photo or
 * text change to go live, and adding a whole new reference project
 * needs no code change at all — just a new folder.
 *
 * A language's .txt file is "Label: value" lines, in any order:
 *
 *   Product type: Facade and roof elements
 *   Name: Stroomi Rannahoone
 *   Location: Pärnu, Estonia
 *   Date: 2024-09-01
 *   Description: A seaside building in Pärnu, built using EstNor's
 *   element and facade technology.
 *
 * Labels always stay in English, in every language's file — only the
 * values after the colon change — so there's one template to remember
 * regardless of which language you're filling in. A missing language
 * falls back to English, then Estonian, same as the rest of the site.
 * Two ways to control display order (used for the homepage's "3 latest"
 * teaser and the order cards appear in on the References page) — pick
 * whichever's easier:
 *
 *   1. Name the FOLDER with a leading number: "10-stroomi-rannahoone",
 *      "20-nature-hub", ... — sorted ascending (lowest number first).
 *      Leave gaps (10, 20, 30, not 1, 2, 3) so a new "most recent"
 *      project can be inserted as "5-..." without renaming anything
 *      else. This is the recommended way: one rename, nothing to keep
 *      in sync, and renaming a folder in an FTP client moves its
 *      contents with it automatically.
 *   2. A "Date:" line in the .txt file (below) — undated projects, and
 *      any project whose folder has no number prefix, sort after every
 *      numbered one, newest date first. Simple, but Date is read from
 *      whichever language's file is showing, so if you only update
 *      one language's Date the project can rank differently across
 *      languages — the folder-number method doesn't have that problem,
 *      since a folder has only one name.
 *
 * A numbered folder always outranks an unnumbered one, regardless of
 * Date.
 */

const REFERENCE_PHOTO_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp', 'avif'];
const REFERENCE_TEXT_LANGS_FALLBACK = ['en', 'et']; // tried in order after the requested language

/** Every reference project's folder name, unsorted. */
function reference_slugs(): array {
    $root = __DIR__ . '/../assets/img/references';
    if (!is_dir($root)) return [];

    $slugs = [];
    foreach (scandir($root) as $name) {
        if ($name === '.' || $name === '..') continue;
        if (!is_dir($root . '/' . $name)) continue; // skip README.md etc.
        $slugs[] = $name;
    }
    return $slugs;
}

/**
 * Parse one reference's <lang>.txt into ['category','title','location','description','date'].
 * Null if that file doesn't exist. Unknown labels are ignored; a label
 * with no recognized match is silently skipped rather than erroring —
 * a typo'd line just doesn't show up, instead of breaking the page.
 */
function reference_text_fields(string $slug, string $lang): ?array {
    $path = __DIR__ . '/../assets/img/references/' . $slug . '/' . $lang . '.txt';
    if (!is_file($path)) return null;

    $labelMap = [
        'product type' => 'category',
        'name'         => 'title',
        'location'     => 'location',
        'description'  => 'description',
        'date'         => 'date',
    ];

    $fields = [];
    $raw = file_get_contents($path);
    foreach (preg_split('/\r\n|\r|\n/', (string) $raw) as $line) {
        if (!str_contains($line, ':')) continue;
        [$label, $value] = explode(':', $line, 2);
        $key = $labelMap[strtolower(trim($label))] ?? null;
        if ($key !== null) {
            $fields[$key] = trim($value);
        }
    }
    return $fields;
}

/** One reference's fields for $lang, falling back to English then Estonian. */
function reference_fields(string $slug, string $lang): ?array {
    foreach (array_unique([$lang, ...REFERENCE_TEXT_LANGS_FALLBACK]) as $tryLang) {
        $fields = reference_text_fields($slug, $tryLang);
        if ($fields !== null) return $fields;
    }
    return null;
}

/** A folder's leading "<number>-" order prefix (e.g. 10 from "10-stroomi-rannahoone"), or null if it has none. */
function reference_order_prefix(string $slug): ?int {
    return preg_match('/^(\d+)-/', $slug, $m) ? (int) $m[1] : null;
}

/**
 * Every reference project for $lang, ordered per this file's doc
 * comment (a numbered folder first, ascending; then by "Date", newest
 * first; undated/unnumbered ties broken alphabetically by slug). A
 * project with no .txt file in any language is skipped — nothing to
 * show for it yet.
 */
function load_references(string $lang): array {
    $refs = [];
    foreach (reference_slugs() as $slug) {
        $fields = reference_fields($slug, $lang);
        if ($fields === null) continue;
        $refs[] = [
            'slug'        => $slug,
            'order'       => reference_order_prefix($slug),
            'title'       => $fields['title'] ?? $slug,
            'location'    => $fields['location'] ?? '',
            'category'    => $fields['category'] ?? '',
            'description' => $fields['description'] ?? '',
            'date'        => $fields['date'] ?? null,
        ];
    }

    usort($refs, function ($a, $b) {
        // A numbered folder always outranks an unnumbered one.
        if ($a['order'] !== null && $b['order'] !== null) return $a['order'] <=> $b['order'];
        if ($a['order'] !== null) return -1;
        if ($b['order'] !== null) return 1;

        // Neither is numbered — fall back to Date, newest first.
        $tsA = $a['date'] ? strtotime($a['date']) : false;
        $tsB = $b['date'] ? strtotime($b['date']) : false;
        if ($tsA !== false && $tsB !== false) return $tsB <=> $tsA;
        if ($tsA !== false) return -1;  // dated before undated
        if ($tsB !== false) return 1;
        return $a['slug'] <=> $b['slug'];
    });

    return $refs;
}

/**
 * Absolute filesystem paths of every photo in a reference's folder,
 * naturally sorted by filename. Empty array if the folder doesn't exist
 * yet or has no recognized image files.
 */
function reference_photo_files(string $slug): array {
    $dir = __DIR__ . '/../assets/img/references/' . $slug;
    if (!is_dir($dir)) return [];

    $files = [];
    foreach (scandir($dir) as $name) {
        if ($name === '.' || $name === '..') continue;
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (in_array($ext, REFERENCE_PHOTO_EXTENSIONS, true)) {
            $files[] = $name;
        }
    }
    natsort($files);
    return array_values($files);
}

/**
 * Same photos as reference_photo_files(), as absolute site URLs the
 * browser can load — $ASSET-prefixed so they resolve from any page depth
 * (root Estonian pages vs. /en/, /de/, ... folders).
 */
function reference_photo_urls(string $ASSET, string $slug): array {
    $urls = [];
    foreach (reference_photo_files($slug) as $name) {
        $urls[] = $ASSET . '/assets/img/references/' . rawurlencode($slug) . '/' . rawurlencode($name);
    }
    return $urls;
}

/** The reference's first photo URL for its card cover, or null if it has none yet. */
function reference_cover_url(string $ASSET, string $slug): ?string {
    return reference_photo_urls($ASSET, $slug)[0] ?? null;
}
