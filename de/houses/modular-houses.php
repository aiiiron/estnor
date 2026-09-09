<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '../..';
$ACTIVE = 'modular';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Modulhaus | EstNor';
$PAGE_DESC  = 'EstNor-Modulhäuser werden im Werk gefertigt, in einer witterungsunabhängigen und kontrollierten Umgebung.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startseite</a> / <a href="index.php">Häuser</a> / <span>Modulhaus</span></div>
      <span class="eyebrow">Modular</span>
      <h1 class="hero-title">Das Modulhaus im Detail</h1>
      <p class="lead">EstNor-Modulhäuser werden im Werk gefertigt, in einer witterungsunabhängigen und kontrollierten Umgebung — die Module kommen bereits ausgestattet auf der Baustelle an.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Wie ein Modul entsteht</h2>
        <p>Module bestehen aus Boden-, Wand- und Dachelementen, die im Werk zusammengebaut werden. Module sind innen und außen ausgestattet, die Dacheindeckung ist montiert.</p>
        <p>Alle Öffnungen — Fenster und Türen — sind eingebaut sowie innen und außen fertig verkleidet (Laibungen, Leisten, Wasserbleche). Im Werk werden auch alle Sonderarbeiten ausgeführt: Elektro-, Sanitär-, Lüftungs- und Heizungsinstallation. Bei Bedarf werden Sanitärtechnik und Möbel bereits in die Module eingebaut.</p>
      </div>
      <div class="card" style="padding:0; overflow:hidden;">
        <svg viewBox="0 0 400 320" preserveAspectRatio="xMidYMid slice" width="100%" height="100%">
          <rect width="400" height="320" fill="#13342a"/>
          <g fill="#e9efe7"><rect x="40" y="180" width="110" height="100"/><rect x="160" y="140" width="110" height="140"/><rect x="280" y="100" width="90" height="180"/></g>
          <g fill="#dd8a2c"><rect x="40" y="180" width="110" height="8"/><rect x="160" y="140" width="110" height="8"/><rect x="280" y="100" width="90" height="8"/></g>
        </svg>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Bereits im Werk erledigt</span>
        <h2>Was am Modul fertig ist, bevor es die Baustelle erreicht</h2>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Tragkonstruktion</h3><p>Boden-, Wand- und Dachelemente im Werk zusammengefügt.</p></div>
        <div class="card"><h3>Ausbau</h3><p>Innen und außen ausgestattet, Dacheindeckung montiert.</p></div>
        <div class="card"><h3>Fenster &amp; Türen</h3><p>Alle Öffnungen eingebaut und fertig verkleidet (Laibungen, Leisten, Bleche).</p></div>
        <div class="card"><h3>Sonderarbeiten</h3><p>Elektro-, Sanitär-, Lüftungs- und Heizungsinstallation bereits im Werk erledigt.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Haben Sie ein Modulhaus-Projekt?</h2>
        <p>Von einem einzelnen Ferienhaus bis zum Mehrfamilienhaus — sprechen wir über die Möglichkeiten.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt aufnehmen</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
