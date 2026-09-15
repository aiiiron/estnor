<?php
/**
 * partials/reference-albums.php — a "References" section for a product
 * page: the reference albums of ONE category (Element houses, Modular
 * houses, Facade and roof elements), pulled live out of the general
 * references collection via load_references_by_category(). Nothing is
 * duplicated: the same folder under assets/img/references/ feeds the
 * References page, the homepage teaser and this section — tag a
 * project's "Product type:" and it shows up in the right place.
 *
 * Caller sets, before requiring this file:
 *   $albumsCategory  REFERENCE_CATEGORIES key ('element', 'modular', 'facade')
 *   $albumsHead      ['eyebrow' => .., 'h2' => .., 'lead' => .., 'more' => ..]
 *                    (usually $P['albums'] from the page's content JSON)
 *   $albumsLimit     optional, default 6 — cards shown here; the rest are
 *                    one click away on the References page, pre-filtered
 *                    to this category (?type=<key>), via the 'more' button
 * plus the usual $LANG / $ASSET / $T / $CONTACT_HREF. Includes the
 * lightbox itself (once per page — see partials/reference-lightbox.php).
 */
$albumsAll   = load_references_by_category($LANG, $albumsCategory);
$albumsLimit = $albumsLimit ?? 6;
$albumsShown = array_slice($albumsAll, 0, $albumsLimit);
$albumsMore  = count($albumsAll) > count($albumsShown);
$albumsMoreHref = page_url($LANG, 'references') . '?type=' . rawurlencode($albumsCategory);
if ($albumsAll === []) return; // nothing tagged yet — no empty section
?>
  <section class="section section--alt" id="references">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($albumsHead['eyebrow']) ?></span>
        <h2><?= e($albumsHead['h2']) ?></h2>
<?php if (!empty($albumsHead['lead'])): ?>
        <p class="lead"><?= e($albumsHead['lead']) ?></p>
<?php endif; ?>
      </div>
      <div class="ref-grid">
<?php foreach ($albumsShown as $ref): ?>
<?php require __DIR__ . '/reference-card.php'; ?>
<?php endforeach; ?>
      </div>
<?php if ($albumsMore): ?>
      <div class="btn-row"><a class="btn btn-ghost" href="<?= e($albumsMoreHref) ?>"><?= e($albumsHead['more']) ?> (<?= count($albumsAll) ?>)</a></div>
<?php endif; ?>
    </div>
  </section>
<?php require __DIR__ . '/reference-lightbox.php'; ?>
