<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'houses';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Hus | EstNor';
$PAGE_DESC  = 'EstNor produserer elementhus og modulhus ved fabrikken i Kiili, Estland.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Forsiden</a> / <span>Hus</span></div>
      <span class="eyebrow">To byggemetoder, én fabrikkstandard</span>
      <h1 class="hero-title">Velg hvordan huset ditt bygges</h1>
      <p class="lead">Hvert EstNor-hus starter i fabrikken. Velg byggemetoden som passer prosjektets arkitektur, tidsplan og budsjett.</p>
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
          <span class="tag">Fabrikkbygget</span>
          <h3>Elementhus</h3>
          <p>Vegger, tak og gulv produseres i fabrikken og monteres på stedet — uten vesentlige begrensninger på størrelse eller arkitektur.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="element-houses.php">Les mer</a></div>
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
          <span class="tag">Modulært</span>
          <h3>Modulhus</h3>
          <p>Fullstendig ferdigstilte moduler — inkludert elektrisk, rør og oppvarming — som settes sammen til et ferdig hus på stedet.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="modular-houses.php">Les mer</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Hvilken metode passer deg?</span>
        <h2>Sammenligning av de to byggemetodene</h2>
      </div>
      <div class="grid cols-2">
        <div class="card">
          <h3>Elementhus</h3>
          <p>Passer store eller arkitektonisk krevende bygg og leilighetsbygg. Fabrikkbygde vegger, tak og terrasse monteres på stedet.</p>
        </div>
        <div class="card">
          <h3>Modulhus</h3>
          <p>Passer prosjekter med stram tidsplan — over 90 % av arbeidet er allerede gjort i fabrikken før modulen når byggeplassen.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Har du allerede en bygning?</span>
        <h2>EstNor rehabiliterer også, ikke bare nybygg</h2>
        <p class="lead">Den samme fabrikkpresisjonen gjelder for modernisering av leilighetsbygg: fasadeelementer som gjør et leilighetsbygg energieffektivt på bare noen uker.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="../serial-renovation/index.php">Hva er modernisering av leilighetsbygg?</a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
