<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'houses';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Majad | EstNor';
$PAGE_DESC  = 'EstNor toodab elementmaju ja moodulmaju Kiili tehases.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Avaleht</a> / <span>Majad</span></div>
      <span class="eyebrow">Kaks ehitusviisi, üks tehase standard</span>
      <h1 class="hero-title">Vali, kuidas su maja valmib</h1>
      <p class="lead">Iga EstNori maja saab alguse tehasest. Vali ehitusviis, mis sobib sinu projekti, arhitektuuri, ajakava ja eelarvega.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap grid cols-2">
      <div class="house-card" style="min-height:400px;">
        <div class="art">
          <svg viewBox="0 0 400 360" width="100%" height="100%" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="360" fill="#1f4d3a"/>
            <g fill="#e9efe7" opacity=".9"><rect x="60" y="150" width="280" height="130"/><polygon points="40,150 200,70 360,150"/></g>
            <g fill="#13342a"><rect x="180" y="200" width="40" height="80"/></g>
          </svg>
        </div>
        <div class="content">
          <span class="tag">Tehases toodetud</span>
          <h3>Elementmajad</h3>
          <p>Seinad, katus ja põrand toodetakse tehases ning pannakse objektil kokku — ilma suuremate piiranguteta suuruse ega arhitektuuri osas.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="element-houses.php">Loe lähemalt</a></div>
        </div>
      </div>
      <div class="house-card" style="min-height:400px;">
        <div class="art">
          <svg viewBox="0 0 400 360" width="100%" height="100%" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="360" fill="#13342a"/>
            <g fill="#e9efe7" opacity=".92"><rect x="55" y="140" width="130" height="140"/><rect x="215" y="100" width="130" height="180"/></g>
            <g fill="#dd8a2c"><rect x="55" y="140" width="130" height="8"/><rect x="215" y="100" width="130" height="8"/></g>
          </svg>
        </div>
        <div class="content">
          <span class="tag">Moodul</span>
          <h3>Moodulmajad</h3>
          <p>Täielikult viimistletud moodulid — elekter, torustik ja küte kaasa arvatud — mis pannakse objektil kokku valmis majaks.</p>
          <div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" style="border-color:#fff;color:#fff;" href="modular-houses.php">Loe lähemalt</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Kumb sobib sulle?</span>
        <h2>Kahe ehitusviisi võrdlus</h2>
      </div>
      <div class="grid cols-2">
        <div class="card">
          <h3>Elementmajad</h3>
          <p>Sobivad suurtele või arhitektuuriliselt keerukatele hoonetele ja kortermajadele. Tehases toodetud seinad, katus ja terrass pannakse objektil kokku.</p>
        </div>
        <div class="card">
          <h3>Moodulmajad</h3>
          <p>Sobivad kiire graafikuga projektidele — üle 90% tööst on tehtud juba tehases, enne kui moodul objektile jõuab.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Olemasolev hoone?</span>
        <h2>EstNor ka renoveerib, mitte ainult ei ehita uut</h2>
        <p class="lead">Sama tehasetäpsus kehtib ka tehaselise renoveerimise puhul: fassaadielemendid, mis tõstavad kortermaja energiatõhusust vaid mõne nädalaga.</p>
      </div>
      <div class="btn-row">
        <a class="btn btn-ghost" href="../serial-renovation/index.php">Mis on tehaseline renoveerimine?</a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
