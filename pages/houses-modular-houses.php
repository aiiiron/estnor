<?php
/**
 * pages/houses-modular-houses.php — shared body template for the Modular
 * Houses page. Caller sets $LANG/$ASSET/$ACTIVE, requires
 * partials/head.php, and defines $P = load_page('houses-modular-houses',
 * $LANG) plus $HOME_HREF, $HOUSES_HREF, $PROJECTS_HREF, $CONTACT_HREF.
 */
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <a href="<?= e($HOUSES_HREF) ?>"><?= e($P['hero']['parent_label']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
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
      <div class="card" style="padding:0; overflow:hidden;">
        <svg viewBox="0 0 400 320" preserveAspectRatio="xMidYMid slice" width="100%" height="100%">
          <rect width="400" height="320" fill="#13342a"/>
          <g fill="#e9efe7"><rect x="40" y="180" width="110" height="100"/><rect x="160" y="140" width="110" height="140"/><rect x="280" y="100" width="90" height="180"/></g>
          <g fill="#dd8a2c"><rect x="40" y="180" width="110" height="8"/><rect x="160" y="140" width="110" height="8"/><rect x="280" y="100" width="90" height="8"/></g>
        </svg>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['suitable']['eyebrow']) ?></span>
        <h2><?= e($P['suitable']['h2']) ?></h2>
      </div>
      <div class="grid cols-4">
<?php foreach ($P['suitable']['cards'] as $card): ?>
        <div class="card"><h3><?= e($card['title']) ?></h3><p><?= e($card['desc']) ?></p></div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div class="card" style="padding:0; overflow:hidden;">
        <svg preserveAspectRatio="xMidYMid slice" viewBox="0 0 400 300" width="100%" height="100%">
          <rect fill="#2c5a45" height="300" width="400"></rect>
          <g fill="#e9efe7" opacity=".95">
            <rect height="220" width="100" x="30" y="60"></rect><rect height="220" width="100" x="150" y="60"></rect><rect height="220" width="100" x="270" y="60"></rect>
          </g>
          <g fill="#13342a"><rect height="20" width="20" x="50" y="90"></rect><rect height="20" width="20" x="90" y="90"></rect><rect height="20" width="20" x="170" y="90"></rect><rect height="20" width="20" x="210" y="90"></rect><rect height="20" width="20" x="290" y="90"></rect><rect height="20" width="20" x="330" y="90"></rect></g>
        </svg>
      </div>
      <div>
        <span class="eyebrow"><?= e($P['pattern']['eyebrow']) ?></span>
        <h2><?= e($P['pattern']['h2']) ?></h2>
        <p><?= e($P['pattern']['body_pre']) ?><strong><?= e($P['pattern']['bold']) ?></strong><?= e($P['pattern']['body_post']) ?></p>
        <div class="btn-row"><a class="btn btn-ghost" href="<?= e($PROJECTS_HREF) ?>"><?= e($P['pattern']['cta']) ?></a></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2><?= e($P['cta']['h2']) ?></h2>
        <p><?= e($P['cta']['body']) ?></p>
      </div>
      <a class="btn btn-primary" href="<?= e($CONTACT_HREF) ?>"><?= e($P['cta']['button']) ?></a>
    </div>
  </section>
