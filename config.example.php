<?php
/**
 * config.php — deployment settings: only the base URL path, these days.
 * NOT committed to git (see .gitignore).
 *
 * Content used to live in a MySQL database that db/migrate.php loaded
 * content/db/*.json into, so this file also held DB credentials and every
 * content change needed a separate database re-import after deploying.
 * Content is now read straight from content/db/*.json at request time —
 * a deploy alone is enough. This file (and config.php entirely) is only
 * needed at all if the site is deployed into a URL subfolder.
 *
 * If the site is served from its domain's root (https://example.com/),
 * you don't need a config.php at all — skip this file entirely.
 *
 * If it's deployed into a subfolder instead — e.g. Hostinger's git deploy
 * "root directory" is set to something other than the site's actual
 * document root, so it's reachable at https://example.com/some-folder/ —
 * copy this file to config.php (same directory) and set 'base_path' to
 * that folder's path, e.g. '/some-folder'.
 */
return [
    // The URL path this site is mounted under, with no trailing slash.
    // Every absolute internal link (nav, footer, language switcher, the
    // root language-detection redirect) is built from this, via the
    // url() helper in inc/site.php — page-relative links (most of the
    // site) don't need it and aren't affected.
    'base_path' => '/some-folder',
];
