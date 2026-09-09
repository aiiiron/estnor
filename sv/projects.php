<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '..';
$ACTIVE = 'projects';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Projekt | EstNor';
$PAGE_DESC  = 'EstNors byggnads- och renoveringsprojekt i Estland, Norge, Sverige och Island.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Startsida</a> / <span>Projekt</span></div>
      <span class="eyebrow">Projekt</span>
      <h1 class="hero-title">Nybyggnation och renovering sida vid sida</h1>
      <p class="lead">Ett urval av EstNors husbyggen och fasadrenoveringsprojekt i Estland, Norge, Sverige och Island.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <span class="tag">Tallinn, Estland</span>
          <h3>Nature Hub</h3>
          <p>En av Estlands största trähusbyggnader — EstNor levererade fasad- och takelement inklusive fabriksmonterade fönster.</p>
        </div>
        <div class="card">
          <span class="tag">Norge</span>
          <h3>Hyreshus i Norge</h3>
          <p>Ett flerbostadshus byggt med EstNors element- eller modulteknik i Norge, EstNors viktigaste exportmarknad.</p>
        </div>
        <div class="card">
          <span class="tag">Island</span>
          <h3>Byggnadskomplex på Island</h3>
          <p>Ett byggnadskomplex uppfört med prefabricerade EstNor-element.</p>
        </div>
        <div class="card">
          <span class="tag">Sverige</span>
          <h3>Villa i elementbyggnad</h3>
          <p>En större villa byggd med fabrikstillverkade ytter- och innerelement.</p>
        </div>
        <div class="card">
          <span class="tag">Sindi, Estland</span>
          <h3>Kooli 5 — seriell renovering</h3>
          <p>Ett av 12 flerbostadshus vars fasad renoverades inom KredEx-programmet med EstNor-element.</p>
        </div>
        <div class="card">
          <span class="tag">Estland</span>
          <h3>Fritidshusområde</h3>
          <p>Ett kluster av modulära fritidshus tillverkade i Kiili, levererade färdigställda till estniska kusten.</p>
        </div>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="serial-renovation/references.php">Se referenser för modernisering</a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Har ni ett eget projekt?</h2>
        <p>Berätta om det så föreslår vi rätt EstNor-byggmetod.</p>
      </div>
      <a class="btn btn-primary" href="contact.php">Kontakta oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
