<?php
/**
 * pages/houses-element-houses.php — shared body template for the Element
 * Houses page. Caller sets $LANG/$ASSET/$ACTIVE, requires
 * partials/head.php, and defines $P = load_page('houses-element-houses',
 * $LANG) plus $HOME_HREF, $HOUSES_HREF, $CONTACT_HREF.
 */
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <a href="<?= e($HOUSES_HREF) ?>"><?= e($P['hero']['parent_label']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2><?= e($P['benefits']['h2']) ?></h2>
        <ul class="check">
<?php foreach ($P['benefits']['items'] as $item): ?>
          <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
      </div>
      <div class="panel-stack" aria-hidden="true">
        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['capabilities']['eyebrow']) ?></span>
        <h2><?= e($P['capabilities']['h2']) ?></h2>
        <p class="lead"><?= e($P['capabilities']['lead']) ?></p>
      </div>
      <div class="grid cols-4">
<?php foreach ($P['capabilities']['cards'] as $card): ?>
        <div class="card"><h3><?= e($card['title']) ?></h3><p><?= e($card['desc']) ?></p></div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['materials']['eyebrow']) ?></span>
        <h2><?= e($P['materials']['h2']) ?></h2>
      </div>
      <div class="grid cols-3">
<?php foreach ($P['materials']['cards'] as $card): ?>
        <div class="card card--tint"><h3><?= e($card['title']) ?></h3><p><?= e($card['desc']) ?></p></div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="callout"><b><?= e($P['callout']['label']) ?></b> <?= e($P['callout']['text']) ?></div>
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
