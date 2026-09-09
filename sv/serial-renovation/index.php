<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'renovation';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Modernisering av flerbostadshus | EstNor';
$PAGE_DESC  = 'Modernisering av flerbostadshus förklarat: energieffektiv renovering med prefabricerade fasad- och takelement, enligt Energiesprong-principen.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="hero">
    <picture class="hero-bg" aria-hidden="true">
      <source srcset="../../assets/img/hero.webp" type="image/webp">
      <img src="../../assets/img/hero.jpg" alt="" width="1844" height="1230" fetchpriority="high" decoding="async">
    </picture>
    <div class="hero-inner wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <span>Modernisering av flerbostadshus</span></div>
      <span class="eyebrow">Grunderna</span>
      <h1 class="hero-title">
        <span>Klimatskalet kommer</span>
        <span class="hero-accent">från fabriken.</span>
      </h1>
      <p class="lead">Modernisering av flerbostadshus med prefabricerade element överför principen om industriell förtillverkning till energieffektiv renovering av befintliga byggnader. Istället för byggnadsställningar, enskilda hantverk och väder på plats planeras fasad- och takelement digitalt, tillverkas i fabrik och monteras på plats på kort tid.</p>
      <div class="btn-row">
        <a class="btn btn-primary" href="../contact.php">Kontakta oss</a>
        <a class="btn btn-ghost" href="facade-elements.php">Se fasadelementet</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Varifrån konceptet kommer</h2>
        <p>Idén går tillbaka till den nederländska <b>Energiesprong</b>-principen (sedan 2013). Målet är snabb, standardiserad och prisvärd renovering av befintligt bestånd i stor skala — upp till nettonollstandard i drift.</p>
        <p>Den avgörande hävstången är en <b>så hög grad av förtillverkning som möjligt</b>: hela fasadmoduler tillverkas i fabriken och levereras färdiga till byggplatsen — med isolering, fönster, ventilation och yta.</p>
      </div>
      <div>
        <h2>Vad detta ger i praktiken</h2>
        <ul class="check">
          <li>Betydligt kortare byggtid på plats — ofta med hyresgäster kvar i lägenheterna</li>
          <li>Jämn kvalitet tack vare tillverkning under fabriksförhållanden</li>
          <li>Förutsägbara kostnader genom standardiserade processer och repetition</li>
          <li>Mindre buller, damm och störningar för de boende</li>
          <li>Ingen byggnadsställning under månader, mindre personal på plats</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Så här fungerar det</span>
        <h2>Från byggnadsskanning till monterad fasad</h2>
      </div>
      <ol class="steps">
        <li><h3>Digital uppmätning</h3><p>3D-skanning av den befintliga byggnaden från marken och med drönare.</p></li>
        <li><h3>BIM-modell</h3><p>En måttriktig byggnadsmodell skapas från punktmolnet.</p></li>
        <li><h3>Konstruktion &amp; tillverkning</h3><p>Väl anpassade element inklusive fönster, anslutningsdetaljer och ventilation; serietillverkning i fabriken.</p></li>
        <li><h3>Montage</h3><p>Hörnelement, rad för rad, därefter ventilation, trapphuselement, fogar, dagvatten och tak.</p></li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Typiska målbyggnader</span>
        <h2>Var metoden fungerar bäst</h2>
        <p>Flerbostadshus från 1950–1979 med standardiserade planlösningar och hög energiförbrukning: lamellhus och storskaliga områden med många likadana hus. Liknande geometrier kan renoveras effektivt med återkommande elementtyper — ett helt kvarter snarare än en enskild byggnad.</p>
      </div>
      <div>
        <span class="eyebrow">Kommer du igång?</span>
        <h2>EstNor levererar elementen</h2>
        <p>EstNor levererar de prefabricerade elementen — ni bidrar med lokal projektering, försäljning och montage. Kontakta oss för att diskutera ett samarbete kring ert projekt.</p>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Läs mer</span>
        <h2>Utforska modernisering hos EstNor</h2>
      </div>
      <div class="grid cols-2">
        <a class="card" href="facade-elements.php">
          <h3>Fasad- och takelement</h3>
          <p>Uppbyggnaden av EstNors fasadelement: trästomme, isolering, fönster, ventilation och färdig yta — samt hur det monteras.</p>
        </a>
        <a class="card" href="references.php">
          <h3>Referenser</h3>
          <p>Det estniska KredEx-pilotprogrammet, miljöbyggnaden Nature Hub och andra EstNor-projekt.</p>
        </a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Vill du komma igång med modernisering?</h2>
        <p>Berätta om ert projekt — vi återkommer med en första bedömning.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakta oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
