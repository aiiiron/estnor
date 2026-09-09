<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '../..';
$ACTIVE = 'modular';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Modulhus | EstNor';
$PAGE_DESC  = 'EstNors modulhus tillverkas i fabriken, i en väderoberoende och kontrollerad miljö.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startsida</a> / <a href="index.php">Hus</a> / <span>Modulhus</span></div>
      <span class="eyebrow">Modulärt</span>
      <h1 class="hero-title">Mer om modulhus</h1>
      <p class="lead">EstNors modulhus tillverkas i fabriken, i en väderoberoende och kontrollerad miljö — modulerna anländer redan färdigställda till byggplatsen.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Så tillverkas en modul</h2>
        <p>Modulerna består av golv-, vägg- och takelement som monteras samman i fabriken. Modulerna är färdigställda in- och utvändigt, och taktäckningen är monterad.</p>
        <p>Alla öppningar — fönster och dörrar — är monterade och färdigställda in- och utvändigt (foder, lister, plåtar). I fabriken utförs även alla specialarbeten: el, VVS, ventilation och värme. Vid behov installeras sanitet och möbler direkt i modulerna.</p>
      </div>
      <div class="card" style="padding:0; overflow:hidden;">
        <svg viewBox="0 0 400 320" preserveAspectRatio="xMidYMid slice">
          <rect width="400" height="320" fill="#13342a"/>
          <g fill="#e9efe7"><rect x="40" y="180" width="110" height="100"/><rect x="160" y="140" width="110" height="140"/><rect x="280" y="100" width="90" height="180"/></g>
          <g fill="#dd8a2c"><rect x="40" y="180" width="110" height="8"/><rect x="160" y="140" width="110" height="8"/><rect x="280" y="100" width="90" height="8"/></g>
        </svg>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Redan klart i fabriken</span>
        <h2>Vad som är klart innan modulen når byggplatsen</h2>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Bärande stomme</h3><p>Golv-, vägg- och takelement sammanfogade i fabriken.</p></div>
        <div class="card"><h3>Färdigställning</h3><p>In- och utvändigt färdigställt, taktäckning monterad.</p></div>
        <div class="card"><h3>Fönster &amp; dörrar</h3><p>Alla öppningar monterade och färdigställda (foder, lister, plåtar).</p></div>
        <div class="card"><h3>Specialarbeten</h3><p>El-, VVS-, ventilations- och värmeinstallationer klara i fabriken.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Har du ett modulhusprojekt?</h2>
        <p>Från ett enskilt fritidshus till ett flerbostadshus — låt oss diskutera möjligheterna.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakta oss</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
