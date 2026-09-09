<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'renovation';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Tehaseline renoveerimine | EstNor';
$PAGE_DESC  = 'EstNor toodab soojustatud fassaadielemente kortermajade tehaseliseks renoveerimiseks — esimene ja suurim tootja KredEx pilootprogrammis.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="hero">
    <picture class="hero-bg" aria-hidden="true">
      <source srcset="../assets/img/hero.webp" type="image/webp">
      <img src="../assets/img/hero.jpg" alt="" width="1844" height="1230" fetchpriority="high" decoding="async">
    </picture>
    <div class="hero-inner wrap">
      <div class="breadcrumb"><a href="../index.php">Avaleht</a> / <span>Tehaseline renoveerimine</span></div>
      <span class="eyebrow">Tehaseline rekonstrueerimine</span>
      <h1 class="hero-title">
        <span>Uue ajastu rekonstrueerimine</span>
        <span class="hero-accent">tehases toodetud soojustatud elementidega.</span>
      </h1>
      <p class="lead">Fassaadielementide tootmisel tugineb EstNor ulatuslikule teadmistepagasile ja aastakümnete pikkusele kogemusele, pakkudes parimat kompetentsi hoonete energiatõhususe tõstmisel.</p>
      <div class="btn-row">
        <a class="btn btn-primary" href="../contact.php">Võta ühendust</a>
        <a class="btn btn-ghost" href="facade-elements.php">Fassaadielemendist lähemalt</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Miks tehases toodetud elemendid</h2>
        <ul class="check">
          <li>90% fassaaditöödest teostatakse tehases, kontrollitud keskkonnas</li>
          <li>Eeltoodetud elemendid tõstavad objektitöö efektiivsust</li>
          <li>Objektitöö on tellingutevaba</li>
          <li>Elanikele ohutu ja mugav renoveerimisviis</li>
          <li>Lahendus vastab tuleohutusnõuetele</li>
        </ul>
      </div>
      <div>
        <h2>EstNor pakub</h2>
        <ul class="check">
          <li>Maja mõõdistamine ja kinnituste tõmbetugevuse katsetused</li>
          <li>Konstruktiivne projekteerimine (BIM-mudel)</li>
          <li>Elementide tehaseline tootmine</li>
          <li>Ventilatsioonikanalite paigaldus elementidesse tehases</li>
          <li>Transport tehasest ehitusobjektile</li>
          <li>Elementide montaaž ning montaaži eel- ja järeltööd objektil</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Nii see käib</span>
        <h2>Hoone skaneerimisest paigaldatud fassaadini</h2>
      </div>
      <ol class="steps">
        <li><h3>Skaneerimine</h3><p>Vana maja 3D-skaneeritakse maapinnalt ja drooniga — tulemuseks detailne punktipilv.</p></li>
        <li><h3>Modelleerimine</h3><p>Punktipilvest valmib BIM-mudel, mille põhjal projekteeritakse uued fassaadielemendid.</p></li>
        <li><h3>Ettevalmistus ja nurgaelemendid</h3><p>Paigaldatakse kronsteinid ja alusvöö, seejärel esimesed elemendid maja nurkadesse.</p></li>
        <li><h3>Paigaldus ja viimistlus</h3><p>Elemendid paigaldatakse rida-realt, seejärel ventilatsioon, trepikoda, vihmaveesüsteem ja katuseühendus.</p></li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <span class="eyebrow">KredEx rekonstrueerimistoetus 2022–2027</span>
        <h2>Riiklik toetusmeede</h2>
        <p>KredEx toetusmeetme eesmärk on rahastada korterelamute terviklikku rekonstrueerimist või küttesüsteemi asendamist taastuvenergial põhineva lahendusega. Rohkem infot: <a href="https://kredex.ee" rel="noopener">KredEx.ee</a>.</p>
        <p>Esimeses KredEx pilootprojektis (2022) osales EstNor väga edukalt, kindlustades 12 kortermaja fassaadielementide tootmise — kõik toodetud puitkonstruktsioonile, soojustusvillaga, uute PVC akendega ja tehases juba paigaldatud fassaadiviimistlusega. EstNor on selles programmis esimene ja mahult suurim tootja.</p>
      </div>
      <div>
        <span class="eyebrow">Kiirus, mis loeb</span>
        <h2>3–4 nädalat, mitte peaaegu aasta</h2>
        <p>Kui 5-korruselise ja 5 trepikojaga maja soojustamine objektil vahtpolüstürooliga võib kesta peaaegu aasta, katab meie tehases toodetud fassaadielementidega maja fassaadi vaid <b>3–4 nädalaga</b>. Tellinguid ei ole vaja — need piiraksid elanike väljavaadet aknast ja kujutaksid endast turvariski kogu renoveerimise vältel.</p>
        <div class="callout"><b>Tulemus:</b> vanade kortermajade energiatõhusus paraneb kiiresti, ehitusaeg lüheneb ja hoone kasutusiga pikeneb.</div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Rohkem infot</span>
        <h2>Uuri lähemalt</h2>
      </div>
      <div class="grid cols-2">
        <a class="card" href="facade-elements.php">
          <h3>Fassaadielement</h3>
          <p>Kuidas fassaadielement üles ehitatud on — mõõdistamisest kuni valmis viimistluseni.</p>
        </a>
        <a class="card" href="references.php">
          <h3>Tehtud projektid</h3>
          <p>KredEx programmi raames renoveeritud 12 kortermaja üle Eesti.</p>
        </a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Plaanid kortermaja renoveerimist?</h2>
        <p>Saada meile maja põhiandmed — ehitusaasta, korterite arv, fassaadipind — ja saad esmase hinnangu elementide tootmise kohta.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Võta ühendust</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
