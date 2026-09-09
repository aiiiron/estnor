<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '../..';
$ACTIVE = 'renovation';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Was ist serielle Sanierung? | EstNor';
$PAGE_DESC  = 'Serielle Sanierung erklärt: energetische Modernisierung von Mehrfamilienhäusern mit vorgefertigten Fassaden- und Dachelementen nach dem Energiesprong-Prinzip.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="hero">
    <picture class="hero-bg" aria-hidden="true">
      <source srcset="../../assets/img/hero.webp" type="image/webp">
      <img src="../../assets/img/hero.jpg" alt="" width="1844" height="1230" fetchpriority="high" decoding="async">
    </picture>
    <div class="hero-inner wrap">
      <div class="breadcrumb"><a href="../index.php">Startseite</a> / <span>Serielle Sanierung</span></div>
      <span class="eyebrow">Grundlagen</span>
      <h1 class="hero-title">
        <span>Serielle Sanierung: die Gebäudehülle</span>
        <span class="hero-accent">kommt aus dem Werk.</span>
      </h1>
      <p class="lead">Serielle Sanierung überträgt das Prinzip der industriellen Vorfertigung auf die energetische Modernisierung des Bestands. Statt Gerüst, Einzelhandwerk und Witterung auf der Baustelle zu koordinieren, werden Fassaden- und Dachelemente digital geplant, im Werk gefertigt und vor Ort in kurzer Zeit montiert.</p>
      <div class="btn-row">
        <a class="btn btn-primary" href="../contact.php">Kontakt aufnehmen</a>
        <a class="btn btn-ghost" href="facade-elements.php">Fassadenelement ansehen</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Woher das Konzept stammt</h2>
        <p>Die Idee geht auf das niederländische <b>Energiesprong</b>-Prinzip zurück (seit 2013). Ziel ist eine schnelle, standardisierte und bezahlbare Bestandssanierung „in der Breite" — bis hin zum Netto-Null-Standard im Betrieb. In Deutschland wird der Ansatz über die Bundesförderung für effiziente Gebäude (BEG) und Programme der KfW unterstützt.</p>
        <p>Der entscheidende Hebel ist ein <b>möglichst hoher Vorfertigungsgrad</b>: ganze Fassadenmodule entstehen im Werk und werden fertig zur Baustelle geliefert — mit Dämmung, Fenstern, Lüftungsführung und Oberfläche.</p>
      </div>
      <div>
        <h2>Was das konkret bringt</h2>
        <ul class="check">
          <li>Deutlich kürzere Bauzeit vor Ort — oft im bewohnten Zustand</li>
          <li>Gleichbleibende Qualität durch Fertigung unter Werksbedingungen</li>
          <li>Planbare Kosten dank standardisierter Prozesse und Wiederholung</li>
          <li>Weniger Lärm, Staub und Zugangsaufwand für Bewohner</li>
          <li>Kein Gerüst über Monate, weniger Personal auf der Baustelle</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">So funktioniert es</span>
        <h2>Vom Gebäudescan zur montierten Fassade</h2>
      </div>
      <ol class="steps">
        <li><h3>Digitales Aufmaß</h3><p>3D-Scan des Bestandsgebäudes vom Boden und per Drohne.</p></li>
        <li><h3>BIM-Modell</h3><p>Aus der Punktwolke entsteht ein maßhaltiges Gebäudemodell.</p></li>
        <li><h3>Konstruktion &amp; Fertigung</h3><p>Passgenaue Elemente inkl. Fenster, Anschlussdetails und Lüftung; Serienfertigung im Werk.</p></li>
        <li><h3>Montage</h3><p>Eckelement, Reihe für Reihe, dann Lüftung, Treppenhauselemente, Fugen, Regenwasser und Dach.</p></li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <span class="eyebrow">Typische Zielgebäude</span>
        <h2>Wo serielle Sanierung besonders wirkt</h2>
        <p>Mehrfamilienhäuser der Baujahre 1950–1979 mit standardisierten Grundrissen und hohem Energieverbrauch: Zeilen- und Plattenbauten, Wohnblöcke, Siedlungen mit vielen baugleichen Häusern. Ähnliche Geometrien lassen sich mit wiederkehrenden Elementtypen effizient sanieren — ein ganzes Quartier statt Einzelgebäude.</p>
      </div>
      <div>
        <span class="eyebrow">Förderung in Deutschland</span>
        <ul class="check">
          <li>BEG-Förderung für die Sanierung zum Effizienzhaus-Standard</li>
          <li>Zusätzlicher Bonus für serielle Sanierung innerhalb der BEG</li>
          <li>Kombinierbar mit Dachaufstockung / Nachverdichtung</li>
          <li>Förderlandschaft ändert sich — aktuelle Konditionen vor Projektstart prüfen</li>
        </ul>
        <div class="callout"><b>Hinweis:</b> Förderdetails und Bonushöhen sind zum Livegang zu verifizieren (BEG / KfW, Stand des jeweiligen Programmjahres).</div>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head center">
        <span class="eyebrow">Mehr erfahren</span>
        <h2>Serielle Sanierung bei EstNor</h2>
      </div>
      <div class="grid cols-2">
        <a class="card" href="facade-elements.php">
          <h3>Fassadenelemente</h3>
          <p>Der Aufbau des EstNor-Fassadenelements: Holzrahmen, Dämmung, Fenster, Lüftung und fertige Oberfläche — und wie es montiert wird.</p>
        </a>
        <a class="card" href="references.php">
          <h3>Referenzen</h3>
          <p>Das estnische KredEx-Pilotprogramm, das Umwelthaus Loodusmaja und erste Projekte in Deutschland.</p>
        </a>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Sie steigen in die serielle Sanierung ein?</h2>
        <p>EstNor liefert die vorgefertigten Elemente — Sie bringen lokale Planung, Vertrieb und Montage ein. Sprechen wir über eine Zusammenarbeit.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt aufnehmen</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
