<?php
/**
 * partials/head.php — <head> + header, shared by every page.
 *
 * Before including this, each page must set:
 *   $LANG        e.g. 'en'                          (drives html lang + $T)
 *   $ASSET       relative path back to /assets, e.g. '..', '../..', '.'
 *   $ACTIVE      top-level nav key for aria-current, or '' on the homepage
 *   $T           = load_lang($LANG)
 *   $PAGE_TITLE  page <title>
 *   $PAGE_DESC   meta description
 *
 * inc/site.php and inc/i18n.php must already be required (for $SITE,
 * $LANG_HOME, load_lang(), nav_active(), e()).
 */
$asset_v = '20260909b'; // bump on CSS/JS changes to bust the cache
?><!doctype html>
<html lang="<?= e($LANG) ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($PAGE_TITLE) ?></title>
  <meta name="description" content="<?= e($PAGE_DESC) ?>">
  <link rel="icon" href="<?= e($ASSET) ?>/assets/img/favicon.svg" type="image/svg+xml">
<?php foreach ($LANG_HOME as $code => $href): ?>
  <link rel="alternate" hreflang="<?= e($code) ?>" href="<?= e(url($href)) ?>">
<?php endforeach; ?>
  <link rel="alternate" hreflang="x-default" href="<?= e(url('/en/index.php')) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,600;12..96,700&family=EB+Garamond:ital,wght@1,500&family=Inter:wght@400;500;600&display=swap">
  <link rel="stylesheet" href="<?= e($ASSET) ?>/assets/css/style.css?v=<?= $asset_v ?>">
</head>
<body>
<a class="skip-link" href="#main"><?= e($T['common']['skip_to_content']) ?></a>

<header class="site-header">
  <div class="wrap bar">
    <a class="brand" href="<?= e(url($LANG_HOME[$LANG])) ?>">
      <img class="brand-logo" src="<?= e($ASSET) ?>/assets/img/estnor-logo-rgb.png" width="505" height="171" alt="EstNor" fetchpriority="high">
      <span class="brand-caption"><?= e($T['brand_caption']) ?></span>
    </a>
    <div class="bar-right">
      <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>
      <label for="nav-toggle" class="nav-burger" aria-label="<?= e($T['common']['menu']) ?>"><span></span><span></span><span></span></label>
      <nav class="nav" aria-label="Main navigation">
        <ul>
<?php foreach ($T['nav'] as $item): ?>
          <li class="<?= !empty($item['children']) ? 'has-sub' : '' ?>">
            <a href="<?= e(url($item['href'])) ?>"<?= nav_active($item['key'], $ACTIVE) ?>><?= e($item['label']) ?><?php if (!empty($item['children'])): ?> <svg class="chev" viewBox="0 0 12 8" fill="none"><path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg><?php endif; ?></a>
<?php if (!empty($item['children'])): ?>
            <ul class="submenu">
<?php foreach ($item['children'] as $child): ?>
              <li><a href="<?= e(url($child['href'])) ?>"<?= nav_active($child['key'], $ACTIVE) ?>><?= e($child['label']) ?></a></li>
<?php endforeach; ?>
            </ul>
<?php endif; ?>
          </li>
<?php endforeach; ?>
        </ul>
        <div id="lang-switch-nav" class="lang-switch" role="group" aria-label="Choose language">
          <button type="button" class="lang-switch-trigger" aria-haspopup="true"><?= e(strtoupper($LANG)) ?> <svg class="chev" viewBox="0 0 12 8" fill="none"><path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></button>
          <ul class="lang-switch-menu">
<?php foreach ($LANG_HOME as $code => $href): ?>
            <li><a href="<?= e(url($href . ($code === $LANG_DEFAULT ? '?lang=' . $code : ''))) ?>" hreflang="<?= e($code) ?>" lang="<?= e($code) ?>"<?= $code === $LANG ? ' aria-current="true"' : '' ?>><?= e(strtoupper($code)) ?></a></li>
<?php endforeach; ?>
          </ul>
        </div>
      </nav>
      <div id="lang-switch-bar" class="lang-switch" role="group" aria-label="Choose language">
        <button type="button" class="lang-switch-trigger" aria-haspopup="true"><?= e(strtoupper($LANG)) ?> <svg class="chev" viewBox="0 0 12 8" fill="none"><path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></button>
        <ul class="lang-switch-menu">
<?php foreach ($LANG_HOME as $code => $href): ?>
          <li><a href="<?= e(url($href . ($code === $LANG_DEFAULT ? '?lang=' . $code : ''))) ?>" hreflang="<?= e($code) ?>" lang="<?= e($code) ?>"<?= $code === $LANG ? ' aria-current="true"' : '' ?>><?= e(strtoupper($code)) ?></a></li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</header>

<main id="main">
