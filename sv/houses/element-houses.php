<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'element';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Elementhus | EstNor';
$PAGE_DESC  = 'EstNor OÜ tillverkar trästomme-elementhus vid elementhusfabriken i Kiili — ytter-, inner-, bjälklags-, tak- och terrasselement.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <a href="index.php">Hus</a> / <span>Elementhus</span></div>
      <span class="eyebrow">Fabrikstillverkat</span>
      <h1 class="hero-title">Mer om elementhus</h1>
      <p class="lead">EstNor OÜ tillverkar trästomme-elementhus vid elementhusfabriken i Kiili. Där tillverkas ytter-, inner-, bjälklags-, tak- och terrasselement.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Fördelar med elementhus</h2>
        <ul class="check">
          <li>Fabrikstillverkade hus håller hög kvalitet — bygget sker inomhus, i en kontrollerad miljö, utan väderskador (regn, snö, vind, temperatur)</li>
          <li>Snabbt byggande — elementmontering sker vid specialbord utrustade med nödvändiga verktyg</li>
          <li>Exakta ritningar gör tillverkningen snabb och effektiv — elementen tillverkas med millimeterprecision</li>
          <li>Ingenjörer utför hållfasthetsberäkningar enligt lokala normer</li>
          <li>Så mycket som möjligt färdigställs i fabriken: isolering, ång- och vindspärr, målad ytterpanel, fönster, dörrar</li>
          <li>På plats monteras elementen med kran på 1–5 dagar beroende på husets storlek</li>
        </ul>
      </div>
      <div class="panel-stack" aria-hidden="true">
        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Utan större begränsningar</span>
        <h2>Passar även komplex arkitektur</h2>
        <p class="lead">Till skillnad från modulhus kan elementhus byggas med komplex arkitektur och stora rumshöjder — även flerbostadshus.</p>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Kranmontage</h3><p>Resning av element och takarbeten.</p></div>
        <div class="card"><h3>Öppningar</h3><p>Montering av fönster, terrass-, ytter- och innerdörrar.</p></div>
        <div class="card"><h3>Invändig färdigställning</h3><p>Golv, bjälklag och tak, lister, kakel- och målningsarbeten.</p></div>
        <div class="card"><h3>Terrass &amp; skorsten</h3><p>Terrassmontage samt Schiedel metall- och modulskorstenar.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Materialval</span>
        <h2>Valmöjligheter</h2>
      </div>
      <div class="grid cols-3">
        <div class="card card--tint"><h3>Ytterpanel</h3><p>Locklistpanel 21×145 mm eller 21×190 mm, polsk panel, okantad bräda, fasadskiva.</p></div>
        <div class="card card--tint"><h3>Fönster &amp; dörrar</h3><p>Treglasfönster (olika öppningstyper), energieffektiv ytterdörr, MDF-innerdörrar.</p></div>
        <div class="card card--tint"><h3>Yttertak</h3><p>Tegel-, plåt-, SBS- och bitumentak samt panel- och grästak.</p></div>
        <div class="card card--tint"><h3>Golv</h3><p>Ekparkett (1- eller 3-stav), ekplank eller furugolv.</p></div>
        <div class="card card--tint"><h3>Trappor</h3><p>Furu- eller eksteg, lackerade eller obehandlade, med trä- eller glasräcke.</p></div>
        <div class="card card--tint"><h3>Terrass</h3><p>Räfflad terrassbräda 28×120 mm eller 28×145 mm, brun eller grön impregnering.</p></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="callout"><b>Luft- och vindtäthet:</b> EstNor använder produkter från branschledande SIGA — ång- och vindspärrsdukar, tejper och tätningsmedel. Husen tillverkas enligt SINTEF-byggnormer; på den norska marknaden enligt TEK 10, för passivhus TEK 15.</div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Planerar du ett stort eller komplext byggprojekt?</h2>
        <p>Elementhus kan vara rätt val — berätta om ditt projekt för oss.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakta oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
