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
 * stripped (see inc/route.php) — 'products/element-houses' for both
 * /products/element-houses.php (Estonian, at the root) and
 * /en/products/element-houses.php. It's also the key content/db/pages/*.json
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
    'products/index' => [
        'template' => 'products.php',
        'content'  => 'products',
        'active'   => 'products',
        'links'    => ['ELEMENT' => 'products/element-houses', 'MODULAR' => 'products/modular-houses', 'FACADE' => 'products/facade-elements', 'RENOVATION' => 'serial-renovation/index'],
    ],
    'products/element-houses' => [
        'template' => 'products-element-houses.php',
        'content'  => 'products-element-houses',
        'active'   => 'element',
        'links'    => ['HOUSES' => 'products/index'],
    ],
    'products/facade-elements' => [
        'template' => 'products-facade-elements.php',
        'content'  => 'products-facade-elements',
        'active'   => 'facade-roof',
        'links'    => ['PRODUCTS' => 'products/index'],
    ],
    'products/modular-houses' => [
        'template' => 'products-modular-houses.php',
        'content'  => 'products-modular-houses',
        'active'   => 'modular',
        'links'    => ['HOUSES' => 'products/index', 'REFERENCES' => 'references'],
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
        'active'   => 'renovation', // off the nav now (reached from the renovation hero's secondary CTA) — highlight its parent
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
