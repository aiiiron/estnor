<?php
/**
 * pages/houses.php — shared body template for the Houses index page.
 * Caller sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and
 * defines $P = load_page('houses', $LANG) plus $HOME_HREF,
 * $ELEMENT_HREF, $MODULAR_HREF, $RENOVATION_HREF.
 */
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap grid cols-2">
      <div class="house-card" style="min-height:400px;">
        <div class="art">
          <svg viewBox="0 0 400 360" width="100%" height="100%" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="360" fill="#1f4d3a"/>
            <g fill="#e9efe7" opacity=".9"><rect x="60" y="150" width="280" height="130"/><polygon points="40,150 200,70 360,150"/></g>
            <g fill="#13342a"><rect x="180" y="200" width="40" height="80"/></g>
          </svg>
        </div>
        <div class="content">
          <span class="tag"><?= e($P['element']['tag']) ?></span>
          <h3><?= e($P['element']['title']) ?></h3>
          <p><?= e($P['element']['desc']) ?></p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="<?= e($ELEMENT_HREF) ?>"><?= e($P['element']['cta']) ?></a></div>
        </div>
      </div>
      <div class="house-card" style="min-height:400px;">
        <div class="art">
          <svg viewBox="0 0 400 360" width="100%" height="100%" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="360" fill="#13342a"/>
            <g fill="#e9efe7" opacity=".92"><rect x="55" y="140" width="130" height="140"/><rect x="215" y="100" width="130" height="180"/></g>
            <g fill="#dd8a2c"><rect x="55" y="140" width="130" height="8"/><rect x="215" y="100" width="130" height="8"/></g>
          </svg>
        </div>
        <div class="content">
          <span class="tag"><?= e($P['modular']['tag']) ?></span>
          <h3><?= e($P['modular']['title']) ?></h3>
          <p><?= e($P['modular']['desc']) ?></p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="<?= e($MODULAR_HREF) ?>"><?= e($P['modular']['cta']) ?></a></div>
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
