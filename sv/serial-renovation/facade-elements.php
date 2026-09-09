<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'facade';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Fasad- och takelement | EstNor';
$PAGE_DESC  = 'Uppbyggnad, förtillverkningsgrad och montage av EstNors fasadelement: trästomme, isolering, förmonterade fönster, ventilation och färdig fasadyta.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <a href="index.php">Modernisering</a> / <span>Fasad- och takelement</span></div>
      <span class="eyebrow">Produkten</span>
      <h1 class="hero-title">Fasadelementet: en färdig vägg istället för många separata hantverk</h1>
      <p class="lead">Varje element är en bärande trästommekonstruktion, färdigställd till cirka 90 % i fabriken — isolerad, med fönster, ventilation och färdig yta. På plats behöver den bara sättas på plats och anslutas.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Elementets uppbyggnad</h2>
        <ul class="buildup">
          <li><b>1</b><span>Bärande trästommekonstruktion, digitalt konstruerad från BIM-modellen</span></li>
          <li><b>2</b><span>Isolering (mineralull) i elementet, med minimal köldbrygga</span></li>
          <li><b>3</b><span>Vind- och ångspärr, fabrikslimmad</span></li>
          <li><b>4</b><span>Energieffektiva PVC-fönster, helt monterade och injusterade</span></li>
          <li><b>5</b><span>Ventilationskanaler dragna genom elementet enligt ritning</span></li>
          <li><b>6</b><span>Fasadskiva/beklädnad förmonterad — yta färdigställd i fabriken</span></li>
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
        <span class="eyebrow">Förtillverkningsgrad</span>
        <h2>Varför 90 % i fabriken är avgörande</h2>
      </div>
      <div class="grid cols-3">
        <div class="card"><h3>Väderoberoende</h3><p>Tillverkning inomhus — inget stopp vid regn, frost eller blåst.</p></div>
        <div class="card"><h3>Jämn kvalitet</h3><p>Kontrollerade förhållanden, repeterbara processer, mindre efterarbete.</p></div>
        <div class="card"><h3>Ingen byggnadsställning</h3><p>Elementen sätts utifrån — utan ställning, utan tillträde till lägenheter.</p></div>
        <div class="card"><h3>Mindre personal på plats</h3><p>Arbetet flyttas till fabriken — ett litet montageteam räcker.</p></div>
        <div class="card"><h3>Renoveras med boende kvar</h3><p>Hyresgästerna stannar i lägenheten; störningen begränsas till dagar snarare än månader.</p></div>
        <div class="card"><h3>Kort byggtid</h3><p>Ett hus med flera trapphus på cirka 3–4 veckor istället för nästan ett år.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Montage på plats</span>
        <h2>Nio steg till det nya klimatskalet</h2>
      </div>
      <div class="grid cols-3">
        <div class="card card--tint"><h3>1 · 3D-skanning</h3><p>Insamling från marken och med drönare.</p></div>
        <div class="card card--tint"><h3>2 · BIM-modell</h3><p>Punktmolnet blir en måttriktig modell.</p></div>
        <div class="card card--tint"><h3>3 · Förberedelse</h3><p>Konsoler och grundsyllar på befintlig stomme.</p></div>
        <div class="card card--tint"><h3>4 · Hörnelement</h3><p>Första elementen sätts i byggnadens hörn.</p></div>
        <div class="card card--tint"><h3>5 · Radmontage</h3><p>Element för element, rad för rad.</p></div>
        <div class="card card--tint"><h3>6 · Heltäckande</h3><p>Fasaden är helt täckt med element.</p></div>
        <div class="card card--tint"><h3>7 · Ventilation</h3><p>Anslutning av ventilationskanaler.</p></div>
        <div class="card card--tint"><h3>8 · Trapphus</h3><p>Montage av trapphuselement.</p></div>
        <div class="card card--tint"><h3>9 · Avslutning</h3><p>Fogar, dagvattensystem, takanslutning.</p></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Logistik</span>
        <h2>Från Estland — inom EU</h2>
        <p>Produktion vid fabriken i Kiili nära Tallinn. Som EU-medlemsstat finns inga tullformaliteter; vägarna över Östersjön och landvägen är väl utbyggda. Elementen sorteras för montage och levereras just-in-time.</p>
      </div>
      <div>
        <span class="eyebrow">Kvalitet &amp; certifiering</span>
        <ul class="check">
          <li>Kvalitetsledning enligt ISO 9001</li>
          <li>CE-märkning, europeisk teknisk bedömning (EOTA)</li>
          <li>Medlem i Estniska Trähusförbundet</li>
          <li>Projektspecifik dokumentation efter lokala krav på begäran</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Diskutera elementuppbyggnaden för ert projekt</h2>
        <p>Skicka byggnadstyp, byggår och fasadyta — vi uppskattar elementtyper, tillverkningsinsats och leveranstid.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakta oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
