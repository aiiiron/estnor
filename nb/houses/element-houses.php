<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'element';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Elementhus | EstNor';
$PAGE_DESC  = 'EstNor OÜ produserer trerammede elementhus ved elementhusfabrikken i Kiili — yttervegg-, innervegg-, dekke-, tak- og terrasseelementer.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Forsiden</a> / <a href="index.php">Hus</a> / <span>Elementhus</span></div>
      <span class="eyebrow">Fabrikkbygget</span>
      <h1 class="hero-title">Nærmere om elementhus</h1>
      <p class="lead">EstNor OÜ produserer trerammede elementhus ved elementhusfabrikken i Kiili. Der lages yttervegg-, innervegg-, dekke-, tak- og terrasseelementer.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Fordeler med elementhus</h2>
        <ul class="check">
          <li>Fabrikkbygde hus holder høy kvalitet — bygging skjer innendørs, i et kontrollert miljø, uten værskader (regn, snø, vind, temperatur)</li>
          <li>Rask bygging — elementmontering skjer på spesialbenker utstyrt med nødvendig verktøy</li>
          <li>Presise arbeidstegninger gjør produksjonen rask og effektiv — elementene lages millimeternøyaktig</li>
          <li>Ingeniører utfører styrkeberegninger etter lokale normer</li>
          <li>Så mye som mulig ferdigstilles i fabrikken: isolasjon, damp- og vindsperre, malt kledning, vinduer, dører</li>
          <li>På byggeplassen monteres elementene med kran på 1–5 dager avhengig av husets størrelse</li>
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
        <span class="eyebrow">Uten vesentlige begrensninger</span>
        <h2>Passer også for krevende arkitektur</h2>
        <p class="lead">I motsetning til modulhus kan elementhus bygges med krevende arkitektur og store romhøyder — også leilighetsbygg.</p>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Kranmontasje</h3><p>Oppføring av elementer og takarbeid.</p></div>
        <div class="card"><h3>Åpninger</h3><p>Montering av vinduer, terrasse-, ytter- og innerdører.</p></div>
        <div class="card"><h3>Innvendig ferdigstillelse</h3><p>Gulv, mellom- og takdekker, lister, flis- og malerarbeid.</p></div>
        <div class="card"><h3>Terrasse &amp; pipe</h3><p>Terrassemontasje samt Schiedel metall- og modulpiper.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Materialvalg</span>
        <h2>Valgmuligheter</h2>
      </div>
      <div class="grid cols-3">
        <div class="card card--tint"><h3>Yttervegg</h3><p>Kledning 21×145 mm eller 21×190 mm, polsk kledning, ukantet bord, fasadeplate.</p></div>
        <div class="card card--tint"><h3>Vinduer &amp; dører</h3><p>Trelagsvinduer (ulike åpningstyper), energieffektiv ytterdør, MDF-innerdører.</p></div>
        <div class="card card--tint"><h3>Taktekking</h3><p>Stein-, plate-, SBS- og bitumentak samt bord- og grastak.</p></div>
        <div class="card card--tint"><h3>Gulv</h3><p>Eikeparkett (1- eller 3-stav), eikeplank eller furugulv.</p></div>
        <div class="card card--tint"><h3>Trapper</h3><p>Furu- eller eiketrinn, lakkert eller ubehandlet, med tre- eller glassrekkverk.</p></div>
        <div class="card card--tint"><h3>Terrasse</h3><p>Rillet terrassebord 28×120 mm eller 28×145 mm, brun eller grønn impregnering.</p></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="callout"><b>Luft- og vindtetthet:</b> EstNor bruker produkter fra bransjeledende SIGA — damp- og vindsperreduker, tape og tetningsmidler. Husene produseres etter SINTEF-byggenormer; på det norske markedet gjelder TEK 10, for passivhus TEK 15.</div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Planlegger du et stort eller krevende byggeprosjekt?</h2>
        <p>Elementhus kan være riktig valg — fortell oss om prosjektet ditt.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
