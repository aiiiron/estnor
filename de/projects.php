<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '..';
$ACTIVE = 'projects';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Projekte | EstNor';
$PAGE_DESC  = 'EstNor-Bau- und Sanierungsprojekte in Estland, Norwegen und Schweden.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Startseite</a> / <span>Projekte</span></div>
      <span class="eyebrow">Projekte</span>
      <h1 class="hero-title">Neubau und Sanierung nebeneinander</h1>
      <p class="lead">Eine Auswahl der von EstNor errichteten Häuser, Gebäude und Fassadensanierungsprojekte in Estland, Norwegen, Schweden und darüber hinaus.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <span class="tag">Tallinn, Estland</span>
          <h3>Umwelthaus Loodusmaja</h3>
          <p>Eines der größten Holzgebäude Estlands — EstNor lieferte Fassaden- und Dachelemente inklusive werkseitig eingebauter Fenster.</p>
        </div>
        <div class="card">
          <span class="tag">Pärnu, Estland</span>
          <h3>Stroomi Rannahoone</h3>
          <p>Gebäude am Strand, errichtet mit EstNor-Element- und Fassadentechnik.</p>
        </div>
        <div class="card">
          <span class="tag">Oslo, Norwegen</span>
          <h3>Mehrfamilienhaus in Oslo</h3>
          <p>Mehrgeschossiges Wohngebäude, errichtet aus werksfertigen EstNor-Modulen.</p>
        </div>
        <div class="card">
          <span class="tag">Schweden</span>
          <h3>Einfamilienhaus aus Elementen</h3>
          <p>Großes Einfamilienhaus, errichtet mit werksgefertigten Außen- und Innenelementen.</p>
        </div>
        <div class="card">
          <span class="tag">Sindi, Estland</span>
          <h3>Kooli 5 — serielle Sanierung</h3>
          <p>Eines von 12 Mehrfamilienhäusern, deren Fassade im Rahmen des KredEx-Programms mit EstNor-Elementen saniert wurde.</p>
        </div>
        <div class="card">
          <span class="tag">Estland</span>
          <h3>Ferienhaus-Siedlung</h3>
          <p>In Kiili gefertigte modulare Ferienhäuser, komplett ausgestattet an die estnische Küste geliefert.</p>
        </div>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="serial-renovation/references.php">Referenzen zur seriellen Sanierung ansehen</a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Haben Sie ein eigenes Projekt?</h2>
        <p>Erzählen Sie uns davon — wir empfehlen die passende EstNor-Bauweise.</p>
      </div>
      <a class="btn btn-primary" href="contact.php">Kontakt aufnehmen</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
