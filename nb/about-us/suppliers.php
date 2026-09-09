<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'suppliers';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Leverandører & partnere | EstNor';
$PAGE_DESC  = 'EstNor søker samarbeidspartnere blant byggefirmaer, utbyggere og formidlere.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Forsiden</a> / <a href="index.php">Om EstNor</a> / <span>Leverandører &amp; partnere</span></div>
      <span class="eyebrow">Pålitelige partnerskap</span>
      <h1 class="hero-title">Leverandører &amp; partnere</h1>
      <p class="lead">EstNor søker samarbeidspartnere blant byggefirmaer, utbyggere og formidlere. Ved interesse for samarbeid tar dere gjerne kontakt med oss.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <h3>Materialer</h3>
          <p>Bærekraftig anskaffet trevirke og byggematerialer, inkludert mineralullisolasjon og energieffektive PVC-vinduer.</p>
        </div>
        <div class="card">
          <h3>Logistikk</h3>
          <p>Transportpartnere som frakter ferdige elementer og moduler fra Kiili over Østersjøen og på land til byggeplassen.</p>
        </div>
        <div class="card">
          <h3>Sertifisering</h3>
          <p>ISO 9001-kvalitetsstyring og europeisk teknisk vurdering (ETA) sikrer jevn kvalitet.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Medlemskap</span>
        <h2>Bransjeforeninger</h2>
      </div>
      <ul class="check">
        <li>Estisk Trehusforening (Puitmajaliit)</li>
        <li>Kiili Næringsforening</li>
        <li>Estisk-Norsk Handelskammer</li>
      </ul>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Interessert i samarbeid?</h2>
        <p>Skriv kort om selskapet deres og interessen — vi svarer så snart som mulig.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
