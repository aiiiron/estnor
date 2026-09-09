<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'references-ren';
$HOME_HREF = '../index.php';
$RENOVATION_HREF = 'index.php';
$CONTACT_HREF = '../contact.php';
$T = load_lang($LANG);
$P = load_page('serial-renovation-references', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../pages/serial-renovation-references.php';
require __DIR__ . '/../partials/footer.php';
