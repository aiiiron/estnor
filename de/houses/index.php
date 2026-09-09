<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '../..';
$ACTIVE = 'houses';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Häuser | EstNor';
$PAGE_DESC  = 'EstNor fertigt Elementhäuser und Modulhäuser im Werk in Kiili, Estland.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startseite</a> / <span>Häuser</span></div>
      <span class="eyebrow">Zwei Bauweisen, ein Werksstandard</span>
      <h1 class="hero-title">Wählen Sie, wie Ihr Haus gebaut wird</h1>
      <p class="lead">Jedes EstNor-Haus beginnt im Werk. Wählen Sie die Bauweise, die zu Architektur, Zeitplan und Budget Ihres Projekts passt.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap grid cols-2">
      <div class="house-card" style="min-height:400px;">
        <div class="art">
          <svg viewBox="0 0 400 360" width="100%" height="100%" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="360" fill="#1f4d3a"/>
            <g fill="#e9efe7" opacity=".9"><rect x="60" y="150" width="280" height="130"/><polygon points="40,150 200,70 360,150"/></g>
            <g fill="#13342a"><rect x="180" y="200" width="40" height="80"/></g>
          </svg>
        </div>
        <div class="content">
          <span class="tag">Werksgefertigt</span>
          <h3>Elementhäuser</h3>
          <p>Wände, Dach und Boden werden im Werk gefertigt und vor Ort montiert — ohne wesentliche Einschränkung bei Größe oder Architektur.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="element-houses.php">Mehr erfahren</a></div>
        </div>
      </div>
      <div class="house-card" style="min-height:400px;">
        <div class="art">
          <svg viewBox="0 0 400 360" width="100%" height="100%" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="360" fill="#13342a"/>
            <g fill="#e9efe7" opacity=".92"><rect x="55" y="140" width="130" height="140"/><rect x="215" y="100" width="130" height="180"/></g>
            <g fill="#dd8a2c"><rect x="55" y="140" width="130" height="8"/><rect x="215" y="100" width="130" height="8"/></g>
          </svg>
        </div>
        <div class="content">
          <span class="tag">Modular</span>
          <h3>Modulhäuser</h3>
          <p>Vollständig ausgestattete Module — inklusive Elektrik, Sanitär und Heizung — die vor Ort zum fertigen Haus zusammengefügt werden.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="modular-houses.php">Mehr erfahren</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Welche Bauweise passt zu Ihnen?</span>
        <h2>Die beiden Bauweisen im Vergleich</h2>
      </div>
      <div class="grid cols-2">
        <div class="card">
          <h3>Elementhäuser</h3>
          <p>Geeignet für große oder architektonisch anspruchsvolle Gebäude und Mehrfamilienhäuser. Im Werk gefertigte Wände, Dach und Terrasse werden vor Ort montiert.</p>
        </div>
        <div class="card">
          <h3>Modulhäuser</h3>
          <p>Geeignet für Projekte mit engem Zeitplan — über 90 % der Arbeit ist bereits im Werk erledigt, bevor das Modul die Baustelle erreicht.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Bereits ein Gebäude vorhanden?</span>
        <h2>EstNor saniert auch, nicht nur Neubau</h2>
        <p class="lead">Dieselbe Werkspräzision gilt für die serielle Sanierung: Fassadenelemente, die ein Mehrfamilienhaus in wenigen Wochen energieeffizient machen.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="../serial-renovation/index.php">Was ist serielle Sanierung?</a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
