<?php
/**
 * pages/products-modular-houses.php — shared body template for the
 * Modular Houses page. Caller sets $LANG/$ASSET/$ACTIVE, requires
 * partials/head.php, and defines $P = load_page('products-modular-houses',
 * $LANG) plus $HOME_HREF, $PRODUCTS_HREF, $REFERENCES_HREF, $CONTACT_HREF.
 *
 * Text and photos follow the old estnor.ee/moodulmajad/ page; the photos
 * live in assets/img/modular/ (jpg + webp pairs). The reference albums
 * come from the general references collection filtered to the 'modular'
 * category — see partials/reference-albums.php.
 */
$modularPhoto = function (string $name, string $alt = '') use ($ASSET): string {
  $base = e($ASSET) . '/assets/img/modular/' . $name;
  return '<picture><source srcset="' . $base . '.webp" type="image/webp"><img src="' . $base . '.jpg" alt="' . e($alt) . '" loading="lazy" decoding="async"></picture>';
};
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
        <h2><?= e($P['how']['h2']) ?></h2>
<?php foreach ($P['how']['paragraphs'] as $para): ?>
        <p><?= e($para) ?></p>
<?php endforeach; ?>
      </div>
      <figure class="photo-card"><?= $modularPhoto('crane-lift', $P['photos']['crane_lift']) ?></figure>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['benefits']['eyebrow']) ?></span>
        <h2><?= e($P['benefits']['h2']) ?></h2>
      </div>
      <div class="grid cols-4">
<?php foreach ($P['benefits']['cards'] as $card): ?>
        <div class="card"><h3><?= e($card['title']) ?></h3><p><?= e($card['desc']) ?></p></div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['suitable']['eyebrow']) ?></span>
        <h2><?= e($P['suitable']['h2']) ?></h2>
        <p class="lead"><?= e($P['suitable']['lead']) ?></p>
      </div>
      <div class="photo-row">
        <figure class="photo-card"><?= $modularPhoto('factory-hall', $P['photos']['factory_hall']) ?></figure>
        <figure class="photo-card"><?= $modularPhoto('transport', $P['photos']['transport']) ?></figure>
        <figure class="photo-card"><?= $modularPhoto('finished-house', $P['photos']['finished_house']) ?></figure>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow"><?= e($P['steps']['eyebrow']) ?></span>
        <h2><?= e($P['steps']['h2']) ?></h2>
        <p class="lead"><?= e($P['steps']['lead']) ?></p>
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
      <figure class="photo-card"><?= $modularPhoto('module-factory', $P['photos']['module_factory']) ?></figure>
      <div>
        <span class="eyebrow"><?= e($P['pattern']['eyebrow']) ?></span>
        <h2><?= e($P['pattern']['h2']) ?></h2>
        <p><?= e($P['pattern']['body_pre']) ?><strong><?= e($P['pattern']['bold']) ?></strong><?= e($P['pattern']['body_post']) ?></p>
      </div>
    </div>
  </section>

<?php
$albumsCategory = 'modular';
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
