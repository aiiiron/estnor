<?php
/**
 * pages/references.php — full References index: every EstNor reference
 * project that isn't specific to serial renovation (those live on the
 * Serial Renovation page's own References section instead — see
 * content/db/pages/serial-renovation.json's "projects" sections). Linked
 * from the main nav. Caller sets $LANG/$ASSET/$ACTIVE/$T, requires
 * partials/head.php, and defines $P = load_page('references', $LANG)
 * plus $HOME_HREF, $CONTACT_HREF.
 *
 * The reference list itself (title/location/category/description) comes
 * from load_references($LANG) — content/db/references.json — shared with
 * partials/home.php's "3 latest" teaser, not duplicated here. Each
 * reference's photos are looked up on disk per inc/references.php /
 * assets/img/references/README.md, not stored in this page's content.
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
      <div class="ref-grid">
<?php foreach (load_references($LANG) as $ref): ?>
<?php require __DIR__ . '/../partials/reference-card.php'; ?>
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

<?php require __DIR__ . '/../partials/reference-lightbox.php'; ?>
