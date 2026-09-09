<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '..';
$ACTIVE = 'projects';
$HOME_HREF = 'index.php';
$CONTACT_HREF = 'contact.php';
$T = load_lang($LANG);
$P = load_page('projects', $LANG);
$PAGE_TITLE = $P['meta']['title'];
$PAGE_DESC  = $P['meta']['desc'];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../pages/projects.php';
require __DIR__ . '/../partials/footer.php';
