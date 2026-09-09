<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'about';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Om EstNor | EstNor';
$PAGE_DESC  = 'EstNor OÜ är ett estniskt företag, grundat 2000, med fabriker i Kiili (element- och modulhus) och Jõgevamaa (timmerhus).';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <span>Om EstNor</span></div>
      <span class="eyebrow">Om EstNor</span>
      <h1 class="hero-title">Över 20 års erfarenhet av trähusbyggande</h1>
      <p class="lead">EstNor OÜ är ett estniskt företag med egen husfabrik i Kiili samt en timmerhusfabrik i Jõgevamaa. Huvudverksamheten är tillverkning av trähus.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="stat-row">
        <div class="stat"><b>25</b><span>års erfarenhet</span></div>
        <div class="stat"><b>1 000+</b><span>byggda bostäder</span></div>
        <div class="stat"><b>~50</b><span>hus per år, ~10 000 m²</span></div>
        <div class="stat"><b>90 %</b><span>export, främst till Norge</span></div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Vilka vi är</span>
        <h2>Vårt företag</h2>
        <p>EstNor OÜ grundades år 2000. Under drygt två decennier har över 1 000 bostäder byggts — Norge är den viktigaste exportmarknaden med cirka 90 % av produktionen, följt av Sverige, Estland, Finland och Tyskland.</p>
        <p>EstNors kunder är byggföretag, byggherrar, förmedlare och privatpersoner.</p>
      </div>
      <div>
        <span class="eyebrow">Medlemskap &amp; utmärkelser</span>
        <ul class="check">
          <li>Medlem i Estniska Trähusförbundet (sedan 2009)</li>
          <li>Medlem i Kiili Företagarförening (sedan 2004)</li>
          <li>Medlem i Estnisk-Norska Handelskammaren</li>
          <li>Gasellföretag 2015 och 2016 — en utmärkelse som endast 1 % av estniska företag bär</li>
          <li>Utmärkelser i tävlingen "Årets husfabrik" 2015, 2017, 2018 och 2019</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Kort historik</span>
        <h2>Hur EstNor har vuxit</h2>
      </div>
      <ol class="timeline">
        <li><span class="year">2000</span>EstNor OÜ grundas den 20 oktober; produktionsbyggnaden i Kiili förvärvas.</li>
        <li><span class="year">2001</span>Det första timmerhuset lämnar den nya fabriken.</li>
        <li><span class="year">2006</span>Tillverkning av elementhus inleds; fastighetsbolaget EstNor Arendus OÜ grundas.</li>
        <li><span class="year">2009</span>EstNor blir medlem i Estniska Trähusförbundet.</li>
        <li><span class="year">2012</span>En ny kontors- och produktionsbyggnad uppförs i Kiili.</li>
        <li><span class="year">2015</span>En ny husfabrik i Kiili tas i drift, ISO 9001-certifiering utfärdas och produktionen av modulhus inleds.</li>
        <li><span class="year">2018</span>EstNor öppnar en timmerhusfabrik i Jõgevamaa.</li>
        <li><span class="year">2019</span>EstNor OÜ tilldelas en europeisk teknisk bedömning (ETA).</li>
        <li><span class="year">2022</span>EstNor blir första tillverkare i det statliga KredEx-pilotprogrammet för seriell renovering.</li>
      </ol>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Kvalitet &amp; certifiering</span>
        <h2>Certifikat &amp; medlemskap</h2>
        <ul class="check">
          <li>Kvalitetsledning enligt ISO 9001 (sedan 2015)</li>
          <li>Europeisk teknisk bedömning (ETA, sedan 2019)</li>
          <li>Medlem i Estniska Trähusförbundet</li>
          <li>Tillverkning enligt SINTEF-byggnormer; på den norska marknaden enligt TEK 10, för passivhus TEK 15</li>
        </ul>
      </div>
      <div>
        <span class="eyebrow">Företagsuppgifter</span>
        <h2>Registeruppgifter</h2>
        <dl class="contact-dl">
          <div><dt>Firmanamn</dt><dd>EstNor OÜ</dd></div>
          <div><dt>Registrikood</dt><dd>10706304</dd></div>
          <div><dt>Momsregistreringsnummer</dt><dd>EE100650305</dd></div>
          <div><dt>Styrelseledamot</dt><dd>Renee Mikomägi</dd></div>
        </dl>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Läs mer</span>
        <h2>Fortsätt utforska</h2>
      </div>
      <div class="grid cols-2">
        <a class="card" href="suppliers.php">
          <h3>Leverantörer &amp; partners</h3>
          <p>Vilka EstNor samarbetar med och hur du blir partner.</p>
        </a>
        <a class="card" href="../serial-renovation/index.php">
          <h3>Modernisering av flerbostadshus</h3>
          <p>Hur EstNors fasadelement gör flerbostadshus energieffektiva.</p>
        </a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
