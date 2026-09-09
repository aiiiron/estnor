<?php
/**
 * pages/serial-renovation.php — shared body template for the Serial
 * Renovation index page. Caller sets $LANG/$ASSET/$ACTIVE, requires
 * partials/head.php, and defines $P = load_page('serial-renovation',
 * $LANG) plus $HOME_HREF, $CONTACT_HREF, $FACADE_HREF.
 */
?>

  <section class="hero">
    <picture class="hero-bg" aria-hidden="true">
      <source srcset="<?= e($ASSET) ?>/assets/img/hero.webp" type="image/webp">
      <img src="<?= e($ASSET) ?>/assets/img/hero.jpg" alt="" width="1844" height="1230" fetchpriority="high" decoding="async">
    </picture>
    <div class="hero-inner wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title">
        <span><?= e($P['hero']['h1_line1']) ?></span>
        <span class="hero-accent"><?= e($P['hero']['h1_accent']) ?></span>
      </h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
      <div class="btn-row">
        <a class="btn btn-primary" href="<?= e($CONTACT_HREF) ?>"><?= e($P['hero']['cta_primary']) ?></a>
        <a class="btn btn-ghost" href="<?= e($FACADE_HREF) ?>"><?= e($P['hero']['cta_secondary']) ?></a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2><?= e($P['why_left']['h2']) ?></h2>
        <ul class="check">
<?php foreach ($P['why_left']['items'] as $item): ?>
          <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
      </div>
      <div>
        <h2><?= e($P['why_right']['h2']) ?></h2>
        <ul class="check">
<?php foreach ($P['why_right']['items'] as $item): ?>
          <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow"><?= e($P['steps']['eyebrow']) ?></span>
        <h2><?= e($P['steps']['h2']) ?></h2>
      </div>
      <ol class="steps">
<?php foreach ($P['steps']['items'] as $step): ?>
        <li><h3><?= e($step['title']) ?></h3><p><?= e($step['desc']) ?></p></li>
<?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <span class="eyebrow"><?= e($P['funding_left']['eyebrow']) ?></span>
        <h2><?= e($P['funding_left']['h2']) ?></h2>
        <p><?= e($P['funding_left']['p1']) ?></p>
        <p><?= e($P['funding_left']['p2']) ?></p>
      </div>
      <div>
        <span class="eyebrow"><?= e($P['funding_right']['eyebrow']) ?></span>
        <h2><?= e($P['funding_right']['h2']) ?></h2>
        <p><?= e($P['funding_right']['p']) ?></p>
        <div class="callout"><b><?= e($P['funding_right']['callout_label']) ?></b> <?= e($P['funding_right']['callout_text']) ?></div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow"><?= e($P['explore']['eyebrow']) ?></span>
        <h2><?= e($P['explore']['h2']) ?></h2>
      </div>
      <div class="grid cols-2">
<?php foreach ($P['explore']['cards'] as $card): ?>
        <a class="card" href="<?= e($card['href']) ?>">
          <h3><?= e($card['title']) ?></h3>
          <p><?= e($card['desc']) ?></p>
        </a>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2><?= e($P['cta']['h2']) ?></h2>
        <p><?= e($P['cta']['body']) ?></p>
      </div>
      <a class="btn btn-primary" href="<?= e($CONTACT_HREF) ?>"><?= e($P['cta']['button']) ?></a>
    </div>
  </section>
