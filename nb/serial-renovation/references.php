<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '../..';
$ACTIVE = 'references-ren';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Referanser | EstNor';
$PAGE_DESC  = 'EstNors referanseprosjekter med prefabrikkerte fasade- og takelementer — inkludert det estiske KredEx-pilotprogrammet og miljøbygget Nature Hub i Tallinn.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Forsiden</a> / <a href="index.php">Modernisering</a> / <span>Referanser</span></div>
      <span class="eyebrow">Referanser</span>
      <h1 class="hero-title">Prosjekter med prefabrikkerte elementer</h1>
      <p class="lead">Utvalgte prosjekter der EstNor-elementer brukes. Illustrasjonene er skisser, ikke prosjektfoto — ekte bilder legges til når de foreligger.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap grid cols-3">
      <article class="project-card">
        <div class="project-figure" aria-hidden="true">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
            <rect width="200" height="150" fill="#e9efe7"/>
            <g fill="none" stroke="#1f4d3a" stroke-width="2">
              <rect x="20" y="20" width="26" height="28" rx="2"/><rect x="24" y="25" width="9" height="18" fill="#1f4d3a" opacity=".25"/>
              <rect x="52" y="20" width="26" height="28" rx="2"/><rect x="56" y="25" width="9" height="18" fill="#1f4d3a" opacity=".25"/>
              <rect x="84" y="20" width="26" height="28" rx="2"/><rect x="88" y="25" width="9" height="18" fill="#1f4d3a" opacity=".25"/>
              <rect x="20" y="54" width="26" height="28" rx="2"/><rect x="24" y="59" width="9" height="18" fill="#1f4d3a" opacity=".25"/>
              <rect x="52" y="54" width="26" height="28" rx="2"/><rect x="56" y="59" width="9" height="18" fill="#1f4d3a" opacity=".25"/>
              <rect x="84" y="54" width="26" height="28" rx="2"/><rect x="88" y="59" width="9" height="18" fill="#1f4d3a" opacity=".25"/>
            </g>
          </svg>
        </div>
        <div class="project-body">
          <p class="meta">Estland · 2022–2027</p>
          <h3>KredEx-pilotprogram for seriell rehabilitering</h3>
          <div class="tag-row"><span class="tag">Fasadeelementer</span><span class="tag">Pilotprogram</span><span class="tag">Med beboere boende</span></div>
          <p>Statlig pilotprogram for fabrikkbasert rehabilitering av boligbygg. EstNor var den første deltakende elementprodusenten og leverte størst volum fasadeelementer i programmet.</p>
          <div class="project-stats"><div><b>12</b><span>leilighetsbygg</span></div><div><b>1.</b><span>deltakende produsent</span></div></div>
        </div>
      </article>

      <article class="project-card">
        <div class="project-figure" aria-hidden="true">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
            <rect width="200" height="150" fill="#e9efe7"/>
            <path d="M40 55 L100 25 L160 55 Z" fill="#dd8a2c"/>
            <rect x="45" y="55" width="110" height="80" fill="none" stroke="#1f4d3a" stroke-width="2"/>
            <g fill="#1f4d3a" opacity=".25">
              <rect x="58" y="68" width="18" height="22"/><rect x="91" y="68" width="18" height="22"/>
              <rect x="124" y="68" width="18" height="22"/><rect x="58" y="100" width="18" height="22"/>
              <rect x="124" y="100" width="18" height="22"/>
            </g>
            <rect x="91" y="100" width="18" height="35" fill="#1f4d3a" opacity=".4"/>
          </svg>
        </div>
        <div class="project-body">
          <p class="meta">Tallinn, Estland</p>
          <h3>Nature Hub — miljøbygg</h3>
          <div class="tag-row"><span class="tag">Fasade- &amp; takelementer</span><span class="tag">Forhåndsmonterte vinduer</span></div>
          <p>Til en av Estlands største trebygninger leverte EstNor rundt 8000 m² prefabrikkerte fasade- og takelementer — inkludert fabrikkmonterte vinduer.</p>
          <div class="project-stats"><div><b>~8000 m²</b><span>elementareal</span></div><div><b>Fabrikk</b><span>vindusmontasje</span></div></div>
        </div>
      </article>

      <article class="project-card">
        <div class="project-figure" aria-hidden="true">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
            <rect width="200" height="150" fill="#e9efe7"/>
            <rect x="45" y="35" width="110" height="95" fill="none" stroke="#b96f1c" stroke-width="2" stroke-dasharray="7 6"/>
            <text x="100" y="90" text-anchor="middle" font-family="Bricolage Grotesque, sans-serif" font-size="15" fill="#b96f1c">?</text>
          </svg>
        </div>
        <div class="project-body">
          <p class="meta">Nye markeder · under forberedelse</p>
          <h3>Flere EstNor-prosjekter på vei</h3>
          <div class="tag-row"><span class="tag">Søker partnere</span><span class="tag">Leilighetsbygg</span></div>
          <p>EstNor bygger ut produksjonskapasiteten for nye eksportmarkeder og søker bygg-, rehabiliterings- og boligselskaper for de neste serielle fasadeprosjektene. Prosjektet deres kan stå her.</p>
        </div>
      </article>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Sammenheng</span>
        <h2>Hva disse prosjektene viser</h2>
        <p>For EstNor er seriell fasaderehabilitering med beboere boende ikke en kunngjøring, men løpende produksjon: standardiserte elementer, gjentakende bygningstyper, montasje på uker. Neste steg er å overføre denne produksjonen til nye markeder sammen med lokale partnere.</p>
      </div>
      <div>
        <span class="eyebrow">Prosjektet deres</span>
        <h2>Bli den neste referansen</h2>
        <p>Hvis dere planlegger et serielt fasadeprosjekt og søker en produksjonspartner, la oss diskutere bygningstyper, antall og tidsplan.</p>
        <div class="btn-row"><a class="btn btn-primary" href="../contact.php">Diskuter et prosjekt</a></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Vil du vite mer om et prosjekt?</h2>
        <p>På forespørsel gir vi ytterligere opplysninger og, der det er tillatt, prosjektdokumentasjon.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
