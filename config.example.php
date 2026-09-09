<?php
/**
 * config.php — deployment settings: database connection + base URL path.
 * NOT committed to git (see .gitignore) since it holds real credentials
 * once filled in.
 *
 * Setup on Hostinger:
 *   1. hPanel -> Databases -> MySQL Databases -> create a database, a user,
 *      and attach the user to the database. Hostinger shows you the host
 *      (usually "localhost"), database name, username and password.
 *   2. Copy this file to config.php (same directory) and fill in the
 *      'dsn'/'user'/'pass' values below.
 *   3. Set 'base_path' (see below) to match where this site actually
 *      lives under its domain.
 *   4. Run `php db/migrate.php` once over SSH to create the tables and
 *      load the site's content into them. Re-run it any time a file
 *      under content/db/ changes.
 *
 * Local development: point 'dsn' at a SQLite file instead, e.g.
 *   'dsn' => 'sqlite:' . __DIR__ . '/db/dev.sqlite',
 * and leave 'user'/'pass' as null. Everything else in the app is written
 * against plain PDO + ANSI-ish SQL, so it runs unchanged against SQLite or
 * MySQL — only this file's 'dsn' needs to differ between the two.
 */
return [
    'dsn'  => 'mysql:host=localhost;dbname=YOUR_DB_NAME;charset=utf8mb4',
    'user' => 'YOUR_DB_USER',
    'pass' => 'YOUR_DB_PASSWORD',

    // The URL path this site is mounted under, with no trailing slash.
    // '' if it's served from its domain's root (https://example.com/).
    // If it's deployed into a subfolder instead — e.g. Hostinger's git
    // deploy "root directory" is set to something other than the site's
    // actual document root, so it's reachable at
    // https://example.com/some-folder/ — set this to that folder's path,
    // e.g. '/some-folder'. Every absolute internal link (nav, footer,
    // language switcher, the root language-detection redirect) is built
    // from this, via the url() helper in inc/site.php — page-relative
    // links (most of the site) don't need it and aren't affected.
    'base_path' => '',
];
