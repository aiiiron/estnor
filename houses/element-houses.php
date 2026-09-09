<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'element';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Elementmaja | EstNor';
$PAGE_DESC  = 'EstNor OÜ toodab puitkarkass elementmaju Kiilis asuvas elementmajatehases — välis-, sise-, vahelae-, katuse- ja terrassielemendid.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Avaleht</a> / <a href="index.php">Majad</a> / <span>Elementmaja</span></div>
      <span class="eyebrow">Tehases toodetud</span>
      <h1 class="hero-title">Elementmajast lähemalt</h1>
      <p class="lead">EstNor OÜ toodab puitkarkass elementmaju Kiilis asuvas elementmajatehases. Tehases toodetakse välis-, sise-, vahelae-, katuse- ja terrassielemendid.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Elementmaja eelised</h2>
        <ul class="check">
          <li>Tehases toodetud maja on kvaliteetne — ehitus toimub kontrollitud siseruumides, ilma ilmastikukahjustusteta (vihm, lumi, tuul, temperatuur)</li>
          <li>Ehitus on kiire — elementide monteerimine toimub spetsiaalsetel töölaudadel, mis on varustatud vajalike tööriistadega</li>
          <li>Täpsed tööjoonised teevad tootmise kiireks ja efektiivseks — elemendid valmivad millimeetritäpsusega</li>
          <li>Insenerid teostavad tugevusarvutused kohalike normide järgi, mis välistab alamõõtmestamise</li>
          <li>Tehases ehitatakse valmis nii palju kui võimalik: soojustus, auru- ja tuuletõkkematerjalid, värvitud välisvoodrilaud, aknad, uksed</li>
          <li>Objektil paigaldatakse elemendid kraanaga 1–5 päevaga, olenevalt maja suurusest</li>
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
        <span class="eyebrow">Ilma suuremate piiranguteta</span>
        <h2>Sobib ka keerukale arhitektuurile</h2>
        <p class="lead">Erinevalt moodulmajadest saab elementmajana ehitada keerulise arhitektuuri ja suuremõõtmeliste ruumidega hooneid — sealhulgas kortermaju.</p>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Kraanapaigaldus</h3><p>Elementide püstitus ja katuse ehitustööd.</p></div>
        <div class="card"><h3>Avatäited</h3><p>Akende, terrassi-, välis- ja siseuste paigaldus.</p></div>
        <div class="card"><h3>Viimistlus</h3><p>Põrandad, vahe- ja katuslaed, piirdeliistud, plaatimis- ja maalritööd.</p></div>
        <div class="card"><h3>Terrass ja korsten</h3><p>Terrassi paigaldustööd ning Schiedeli metall- ja moodulkorstnad.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Materjalivalik</span>
        <h2>Valikuvõimalused (standardlahendused rasvases kirjas mujal kataloogis)</h2>
      </div>
      <div class="grid cols-3">
        <div class="card card--tint"><h3>Välisviimistlus</h3><p>Voodrilaud 21×145 mm või 21×190 mm, poola laudis, servamata laud, fassaadiplaat.</p></div>
        <div class="card card--tint"><h3>Aknad ja uksed</h3><p>Kolmekordse klaasiga aknad (erineva avanemisega), energiasäästlik välisuks, MDF-siseuksed.</p></div>
        <div class="card card--tint"><h3>Katusekate</h3><p>Kivi-, plekk-, SBS- ja bituumenkatus, samuti laudis- ja mätaskatus.</p></div>
        <div class="card card--tint"><h3>Põrandakate</h3><p>Tammeparkett (1- või 3-lipiline), tammelaud või männist põrandalaud.</p></div>
        <div class="card card--tint"><h3>Trepid</h3><p>Männi- või tammeastmed, viimistletud või viimistlemata, puit- või klaaspiirded.</p></div>
        <div class="card card--tint"><h3>Terrass</h3><p>28×120 mm või 28×145 mm rihveldatud terrassilaud, pruun või roheline immutus.</p></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="callout"><b>Õhu- ja tuulepidavus:</b> EstNor kasutab valdkonna juhtiva ettevõtte SIGA tooteid — auru- ja tuuletõkkekangaid, teipe ja tihendusaineid. Majad toodetakse SINTEF ehitusnormide järgi; Norra turul järgitakse TEK 10, passiivmajadel TEK 15 nõudeid.</div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Planeerid suurt või keerukat ehitist?</h2>
        <p>Elementmaja võib olla õige valik — räägi meiega oma projektist.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Võta ühendust</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
