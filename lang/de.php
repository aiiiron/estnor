<?php
/**
 * lang/de.php — German strings. Nav/footer labels reuse the reviewed
 * seriell-sanierung.de translations; only the homepage is native German
 * so far — every other nav/footer link falls back to the English section
 * until that page is translated and built under de/.
 */
return [

  'common' => [
    'skip_to_content' => 'Zum Inhalt springen',
    'menu'            => 'Menü',
    'contact_cta'     => 'Kontakt aufnehmen',
    'see_all'         => 'Alle Projekte ansehen',
  ],

  'brand_caption' => 'Holzhäuser & Fassadenelemente · Gegr. 2000',

  'nav' => [
    ['key' => 'about', 'label' => 'Über EstNor', 'href' => '/en/about-us/index.php', 'children' => [
      ['key' => 'about',     'label' => 'Unternehmen & Geschichte', 'href' => '/en/about-us/index.php'],
      ['key' => 'suppliers', 'label' => 'Lieferanten & Partner',    'href' => '/en/about-us/suppliers.php'],
    ]],
    ['key' => 'houses', 'label' => 'Häuser', 'href' => '/en/houses/index.php', 'children' => [
      ['key' => 'element', 'label' => 'Elementhäuser', 'href' => '/en/houses/element-houses.php'],
      ['key' => 'modular', 'label' => 'Modulhäuser',   'href' => '/en/houses/modular-houses.php'],
    ]],
    ['key' => 'renovation', 'label' => 'Serielle Sanierung', 'href' => '/en/serial-renovation/index.php', 'children' => [
      ['key' => 'renovation',     'label' => 'Überblick',        'href' => '/en/serial-renovation/index.php'],
      ['key' => 'facade',         'label' => 'Fassadenelemente', 'href' => '/en/serial-renovation/facade-elements.php'],
      ['key' => 'references-ren', 'label' => 'Referenzen',       'href' => '/en/serial-renovation/references.php'],
    ]],
    ['key' => 'gallery',  'label' => 'Galerie',  'href' => '/en/gallery.php'],
    ['key' => 'projects', 'label' => 'Projekte', 'href' => '/en/projects.php'],
    ['key' => 'contact',  'label' => 'Kontakt',  'href' => '/en/contact.php'],
  ],

  'footer' => [
    'tagline'           => 'Vorgefertigte Holzhäuser und Fassadenelemente, hergestellt in unserem Werk in Kiili, Estland, seit dem Jahr 2000.',
    'explore_heading'   => 'Entdecken',
    'explore' => [
      ['label' => 'Über uns & Geschichte', 'href' => '/en/about-us/index.php'],
      ['label' => 'Häuser',                'href' => '/en/houses/index.php'],
      ['label' => 'Galerie',               'href' => '/en/gallery.php'],
      ['label' => 'Projekte',              'href' => '/en/projects.php'],
    ],
    'renovation_heading' => 'Serielle Sanierung',
    'renovation' => [
      ['label' => 'Überblick',        'href' => '/en/serial-renovation/index.php'],
      ['label' => 'Fassadenelemente', 'href' => '/en/serial-renovation/facade-elements.php'],
      ['label' => 'Referenzen',       'href' => '/en/serial-renovation/references.php'],
    ],
    'contact_heading' => 'Kontakt',
    'address_lines'   => ['Kurna tee 33, 75401 Kiili, Estland'],
    'rights'          => 'Alle Rechte vorbehalten.',
    'source_note'     => 'Herstellerinformationen und Kennzahlen: estnor.ee · Inoffizielles Redesign-Konzept, nicht verbunden mit der EstNor OÜ',
  ],

  'meta' => [
    'home' => [
      'title' => 'EstNor — Vorgefertigte Holzhäuser & Fassadenelemente',
      'desc'  => 'EstNor fertigt Element- und Modulhäuser sowie vorgefertigte Fassaden- und Dachelemente für die serielle Sanierung — im Werk in Kiili, Estland, seit dem Jahr 2000.',
    ],
  ],

  'home' => [
    'eyebrow' => 'Vorgefertigte',
    'h1'      => 'Holzhäuser, gefertigt im Werk',
    'lead'    => 'Elementhäuser, Modulhäuser sowie Fassaden- und Dachelemente für die serielle Sanierung — alles mit Millimetergenauigkeit in einer kontrollierten Werksumgebung gefertigt, bevor irgendetwas die Baustelle erreicht.',
    'cta_primary'   => ['label' => 'Projekt besprechen',       'href' => '/en/contact.php'],
    'cta_secondary' => ['label' => 'Unsere Häuser entdecken',  'href' => '/en/houses/index.php'],
    'products' => [
      ['label' => 'Elementhäuser',                'href' => '/en/houses/element-houses.php',             'tag' => 'Werksgefertigt'],
      ['label' => 'Modulhäuser',                  'href' => '/en/houses/modular-houses.php',             'tag' => 'Modular'],
      ['label' => 'Fassaden- und Dachelemente',   'href' => '/en/serial-renovation/facade-elements.php', 'tag' => 'Serielle Sanierung'],
    ],
    'renovation_label' => 'Serielle Sanierung',
    'renovation_href'  => '/en/serial-renovation/index.php',
    'stats' => [
      ['value' => '1.000+', 'label' => 'errichtete Wohneinheiten'],
      ['value' => '25',     'label' => 'Jahre Erfahrung'],
      ['value' => '90 %',   'label' => 'Exportanteil'],
    ],
    'references_heading' => 'Referenzen',
    'references' => ['Nature Hub', 'Deutsches Musterhaus'],
    'see_all_href' => '/en/projects.php',
  ],

];
