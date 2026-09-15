<?php
/**
 * pages/about-us.php — shared body template for the About Us page, in
 * every language. Content comes from load_page('about-us', $LANG); see
 * content/db/pages/about-us.json for the source.
 *
 * Caller must already have set $LANG/$ASSET/$ACTIVE, required
 * partials/head.php, and defined $P = load_page('about-us', $LANG) plus
 * $HOME_HREF (the relative link back to this language's homepage, e.g.
 * '../index.php').
 */
?>

<?php
$heroImage = 'hero-about-us';
$heroSize  = [1900, 1067];
require __DIR__ . '/../partials/hero-photo.php';
?>

  <section class="section">
    <div class="wrap">
      <div class="stat-row">
<?php foreach ($P['stats'] as $s): ?>
        <div class="stat"><b><?= e($s['value']) ?></b><span><?= e($s['label']) ?></span></div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap split">
      <div>
        <span class="eyebrow"><?= e($P['who']['eyebrow']) ?></span>
        <h2><?= e($P['who']['h2']) ?></h2>
<?php foreach ($P['who']['paragraphs'] as $para): ?>
        <p><?= e($para) ?></p>
<?php endforeach; ?>
      </div>
      <div>
        <span class="eyebrow"><?= e($P['memberships']['eyebrow']) ?></span>
        <ul class="check">
<?php foreach ($P['memberships']['items'] as $item): ?>
          <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['history']['eyebrow']) ?></span>
        <h2><?= e($P['history']['h2']) ?></h2>
      </div>
      <ol class="timeline">
<?php foreach ($P['history']['timeline'] as $entry): ?>
        <li><span class="year"><?= e($entry['year']) ?></span><?= e($entry['text']) ?></li>
<?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow"><?= e($P['certs']['eyebrow']) ?></span>
        <h2><?= e($P['certs']['h2']) ?></h2>
      </div>
      <ul class="cert-grid">
<?php foreach ($P['certs']['items'] as $item): ?>
        <li>
          <div class="cert-logos">
<?php foreach ((array) ($item['logos'] ?? []) as $logo): ?>
            <img src="<?= e($ASSET) ?>/assets/img/certificates/<?= e($logo) ?>" alt="" loading="lazy" decoding="async">
<?php endforeach; ?>
          </div>
          <p><?= e($item['text']) ?><?php if (!empty($item['pdf'])): ?> <a class="pdf-link" href="<?= e($ASSET) ?>/assets/certificates/<?= e($item['pdf']) ?>" target="_blank" rel="noopener"><?= e($P['certs']['pdf_label']) ?></a><?php endif; ?></p>
        </li>
<?php endforeach; ?>
      </ul>
      <div class="registry">
        <span class="eyebrow"><?= e($P['registry']['eyebrow']) ?></span>
        <h2><?= e($P['registry']['h2']) ?></h2>
        <dl class="contact-dl registry-dl">
<?php foreach ($P['registry']['rows'] as $row): ?>
          <div><dt><?= e($row['label']) ?></dt><dd><?= e($row['value']) ?></dd></div>
<?php endforeach; ?>
        </dl>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow"><?= e($P['explore']['eyebrow']) ?></span>
        <h2><?= e($P['explore']['h2']) ?></h2>
      </div>
      <div class="grid cols-2">
<?php foreach ($P['explore']['cards'] as $card): ?>
        <a class="card" href="<?= e($card['href']) ?>">
          <h3><?= e($card['title']) ?></h3>
          <p><?= e($card['desc']) ?></p>
        </a>
<?php endforeach; ?>
      </div>
    </div>
  </section>
