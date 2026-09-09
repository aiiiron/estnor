<?php
/**
 * lang/et.php — Estonian strings. Real content throughout, drawn from the
 * live estnor.ee mirror (content/extracted/et.json) — includes EstNor's
 * own KredEx factory-renovation programme and its 12 real completed
 * projects, not the German-market framing used on the English pages.
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
    ['key' => 'about', 'label' => 'Ettevõttest', 'href' => '/about-us/index.php', 'children' => [
      ['key' => 'about',     'label' => 'Ettevõte ja ajalugu', 'href' => '/about-us/index.php'],
      ['key' => 'suppliers', 'label' => 'Koostööpartnerid',    'href' => '/about-us/suppliers.php'],
    ]],
    ['key' => 'houses', 'label' => 'Majad', 'href' => '/houses/index.php', 'children' => [
      ['key' => 'element', 'label' => 'Elementmajad', 'href' => '/houses/element-houses.php'],
      ['key' => 'modular', 'label' => 'Moodulmajad',  'href' => '/houses/modular-houses.php'],
    ]],
    ['key' => 'renovation', 'label' => 'Tehaseline renoveerimine', 'href' => '/serial-renovation/index.php', 'children' => [
      ['key' => 'renovation',     'label' => 'Ülevaade',                        'href' => '/serial-renovation/index.php'],
      ['key' => 'facade',         'label' => 'Fassaadi- ja katuseelemendid',    'href' => '/serial-renovation/facade-elements.php'],
      ['key' => 'references-ren', 'label' => 'Referentsid',                    'href' => '/serial-renovation/references.php'],
    ]],
    ['key' => 'gallery',  'label' => 'Galerii',   'href' => '/gallery.php'],
    ['key' => 'projects', 'label' => 'Projektid', 'href' => '/projects.php'],
    ['key' => 'contact',  'label' => 'Kontakt',   'href' => '/contact.php'],
  ],

  'footer' => [
    'tagline'           => 'Eesti tehases Kiilis valmistatud puitmajad ja fassaadielemendid alates 2000. aastast.',
    'explore_heading'   => 'Sisukord',
    'explore' => [
      ['label' => 'Ettevõttest', 'href' => '/about-us/index.php'],
      ['label' => 'Majad',       'href' => '/houses/index.php'],
      ['label' => 'Galerii',     'href' => '/gallery.php'],
      ['label' => 'Projektid',   'href' => '/projects.php'],
    ],
    'renovation_heading' => 'Tehaseline renoveerimine',
    'renovation' => [
      ['label' => 'Ülevaade',                     'href' => '/serial-renovation/index.php'],
      ['label' => 'Fassaadi- ja katuseelemendid', 'href' => '/serial-renovation/facade-elements.php'],
      ['label' => 'Referentsid',                  'href' => '/serial-renovation/references.php'],
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
    'cta_primary'   => ['label' => 'Võta ühendust',    'href' => '/contact.php'],
    'cta_secondary' => ['label' => 'Vaata meie maju',  'href' => '/houses/index.php'],
    'products' => [
      ['label' => 'Elementmajad',                  'href' => '/houses/element-houses.php',             'tag' => 'Tehases toodetud'],
      ['label' => 'Moodulmajad',                   'href' => '/houses/modular-houses.php',             'tag' => 'Moodul'],
      ['label' => 'Fassaadi- ja katuseelemendid',  'href' => '/serial-renovation/facade-elements.php', 'tag' => 'Tehaseline renoveerimine'],
    ],
    'renovation_label' => 'Tehaseline renoveerimine',
    'renovation_href'  => '/serial-renovation/index.php',
    'stats' => [
      ['value' => '1000+', 'label' => 'toodetud elamuühikut'],
      ['value' => '25',    'label' => 'aastat kogemust'],
      ['value' => '90%',   'label' => 'eksport'],
    ],
    'references_heading' => 'Referentsid',
    'references' => ['Loodusmaja', 'Stroomi Rannahoone'],
    'see_all_href' => '/projects.php',
  ],

];
