<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'modular';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Moodulmaja | EstNor';
$PAGE_DESC  = 'EstNori moodulmajad toodetakse tehases, ilmastikukindlas ja kontrollitud keskkonnas.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Avaleht</a> / <a href="index.php">Majad</a> / <span>Moodulmaja</span></div>
      <span class="eyebrow">Moodul</span>
      <h1 class="hero-title">Moodulmajast lähemalt</h1>
      <p class="lead">EstNori moodulmajad toodetakse tehases, ilmastikukindlas ja kontrollitud keskkonnas — moodulid jõuavad objektile juba viimistletult.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Kuidas moodul valmib</h2>
        <p>Moodulid koosnevad põranda-, seina- ja katuseelementidest, mis pannakse tehases kokku. Moodulid on seest ja väljast viimistletud ning katusekate on paigaldatud.</p>
        <p>Kõik avatäited — aknad ja uksed — on paigaldatud ning seest ja väljast viimistletud (paled, liistud, veeplekid). Tehases teostatakse ka kõik eritööd: elektri-, toru-, ventilatsiooni- ja küttetööd. Vajadusel paigaldatakse moodulitesse ka sanitaartehnika ja mööbel.</p>
      </div>
      <div class="card" style="padding:0; overflow:hidden;">
        <svg viewBox="0 0 400 320" preserveAspectRatio="xMidYMid slice" width="100%" height="100%">
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
        <span class="eyebrow">Valmis juba tehases</span>
        <h2>Mis on moodulis tehtud, enne kui see objektile jõuab</h2>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Kandekonstruktsioon</h3><p>Põranda-, seina- ja katuseelemendid tehases kokku monteeritud.</p></div>
        <div class="card"><h3>Viimistlus</h3><p>Seest ja väljast viimistletud, katusekate paigaldatud.</p></div>
        <div class="card"><h3>Aknad ja uksed</h3><p>Kõik avatäited paigaldatud ja viimistletud (paled, liistud, veeplekid).</p></div>
        <div class="card"><h3>Eritööd</h3><p>Elektri-, toru-, ventilatsiooni- ja küttetööd tehases teostatud.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Kas sul on moodulmaja projekt?</h2>
        <p>Ühest suvilast kuni kortermajani — räägime läbi võimalused.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Võta ühendust</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
