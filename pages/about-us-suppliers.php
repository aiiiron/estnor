<?php
/**
 * pages/about-us-suppliers.php — shared body template for the Suppliers &
 * Co-operators page. Caller sets $LANG/$ASSET/$ACTIVE, requires
 * partials/head.php, and defines $P = load_page('about-us-suppliers',
 * $LANG) plus $HOME_HREF and $ABOUT_HREF (relative links for the
 * breadcrumb).
 */
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb_home']) ?></a> / <a href="<?= e($ABOUT_HREF) ?>"><?= e($P['hero']['crumb_parent']) ?></a> / <span><?= e($P['hero']['h1']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
<?php foreach ($P['cards'] as $card): ?>
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
        <span class="eyebrow"><?= e($P['memberships']['eyebrow']) ?></span>
        <h2><?= e($P['memberships']['h2']) ?></h2>
      </div>
      <ul class="check">
<?php foreach ($P['memberships']['items'] as $item): ?>
        <li><?= e($item) ?></li>
<?php endforeach; ?>
      </ul>
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
