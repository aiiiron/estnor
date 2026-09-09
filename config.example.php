<?php
/**
 * config.php — database connection settings. NOT committed to git (see
 * .gitignore) since it holds real credentials once filled in.
 *
 * Setup on Hostinger:
 *   1. hPanel -> Databases -> MySQL Databases -> create a database, a user,
 *      and attach the user to the database. Hostinger shows you the host
 *      (usually "localhost"), database name, username and password.
 *   2. Copy this file to config.php (same directory) and fill in those
 *      four values below.
 *   3. Run db/migrate.php once (via SSH: `php db/migrate.php`, or a one-off
 *      browser hit to db/migrate.php if SSH isn't available — see that
 *      file's header comment) to create the tables and load the site's
 *      content into them.
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
];
