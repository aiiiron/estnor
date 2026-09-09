<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'modular';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Modulhus | EstNor';
$PAGE_DESC  = 'EstNors modulhus produseres i fabrikken, i et værbestandig og kontrollert miljø.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Forsiden</a> / <a href="index.php">Hus</a> / <span>Modulhus</span></div>
      <span class="eyebrow">Modulært</span>
      <h1 class="hero-title">Nærmere om modulhus</h1>
      <p class="lead">EstNors modulhus produseres i fabrikken, i et værbestandig og kontrollert miljø — modulene ankommer byggeplassen allerede ferdigstilt.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Slik lages en modul</h2>
        <p>Modulene består av gulv-, vegg- og takelementer som settes sammen i fabrikken. Modulene er ferdigstilt innvendig og utvendig, og taktekkingen er montert.</p>
        <p>Alle åpninger — vinduer og dører — er montert og ferdigstilt innvendig og utvendig (lister, beslag). I fabrikken utføres også alt spesialarbeid: elektrisk, rør, ventilasjon og oppvarming. Ved behov installeres sanitærutstyr og møbler direkte i modulene.</p>
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
        <span class="eyebrow">Allerede klart i fabrikken</span>
        <h2>Hva som er ferdig før modulen når byggeplassen</h2>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Bærende konstruksjon</h3><p>Gulv-, vegg- og takelementer satt sammen i fabrikken.</p></div>
        <div class="card"><h3>Ferdigstillelse</h3><p>Innvendig og utvendig ferdigstilt, taktekking montert.</p></div>
        <div class="card"><h3>Vinduer &amp; dører</h3><p>Alle åpninger montert og ferdigstilt (lister, beslag).</p></div>
        <div class="card"><h3>Spesialarbeid</h3><p>Elektrisk, rør, ventilasjon og oppvarming ferdig i fabrikken.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Har du et modulhusprosjekt?</h2>
        <p>Fra én enkelt hytte til et leilighetsbygg — la oss diskutere mulighetene.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
