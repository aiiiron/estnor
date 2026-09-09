<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'renovation';
$HOME_HREF = '../index.php';
$CONTACT_HREF = '../contact.php';
$FACADE_HREF = 'facade-elements.php';
$REFERENCES_HREF = 'references.php';
$T = load_lang($LANG);
$P = load_page('serial-renovation', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../pages/serial-renovation.php';
require __DIR__ . '/../../partials/footer.php';
