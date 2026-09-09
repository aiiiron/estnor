<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '..';
$ACTIVE = '';
$T      = load_lang($LANG);
$PAGE_TITLE = $T['meta']['home']['title'];
$PAGE_DESC  = $T['meta']['home']['desc'];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/home.php';
require __DIR__ . '/../partials/footer.php';
