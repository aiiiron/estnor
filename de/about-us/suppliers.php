<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '../..';
$ACTIVE = 'suppliers';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Lieferanten & Partner | EstNor';
$PAGE_DESC  = 'EstNor sucht Kooperationspartner unter Bauunternehmen, Bauträgern und Vermittlern.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startseite</a> / <a href="index.php">Über EstNor</a> / <span>Lieferanten &amp; Partner</span></div>
      <span class="eyebrow">Verlässliche Partnerschaften</span>
      <h1 class="hero-title">Lieferanten &amp; Partner</h1>
      <p class="lead">EstNor sucht Kooperationspartner unter Bauunternehmen, Bauträgern und Vermittlern. Bei Interesse an einer Zusammenarbeit freuen wir uns über Ihre Kontaktaufnahme.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <h3>Materialien</h3>
          <p>Nachhaltig bezogenes Holz und Baumaterialien, einschließlich Mineralwolldämmung und energieeffizienter PVC-Fenster.</p>
        </div>
        <div class="card">
          <h3>Logistik</h3>
          <p>Transportpartner, die fertige Elemente und Module von Kiili über die Ostsee und auf dem Landweg zur Baustelle bringen.</p>
        </div>
        <div class="card">
          <h3>Zertifizierung</h3>
          <p>ISO-9001-Qualitätsmanagement und Europäische Technische Bewertung (ETA) sichern gleichbleibende Qualität.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Mitgliedschaften</span>
        <h2>Verbände</h2>
      </div>
      <ul class="check">
        <li>Estnischer Holzhausverband (Puitmajaliit)</li>
        <li>Unternehmerverband Kiili</li>
        <li>Estnisch-Norwegische Handelskammer</li>
      </ul>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Interesse an einer Zusammenarbeit?</h2>
        <p>Schreiben Sie uns kurz zu Ihrem Unternehmen und Ihrem Anliegen — wir melden uns zeitnah.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt aufnehmen</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
