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
<?php
// Optional ?type=<REFERENCE_CATEGORIES key> narrows the grid to one product
// category — the product pages' "See all ..." buttons link here that way.
// Chip labels are the category names as written in this language's .txt
// files, so they follow the content with no separate translation table.
$refsAll  = load_references($LANG);
$refType  = $_GET['type'] ?? '';
if (!array_key_exists($refType, REFERENCE_CATEGORIES)) $refType = '';
$refTypes = [];
foreach ($refsAll as $r) {
    if ($r['category_key'] !== null && !isset($refTypes[$r['category_key']])) $refTypes[$r['category_key']] = $r['category'];
}
$refsShown = $refType === '' ? $refsAll : array_values(array_filter($refsAll, fn($r) => $r['category_key'] === $refType));
$refsBase  = page_url($LANG, 'references');
?>
      <nav class="ref-filter" aria-label="<?= e($P['hero']['label']) ?>">
        <a href="<?= e($refsBase) ?>"<?= $refType === '' ? ' aria-current="true"' : '' ?>><?= e($T['common']['all']) ?> (<?= count($refsAll) ?>)</a>
<?php foreach ($refTypes as $key => $label): ?>
        <a href="<?= e($refsBase . '?type=' . rawurlencode($key)) ?>"<?= $refType === $key ? ' aria-current="true"' : '' ?>><?= e($label) ?></a>
<?php endforeach; ?>
      </nav>
      <div class="ref-grid">
<?php foreach ($refsShown as $ref): ?>
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
