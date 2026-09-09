<?php
/**
 * pages/projects.php — shared body template for the Projects page. Caller
 * sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and defines
 * $P = load_page('projects', $LANG) plus $HOME_HREF, $REFERENCES_HREF,
 * $CONTACT_HREF.
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
    <div class="wrap">
      <div class="grid cols-3">
<?php foreach ($P['cards'] as $card): ?>
        <div class="card">
          <span class="tag"><?= e($card['tag']) ?></span>
          <h3><?= e($card['title']) ?></h3>
          <p><?= e($card['desc']) ?></p>
        </div>
<?php endforeach; ?>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="<?= e($REFERENCES_HREF) ?>"><?= e($P['references_cta']) ?></a>
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
