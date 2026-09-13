<?php
/**
 * pages/projects.php — shared body template for the general References /
 * Projects page: new-build and element/modular projects that aren't
 * specific to serial renovation (those live on the Serial Renovation
 * page's own References section instead). Not linked from the main nav —
 * reachable from the footer and the homepage's references teaser. Caller
 * sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and defines
 * $P = load_page('projects', $LANG) plus $HOME_HREF, $CONTACT_HREF.
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

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['other_section']['eyebrow']) ?></span>
        <h2><?= e($P['other_section']['h2']) ?></h2>
      </div>
      <div class="grid cols-4">
<?php foreach ($P['other_section']['cards'] as $card): ?>
        <div class="card">
          <span class="tag"><?= e($card['tag']) ?></span>
          <h3><?= e($card['title']) ?></h3>
          <p><?= e($card['desc']) ?></p>
        </div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap split">
      <div>
        <span class="eyebrow"><?= e($P['context_left']['eyebrow']) ?></span>
        <h2><?= e($P['context_left']['h2']) ?></h2>
        <p><?= e($P['context_left']['p']) ?></p>
      </div>
      <div>
        <span class="eyebrow"><?= e($P['context_right']['eyebrow']) ?></span>
        <h2><?= e($P['context_right']['h2']) ?></h2>
        <p><?= e($P['context_right']['p']) ?></p>
        <div class="btn-row"><a class="btn btn-primary" href="<?= e($CONTACT_HREF) ?>"><?= e($P['context_right']['button']) ?></a></div>
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
