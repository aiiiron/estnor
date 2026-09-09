<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'suppliers';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Koostööpartneritele | EstNor';
$PAGE_DESC  = 'EstNor otsib koostööpartnereid ehitusettevõtete, arendajate ja vahendajate seas.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Avaleht</a> / <a href="index.php">Ettevõttest</a> / <span>Koostööpartneritele</span></div>
      <span class="eyebrow">Usaldusväärsed partnerid</span>
      <h1 class="hero-title">Koostööpartneritele</h1>
      <p class="lead">EstNor otsib koostööpartnereid ehitusettevõtete, arendajate ja vahendajate seas. Koostööhuvi korral palume võtta ühendust.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
        <div class="card">
          <h3>Materjalid</h3>
          <p>Jätkusuutlikult hangitud puit ja ehitusmaterjalid, sh soojustusvill ja energiatõhusad PVC aknad.</p>
        </div>
        <div class="card">
          <h3>Logistika</h3>
          <p>Transpordipartnerid, kes veavad valmis elemendid ja moodulid Kiilist üle Läänemere ja maismaad pidi objektile.</p>
        </div>
        <div class="card">
          <h3>Sertifitseerimine</h3>
          <p>ISO 9001 kvaliteedijuhtimine ja Euroopa tehniline hinnang (ETA) tagavad ühtlase kvaliteedi.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Liikmesused</span>
        <h2>Erialaliidud</h2>
      </div>
      <ul class="check">
        <li>Eesti Puitmajaliit</li>
        <li>Kiili Ettevõtjate Liit</li>
        <li>Eesti-Norra Kaubanduskoda</li>
      </ul>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Soovid koostööd teha?</h2>
        <p>Kirjuta meile oma ettevõttest ja huvist — vastame esimesel võimalusel.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Võta ühendust</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
