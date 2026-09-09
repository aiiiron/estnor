<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'suppliers';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Leverantörer & partners | EstNor';
$PAGE_DESC  = 'EstNor söker samarbetspartners bland byggföretag, byggherrar och förmedlare.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <a href="index.php">Om EstNor</a> / <span>Leverantörer &amp; partners</span></div>
      <span class="eyebrow">Pålitliga partnerskap</span>
      <h1 class="hero-title">Leverantörer &amp; partners</h1>
      <p class="lead">EstNor söker samarbetspartners bland byggföretag, byggherrar och förmedlare. Vid intresse för samarbete är ni välkomna att kontakta oss.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <h3>Material</h3>
          <p>Hållbart producerat virke och byggmaterial, inklusive mineralullsisolering och energieffektiva PVC-fönster.</p>
        </div>
        <div class="card">
          <h3>Logistik</h3>
          <p>Transportpartners som fraktar färdiga element och moduler från Kiili över Östersjön och landvägen till byggplatsen.</p>
        </div>
        <div class="card">
          <h3>Certifiering</h3>
          <p>ISO 9001-kvalitetsledning och europeisk teknisk bedömning (ETA) säkerställer jämn kvalitet.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Medlemskap</span>
        <h2>Branschorganisationer</h2>
      </div>
      <ul class="check">
        <li>Estniska Trähusförbundet (Puitmajaliit)</li>
        <li>Kiili Företagarförening</li>
        <li>Estnisk-Norska Handelskammaren</li>
      </ul>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Intresserad av samarbete?</h2>
        <p>Skriv kort om ert företag och intresse — vi återkommer inom kort.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakta oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
