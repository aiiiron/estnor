<?php
/**
 * / — root. Resolves the visitor's language (query > cookie > browser
 * Accept-Language > Estonian) and either redirects to their language's
 * folder or renders the Estonian homepage right here. See inc/i18n.php
 * for the precedence rules.
 */
require_once __DIR__ . '/inc/site.php';
require_once __DIR__ . '/inc/i18n.php';

$LANG   = i18n_resolve_root($LANGS, $LANG_DEFAULT, $LANG_FALLBACK_FOREIGN); // redirects and exits if not 'et'
$ASSET  = '.';
$ACTIVE = '';
$T      = load_lang($LANG);
$PAGE_TITLE = $T['meta']['home']['title'];
$PAGE_DESC  = $T['meta']['home']['desc'];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/home.php';
require __DIR__ . '/partials/footer.php';
