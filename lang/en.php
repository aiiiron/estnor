<?php
/**
 * lang/en.php — English strings: nav, footer, common bits, and the
 * homepage. Reference language — every other lang/*.php mirrors this
 * exact key structure.
 */
return [

  'common' => [
    'skip_to_content' => 'Skip to content',
    'menu'            => 'Menu',
    'contact_cta'     => 'Contact us',
    'see_all'         => 'See all projects',
  ],

  'brand_caption' => 'Timber houses & facade elements · Est. 2000',

  // key => used for $ACTIVE matching; children keys likewise.
  'nav' => [
    ['key' => 'about', 'label' => 'About Us', 'href' => '/en/about-us/index.php', 'children' => [
      ['key' => 'about',     'label' => 'Company & History',         'href' => '/en/about-us/index.php'],
      ['key' => 'suppliers', 'label' => 'Suppliers & Co-operators',  'href' => '/en/about-us/suppliers.php'],
    ]],
    ['key' => 'houses', 'label' => 'Houses', 'href' => '/en/houses/index.php', 'children' => [
      ['key' => 'element',  'label' => 'Element Houses', 'href' => '/en/houses/element-houses.php'],
      ['key' => 'modular',  'label' => 'Modular Houses', 'href' => '/en/houses/modular-houses.php'],
    ]],
    ['key' => 'renovation', 'label' => 'Serial Renovation', 'href' => '/en/serial-renovation/index.php', 'children' => [
      ['key' => 'renovation',     'label' => 'Overview',         'href' => '/en/serial-renovation/index.php'],
      ['key' => 'facade',         'label' => 'Facade Elements',  'href' => '/en/serial-renovation/facade-elements.php'],
      ['key' => 'references-ren', 'label' => 'References',       'href' => '/en/serial-renovation/references.php'],
    ]],
    ['key' => 'gallery',  'label' => 'Gallery',  'href' => '/en/gallery.php'],
    ['key' => 'projects', 'label' => 'Projects', 'href' => '/en/projects.php'],
    ['key' => 'contact',  'label' => 'Contact',  'href' => '/en/contact.php'],
  ],

  'footer' => [
    'tagline'           => 'Prefabricated timber houses and facade elements, manufactured at our factory in Kiili, Estonia, since 2000.',
    'explore_heading'   => 'Explore',
    'explore' => [
      ['label' => 'About & History', 'href' => '/en/about-us/index.php'],
      ['label' => 'Houses',          'href' => '/en/houses/index.php'],
      ['label' => 'Gallery',         'href' => '/en/gallery.php'],
      ['label' => 'Projects',        'href' => '/en/projects.php'],
    ],
    'renovation_heading' => 'Serial Renovation',
    'renovation' => [
      ['label' => 'Overview',        'href' => '/en/serial-renovation/index.php'],
      ['label' => 'Facade Elements', 'href' => '/en/serial-renovation/facade-elements.php'],
      ['label' => 'References',      'href' => '/en/serial-renovation/references.php'],
    ],
    'contact_heading' => 'Contact',
    'address_lines'   => ['Kurna tee 33, 75401 Kiili, Estonia'],
    'rights'          => 'All rights reserved.',
    'source_note'     => 'Manufacturer information and figures: estnor.ee · Unofficial redesign concept, not affiliated with EstNor OÜ',
  ],

  'meta' => [
    'home' => [
      'title' => 'EstNor — Prefabricated Timber Houses & Facade Elements',
      'desc'  => 'EstNor manufactures element and modular timber houses, and prefabricated facade elements for serial renovation — from a factory in Kiili, Estonia, since 2000.',
    ],
  ],

  'home' => [
    'eyebrow' => 'Prefabricated',
    'h1'      => 'Wooden houses, built in the factory',
    'lead'    => 'Element houses, modular houses, and facade and roof elements for serial renovation — all built to millimetre accuracy in a controlled factory environment before anything reaches a site.',
    'cta_primary'   => ['label' => 'Discuss a project',  'href' => '/en/contact.php'],
    'cta_secondary' => ['label' => 'Explore our houses', 'href' => '/en/houses/index.php'],
    'products' => [
      ['label' => 'Element houses',              'href' => '/en/houses/element-houses.php',            'tag' => 'Factory built'],
      ['label' => 'Modular houses',               'href' => '/en/houses/modular-houses.php',            'tag' => 'Modular'],
      ['label' => 'Facade and roof elements',     'href' => '/en/serial-renovation/facade-elements.php','tag' => 'Serial renovation'],
    ],
    'renovation_label' => 'Serial renovation',
    'renovation_href'  => '/en/serial-renovation/index.php',
    'stats' => [
      ['value' => '1,000+', 'label' => 'built living units'],
      ['value' => '25',     'label' => 'years of experience'],
      ['value' => '90%',    'label' => 'export'],
    ],
    'references_heading' => 'References',
    'references' => ['Nature Hub', 'Germany Model House', 'Apartment buildings in Norway'],
    'see_all_href' => '/en/projects.php',
  ],

];
