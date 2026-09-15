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
 * Both photos and text ARE tracked in this git repo (see
 * assets/img/references/README.md) — this site's host rebuilds its
 * entire deployed directory from git on every deploy, so anything not
 * actually committed here gets wiped on the next deploy regardless of
 * .gitignore. Add or edit a reference project locally, commit, push,
 * deploy, same as any other change to the site. Adding a whole new
 * reference project needs no code change — just a new folder.
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
 *   1. Name the FOLDER with a leading number: "1-germany-model-house",
 *      "2-nature-hub", "3-stroomi-rannahoone", ... — the HIGHEST number
 *      shows first, so the most recent project always gets the biggest
 *      number. Adding a new project means giving it one more than the
 *      current highest — nothing else needs renaming. This is the
 *      recommended way: one rename, nothing to keep in sync, and the
 *      same numbering shows the order in a local file browser too.
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
 *
 * There are two independent collections of such folders, each a
 * separate root directory with the same folder-per-project layout:
 *
 *   'references'  assets/img/references/  — the References page + homepage teaser
 *   'renovation'  assets/img/renovation/  — the Serial Renovation page's own
 *                                           per-building albums (#references)
 *
 * Every function below takes the collection name as its last argument,
 * defaulting to 'references'. A project can deliberately exist in both
 * (e.g. one combined "Tehaseline renoveerimine" album under references,
 * and the same photos split per building under renovation).
 */

const REFERENCE_PHOTO_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp', 'avif'];
const REFERENCE_TEXT_LANGS_FALLBACK = ['en', 'et']; // tried in order after the requested language
const REFERENCE_COLLECTIONS = ['references', 'renovation']; // each is a folder under assets/img/

/**
 * The "Product type:" values a .txt file can carry, in every language,
 * keyed by a language-independent category. This is what lets a product
 * page pull "its" albums out of the general references collection
 * (Element houses shows the element-house projects, etc.) without a
 * separate album folder to keep in sync — see load_references_by_category().
 * Matching is case-insensitive; a Product type not listed here simply
 * belongs to no category (it still shows on the References page).
 */
const REFERENCE_CATEGORIES = [
    'element'    => ['Elementmajad', 'Element houses', 'Elementhäuser', 'Elementhus'],
    'modular'    => ['Moodulmajad', 'Modular houses', 'Modulhäuser', 'Modulhus'],
    'facade'     => ['Fassaadi- ja katuseelemendid', 'Facade and roof elements', 'Fassaden- und Dachelemente', 'Fasad- och takelement', 'Fasade- og takelementer'],
    'renovation' => ['Tehaseline renoveerimine', 'Serial renovation', 'Serielle Sanierung', 'Modernisering av flerbostadshus', 'Modernisering av leilighetsbygg'],
];

/** The REFERENCE_CATEGORIES key a "Product type:" value belongs to, or null. */
function reference_category_key(string $productType): ?string {
    $needle = mb_strtolower(trim($productType));
    foreach (REFERENCE_CATEGORIES as $key => $names) {
        foreach ($names as $name) {
            if (mb_strtolower($name) === $needle) return $key;
        }
    }
    return null;
}

/** Absolute filesystem root of one collection's project folders. */
function reference_root(string $collection = 'references'): string {
    if (!in_array($collection, REFERENCE_COLLECTIONS, true)) {
        throw new InvalidArgumentException("Unknown reference collection: $collection");
    }
    return __DIR__ . '/../assets/img/' . $collection;
}

/** Every reference project's folder name in a collection, unsorted. */
function reference_slugs(string $collection = 'references'): array {
    $root = reference_root($collection);
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
function reference_text_fields(string $slug, string $lang, string $collection = 'references'): ?array {
    $path = reference_root($collection) . '/' . $slug . '/' . $lang . '.txt';
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
function reference_fields(string $slug, string $lang, string $collection = 'references'): ?array {
    foreach (array_unique([$lang, ...REFERENCE_TEXT_LANGS_FALLBACK]) as $tryLang) {
        $fields = reference_text_fields($slug, $tryLang, $collection);
        if ($fields !== null) return $fields;
    }
    return null;
}

/** A folder's leading "<number>-" order prefix (e.g. 3 from "3-stroomi-rannahoone"), or null if it has none. */
function reference_order_prefix(string $slug): ?int {
    return preg_match('/^(\d+)-/', $slug, $m) ? (int) $m[1] : null;
}

/**
 * Every reference project for $lang, ordered per this file's doc
 * comment (a numbered folder first, highest number first; then by "Date", newest
 * first; undated/unnumbered ties broken alphabetically by slug). A
 * project with no .txt file in any language is skipped — nothing to
 * show for it yet.
 */
function load_references(string $lang, string $collection = 'references'): array {
    $refs = [];
    foreach (reference_slugs($collection) as $slug) {
        $fields = reference_fields($slug, $lang, $collection);
        if ($fields === null) continue;
        $refs[] = [
            'slug'        => $slug,
            'collection'  => $collection,
            'order'       => reference_order_prefix($slug),
            'title'       => $fields['title'] ?? $slug,
            'location'    => $fields['location'] ?? '',
            'category'    => $fields['category'] ?? '',
            'category_key'=> reference_category_key($fields['category'] ?? ''),
            'description' => $fields['description'] ?? '',
            'date'        => $fields['date'] ?? null,
        ];
    }

    usort($refs, function ($a, $b) {
        // A numbered folder always outranks an unnumbered one; among
        // numbered ones the highest number (= most recent) comes first.
        if ($a['order'] !== null && $b['order'] !== null) return $b['order'] <=> $a['order'];
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
 * load_references() narrowed to one REFERENCE_CATEGORIES key — the
 * albums a product page shows ("the element-house projects"). Same
 * order as the References page. Deliberately a view over the same
 * folders, not a second copy: add a project once, it appears in both.
 */
function load_references_by_category(string $lang, string $categoryKey, string $collection = 'references'): array {
    return array_values(array_filter(
        load_references($lang, $collection),
        fn($ref) => $ref['category_key'] === $categoryKey
    ));
}

/**
 * Absolute filesystem paths of every photo in a reference's folder,
 * naturally sorted by filename. Empty array if the folder doesn't exist
 * yet or has no recognized image files.
 */
function reference_photo_files(string $slug, string $collection = 'references'): array {
    $dir = reference_root($collection) . '/' . $slug;
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
function reference_photo_urls(string $ASSET, string $slug, string $collection = 'references'): array {
    $urls = [];
    foreach (reference_photo_files($slug, $collection) as $name) {
        $urls[] = $ASSET . '/assets/img/' . $collection . '/' . rawurlencode($slug) . '/' . rawurlencode($name);
    }
    return $urls;
}

/** The reference's first photo URL for its card cover, or null if it has none yet. */
function reference_cover_url(string $ASSET, string $slug, string $collection = 'references'): ?string {
    return reference_photo_urls($ASSET, $slug, $collection)[0] ?? null;
}
