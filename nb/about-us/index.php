<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'about';
$HOME_HREF = '../index.php';
$T = load_lang($LANG);
$P = load_page('about-us', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../pages/about-us.php';
require __DIR__ . '/../../partials/footer.php';
