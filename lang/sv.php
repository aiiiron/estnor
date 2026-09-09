<?php
/**
 * lang/sv.php — Swedish strings, machine-translated from English by
 * Claude. Please have a native speaker proofread before relying on this
 * copy publicly. Only the homepage is native Swedish so far — every other
 * nav/footer link falls back to the English section until translated and
 * built under sv/.
 */
return [

  'common' => [
    'skip_to_content' => 'Hoppa till innehåll',
    'menu'            => 'Meny',
    'contact_cta'     => 'Kontakta oss',
    'see_all'         => 'Se alla projekt',
  ],

  'brand_caption' => 'Trähus & fasadelement · Grundat 2000',

  'nav' => [
    ['key' => 'about', 'label' => 'Om EstNor', 'href' => '/en/about-us/index.php', 'children' => [
      ['key' => 'about',     'label' => 'Företag & historia',      'href' => '/en/about-us/index.php'],
      ['key' => 'suppliers', 'label' => 'Leverantörer & partners', 'href' => '/en/about-us/suppliers.php'],
    ]],
    ['key' => 'houses', 'label' => 'Hus', 'href' => '/en/houses/index.php', 'children' => [
      ['key' => 'element', 'label' => 'Elementhus', 'href' => '/en/houses/element-houses.php'],
      ['key' => 'modular', 'label' => 'Modulhus',   'href' => '/en/houses/modular-houses.php'],
    ]],
    ['key' => 'renovation', 'label' => 'Modernisering av flerbostadshus', 'href' => '/en/serial-renovation/index.php', 'children' => [
      ['key' => 'renovation',     'label' => 'Översikt',              'href' => '/en/serial-renovation/index.php'],
      ['key' => 'facade',         'label' => 'Fasad- och takelement', 'href' => '/en/serial-renovation/facade-elements.php'],
      ['key' => 'references-ren', 'label' => 'Referenser',            'href' => '/en/serial-renovation/references.php'],
    ]],
    ['key' => 'gallery',  'label' => 'Galleri', 'href' => '/en/gallery.php'],
    ['key' => 'projects', 'label' => 'Projekt', 'href' => '/en/projects.php'],
    ['key' => 'contact',  'label' => 'Kontakt', 'href' => '/en/contact.php'],
  ],

  'footer' => [
    'tagline'           => 'Prefabricerade trähus och fasadelement, tillverkade på vår fabrik i Kiili, Estland, sedan år 2000.',
    'explore_heading'   => 'Utforska',
    'explore' => [
      ['label' => 'Om oss & historia', 'href' => '/en/about-us/index.php'],
      ['label' => 'Hus',               'href' => '/en/houses/index.php'],
      ['label' => 'Galleri',           'href' => '/en/gallery.php'],
      ['label' => 'Projekt',           'href' => '/en/projects.php'],
    ],
    'renovation_heading' => 'Modernisering av flerbostadshus',
    'renovation' => [
      ['label' => 'Översikt',              'href' => '/en/serial-renovation/index.php'],
      ['label' => 'Fasad- och takelement', 'href' => '/en/serial-renovation/facade-elements.php'],
      ['label' => 'Referenser',            'href' => '/en/serial-renovation/references.php'],
    ],
    'contact_heading' => 'Kontakt',
    'address_lines'   => ['Kurna tee 33, 75401 Kiili, Estland'],
    'rights'          => 'Alla rättigheter förbehållna.',
    'source_note'     => 'Tillverkarinformation och siffror: estnor.ee · Inofficiellt designkoncept, ej anknutet till EstNor OÜ',
  ],

  'meta' => [
    'home' => [
      'title' => 'EstNor — Prefabricerade trähus & fasadelement',
      'desc'  => 'EstNor tillverkar element- och modulhus samt prefabricerade fasad- och takelement för modernisering av flerbostadshus — vid vår fabrik i Kiili, Estland, sedan år 2000.',
    ],
  ],

  'home' => [
    'eyebrow' => 'Prefabricerade',
    'h1'      => 'Trähus, byggda i fabriken',
    'lead'    => 'Elementhus, modulhus samt fasad- och takelement för modernisering av flerbostadshus — allt tillverkat med millimeterprecision i en kontrollerad fabriksmiljö innan något når byggplatsen.',
    'cta_primary'   => ['label' => 'Diskutera ett projekt', 'href' => '/en/contact.php'],
    'cta_secondary' => ['label' => 'Utforska våra hus',     'href' => '/en/houses/index.php'],
    'products' => [
      ['label' => 'Elementhus',              'href' => '/en/houses/element-houses.php',             'tag' => 'Fabrikstillverkat'],
      ['label' => 'Modulhus',                'href' => '/en/houses/modular-houses.php',             'tag' => 'Modulärt'],
      ['label' => 'Fasad- och takelement',   'href' => '/en/serial-renovation/facade-elements.php', 'tag' => 'Modernisering'],
    ],
    'renovation_label' => 'Modernisering av flerbostadshus',
    'renovation_href'  => '/en/serial-renovation/index.php',
    'stats' => [
      ['value' => '1 000+', 'label' => 'byggda bostäder'],
      ['value' => '25',     'label' => 'år av erfarenhet'],
      ['value' => '90 %',   'label' => 'export'],
    ],
    'references_heading' => 'Referenser',
    'references' => ['Nature Hub', 'Hyreshus i Norge', 'Byggnadskomplex på Island'],
    'see_all_href' => '/en/projects.php',
  ],

];
