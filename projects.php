<?php
require_once __DIR__ . '/inc/site.php';
require_once __DIR__ . '/inc/i18n.php';

$LANG   = 'et';
$ASSET  = '.';
$ACTIVE = 'projects';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Projektid | EstNor';
$PAGE_DESC  = 'EstNori majaehitus- ja renoveerimisprojektid Eestis, Norras ja Rootsis.';
require __DIR__ . '/partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Avaleht</a> / <span>Projektid</span></div>
      <span class="eyebrow">Projektid</span>
      <h1 class="hero-title">Uusehitised ja renoveerimised kõrvuti</h1>
      <p class="lead">Valik EstNori valminud ja pooleliolevaid maja- ning fassaadirenoveerimise projekte Eestis, Norras ja Rootsis.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <span class="tag">Tallinn, Eesti</span>
          <h3>Loodusmaja</h3>
          <p>Üks Eesti suurimaid puithooneid — EstNor tarnis fassaadi- ja katuseelemendid koos tehases paigaldatud akendega.</p>
        </div>
        <div class="card">
          <span class="tag">Pärnu, Eesti</span>
          <h3>Stroomi Rannahoone</h3>
          <p>Rannaäärne puithoone, ehitatud EstNori element- ja fassaaditehnoloogiaga.</p>
        </div>
        <div class="card">
          <span class="tag">Oslo, Norra</span>
          <h3>Kortermaja Oslos</h3>
          <p>Mitmekorruseline kortermaja, ehitatud EstNori tehases valminud moodulitest.</p>
        </div>
        <div class="card">
          <span class="tag">Rootsi</span>
          <h3>Elementmajast pere-elamu</h3>
          <p>Suur pereelamu, ehitatud tehases toodetud välis- ja siseelementidest.</p>
        </div>
        <div class="card">
          <span class="tag">Sindi, Eesti</span>
          <h3>Kooli 5 — tehaseline renoveerimine</h3>
          <p>Üks 12 kortermajast, mille fassaad renoveeriti KredEx programmi raames EstNori elementidega.</p>
        </div>
        <div class="card">
          <span class="tag">Eesti</span>
          <h3>Suvilate arendus</h3>
          <p>Kiilis toodetud moodulsuvilate kompleks, tarnitud valmis viimistletuna Eesti rannikualale.</p>
        </div>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="serial-renovation/references.php">Vaata tehaselise renoveerimise projekte</a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Kas sul on oma projekt?</h2>
        <p>Räägi meile sellest ja soovitame sobiva EstNori ehitusviisi.</p>
      </div>
      <a class="btn btn-primary" href="contact.php">Võta ühendust</a>
    </div>
  </section>

<?php require __DIR__ . '/partials/footer.php'; ?>
