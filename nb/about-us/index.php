<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'about';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Om EstNor | EstNor';
$PAGE_DESC  = 'EstNor OÜ er et estisk selskap, grunnlagt i 2000, med fabrikker i Kiili (element- og modulhus) og Jõgevamaa (tømmerhus).';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Forsiden</a> / <span>Om EstNor</span></div>
      <span class="eyebrow">Om EstNor</span>
      <h1 class="hero-title">Over 20 års erfaring med trehusbygging</h1>
      <p class="lead">EstNor OÜ er et estisk selskap med egen husfabrikk i Kiili samt en tømmerhusfabrikk i Jõgevamaa. Hovedvirksomheten er produksjon av trehus.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="stat-row">
        <div class="stat"><b>25</b><span>års erfaring</span></div>
        <div class="stat"><b>1000+</b><span>bygde boenheter</span></div>
        <div class="stat"><b>~50</b><span>hus per år, ~10 000 m²</span></div>
        <div class="stat"><b>90 %</b><span>eksport, hovedsakelig til Norge</span></div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Hvem vi er</span>
        <h2>Vårt selskap</h2>
        <p>EstNor OÜ ble grunnlagt i 2000. I løpet av over to tiår er det bygget over 1000 boenheter — Norge er det viktigste eksportmarkedet med rundt 90 % av produksjonen, etterfulgt av Sverige, Estland, Finland og Tyskland.</p>
        <p>EstNors kunder er byggefirmaer, utbyggere, formidlere og privatpersoner.</p>
      </div>
      <div>
        <span class="eyebrow">Medlemskap &amp; utmerkelser</span>
        <ul class="check">
          <li>Medlem av Estisk Trehusforening (siden 2009)</li>
          <li>Medlem av Kiili Næringsforening (siden 2004)</li>
          <li>Medlem av Estisk-Norsk Handelskammer</li>
          <li>Gasellebedrift 2015 og 2016 — en utmerkelse kun 1 % av estiske selskaper har</li>
          <li>Utmerkelser i konkurransen «Årets husfabrikk» 2015, 2017, 2018 og 2019</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Kort historie</span>
        <h2>Hvordan EstNor har vokst</h2>
      </div>
      <ol class="timeline">
        <li><span class="year">2000</span>EstNor OÜ stiftes 20. oktober; produksjonsbygget i Kiili anskaffes.</li>
        <li><span class="year">2001</span>Det første tømmerhuset forlater den nye fabrikken.</li>
        <li><span class="year">2006</span>Produksjon av elementhus starter; eiendomsselskapet EstNor Arendus OÜ stiftes.</li>
        <li><span class="year">2009</span>EstNor blir medlem av Estisk Trehusforening.</li>
        <li><span class="year">2012</span>Et nytt kontor- og produksjonsbygg reises i Kiili.</li>
        <li><span class="year">2015</span>En ny husfabrikk i Kiili settes i drift, ISO 9001-sertifisering utstedes, og produksjon av modulhus starter.</li>
        <li><span class="year">2018</span>EstNor åpner en tømmerhusfabrikk i Jõgevamaa.</li>
        <li><span class="year">2019</span>EstNor OÜ tildeles europeisk teknisk vurdering (ETA).</li>
        <li><span class="year">2022</span>EstNor blir første produsent i det statlige KredEx-pilotprogrammet for seriell rehabilitering.</li>
      </ol>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Kvalitet &amp; sertifisering</span>
        <h2>Sertifikater &amp; medlemskap</h2>
        <ul class="check">
          <li>Kvalitetsstyring etter ISO 9001 (siden 2015)</li>
          <li>Europeisk teknisk vurdering (ETA, siden 2019)</li>
          <li>Medlem av Estisk Trehusforening</li>
          <li>Produksjon etter SINTEF-byggenormer; på det norske markedet etter TEK 10, for passivhus TEK 15</li>
        </ul>
      </div>
      <div>
        <span class="eyebrow">Selskapsopplysninger</span>
        <h2>Registeropplysninger</h2>
        <dl class="contact-dl">
          <div><dt>Firmanavn</dt><dd>EstNor OÜ</dd></div>
          <div><dt>Registrikood</dt><dd>10706304</dd></div>
          <div><dt>MVA-nummer</dt><dd>EE100650305</dd></div>
          <div><dt>Styremedlem</dt><dd>Renee Mikomägi</dd></div>
        </dl>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Les mer</span>
        <h2>Fortsett å utforske</h2>
      </div>
      <div class="grid cols-2">
        <a class="card" href="suppliers.php">
          <h3>Leverandører &amp; partnere</h3>
          <p>Hvem EstNor samarbeider med, og hvordan du kan bli partner.</p>
        </a>
        <a class="card" href="../serial-renovation/index.php">
          <h3>Modernisering av leilighetsbygg</h3>
          <p>Hvordan EstNors fasadeelementer gjør leilighetsbygg energieffektive.</p>
        </a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
