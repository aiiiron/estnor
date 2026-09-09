<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'renovation';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Modernisering av leilighetsbygg | EstNor';
$PAGE_DESC  = 'Modernisering av leilighetsbygg forklart: energieffektiv rehabilitering med prefabrikkerte fasade- og takelementer, etter Energiesprong-prinsippet.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="hero">
    <picture class="hero-bg" aria-hidden="true">
      <source srcset="../../assets/img/hero.webp" type="image/webp">
      <img src="../../assets/img/hero.jpg" alt="" width="1844" height="1230" fetchpriority="high" decoding="async">
    </picture>
    <div class="hero-inner wrap">
      <div class="breadcrumb"><a href="../index.php">Forsiden</a> / <span>Modernisering av leilighetsbygg</span></div>
      <span class="eyebrow">Grunnprinsipper</span>
      <h1 class="hero-title">
        <span>Klimaskallet kommer</span>
        <span class="hero-accent">fra fabrikken.</span>
      </h1>
      <p class="lead">Modernisering av leilighetsbygg med prefabrikkerte elementer overfører prinsippet om industriell forhåndsproduksjon til energieffektiv rehabilitering av eksisterende bygg. I stedet for stillas, enkeltfag og vær på byggeplassen planlegges fasade- og takelementer digitalt, produseres i fabrikken og monteres på stedet på kort tid.</p>
      <div class="btn-row">
        <a class="btn btn-primary" href="../contact.php">Kontakt oss</a>
        <a class="btn btn-ghost" href="facade-elements.php">Se fasadeelementet</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Hvor konseptet kommer fra</h2>
        <p>Ideen går tilbake til det nederlandske <b>Energiesprong</b>-prinsippet (siden 2013). Målet er rask, standardisert og rimelig rehabilitering av eksisterende bygningsmasse i stor skala — opp til netto-null-standard i drift.</p>
        <p>Den avgjørende hendelsen er en <b>høyest mulig grad av forhåndsproduksjon</b>: hele fasademoduler lages i fabrikken og leveres ferdige til byggeplassen — med isolasjon, vinduer, ventilasjon og overflate.</p>
      </div>
      <div>
        <h2>Hva dette gir i praksis</h2>
        <ul class="check">
          <li>Betydelig kortere byggetid på stedet — ofte med beboerne boende</li>
          <li>Jevn kvalitet takket være produksjon under fabrikkforhold</li>
          <li>Forutsigbare kostnader gjennom standardiserte prosesser og repetisjon</li>
          <li>Mindre støy, støv og forstyrrelser for beboerne</li>
          <li>Ikke stillas i månedsvis, mindre personell på byggeplassen</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Slik fungerer det</span>
        <h2>Fra bygningsskanning til montert fasade</h2>
      </div>
      <ol class="steps">
        <li><h3>Digital oppmåling</h3><p>3D-skanning av det eksisterende bygget fra bakken og med drone.</p></li>
        <li><h3>BIM-modell</h3><p>En målnøyaktig bygningsmodell lages fra punktskyen.</p></li>
        <li><h3>Konstruksjon &amp; produksjon</h3><p>Nøyaktig tilpassede elementer inkludert vinduer, tilslutningsdetaljer og ventilasjon; serieproduksjon i fabrikken.</p></li>
        <li><h3>Montasje</h3><p>Hjørneelement, rad for rad, deretter ventilasjon, trappeoppgangselementer, fuger, regnvann og tak.</p></li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Typiske målbygg</span>
        <h2>Hvor metoden fungerer best</h2>
        <p>Leilighetsbygg fra 1950–1979 med standardiserte planløsninger og høyt energiforbruk: rekkehus og storskala boligfelt med mange like bygg. Lignende geometrier kan rehabiliteres effektivt med gjentakende elementtyper — et helt kvartal fremfor en enkelt bygning.</p>
      </div>
      <div>
        <span class="eyebrow">Kommer du i gang?</span>
        <h2>EstNor leverer elementene</h2>
        <p>EstNor leverer de prefabrikkerte elementene — dere bidrar med lokal prosjektering, salg og montasje. Ta kontakt for å diskutere et samarbeid om prosjektet deres.</p>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Les mer</span>
        <h2>Utforsk modernisering hos EstNor</h2>
      </div>
      <div class="grid cols-2">
        <a class="card" href="facade-elements.php">
          <h3>Fasade- og takelementer</h3>
          <p>Oppbygningen av EstNors fasadeelement: trekonstruksjon, isolasjon, vinduer, ventilasjon og ferdig overflate — og hvordan det monteres.</p>
        </a>
        <a class="card" href="references.php">
          <h3>Referanser</h3>
          <p>Det estiske KredEx-pilotprogrammet, miljøbygget Nature Hub og andre EstNor-prosjekter.</p>
        </a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Vil du komme i gang med modernisering?</h2>
        <p>Fortell oss om prosjektet deres — vi kommer tilbake med en første vurdering.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
