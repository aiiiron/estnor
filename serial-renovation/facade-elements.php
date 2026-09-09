<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'et';
$ASSET  = '..';
$ACTIVE = 'facade';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Fassaadielement | EstNor';
$PAGE_DESC  = 'Fassaadielemendi ülesehitus: mõõdistamine, arhitektuur, tehaseline tootmine ja paigaldus objektil.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Avaleht</a> / <a href="index.php">Tehaseline renoveerimine</a> / <span>Fassaadielement</span></div>
      <span class="eyebrow">Toode</span>
      <h1 class="hero-title">Fassaadielement — valmis sein paljude eritööde asemel</h1>
      <p class="lead">Iga element on kandev puitkarkasskonstruktsioon, mis valmib tehases soojustatud, akendega ja viimistletud pinnaga. Objektil tuleb see vaid paigaldada ja ühendada.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Mõõdistamine</h2>
        <p>Olemasolev hoone mõõdistatakse laserskaneerimise meetodil. Punktipilvest genereeritakse 3D-mudel ning ehitusobjektil teostatakse kinnitusvahendite tõmbetugevuse katsed.</p>
        <h2>Arhitektuur</h2>
        <p>Mudelprojekteerimine (BIM) määrab elementide täpsed mõõdud. Valitakse toonid ja fassaadikate — massvärvitud tsementkiudplaat, horisontaalne või vertikaalne puitlaudis, või muu soovitud fassaadimaterjal — ning pannakse paika räästakastide, vihmaveesüsteemi ja aknaplekkide lahendus.</p>
      </div>
      <div class="panel-stack" aria-hidden="true">
        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Tehaseline tootmine</span>
        <h2>Mis on elemendis tehtud enne teele saatmist</h2>
      </div>
      <div class="grid cols-3">
        <div class="card"><h3>Soojustus</h3><p>Soojustatud fassaadielementide tootmine tehases, kandev puitkarkasskonstruktsioon.</p></div>
        <div class="card"><h3>Aknad</h3><p>Uued soojapidavad PVC aknad paigaldatakse ja viimistletakse elementidesse juba tehases.</p></div>
        <div class="card"><h3>Pakkimine ja transport</h3><p>Valmis elemendid pakitakse ja transporditakse ehitusobjektile paigaldusvalmina.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Paigaldus objektil</span>
        <h2>Elemendist valmis fassaadini</h2>
        <p>Paigaldus algab maja nurgast: elemendid toetatakse sidepuudele ja kinnitatakse nurkklambritega, et element jääks sirge. Järgmise rea jaoks paigaldatakse puidust alusvöö ning paigaldus jätkub rida-realt üle kogu hoone. Trepikoda katvad elemendid paigaldatakse viimastena.</p>
      </div>
      <div>
        <span class="eyebrow">Viimistlus</span>
        <ul class="check">
          <li>Ventilatsioonitorud paigaldatud elementide sisse juba tehases</li>
          <li>Elementide ühenduskohad viimistletakse pärast paigaldust</li>
          <li>Vihmaveesüsteem ja katusekate paigaldatakse hoone terviklikuks välisilmeks</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Räägime su projekti elementidest</h2>
        <p>Saada meile hoone tüüp, ehitusaasta ja fassaadipind — anname esialgse hinnangu elementide ja tarneaja kohta.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Võta ühendust</a>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
