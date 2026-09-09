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
    <div class="wrap grid cols-3">
<?php $swatches = ['#1f4d3a', '#13342a', '#2c5a45']; foreach ($h['products'] as $i => $p): ?>
      <a class="house-card" href="<?= e(url($p['href'])) ?>">
        <div class="art">
          <svg viewBox="0 0 400 360" width="100%" height="100%" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="360" fill="<?= e($swatches[$i % 3]) ?>"/>
            <g fill="#e9efe7" opacity=".18"><rect x="60" y="150" width="280" height="130"/><polygon points="40,150 200,70 360,150"/></g>
          </svg>
        </div>
        <div class="content">
          <span class="tag"><?= e($p['tag']) ?></span>
          <h3><?= e($p['label']) ?></h3>
        </div>
      </a>
<?php endforeach; ?>
    </div>
    <div class="wrap btn-row">
      <a class="btn btn-ghost" href="<?= e(url($h['renovation_href'])) ?>"><?= e($h['renovation_label']) ?> →</a>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap stat-row">
<?php foreach ($h['stats'] as $s): ?>
      <div class="stat"><b><?= e($s['value']) ?></b><span><?= e($s['label']) ?></span></div>
<?php endforeach; ?>
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
