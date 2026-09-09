<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'houses';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Hus | EstNor';
$PAGE_DESC  = 'EstNor tillverkar elementhus och modulhus vid fabriken i Kiili, Estland.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <span>Hus</span></div>
      <span class="eyebrow">Två byggmetoder, en fabriksstandard</span>
      <h1 class="hero-title">Välj hur ditt hus byggs</h1>
      <p class="lead">Varje EstNor-hus börjar i fabriken. Välj den byggmetod som passar projektets arkitektur, tidsplan och budget.</p>
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
          <span class="tag">Fabrikstillverkat</span>
          <h3>Elementhus</h3>
          <p>Väggar, tak och golv tillverkas i fabriken och monteras på plats — utan större begränsningar för storlek eller arkitektur.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="element-houses.php">Läs mer</a></div>
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
          <span class="tag">Modulärt</span>
          <h3>Modulhus</h3>
          <p>Helt färdigställda moduler — inklusive el, vatten och värme — som fogas samman på plats till ett färdigt hus.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="modular-houses.php">Läs mer</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Vilken metod passar dig?</span>
        <h2>Jämförelse av de två byggmetoderna</h2>
      </div>
      <div class="grid cols-2">
        <div class="card">
          <h3>Elementhus</h3>
          <p>Passar stora eller arkitektoniskt komplexa byggnader och flerbostadshus. Fabrikstillverkade väggar, tak och terrass monteras på plats.</p>
        </div>
        <div class="card">
          <h3>Modulhus</h3>
          <p>Passar projekt med snäv tidsplan — över 90 % av arbetet är redan gjort i fabriken innan modulen når byggplatsen.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Redan en befintlig byggnad?</span>
        <h2>EstNor renoverar också, inte bara nybygger</h2>
        <p class="lead">Samma fabriksprecision gäller för modernisering av flerbostadshus: fasadelement som höjer energieffektiviteten på bara några veckor.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="../serial-renovation/index.php">Vad är modernisering av flerbostadshus?</a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
