<?php
/**
 * partials/hero-photo.php — the full-bleed photo hero (same component as
 * the homepage and Serial Renovation heroes) for a section landing page:
 * Products, References, Contact, About Us. Caller sets, before requiring:
 *
 *   $heroImage   basename under assets/img/, without extension — both a
 *                .jpg and a .webp must exist (e.g. 'hero-products')
 *   $heroSize    [width, height] of the .jpg, for the <img> attributes
 *   $heroClass   optional extra class on <section> (e.g. 'hero--page')
 *
 * plus $P['hero'] with crumb / label / eyebrow / h1 / lead, and
 * $HOME_HREF. Optional: $P['hero']['parent_label'] + $heroParentHref for
 * a three-level breadcrumb.
 */
$heroClass = $heroClass ?? 'hero--page';
?>
  <section class="hero <?= e($heroClass) ?>">
    <picture class="hero-bg" aria-hidden="true">
      <source srcset="<?= e($ASSET) ?>/assets/img/<?= e($heroImage) ?>.webp" type="image/webp">
      <img src="<?= e($ASSET) ?>/assets/img/<?= e($heroImage) ?>.jpg" alt="" width="<?= (int) $heroSize[0] ?>" height="<?= (int) $heroSize[1] ?>" fetchpriority="high" decoding="async">
    </picture>
    <div class="hero-inner wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> /<?php if (!empty($P['hero']['parent_label']) && !empty($heroParentHref)): ?> <a href="<?= e($heroParentHref) ?>"><?= e($P['hero']['parent_label']) ?></a> /<?php endif; ?> <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>
