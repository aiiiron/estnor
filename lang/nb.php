<?php
/**
 * lang/nb.php — Norwegian (Bokmål) strings, machine-translated from
 * English/Estonian by Claude. Please have a native speaker proofread
 * before relying on this copy publicly — Norway is EstNor's largest
 * export market, so this is the one most worth getting professionally
 * checked. Real facts throughout from content/extracted/et.json.
 */
return [

  'common' => [
    'skip_to_content' => 'Hopp til innhold',
    'menu'            => 'Meny',
    'contact_cta'     => 'Kontakt oss',
    'see_all'         => 'Se alle prosjekter',
  ],

  'brand_caption' => 'Trehus & fasadeelementer · Etablert 2000',

  'nav' => [
    ['key' => 'about', 'label' => 'Om EstNor', 'href' => '/nb/about-us/index.php', 'children' => [
      ['key' => 'about',     'label' => 'Selskap & historie',        'href' => '/nb/about-us/index.php'],
      ['key' => 'suppliers', 'label' => 'Leverandører & partnere',   'href' => '/nb/about-us/suppliers.php'],
    ]],
    ['key' => 'houses', 'label' => 'Hus', 'href' => '/nb/houses/index.php', 'children' => [
      ['key' => 'element', 'label' => 'Elementhus', 'href' => '/nb/houses/element-houses.php'],
      ['key' => 'modular', 'label' => 'Modulhus',   'href' => '/nb/houses/modular-houses.php'],
    ]],
    ['key' => 'renovation', 'label' => 'Modernisering av leilighetsbygg', 'href' => '/nb/serial-renovation/index.php', 'children' => [
      ['key' => 'renovation',     'label' => 'Oversikt',                 'href' => '/nb/serial-renovation/index.php'],
      ['key' => 'facade',         'label' => 'Fasade- og takelementer',  'href' => '/nb/serial-renovation/facade-elements.php'],
      ['key' => 'references-ren', 'label' => 'Referanser',               'href' => '/nb/serial-renovation/references.php'],
    ]],
    ['key' => 'gallery',  'label' => 'Galleri',     'href' => '/nb/gallery.php'],
    ['key' => 'projects', 'label' => 'Prosjekter',  'href' => '/nb/projects.php'],
    ['key' => 'contact',  'label' => 'Kontakt',     'href' => '/nb/contact.php'],
  ],

  'footer' => [
    'tagline'           => 'Prefabrikkerte trehus og fasadeelementer, produsert på vår fabrikk i Kiili, Estland, siden år 2000.',
    'explore_heading'   => 'Utforsk',
    'explore' => [
      ['label' => 'Om oss & historie', 'href' => '/nb/about-us/index.php'],
      ['label' => 'Hus',               'href' => '/nb/houses/index.php'],
      ['label' => 'Galleri',           'href' => '/nb/gallery.php'],
      ['label' => 'Prosjekter',        'href' => '/nb/projects.php'],
    ],
    'renovation_heading' => 'Modernisering av leilighetsbygg',
    'renovation' => [
      ['label' => 'Oversikt',                'href' => '/nb/serial-renovation/index.php'],
      ['label' => 'Fasade- og takelementer', 'href' => '/nb/serial-renovation/facade-elements.php'],
      ['label' => 'Referanser',              'href' => '/nb/serial-renovation/references.php'],
    ],
    'contact_heading' => 'Kontakt',
    'address_lines'   => ['Kurna tee 33, 75401 Kiili, Estland'],
    'rights'          => 'Alle rettigheter forbeholdt.',
    'source_note'     => 'Produsentinformasjon og tall: estnor.ee · Uoffisielt designkonsept, ikke tilknyttet EstNor OÜ',
  ],

  'meta' => [
    'home' => [
      'title' => 'EstNor — Prefabrikkerte trehus & fasadeelementer',
      'desc'  => 'EstNor produserer element- og modulhus samt prefabrikkerte fasade- og takelementer for modernisering av leilighetsbygg — ved fabrikken i Kiili, Estland, siden år 2000.',
    ],
  ],

  'home' => [
    'eyebrow' => 'Prefabrikkerte',
    'h1'      => 'Trehus, bygget i fabrikken',
    'lead'    => 'Elementhus, modulhus samt fasade- og takelementer for modernisering av leilighetsbygg — alt produsert med millimeterpresisjon i et kontrollert fabrikkmiljø før noe når byggeplassen.',
    'cta_primary'   => ['label' => 'Diskuter et prosjekt', 'href' => '/nb/contact.php'],
    'cta_secondary' => ['label' => 'Utforsk husene våre',  'href' => '/nb/houses/index.php'],
    'products' => [
      ['label' => 'Elementhus',                'href' => '/nb/houses/element-houses.php',             'tag' => 'Fabrikkbygget'],
      ['label' => 'Modulhus',                  'href' => '/nb/houses/modular-houses.php',             'tag' => 'Modulært'],
      ['label' => 'Fasade- og takelementer',   'href' => '/nb/serial-renovation/facade-elements.php', 'tag' => 'Modernisering'],
    ],
    'renovation_label' => 'Modernisering av leilighetsbygg',
    'renovation_href'  => '/nb/serial-renovation/index.php',
    'stats' => [
      ['value' => '1000+', 'label' => 'bygde boenheter'],
      ['value' => '25',    'label' => 'års erfaring'],
      ['value' => '90 %',  'label' => 'eksport'],
    ],
    'references_heading' => 'Referanser',
    'references' => ['Nature Hub', 'Leilighetsbygg i Norge', 'Bygningskompleks på Island'],
    'see_all_href' => '/nb/projects.php',
  ],

];
