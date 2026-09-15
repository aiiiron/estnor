<?php
/**
 * inc/references.php — photo lookup for reference projects.
 *
 * Reference photos are NOT tracked in this git repo (see .gitignore) —
 * there can be many per project, and pushing them through git on every
 * deploy is slow. Instead each reference gets its own folder, uploaded
 * straight to the server (FTP / hosting file manager), named after its
 * content/db/references.json "slug":
 *
 *   assets/img/references/<slug>/
 *
 * Drop any number of .jpg/.jpeg/.png/.webp/.avif files in there — any
 * filenames work, but naming them "1.jpg", "2.jpg", ... is the simplest
 * way to control display order, since files are listed in natural
 * filename order ("2.jpg" before "10.jpg"). The functions below read
 * whatever is actually on disk at request time: an empty or missing
 * folder isn't an error, it just means no photos yet, and the card/
 * lightbox fall back to a placeholder until real ones are added — no
 * code or content-JSON change needed when photos do get added.
 */

const REFERENCE_PHOTO_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp', 'avif'];

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
