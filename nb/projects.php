<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '..';
$ACTIVE = 'projects';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Prosjekter | EstNor';
$PAGE_DESC  = 'EstNors bygge- og rehabiliteringsprosjekter i Estland, Norge, Sverige og Island.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Forsiden</a> / <span>Prosjekter</span></div>
      <span class="eyebrow">Prosjekter</span>
      <h1 class="hero-title">Nybygg og rehabilitering side om side</h1>
      <p class="lead">Et utvalg av EstNors husbygg og fasaderehabiliteringsprosjekter i Estland, Norge, Sverige og Island.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <span class="tag">Tallinn, Estland</span>
          <h3>Nature Hub</h3>
          <p>Et av Estlands største trebygg — EstNor leverte fasade- og takelementer inkludert fabrikkmonterte vinduer.</p>
        </div>
        <div class="card">
          <span class="tag">Norge</span>
          <h3>Leilighetsbygg i Norge</h3>
          <p>Et leilighetsbygg oppført med EstNors element- eller modulteknikk i Norge, EstNors viktigste eksportmarked.</p>
        </div>
        <div class="card">
          <span class="tag">Island</span>
          <h3>Bygningskompleks på Island</h3>
          <p>Et bygningskompleks oppført med prefabrikkerte EstNor-elementer.</p>
        </div>
        <div class="card">
          <span class="tag">Sverige</span>
          <h3>Enebolig i elementbygg</h3>
          <p>En stor enebolig bygget med fabrikkproduserte ytter- og innerelementer.</p>
        </div>
        <div class="card">
          <span class="tag">Sindi, Estland</span>
          <h3>Kooli 5 — seriell rehabilitering</h3>
          <p>Ett av 12 leilighetsbygg der fasaden ble rehabilitert med EstNor-elementer gjennom KredEx-programmet.</p>
        </div>
        <div class="card">
          <span class="tag">Estland</span>
          <h3>Hytteutbygging</h3>
          <p>En klynge modulære hytter produsert i Kiili, levert ferdigstilt til den estiske kysten.</p>
        </div>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="serial-renovation/references.php">Se referanser for modernisering</a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Har dere et eget prosjekt?</h2>
        <p>Fortell oss om det, så foreslår vi riktig EstNor-byggemetode.</p>
      </div>
      <a class="btn btn-primary" href="contact.php">Kontakt oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
