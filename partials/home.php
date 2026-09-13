<?php
/**
 * partials/home.php — shared homepage content for every language.
 * Included between head.php and footer.php; expects $T (= load_lang($LANG))
 * and $ASSET already set by the calling index.php.
 */
$h = $T['home'];
?>
  <section class="hero">
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

  <section class="section section--alt">
    <div class="wrap">
      <div class="bento-grid">
        <a class="house-card span-2" href="<?= e(url($h['products'][0]['href'])) ?>">
          <picture class="art">
            <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][0]['photo']) ?>.webp" type="image/webp">
            <img src="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][0]['photo']) ?>.jpg" alt="" width="1000" height="750" loading="lazy" decoding="async">
          </picture>
          <div class="content">
            <span class="tag"><?= e($h['products'][0]['tag']) ?></span>
            <h3><?= e($h['products'][0]['label']) ?></h3>
            <p><?= e($h['products'][0]['desc']) ?></p>
          </div>
        </a>

        <a class="house-card" href="<?= e(url($h['products'][1]['href'])) ?>">
          <picture class="art">
            <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][1]['photo']) ?>.webp" type="image/webp">
            <img src="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][1]['photo']) ?>.jpg" alt="" width="1024" height="682" loading="lazy" decoding="async">
          </picture>
          <div class="content">
            <span class="tag"><?= e($h['products'][1]['tag']) ?></span>
            <h3><?= e($h['products'][1]['label']) ?></h3>
          </div>
        </a>

        <div class="stat-cell stat-cell--dark">
          <span class="tag"><?= e($h['stats'][0]['tag']) ?></span>
          <div><b><?= e($h['stats'][0]['value']) ?></b><span><?= e($h['stats'][0]['label']) ?></span></div>
        </div>

        <a class="house-card span-2" href="<?= e(url($h['products'][2]['href'])) ?>">
          <picture class="art">
            <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][2]['photo']) ?>.webp" type="image/webp">
            <img src="<?= e($ASSET) ?>/assets/img/<?= e($h['products'][2]['photo']) ?>.jpg" alt="" width="1400" height="787" loading="lazy" decoding="async">
          </picture>
          <div class="content">
            <span class="tag"><?= e($h['products'][2]['tag']) ?></span>
            <h3><?= e($h['products'][2]['label']) ?></h3>
            <p><?= e($h['products'][2]['desc']) ?></p>
          </div>
        </a>

        <div class="stat-cell">
          <span class="tag"><?= e($h['stats'][1]['tag']) ?></span>
          <div><b><?= e($h['stats'][1]['value']) ?></b><span><?= e($h['stats'][1]['label']) ?></span></div>
        </div>

        <div class="stat-cell stat-cell--ochre">
          <span class="tag"><?= e($h['stats'][2]['tag']) ?></span>
          <div><b><?= e($h['stats'][2]['value']) ?></b><span><?= e($h['stats'][2]['label']) ?></span></div>
        </div>
      </div>
    </div>
    <div class="wrap btn-row" style="margin-top:1.75rem;">
      <a class="btn btn-ghost" href="<?= e(url($h['renovation_href'])) ?>"><?= e($h['renovation_label']) ?> →</a>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($h['references_heading']) ?></span>
      </div>
      <div class="grid cols-3">
<?php foreach ($h['references'] as $r): ?>
        <div class="card"><h3><?= e($r) ?></h3></div>
<?php endforeach; ?>
      </div>
      <div class="btn-row"><a class="btn btn-ghost" href="<?= e(url($h['see_all_href'])) ?>"><?= e($T['common']['see_all']) ?></a></div>
    </div>
  </section>
