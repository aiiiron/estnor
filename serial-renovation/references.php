<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'references-ren';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Tehtud renoveerimisprojektid | EstNor';
$PAGE_DESC  = 'EstNori tehtud renoveerimisprojektid KredEx programmi raames — 12 kortermaja üle Eesti.';
require __DIR__ . '/../partials/head.php';

$projects = [
  ['Kooli 5', 'Sindi'],
  ['Kotka 8', 'Tallinn'],
  ['Muldvalge 1', 'Tallinn'],
  ['Nisu 3', 'Tallinn'],
  ['Pallasti 10', 'Tallinn'],
  ['Pärnu mnt. 133', 'Tallinn'],
  ['Riia 80', 'Pärnu'],
  ['Turu 15', 'Tartu'],
  ['Ojasoo 6', 'Kuressaare'],
  ['Anne 2', 'Tartu'],
  ['Lasteaia 2', 'Kehtna'],
  ['Tule 4', 'Saue'],
];
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Avaleht</a> / <a href="index.php">Tehaseline renoveerimine</a> / <span>Tehtud projektid</span></div>
      <span class="eyebrow">Tehtud projektid</span>
      <h1 class="hero-title">EstNori tehtud renoveerimisprojektid</h1>
      <p class="lead">KredEx pilootprogrammi raames renoveeritud 12 kortermaja fassaadid üle Eesti — EstNor oli programmi esimene ja mahult suurim tootja.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="grid cols-3">
<?php foreach ($projects as [$addr, $city]): ?>
        <div class="card">
          <span class="tag"><?= e($city) ?></span>
          <h3><?= e($addr) ?></h3>
          <p>Kortermaja fassaad renoveeritud EstNori tehases toodetud soojustatud puitkarkasselementidega, uute PVC akendega.</p>
        </div>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Kontekst</span>
        <h2>Mida need projektid näitavad</h2>
        <p class="lead" style="margin-inline:auto;">Tehaseline fassaadirenoveerimine ei ole EstNori jaoks kuulutus, vaid käimasolev tootmine: standardsed elemendid, korduvad hoonetüübid, paigaldus mõne nädalaga — juba 12 kortermaja ulatuses üle Eesti.</p>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Soovid rohkem infot mõne projekti kohta?</h2>
        <p>Anname soovi korral täiendavaid andmeid ja, kui see on lubatud, ka projektimaterjale.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Võta ühendust</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
