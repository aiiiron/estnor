<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'references-ren';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Referenser | EstNor';
$PAGE_DESC  = 'EstNors referensprojekt med prefabricerade fasad- och takelement — inklusive det estniska KredEx-pilotprogrammet och miljöbyggnaden Nature Hub i Tallinn.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <a href="index.php">Modernisering</a> / <span>Referenser</span></div>
      <span class="eyebrow">Referenser</span>
      <h1 class="hero-title">Projekt med prefabricerade element</h1>
      <p class="lead">Utvalda projekt där EstNor-element används. Illustrationerna är skisser, inte projektfoton — riktiga foton läggs till när de finns tillgängliga.</p>
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
          <h3>KredEx-pilotprogram för seriell renovering</h3>
          <div class="tag-row"><span class="tag">Fasadelement</span><span class="tag">Pilotprogram</span><span class="tag">Med boende kvar</span></div>
          <p>Statligt pilotprogram för fabriksbaserad renovering av bostadshus. EstNor var den första deltagande elementtillverkaren och levererade störst volym fasadelement i programmet.</p>
          <div class="project-stats"><div><b>12</b><span>flerbostadshus</span></div><div><b>1:a</b><span>deltagande tillverkare</span></div></div>
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
          <h3>Nature Hub — miljöbyggnad</h3>
          <div class="tag-row"><span class="tag">Fasad- &amp; takelement</span><span class="tag">Förmonterade fönster</span></div>
          <p>Till en av Estlands största trähusbyggnader levererade EstNor cirka 8 000 m² prefabricerade fasad- och takelement — inklusive fabriksmonterade fönster.</p>
          <div class="project-stats"><div><b>~8 000 m²</b><span>elementyta</span></div><div><b>Fabrik</b><span>fönstermontage</span></div></div>
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
          <p class="meta">Nya marknader · under förberedelse</p>
          <h3>Fler EstNor-projekt på gång</h3>
          <div class="tag-row"><span class="tag">Söker partners</span><span class="tag">Flerbostadshus</span></div>
          <p>EstNor bygger ut tillverkningskapaciteten för nya exportmarknader och söker bygg-, renoverings- och bostadsföretag för nästa seriella fasadprojekt. Ert projekt kan stå här.</p>
        </div>
      </article>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Sammanhang</span>
        <h2>Vad dessa projekt visar</h2>
        <p>För EstNor är seriell fasadrenovering med boende kvar inte ett löfte utan pågående produktion: standardiserade element, återkommande byggnadstyper, montage på veckor. Nästa steg är att föra över denna produktion till nya marknader tillsammans med lokala partners.</p>
      </div>
      <div>
        <span class="eyebrow">Ert projekt</span>
        <h2>Bli nästa referens</h2>
        <p>Om ni planerar ett seriellt fasadprojekt och söker en tillverkningspartner, låt oss diskutera byggnadstyper, antal och tidsplan.</p>
        <div class="btn-row"><a class="btn btn-primary" href="../contact.php">Diskutera ett projekt</a></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Vill du veta mer om ett projekt?</h2>
        <p>På begäran lämnar vi ytterligare uppgifter och, om möjligt, projektdokumentation.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakta oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
