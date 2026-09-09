</main>

<footer class="site-footer">
  <div class="wrap foot-grid">
    <div class="foot-brand">
      <p class="foot-logo"><img src="<?= e($ASSET) ?>/assets/img/logo-mono-white-small.png" width="442" height="162" alt="EstNor"></p>
      <p><?= e($T['footer']['tagline']) ?></p>
    </div>
    <div>
      <h2><?= e($T['footer']['explore_heading']) ?></h2>
      <ul>
<?php foreach ($T['footer']['explore'] as $item): ?>
        <li><a href="<?= e(url($item['href'])) ?>"><?= e($item['label']) ?></a></li>
<?php endforeach; ?>
      </ul>
    </div>
    <div>
      <h2><?= e($T['footer']['renovation_heading']) ?></h2>
      <ul>
<?php foreach ($T['footer']['renovation'] as $item): ?>
        <li><a href="<?= e(url($item['href'])) ?>"><?= e($item['label']) ?></a></li>
<?php endforeach; ?>
      </ul>
    </div>
    <div>
      <h2><?= e($T['footer']['contact_heading']) ?></h2>
      <ul>
        <li><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a></li>
        <li><a href="tel:<?= e($SITE['contact']['phone_href']) ?>"><?= e($SITE['contact']['phone']) ?></a></li>
<?php foreach ($T['footer']['address_lines'] as $line): ?>
        <li><?= e($line) ?></li>
<?php endforeach; ?>
        <li><a href="<?= e($SITE['social']['linkedin']) ?>" rel="noopener">LinkedIn</a> · <a href="<?= e($SITE['social']['facebook']) ?>" rel="noopener">Facebook</a></li>
      </ul>
    </div>
  </div>
  <div class="wrap foot-bottom">
    <p>&copy; <?= date('Y') ?> <?= e($SITE['company']['legal_name']) ?>. <?= e($T['footer']['rights']) ?></p>
    <p><?= e($T['footer']['source_note']) ?></p>
  </div>
</footer>

<script src="<?= e($ASSET) ?>/assets/js/main.js"></script>
</body>
</html>
