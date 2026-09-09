<?php
/**
 * lang/et.php — Estonian strings. Only the homepage is native Estonian so
 * far (see content/extracted/et.json for the real source text); every
 * other nav/footer link below falls back to the English section until
 * that page is translated and built under et/.
 */
return [

  'common' => [
    'skip_to_content' => 'Liigu sisu juurde',
    'menu'            => 'Menüü',
    'contact_cta'     => 'Võta ühendust',
    'see_all'         => 'Vaata kõiki projekte',
  ],

  'brand_caption' => 'Puitmajad ja fassaadielemendid · Est. 2000',

  'nav' => [
    ['key' => 'about', 'label' => 'Ettevõttest', 'href' => '/en/about-us/index.php', 'children' => [
      ['key' => 'about',     'label' => 'Ettevõte ja ajalugu', 'href' => '/en/about-us/index.php'],
      ['key' => 'suppliers', 'label' => 'Koostööpartnerid',    'href' => '/en/about-us/suppliers.php'],
    ]],
    ['key' => 'houses', 'label' => 'Majad', 'href' => '/en/houses/index.php', 'children' => [
      ['key' => 'element', 'label' => 'Elementmajad', 'href' => '/en/houses/element-houses.php'],
      ['key' => 'modular', 'label' => 'Moodulmajad',  'href' => '/en/houses/modular-houses.php'],
    ]],
    ['key' => 'renovation', 'label' => 'Tehaseline renoveerimine', 'href' => '/en/serial-renovation/index.php', 'children' => [
      ['key' => 'renovation',     'label' => 'Ülevaade',                        'href' => '/en/serial-renovation/index.php'],
      ['key' => 'facade',         'label' => 'Fassaadi- ja katuseelemendid',    'href' => '/en/serial-renovation/facade-elements.php'],
      ['key' => 'references-ren', 'label' => 'Referentsid',                    'href' => '/en/serial-renovation/references.php'],
    ]],
    ['key' => 'gallery',  'label' => 'Galerii',   'href' => '/en/gallery.php'],
    ['key' => 'projects', 'label' => 'Projektid', 'href' => '/en/projects.php'],
    ['key' => 'contact',  'label' => 'Kontakt',   'href' => '/en/contact.php'],
  ],

  'footer' => [
    'tagline'           => 'Eesti tehases Kiilis valmistatud puitmajad ja fassaadielemendid alates 2000. aastast.',
    'explore_heading'   => 'Sisukord',
    'explore' => [
      ['label' => 'Ettevõttest', 'href' => '/en/about-us/index.php'],
      ['label' => 'Majad',       'href' => '/en/houses/index.php'],
      ['label' => 'Galerii',     'href' => '/en/gallery.php'],
      ['label' => 'Projektid',   'href' => '/en/projects.php'],
    ],
    'renovation_heading' => 'Tehaseline renoveerimine',
    'renovation' => [
      ['label' => 'Ülevaade',                     'href' => '/en/serial-renovation/index.php'],
      ['label' => 'Fassaadi- ja katuseelemendid', 'href' => '/en/serial-renovation/facade-elements.php'],
      ['label' => 'Referentsid',                  'href' => '/en/serial-renovation/references.php'],
    ],
    'contact_heading' => 'Kontakt',
    'address_lines'   => ['Kurna tee 33, 75401 Kiili, Eesti'],
    'rights'          => 'Kõik õigused kaitstud.',
    'source_note'     => 'Tootja andmed ja arvud: estnor.ee · Mitteametlik disainikontseptsioon, ei ole seotud EstNor OÜ-ga',
  ],

  'meta' => [
    'home' => [
      'title' => 'EstNor — puitmajad ja fassaadielemendid',
      'desc'  => 'EstNor toodab element- ja moodulmaju ning fassaadi- ja katuseelemente tehaselise renoveerimise jaoks Kiili tehases alates 2000. aastast.',
    ],
  ],

  'home' => [
    'eyebrow' => 'Puitkonstruktsioonil',
    'h1'      => 'Puitmajad, valminud tehases',
    'lead'    => 'Elementmajad, moodulmajad ning fassaadi- ja katuseelemendid tehaseliseks renoveerimiseks — kõik toodetud millimeetritäpsusega kontrollitud tehasekeskkonnas, enne kui midagi objektile jõuab.',
    'cta_primary'   => ['label' => 'Võta ühendust',    'href' => '/en/contact.php'],
    'cta_secondary' => ['label' => 'Vaata meie maju',  'href' => '/en/houses/index.php'],
    'products' => [
      ['label' => 'Elementmajad',                  'href' => '/en/houses/element-houses.php',             'tag' => 'Tehases toodetud'],
      ['label' => 'Moodulmajad',                   'href' => '/en/houses/modular-houses.php',             'tag' => 'Moodul'],
      ['label' => 'Fassaadi- ja katuseelemendid',  'href' => '/en/serial-renovation/facade-elements.php', 'tag' => 'Tehaseline renoveerimine'],
    ],
    'renovation_label' => 'Tehaseline renoveerimine',
    'renovation_href'  => '/en/serial-renovation/index.php',
    'stats' => [
      ['value' => '1000+', 'label' => 'toodetud elamuühikut'],
      ['value' => '25',    'label' => 'aastat kogemust'],
      ['value' => '90%',   'label' => 'eksport'],
    ],
    'references_heading' => 'Referentsid',
    'references' => ['Loodusmaja', 'Stroomi Rannahoone'],
    'see_all_href' => '/en/projects.php',
  ],

];
