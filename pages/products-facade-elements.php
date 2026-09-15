<?php
/**
 * pages/products-facade-elements.php — shared body template for the
 * Facade and Roof Elements product page: prefabricated envelope elements
 * for NEW buildings (schools, offices, student housing, ...). Not to be
 * confused with pages/serial-renovation-facade-elements.php, which is
 * the renovation element for existing apartment blocks.
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
