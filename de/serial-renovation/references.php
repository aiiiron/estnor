<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '../..';
$ACTIVE = 'references-ren';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Referenzen | EstNor';
$PAGE_DESC  = 'Referenzprojekte von EstNor für vorgefertigte Fassaden- und Dachelemente – darunter das estnische KredEx-Pilotprogramm für serielle Sanierung und das Umwelthaus Loodusmaja in Tallinn.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startseite</a> / <a href="index.php">Serielle Sanierung</a> / <span>Referenzen</span></div>
      <span class="eyebrow">Referenzen</span>
      <h1 class="hero-title">Projekte mit vorgefertigten Elementen</h1>
      <p class="lead">Ausgewählte Projekte, in denen EstNor-Elemente zum Einsatz kommen. Die Illustrationen sind Skizzen, keine Projektfotos — echte Fotos werden ergänzt, sobald sie vorliegen.</p>
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
          <h3>KredEx-Pilotprogramm für serielle Sanierung</h3>
          <div class="tag-row"><span class="tag">Fassadenelemente</span><span class="tag">Pilotprogramm</span><span class="tag">Im bewohnten Zustand</span></div>
          <p>Staatliches Pilotprogramm zur werkseitigen Sanierung von Wohngebäuden. EstNor war der erste teilnehmende Elementhersteller und lieferte das größte Volumen an Fassadenelementen im Programm.</p>
          <div class="project-stats"><div><b>12</b><span>Mehrfamilienhäuser</span></div><div><b>1.</b><span>teilnehmender Hersteller</span></div></div>
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
          <h3>Loodusmaja – Umwelthaus Tallinn</h3>
          <div class="tag-row"><span class="tag">Fassaden- &amp; Dachelemente</span><span class="tag">Vormontierte Fenster</span><span class="tag">Holzbau</span></div>
          <p>Für eines der größten Holzgebäude Estlands liefert EstNor rund 8.000 m² vorgefertigte Fassaden- und Dachelemente – inklusive im Werk eingebauter Fenster.</p>
          <div class="project-stats"><div><b>~8.000 m²</b><span>Elementfläche</span></div><div><b>Werk</b><span>Fenstereinbau</span></div></div>
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
          <p class="meta">Deutschland · in Vorbereitung</p>
          <h3>Erste Projekte in Deutschland</h3>
          <div class="tag-row"><span class="tag">Partnersuche</span><span class="tag">Mehrfamilienhaus</span><span class="tag">1950–1979</span></div>
          <p>EstNor baut die Fertigungskapazität gezielt für den deutschen Markt aus und sucht Bau-, Sanierungs- und Wohnungsunternehmen für erste serielle Fassadenprojekte. Ihr Projekt kann hier stehen.</p>
        </div>
      </article>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Einordnung</span>
        <h2>Was diese Referenzen zeigen</h2>
        <p>Die serielle Fassadensanierung im bewohnten Zustand ist bei EstNor keine Ankündigung, sondern laufende Fertigung: standardisierte Elemente, wiederkehrende Gebäudetypen, Montage in Wochen. Für Deutschland geht es jetzt darum, diese Fertigung mit lokalen Partnern auf konkrete Quartiere zu übertragen.</p>
      </div>
      <div>
        <span class="eyebrow">Ihr Projekt</span>
        <h2>Referenz Nummer eins in Deutschland</h2>
        <p>Wenn Sie ein serielles Fassadenprojekt planen und einen Fertigungspartner suchen, sprechen wir über Gebäudetypen, Stückzahlen und Zeitplan.</p>
        <div class="btn-row"><a class="btn btn-primary" href="../contact.php">Projekt anfragen</a></div>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Mehr Details zu einem Projekt?</h2>
        <p>Wir stellen auf Anfrage weitere Angaben und – soweit freigegeben – Projektunterlagen zur Verfügung.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt aufnehmen</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
