<?php
/**
 * pages/serial-renovation-process.php — Serial Renovation > Process: how
 * a factory-made facade renovation is actually done, start to finish.
 * Content follows the old estnor.ee/tehaseline-renoveerimine/ page
 * ("Renoveerimisprotsessi sammud lihtsustatult" and the surrounding
 * measurement / design / factory / installation sections); illustrations
 * and photos live in assets/img/renovation-process/.
 *
 * Caller sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and
 * defines $P = load_page('serial-renovation-process', $LANG) plus
 * $HOME_HREF, $RENOVATION_HREF, $CONTACT_HREF.
 */
$img = fn(string $rel) => e($ASSET) . '/assets/img/renovation-process/' . $rel;
$siteCount  = 14;
$sitePhotos = [];
for ($i = 1; $i <= $siteCount; $i++) $sitePhotos[] = $ASSET . "/assets/img/renovation-process/site/site-$i.jpg";
$sitePhotosJson = json_encode($sitePhotos);
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <a href="<?= e($RENOVATION_HREF) ?>"><?= e($P['hero']['parent_label']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <span class="eyebrow"><?= e($P['scope']['eyebrow']) ?></span>
        <h2><?= e($P['scope']['h2']) ?></h2>
<?php foreach ($P['scope']['paragraphs'] as $para): ?>
        <p><?= e($para) ?></p>
<?php endforeach; ?>
      </div>
      <div>
        <h3><?= e($P['scope']['list_h3']) ?></h3>
        <ul class="check">
<?php foreach ($P['scope']['items'] as $item): ?>
          <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['prep']['eyebrow']) ?></span>
        <h2><?= e($P['prep']['h2']) ?></h2>
        <p class="lead"><?= e($P['prep']['lead']) ?></p>
      </div>
      <div class="grid cols-2">
<?php foreach ($P['prep']['cards'] as $card): ?>
        <div class="card">
          <h3><?= e($card['title']) ?></h3>
          <ul class="check">
<?php foreach ($card['items'] as $item): ?>
            <li><?= e($item) ?></li>
<?php endforeach; ?>
          </ul>
        </div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <figure class="photo-card photo-card--diagram"><img src="<?= $img('element-layers.png') ?>" alt="<?= e($P['element']['diagram_alt']) ?>" loading="lazy" decoding="async"></figure>
      <div>
        <span class="eyebrow"><?= e($P['element']['eyebrow']) ?></span>
        <h2><?= e($P['element']['h2']) ?></h2>
        <p><?= e($P['element']['intro']) ?></p>
        <ul class="buildup">
<?php foreach ($P['element']['layers'] as $i => $layer): ?>
          <li><b><?= $i + 1 ?></b><span><?= e($layer) ?></span></li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['factory']['eyebrow']) ?></span>
        <h2><?= e($P['factory']['h2']) ?></h2>
        <p class="lead"><?= e($P['factory']['lead']) ?></p>
      </div>
      <div class="photo-row">
<?php foreach ($P['factory']['photos'] as $i => $alt): ?>
        <figure class="photo-card"><img src="<?= $img('factory-' . ($i + 1) . '.jpg') ?>" alt="<?= e($alt) ?>" loading="lazy" decoding="async"></figure>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" id="steps">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow"><?= e($P['steps']['eyebrow']) ?></span>
        <h2><?= e($P['steps']['h2']) ?></h2>
        <p class="lead"><?= e($P['steps']['lead']) ?></p>
      </div>
      <ol class="process-steps">
<?php foreach ($P['steps']['items'] as $i => $step): ?>
        <li>
          <figure><img src="<?= $img('steps/step-' . ($i + 1) . '.jpg') ?>" alt="" loading="lazy" decoding="async"></figure>
          <div>
            <span class="process-num"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <h3><?= e($step['title']) ?></h3>
            <p><?= e($step['desc']) ?></p>
          </div>
        </li>
<?php endforeach; ?>
      </ol>
    </div>
  </section>

<?php if (is_file(__DIR__ . '/../assets/video/renovation-process.mp4')): ?>
  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['video']['eyebrow']) ?></span>
        <h2><?= e($P['video']['h2']) ?></h2>
        <p class="lead"><?= e($P['video']['lead']) ?></p>
      </div>
      <video class="process-video" controls preload="metadata" playsinline poster="<?= $img('render.jpg') ?>">
        <source src="<?= e($ASSET) ?>/assets/video/renovation-process.mp4" type="video/mp4">
      </video>
    </div>
  </section>
<?php endif; ?>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['site']['eyebrow']) ?></span>
        <h2><?= e($P['site']['h2']) ?></h2>
        <p class="lead"><?= e($P['site']['lead']) ?></p>
      </div>
      <div class="photo-mosaic">
<?php for ($i = 1; $i <= $siteCount; $i++): ?>
        <button
          type="button"
          class="photo-tile<?= $i === 1 ? ' photo-tile--feature' : '' ?>"
          data-ref-trigger
          data-index="<?= $i - 1 ?>"
          data-title="<?= e($P['site']['album_title']) ?>"
          data-category="<?= e($P['site']['album_category']) ?>"
          data-location=""
          data-description="<?= e($P['site']['album_description']) ?>"
          data-photos="<?= e($sitePhotosJson) ?>"
          aria-label="<?= e($P['site']['album_title']) ?> — <?= $i ?>/<?= $siteCount ?>"
        >
          <img src="<?= $img("site/thumbs/site-$i.jpg") ?>" alt="" loading="<?= $i <= 3 ? 'eager' : 'lazy' ?>" decoding="async">
        </button>
<?php endfor; ?>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2><?= e($P['cta']['h2']) ?></h2>
        <p><?= e($P['cta']['body']) ?></p>
      </div>
      <div class="btn-row">
        <a class="btn btn-primary" href="<?= e($CONTACT_HREF) ?>"><?= e($P['cta']['button']) ?></a>
        <a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="<?= e($RENOVATION_HREF) ?>#references"><?= e($P['cta']['secondary']) ?></a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../partials/reference-lightbox.php'; ?>
