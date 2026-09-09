<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '../..';
$ACTIVE = 'houses';
$HOME_HREF = '../index.php';
$ELEMENT_HREF = 'element-houses.php';
$MODULAR_HREF = 'modular-houses.php';
$RENOVATION_HREF = '../serial-renovation/index.php';
$T = load_lang($LANG);
$P = load_page('houses', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../pages/houses.php';
require __DIR__ . '/../../partials/footer.php';
