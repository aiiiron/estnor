<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '..';
$ACTIVE = 'contact';
$HOME_HREF = 'index.php';
$T = load_lang($LANG);
$P = load_page('contact', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../pages/contact.php';
require __DIR__ . '/../partials/footer.php';
