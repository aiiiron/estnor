<?php
/**
 * pages/serial-renovation-references.php — shared body template for the
 * References page. Caller sets $LANG/$ASSET/$ACTIVE, requires
 * partials/head.php, and defines $P = load_page(
 * 'serial-renovation-references', $LANG) plus $HOME_HREF,
 * $RENOVATION_HREF, $CONTACT_HREF.
 *
 * Each entry in $P['projects'] carries its own trusted, hand-authored SVG
 * markup (illustrative sketches, not user content) — rendered raw, not
 * through e().
 */
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <a href="<?= e($RENOVATION_HREF) ?>"><?= e($P['hero']['parent_label']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap grid cols-3">
<?php foreach ($P['projects'] as $proj): ?>
      <article class="project-card">
        <div class="project-figure" aria-hidden="true"><?= $proj['svg'] ?></div>
        <div class="project-body">
          <p class="meta"><?= e($proj['meta']) ?></p>
          <h3><?= e($proj['title']) ?></h3>
          <div class="tag-row"><?php foreach ($proj['tags'] as $tag): ?><span class="tag"><?= e($tag) ?></span><?php endforeach; ?></div>
          <p><?= e($proj['desc']) ?></p>
<?php if (!empty($proj['stats'])): ?>
          <div class="project-stats"><?php foreach ($proj['stats'] as $s): ?><div><b><?= e($s['value']) ?></b><span><?= e($s['label']) ?></span></div><?php endforeach; ?></div>
<?php endif; ?>
<?php if (!empty($proj['addresses'])): ?>
          <p class="form-note"><b><?= e($proj['addresses_label']) ?></b> <?= e(implode(' · ', $proj['addresses'])) ?></p>
<?php endif; ?>
        </div>
      </article>
<?php endforeach; ?>
    </div>
  </section>

  <section class="section section--alt">
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
