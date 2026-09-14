<?php
/**
 * inc/route.php — shared entry point every page shim requires. Derives
 * the language and page slug from the requested URL itself (no per-file
 * variables to keep in sync across 5 language copies), builds the
 * cross-page link variables ($HOME_HREF, $CONTACT_HREF, and whatever
 * else that page's template needs, per inc/pages.php) as absolute URLs,
 * loads that page's content, and hands off to the one real template in
 * pages/.
 *
 * Every page shim (except the root index.php, which has its own
 * language-detection logic and can't be generic) is now just one line:
 *   <?php require __DIR__ . '/../inc/route.php';
 * — with as many '../' as needed to reach inc/ from that shim's own
 * location. Nothing else in the shim ever needs to change again; adding
 * or changing a page means editing inc/pages.php, its pages/*.php
 * template and its content/db/pages/*.json file — not five shims.
 */
require_once __DIR__ . '/site.php';
require_once __DIR__ . '/i18n.php';

// $LANGS (from inc/i18n.php) is 'et' => ... , 'en' => ... , etc. — every
// key except 'et' gets its own URL prefix; 'et' lives at the domain root.
$prefixedLangs = array_diff(array_keys($LANGS), [$LANG_DEFAULT]);

$scriptPath = $_SERVER['SCRIPT_NAME'];
$bp = base_path();
if ($bp !== '' && str_starts_with($scriptPath, $bp)) {
    $scriptPath = substr($scriptPath, strlen($bp));
}
$scriptPath = ltrim($scriptPath, '/');
$parts = explode('/', $scriptPath);

if (in_array($parts[0], $prefixedLangs, true)) {
    $LANG = array_shift($parts);
} else {
    $LANG = $LANG_DEFAULT;
}

$slug = preg_replace('#\.php$#', '', implode('/', $parts));
if ($slug === '') {
    $slug = 'index';
}

$pagesTable = require __DIR__ . '/pages.php';
if (!isset($pagesTable[$slug])) {
    content_fail("No route registered for slug: {$slug}\n\nAdd an entry to inc/pages.php.");
}
$route = $pagesTable[$slug];

$ASSET  = base_path();
$ACTIVE = $route['active'];
$T      = load_lang($LANG);

// Every page gets these two; page-specific extras (ELEMENT_HREF, FACADE_HREF,
// PARENT_HREF, ...) come from inc/pages.php's 'links' for that slug.
$HOME_HREF    = page_url($LANG, 'index');
$CONTACT_HREF = page_url($LANG, 'contact');
foreach ($route['links'] ?? [] as $varName => $targetSlug) {
    ${$varName . '_HREF'} = page_url($LANG, $targetSlug);
}

if ($slug === 'index') {
    $PAGE_TITLE = $T['meta']['home']['title'];
    $PAGE_DESC  = $T['meta']['home']['desc'];
    require __DIR__ . '/../partials/head.php';
    require __DIR__ . '/../partials/home.php';
    require __DIR__ . '/../partials/footer.php';
    return;
}

$P = load_page($route['content'], $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../pages/' . $route['template'];
require __DIR__ . '/../partials/footer.php';
