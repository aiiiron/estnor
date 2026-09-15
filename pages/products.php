<?php
/**
 * pages/products.php — shared body template for the Houses index page.
 * Caller sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and
 * defines $P = load_page('products', $LANG) plus $HOME_HREF,
 * $ELEMENT_HREF, $MODULAR_HREF, $FACADE_HREF, $RENOVATION_HREF.
 */
?>

<?php
$heroImage = 'hero-products';
$heroSize  = [1900, 1267];
require __DIR__ . '/../partials/hero-photo.php';
?>

  <section class="section">
    <div class="wrap grid cols-3 products-grid">
      <div class="house-card house-card--element" style="min-height:400px;">
        <picture class="art">
          <source srcset="<?= e($ASSET) ?>/assets/img/product-element-houses.webp" type="image/webp">
          <img src="<?= e($ASSET) ?>/assets/img/product-element-houses.jpg" alt="" width="1000" height="750" loading="lazy" decoding="async">
        </picture>
        <div class="content">
          <span class="tag"><?= e($P['element']['tag']) ?></span>
          <h3><?= e($P['element']['title']) ?></h3>
          <p><?= e($P['element']['desc']) ?></p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="<?= e($ELEMENT_HREF) ?>"><?= e($P['element']['cta']) ?></a></div>
        </div>
      </div>
      <div class="house-card house-card--modular" style="min-height:400px;">
        <picture class="art">
          <source srcset="<?= e($ASSET) ?>/assets/img/product-modular-houses.webp" type="image/webp">
          <img src="<?= e($ASSET) ?>/assets/img/product-modular-houses.jpg" alt="" width="1024" height="682" loading="lazy" decoding="async">
        </picture>
        <div class="content">
          <span class="tag"><?= e($P['modular']['tag']) ?></span>
          <h3><?= e($P['modular']['title']) ?></h3>
          <p><?= e($P['modular']['desc']) ?></p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="<?= e($MODULAR_HREF) ?>"><?= e($P['modular']['cta']) ?></a></div>
        </div>
      </div>
      <div class="house-card house-card--facade" style="min-height:400px;">
        <picture class="art">
          <source srcset="<?= e($ASSET) ?>/assets/img/product-facade-elements.webp" type="image/webp">
          <img src="<?= e($ASSET) ?>/assets/img/product-facade-elements.jpg" alt="" width="1400" height="933" loading="lazy" decoding="async">
        </picture>
        <div class="content">
          <span class="tag"><?= e($P['facade']['tag']) ?></span>
          <h3><?= e($P['facade']['title']) ?></h3>
          <p><?= e($P['facade']['desc']) ?></p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="<?= e($FACADE_HREF) ?>"><?= e($P['facade']['cta']) ?></a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow"><?= e($P['compare']['eyebrow']) ?></span>
        <h2><?= e($P['compare']['h2']) ?></h2>
      </div>
      <div class="grid cols-2">
<?php foreach ($P['compare']['cards'] as $card): ?>
        <div class="card">
          <h3><?= e($card['title']) ?></h3>
          <p><?= e($card['desc']) ?></p>
        </div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['renovate']['eyebrow']) ?></span>
        <h2><?= e($P['renovate']['h2']) ?></h2>
        <p class="lead"><?= e($P['renovate']['lead']) ?></p>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="<?= e($RENOVATION_HREF) ?>"><?= e($P['renovate']['cta']) ?></a>
      </div>
    </div>
  </section>
