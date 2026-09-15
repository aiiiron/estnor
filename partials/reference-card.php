<?php
/**
 * partials/reference-card.php — one reference project's card, used both
 * by the homepage's "3 latest" teaser and pages/references.php's full
 * grid. Expects $ref (one entry from load_references()) and $ASSET
 * already set by the caller.
 *
 * It's a <button>, not a link: clicking it doesn't navigate anywhere, it
 * opens partials/reference-lightbox.php's overlay — assets/js/references.js
 * reads this button's data-* attributes to fill that overlay in. The
 * cover photo (and every photo in the album) comes from
 * inc/references.php's filesystem lookup, not from content JSON — see
 * assets/img/references/README.md.
 */
$refCover  = reference_cover_url($ASSET, $ref['slug']);
$refPhotos = reference_photo_urls($ASSET, $ref['slug']);
?>
<button
  type="button"
  class="ref-card"
  data-ref-trigger
  data-title="<?= e($ref['title']) ?>"
  data-location="<?= e($ref['location']) ?>"
  data-category="<?= e($ref['category']) ?>"
  data-description="<?= e($ref['description']) ?>"
  data-photos="<?= e(json_encode($refPhotos)) ?>"
>
<?php if ($refCover): ?>
  <img class="ref-card-photo" src="<?= e($refCover) ?>" alt="" loading="lazy" decoding="async">
<?php else: ?>
  <span class="ref-card-photo ref-photo-placeholder" aria-hidden="true"></span>
<?php endif; ?>
  <span class="ref-card-fade" aria-hidden="true"></span>
  <span class="ref-view-icon" aria-hidden="true">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3"/><path d="M16 3h3a2 2 0 0 1 2 2v3"/><path d="M21 16v3a2 2 0 0 1-2 2h-3"/><path d="M8 21H5a2 2 0 0 1-2-2v-3"/></svg>
  </span>
  <span class="ref-card-content">
    <span class="ref-tag"><?= e($ref['location']) ?></span>
    <h3 class="ref-card-title"><?= e($ref['title']) ?></h3>
    <span class="ref-card-category"><?= e($ref['category']) ?></span>
  </span>
</button>
