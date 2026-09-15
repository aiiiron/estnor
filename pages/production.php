<?php
/**
 * pages/production.php — About Us > Production: a photo gallery of the
 * EstNor factory in Kiili. Every photo under assets/img/factory/ is
 * shown (factory-<n>.jpg full size, thumbs/factory-<n>.jpg in the grid),
 * in the order of $P['gallery']['order'] — so adding a photo is: drop
 * factory-24.jpg (+ thumb) in, add 24 to the order list. Clicking a tile
 * opens the shared reference lightbox at that photo.
 *
 * Caller sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and
 * defines $P = load_page('about-us-production', $LANG) plus $HOME_HREF,
 * $PARENT_HREF, $CTA_HREF, $CONTACT_HREF.
 */
$factoryDir = __DIR__ . '/../assets/img/factory';
$order  = $P['gallery']['order'] ?? [];
$photos = [];
foreach ($order as $n) {
    if (is_file("$factoryDir/factory-$n.jpg")) $photos[] = (int) $n;
}
$fullUrls = array_map(fn($n) => $ASSET . "/assets/img/factory/factory-$n.jpg", $photos);
$photosJson = json_encode($fullUrls);
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <a href="<?= e($PARENT_HREF) ?>"><?= e($P['hero']['parent_label']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="photo-mosaic">
<?php foreach ($photos as $i => $n): ?>
        <button
          type="button"
          class="photo-tile<?= $i === 0 ? ' photo-tile--feature' : '' ?>"
          data-ref-trigger
          data-index="<?= $i ?>"
          data-title="<?= e($P['gallery']['title']) ?>"
          data-category="<?= e($P['gallery']['category']) ?>"
          data-location="<?= e($P['gallery']['location']) ?>"
          data-description="<?= e($P['gallery']['description']) ?>"
          data-photos="<?= e($photosJson) ?>"
          aria-label="<?= e($P['gallery']['title']) ?> — <?= $i + 1 ?>/<?= count($photos) ?>"
        >
          <img src="<?= e($ASSET) ?>/assets/img/factory/thumbs/factory-<?= $n ?>.jpg" alt="" loading="<?= $i < 3 ? 'eager' : 'lazy' ?>" decoding="async">
        </button>
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
      <a class="btn btn-primary" href="<?= e($CTA_HREF) ?>"><?= e($P['cta']['button']) ?></a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/reference-lightbox.php'; ?>
