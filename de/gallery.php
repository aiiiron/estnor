<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '..';
$ACTIVE = 'gallery';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Galerie | EstNor';
$PAGE_DESC  = 'Bilder aus der EstNor-Produktion, von Häusern im Bau und fertiggestellten Häusern.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Startseite</a> / <span>Galerie</span></div>
      <span class="eyebrow">Vom Werk bis zur Baustelle</span>
      <h1 class="hero-title">Produktion, Häuser im Bau und fertige Häuser</h1>
      <p class="lead">Ein Einblick in die Produktion in Kiili, Häuser im Bauzustand und fertiggestellte Häuser.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="gallery-grid">
        <div class="tile tall">
          <svg viewBox="0 0 300 640" preserveAspectRatio="xMidYMid slice"><rect width="300" height="640" fill="#13342a"/><g fill="#e9efe7" opacity=".9"><rect x="40" y="60" width="220" height="18"/><rect x="40" y="100" width="220" height="18"/><rect x="40" y="140" width="220" height="18"/></g><rect x="40" y="200" width="220" height="380" fill="#1f4d3a"/></svg>
          <div class="cap">Produktion</div>
        </div>
        <div class="tile">
          <svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#1f4d3a"/><polygon points="30,220 150,110 270,220" fill="#e9efe7"/></svg>
          <div class="cap">Produktion</div>
        </div>
        <div class="tile">
          <svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#dd8a2c"/><g fill="#13342a" opacity=".85"><rect x="30" y="60" width="240" height="30"/><rect x="30" y="110" width="240" height="30"/><rect x="30" y="160" width="240" height="30"/></g></svg>
          <div class="cap">Im Bau</div>
        </div>
        <div class="tile">
          <svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#13342a"/><rect x="60" y="60" width="180" height="180" fill="#f6f4ee"/></svg>
          <div class="cap">Im Bau</div>
        </div>
        <div class="tile">
          <svg viewBox="0 0 300 300" preserveAspectRatio="xMidYMid slice"><rect width="300" height="300" fill="#e9efe7"/><circle cx="150" cy="150" r="90" fill="#1f4d3a"/></svg>
          <div class="cap">Fertige Häuser</div>
        </div>
        <div class="tile tall">
          <svg viewBox="0 0 300 640" preserveAspectRatio="xMidYMid slice"><rect width="300" height="640" fill="#1f4d3a"/><rect x="40" y="300" width="220" height="300" fill="#e9efe7"/><polygon points="20,300 150,180 280,300" fill="#f6f4ee"/></svg>
          <div class="cap">Fertige Häuser</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Möchten Sie mehr sehen?</h2>
        <p>Sehen Sie sich unsere Projekte an oder vereinbaren Sie einen Werksbesuch.</p>
      </div>
      <a class="btn btn-primary" href="projects.php">Projekte ansehen</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
