<?php
/**
 * partials/reference-lightbox.php — the click-to-open reference "album"
 * overlay shared by the homepage teaser and pages/references.php. A
 * static, empty shell: assets/js/references.js fills in each reference's
 * title/location/category/description/photos when its
 * partials/reference-card.php button is clicked, reading that button's
 * data-* attributes — nothing here is server-rendered per reference, so
 * one include covers however many cards are on the page.
 *
 * Include this once on any page that renders reference cards, right
 * after requiring partials/head.php, and set $NEEDS_REFERENCES_JS = true
 * before requiring partials/footer.php so it also loads
 * assets/js/references.js. Expects $T and $CONTACT_HREF already set.
 */
$NEEDS_REFERENCES_JS = true;
?>
<div class="ref-lightbox" id="ref-lightbox" hidden>
  <div class="ref-lightbox-panel" role="dialog" aria-modal="true" aria-labelledby="ref-lightbox-title">
    <div class="ref-lightbox-media">
      <div class="ref-media-frame" id="ref-lightbox-frame"></div>
      <button type="button" class="ref-lightbox-close" id="ref-lightbox-close" aria-label="<?= e($T['common']['close']) ?>">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
      </button>
      <button type="button" class="ref-lightbox-prev" id="ref-lightbox-prev" aria-label="<?= e($T['common']['previous_photo']) ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
      </button>
      <button type="button" class="ref-lightbox-next" id="ref-lightbox-next" aria-label="<?= e($T['common']['next_photo']) ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
      </button>
      <div class="ref-lightbox-count" id="ref-lightbox-count" hidden></div>
    </div>
    <div class="ref-lightbox-thumbs" id="ref-lightbox-thumbs" hidden></div>
    <div class="ref-lightbox-body">
      <div class="ref-lightbox-category" id="ref-lightbox-category"></div>
      <h2 class="ref-lightbox-title" id="ref-lightbox-title"></h2>
      <div class="ref-lightbox-location">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s7-7.58 7-12.5A7 7 0 0 0 5 9.5C5 14.42 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
        <span id="ref-lightbox-location-text"></span>
      </div>
      <p class="ref-lightbox-desc" id="ref-lightbox-desc"></p>
      <a href="<?= e($CONTACT_HREF) ?>" class="ref-lightbox-cta"><?= e($T['common']['discuss_similar_project']) ?> &rarr;</a>
    </div>
  </div>
</div>
