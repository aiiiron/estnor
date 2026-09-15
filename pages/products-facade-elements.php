<?php
/**
 * pages/products-facade-elements.php — shared body template for the
 * Facade and Roof Elements product page: prefabricated envelope elements
 * for NEW buildings (schools, offices, student housing, ...). This is
 * the former Serial Renovation > Facade Elements page moved under
 * Products and rewritten around new buildings; its generic sections
 * (element build-up, logistics, quality & certification) carried over.
 * The renovation element itself is described on the Serial Renovation
 * index (process steps + per-building albums).
 *
 * Caller sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and
 * defines $P = load_page('products-facade-elements', $LANG) plus
 * $HOME_HREF, $PRODUCTS_HREF, $CONTACT_HREF. The reference albums come
 * from the general references collection, filtered to the 'facade'
 * category — see partials/reference-albums.php.
 */
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <a href="<?= e($PRODUCTS_HREF) ?>"><?= e($P['hero']['parent_label']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2><?= e($P['intro']['h2']) ?></h2>
<?php foreach ($P['intro']['paragraphs'] as $para): ?>
        <p><?= e($para) ?></p>
<?php endforeach; ?>
      </div>
      <div>
        <h2><?= e($P['why']['h2']) ?></h2>
        <ul class="check">
<?php foreach ($P['why']['items'] as $item): ?>
          <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['deliver']['eyebrow']) ?></span>
        <h2><?= e($P['deliver']['h2']) ?></h2>
      </div>
      <div class="grid cols-4">
<?php foreach ($P['deliver']['cards'] as $card): ?>
        <div class="card"><h3><?= e($card['title']) ?></h3><p><?= e($card['desc']) ?></p></div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2><?= e($P['buildup']['h2']) ?></h2>
        <ul class="buildup">
<?php foreach ($P['buildup']['items'] as $i => $item): ?>
          <li><b><?= $i + 1 ?></b><span><?= e($item) ?></span></li>
<?php endforeach; ?>
        </ul>
      </div>
      <div class="panel-stack" aria-hidden="true">
        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap split">
      <div>
        <span class="eyebrow"><?= e($P['logistics']['eyebrow']) ?></span>
        <h2><?= e($P['logistics']['h2']) ?></h2>
        <p><?= e($P['logistics']['body']) ?></p>
      </div>
      <div>
        <span class="eyebrow"><?= e($P['quality']['eyebrow']) ?></span>
        <ul class="check">
<?php foreach ($P['quality']['items'] as $item): ?>
          <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
        <div class="callout"><b><?= e($P['quality']['callout_label']) ?></b> <?= e($P['quality']['callout_text']) ?></div>
      </div>
    </div>
  </section>

<?php
$albumsCategory = 'facade';
$albumsHead     = $P['albums'];
require __DIR__ . '/../partials/reference-albums.php';
?>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2><?= e($P['cta']['h2']) ?></h2>
        <p><?= e($P['cta']['body']) ?></p>
      </div>
      <a class="btn btn-primary" href="<?= e($CONTACT_HREF) ?>"><?= e($P['cta']['button']) ?></a>
    </div>
  </section>
