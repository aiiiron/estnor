<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '../..';
$ACTIVE = 'element';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Elementhaus | EstNor';
$PAGE_DESC  = 'EstNor OÜ fertigt Holzrahmen-Elementhäuser im Elementhauswerk in Kiili — Außen-, Innen-, Geschossdecken-, Dach- und Terrassenelemente.';
require __DIR__ . '/../../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="../index.php">Startseite</a> / <a href="index.php">Häuser</a> / <span>Elementhaus</span></div>
      <span class="eyebrow">Werksgefertigt</span>
      <h1 class="hero-title">Das Elementhaus im Detail</h1>
      <p class="lead">EstNor OÜ fertigt Holzrahmen-Elementhäuser im Elementhauswerk in Kiili. Im Werk entstehen Außen-, Innen-, Geschossdecken-, Dach- und Terrassenelemente.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Vorteile des Elementhauses</h2>
        <ul class="check">
          <li>Werksgefertigte Häuser sind hochwertig — der Bau erfolgt in einer kontrollierten Innenumgebung, ohne Witterungsschäden (Regen, Schnee, Wind, Temperatur)</li>
          <li>Schneller Bau — die Montage der Elemente erfolgt an speziellen Werkbänken mit dem nötigen Werkzeug</li>
          <li>Präzise Werkzeichnungen machen die Fertigung schnell und effizient — Elemente entstehen millimetergenau</li>
          <li>Ingenieure führen Tragfähigkeitsberechnungen nach lokalen Normen durch, wodurch eine Unterdimensionierung ausgeschlossen ist</li>
          <li>Im Werk wird so viel wie möglich fertiggestellt: Dämmung, Dampf- und Windsperre, lackierte Außenverkleidung, Fenster, Türen</li>
          <li>Vor Ort werden die Elemente je nach Haushöhe in 1–5 Tagen per Kran montiert</li>
        </ul>
      </div>
      <div class="panel-stack" aria-hidden="true">
        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
      </div>
    </div>
  </section>

  <section class="section section--alt">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Ohne wesentliche Einschränkung</span>
        <h2>Auch für anspruchsvolle Architektur geeignet</h2>
        <p class="lead">Anders als bei Modulhäusern lassen sich als Elementhaus auch anspruchsvolle Architektur und großzügige Raumhöhen realisieren — einschließlich Mehrfamilienhäuser.</p>
      </div>
      <div class="grid cols-4">
        <div class="card"><h3>Kranmontage</h3><p>Aufstellung der Elemente und Dacharbeiten.</p></div>
        <div class="card"><h3>Öffnungen</h3><p>Montage von Fenstern, Terrassen-, Außen- und Innentüren.</p></div>
        <div class="card"><h3>Ausbau</h3><p>Böden, Zwischen- und Dachdecken, Leisten, Fliesen- und Malerarbeiten.</p></div>
        <div class="card"><h3>Terrasse &amp; Schornstein</h3><p>Terrassenmontage sowie Schiedel-Metall- und Modulschornsteine.</p></div>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Materialauswahl</span>
        <h2>Auswahlmöglichkeiten (Standardlösungen im Katalog gesondert markiert)</h2>
      </div>
      <div class="grid cols-3">
        <div class="card card--tint"><h3>Außenverkleidung</h3><p>Verschalung 21×145 mm oder 21×190 mm, polnische Schalung, unbesäumtes Brett, Fassadenplatte.</p></div>
        <div class="card card--tint"><h3>Fenster &amp; Türen</h3><p>Dreifachverglaste Fenster (verschiedene Öffnungsarten), energieeffiziente Außentür, MDF-Innentüren.</p></div>
        <div class="card card--tint"><h3>Dacheindeckung</h3><p>Stein-, Blech-, SBS- und Bitumendach sowie Schalungs- und Grasdach.</p></div>
        <div class="card card--tint"><h3>Bodenbelag</h3><p>Eichenparkett (1- oder 3-Stab), Eichendielen oder Kiefern-Fußboden.</p></div>
        <div class="card card--tint"><h3>Treppen</h3><p>Kiefern- oder Eichenstufen, lackiert oder unbehandelt, mit Holz- oder Glasgeländer.</p></div>
        <div class="card card--tint"><h3>Terrasse</h3><p>Genutete Terrassendielen 28×120 mm oder 28×145 mm, braun oder grün imprägniert.</p></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="callout"><b>Luft- und Winddichtheit:</b> EstNor setzt Produkte des Branchenführers SIGA ein — Dampf- und Windsperrbahnen, Klebebänder und Dichtstoffe. Die Häuser werden nach SINTEF-Baunormen gefertigt; auf dem norwegischen Markt gelten TEK 10, bei Passivhäusern TEK 15.</div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="wrap cta-band">
      <div>
        <h2>Planen Sie ein großes oder anspruchsvolles Bauvorhaben?</h2>
        <p>Das Elementhaus könnte die richtige Wahl sein — sprechen Sie mit uns über Ihr Projekt.</p>
      </div>
      <a class="btn btn-primary" href="../contact.php">Kontakt aufnehmen</a>
    </div>
  </section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
