<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'facade';
$HOME_HREF = '../index.php';
$RENOVATION_HREF = 'index.php';
$CONTACT_HREF = '../contact.php';
$T = load_lang($LANG);
$P = load_page('serial-renovation-facade-elements', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../pages/serial-renovation-facade-elements.php';
require __DIR__ . '/../../partials/footer.php';
