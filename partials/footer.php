</main>

<footer class="site-footer">
  <div class="wrap foot-grid">
    <div class="foot-brand">
      <p class="foot-logo"><img src="<?= e($ASSET) ?>/assets/img/logo-mono-white-small.png" width="442" height="162" alt="EstNor"></p>
      <ul class="foot-contact">
        <li><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a></li>
        <li><a href="tel:<?= e($SITE['contact']['phone_href']) ?>"><?= e($SITE['contact']['phone']) ?></a></li>
<?php foreach ($T['footer']['address_lines'] as $line): ?>
        <li><?= e($line) ?></li>
<?php endforeach; ?>
      </ul>
    </div>
<?php /* One column per top-level menu item that has a submenu, children
         beneath — the footer mirrors the header nav ($T['nav']), so the two
         can't drift. A childless item (References) would be a heading with
         nothing under it, so it's skipped. */ ?>
<?php foreach ($T['nav'] as $item): if (empty($item['children'])) continue; ?>
    <div>
      <h2><a href="<?= e(url($item['href'])) ?>"><?= e($item['label']) ?></a></h2>
      <ul>
<?php foreach ($item['children'] as $child): ?>
        <li><a href="<?= e(url($child['href'])) ?>"><?= e($child['label']) ?></a></li>
<?php endforeach; ?>
      </ul>
    </div>
<?php endforeach; ?>
  </div>
  <div class="wrap foot-bottom">
    <p>&copy; <?= date('Y') ?> <?= e($SITE['company']['legal_name']) ?>. <?= e($T['footer']['rights']) ?></p>
    <p class="foot-social">
      <a href="<?= e($SITE['social']['linkedin']) ?>" rel="noopener" aria-label="LinkedIn" title="LinkedIn"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg></a>
      <a href="<?= e($SITE['social']['facebook']) ?>" rel="noopener" aria-label="Facebook" title="Facebook"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07c0 6.02 4.39 11.02 10.13 11.93v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.95.93-1.95 1.88v2.26h3.32l-.53 3.49h-2.79V24C19.61 23.09 24 18.09 24 12.07z"/></svg></a>
    </p>
  </div>
</footer>

<script src="<?= e($ASSET) ?>/assets/js/main.js"></script>
<?php if (!empty($NEEDS_REFERENCES_JS)): ?>
<script src="<?= e($ASSET) ?>/assets/js/references.js"></script>
<?php endif; ?>
</body>
</html>
