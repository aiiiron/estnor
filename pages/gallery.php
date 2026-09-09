<?php
/**
 * pages/gallery.php — shared body template for any 6-tile illustrated
 * photo/production gallery. Reused by two different pages that both need
 * this exact layout: About Us > Production (content/db/pages/
 * about-us-production.json) and Serial Renovation > Gallery (content/db/
 * pages/serial-renovation-gallery.json) — which slug's content ends up in
 * $P is entirely up to the caller's load_page() call.
 *
 * The 6 tile SVGs are fixed, trusted illustration markup (not
 * translatable content), so they stay in the template; only the hero
 * copy, the 6 captions and the CTA come from $P.
 *
 * Caller sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and
 * defines $HOME_HREF, $PARENT_HREF, $CTA_HREF. $P['hero']['parent_label']
 * is the breadcrumb's middle segment (e.g. "About Us" or "Serial
 * Renovation").
 */
$tiles = [
  ['class' => 'tile tall', 'svg' => '<svg viewBox="0 0 300 640" preserveAspectRatio="xMidYMid slice"><rect width="300" height="640" fill="#13342a"/><g fill="#e9efe7" opacity=".9"><rect x="40" y="60" width="220" height="18"/><rect x="40" y="100" width="220" height="18"/><rect x="40" y="140" width="220" height="18"/></g><rect x="40" y="200" width="220" height="380" fill="#1f4d3a"/></svg>'],
  ['class' => 'tile',      'svg' => '<svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#1f4d3a"/><polygon points="30,220 150,110 270,220" fill="#e9efe7"/></svg>'],
  ['class' => 'tile',      'svg' => '<svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#dd8a2c"/><g fill="#13342a" opacity=".85"><rect x="30" y="60" width="240" height="30"/><rect x="30" y="110" width="240" height="30"/><rect x="30" y="160" width="240" height="30"/></g></svg>'],
  ['class' => 'tile',      'svg' => '<svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#13342a"/><rect x="60" y="60" width="180" height="180" fill="#f6f4ee"/></svg>'],
  ['class' => 'tile',      'svg' => '<svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#e9efe7"/><circle cx="150" cy="150" r="90" fill="#1f4d3a"/></svg>'],
  ['class' => 'tile tall', 'svg' => '<svg viewBox="0 0 300 640" preserveAspectRatio="xMidYMid slice"><rect width="300" height="640" fill="#1f4d3a"/><rect x="40" y="300" width="220" height="300" fill="#e9efe7"/><polygon points="20,300 150,180 280,300" fill="#f6f4ee"/></svg>'],
];
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
      <div class="gallery-grid">
<?php foreach ($tiles as $i => $tile): ?>
        <div class="<?= e($tile['class']) ?>">
          <?= $tile['svg'] ?>
          <div class="cap"><?= e($P['captions'][$i]) ?></div>
        </div>
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
