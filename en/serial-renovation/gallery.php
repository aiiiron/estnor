<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '../..';
$ACTIVE = 'gallery-ren';
$HOME_HREF = '../index.php';
$PARENT_HREF = 'index.php';
$CTA_HREF = '../projects.php';
$T = load_lang($LANG);
$P = load_page('serial-renovation-gallery', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../pages/gallery.php';
require __DIR__ . '/../../partials/footer.php';
