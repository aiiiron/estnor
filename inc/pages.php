<?php
/**
 * inc/pages.php — every page's slug, template and content mapping, plus
 * which cross-page links (as slugs) its template needs beyond the two
 * every page gets automatically ($HOME_HREF, $CONTACT_HREF).
 *
 * inc/route.php reads this to build the exact $HOME_HREF / $CONTACT_HREF /
 * $ELEMENT_HREF / ... variables every pages/*.php template already
 * expects — now computed as absolute URLs via page_url() instead of
 * hand-typed relative paths duplicated across 5 files per page. Adding a
 * page means one new entry here (plus its pages/*.php template and
 * content/db/pages/*.json file) — not five new routing shims.
 *
 * The slug is the page's URL path with the language prefix and ".php"
 * stripped (see inc/route.php) — 'houses/element-houses' for both
 * /houses/element-houses.php (Estonian, at the root) and
 * /en/houses/element-houses.php. It's also the key content/db/pages/*.json
 * is loaded by (a page with no 'content' entry, like the homepage, has no
 * such file — its content lives in global.json's own "home" key instead).
 */
return [
    'index' => [
        'active' => '',
        'links'  => ['REFERENCES' => 'references'],
    ],
    'about-us/index' => [
        'template' => 'about-us.php',
        'content'  => 'about-us',
        'active'   => 'about',
    ],
    'about-us/production' => [
        'template' => 'gallery.php',
        'content'  => 'about-us-production',
        'active'   => 'production',
        'links'    => ['PARENT' => 'about-us/index', 'CTA' => 'references'],
    ],
    'about-us/suppliers' => [
        'template' => 'about-us-suppliers.php',
        'content'  => 'about-us-suppliers',
        'active'   => 'suppliers', // orphaned: not in nav, still reachable directly
        'links'    => ['ABOUT' => 'about-us/index'],
    ],
    'houses/index' => [
        'template' => 'houses.php',
        'content'  => 'houses',
        'active'   => 'products',
        'links'    => ['ELEMENT' => 'houses/element-houses', 'MODULAR' => 'houses/modular-houses', 'RENOVATION' => 'serial-renovation/index'],
    ],
    'houses/element-houses' => [
        'template' => 'houses-element-houses.php',
        'content'  => 'houses-element-houses',
        'active'   => 'element',
        'links'    => ['HOUSES' => 'houses/index'],
    ],
    'houses/modular-houses' => [
        'template' => 'houses-modular-houses.php',
        'content'  => 'houses-modular-houses',
        'active'   => 'modular',
        'links'    => ['HOUSES' => 'houses/index', 'REFERENCES' => 'references'],
    ],
    'serial-renovation/index' => [
        'template' => 'serial-renovation.php',
        'content'  => 'serial-renovation',
        'active'   => 'renovation',
        'links'    => ['FACADE' => 'serial-renovation/facade-elements'],
    ],
    'serial-renovation/facade-elements' => [
        'template' => 'serial-renovation-facade-elements.php',
        'content'  => 'serial-renovation-facade-elements',
        'active'   => 'facade',
        'links'    => ['RENOVATION' => 'serial-renovation/index'],
    ],
    'serial-renovation/gallery' => [
        'template' => 'gallery.php',
        'content'  => 'serial-renovation-gallery',
        'active'   => 'gallery-ren', // orphaned: not in nav, still reachable directly
        'links'    => ['PARENT' => 'serial-renovation/index', 'CTA' => 'references'],
    ],
    'contact' => [
        'template' => 'contact.php',
        'content'  => 'contact',
        'active'   => 'contact',
    ],
    'references' => [
        'template' => 'references.php',
        'content'  => 'references',
        'active'   => 'references',
    ],
];
