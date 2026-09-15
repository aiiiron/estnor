<?php
/**
 * partials/home.php — shared homepage content for every language.
 * Included between head.php and footer.php; expects $T (= load_lang($LANG))
 * and $ASSET already set (by inc/route.php, or root index.php's own
 * language-detection path for the Estonian homepage).
 */
$h = $T['home'];
?>
  <section class="hero hero--home">
    <picture class="hero-bg" aria-hidden="true">
      <source srcset="<?= e($ASSET) ?>/assets/img/hero.webp" type="image/webp">
      <img src="<?= e($ASSET) ?>/assets/img/hero.jpg" alt="" width="1844" height="1230" fetchpriority="high" decoding="async">
    </picture>
    <div class="hero-inner wrap">
      <span class="eyebrow"><?= e($h['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($h['h1']) ?></h1>
      <p class="lead"><?= e($h['lead']) ?></p>
      <div class="btn-row">
        <a class="btn btn-primary" href="<?= e(url($h['cta_primary']['href'])) ?>"><?= e($h['cta_primary']['label']) ?></a>
        <a class="btn btn-ghost" href="<?= e(url($h['cta_secondary']['href'])) ?>"><?= e($h['cta_secondary']['label']) ?></a>
      </div>
    </div>
  </section>

  <section class="section section--alt home-products">
    <div class="wrap">
      <div class="bento-grid">
        <a class="house-card span-2 house-card--element" href="<?= e(url($h['products'][0]['href'])) ?>">
          <picture class="art">
            <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][0]['photo']) ?>.webp" type="image/webp">
            <img src="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][0]['photo']) ?>.jpg" alt="" width="1000" height="750" loading="lazy" decoding="async">
          </picture>
          <div class="content">
            <h3><?= e($h['products'][0]['label']) ?></h3>
            <p><?= e($h['products'][0]['desc']) ?></p>
          </div>
        </a>

        <a class="house-card span-2 house-card--modular" href="<?= e(url($h['products'][1]['href'])) ?>">
          <picture class="art">
            <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][1]['photo']) ?>.webp" type="image/webp">
            <img src="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][1]['photo']) ?>.jpg" alt="" width="1024" height="682" loading="lazy" decoding="async">
          </picture>
          <div class="content">
            <h3><?= e($h['products'][1]['label']) ?></h3>
            <p><?= e($h['products'][1]['desc']) ?></p>
          </div>
        </a>

        <a class="house-card span-2 house-card--facade" href="<?= e(url($h['products'][2]['href'])) ?>">
          <picture class="art">
            <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][2]['photo']) ?>.webp" type="image/webp">
            <img src="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][2]['photo']) ?>.jpg" alt="" width="1400" height="933" loading="lazy" decoding="async">
          </picture>
          <div class="content">
            <h3><?= e($h['products'][2]['label']) ?></h3>
            <p><?= e($h['products'][2]['desc']) ?></p>
          </div>
        </a>

        <a class="house-card span-2 house-card--renovation" href="<?= e(url($h['products'][3]['href'])) ?>">
          <picture class="art">
            <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][3]['photo']) ?>.webp" type="image/webp">
            <img src="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][3]['photo']) ?>.jpg" alt="" width="1400" height="787" loading="lazy" decoding="async">
          </picture>
          <div class="content">
            <h3><?= e($h['products'][3]['label']) ?></h3>
            <p><?= e($h['products'][3]['desc']) ?></p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($h['references_heading']) ?></span>
      </div>
      <div class="ref-grid">
<?php foreach (array_slice(load_references($LANG), 0, 3) as $ref): ?>
<?php require __DIR__ . '/reference-card.php'; ?>
<?php endforeach; ?>
      </div>
      <div class="btn-row"><a class="btn btn-ghost" href="<?= e($REFERENCES_HREF) ?>"><?= e($T['common']['see_all']) ?></a></div>
    </div>
  </section>

<?php require __DIR__ . '/reference-lightbox.php'; ?>
