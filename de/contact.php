<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'de';
$ASSET  = '..';
$ACTIVE = 'contact';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Kontakt | EstNor';
$PAGE_DESC  = 'Kontakt EstNor OÜ — Kurna tee 33, Kiili, 75401 Harjumaa, Estland. Telefon +372 651 6174, E-Mail info@estnor.ee.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Startseite</a> / <span>Kontakt</span></div>
      <span class="eyebrow">Kontakt</span>
      <h1 class="hero-title">Sprechen wir über Ihr Projekt</h1>
      <p class="lead">Ob Neubau oder serielle Fassadensanierung eines Mehrfamilienhauses: Schicken Sie uns die Eckdaten — wir melden uns mit einer ersten Einschätzung zurück.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Kontaktdaten</h2>
        <dl class="contact-dl">
          <div><dt>E-Mail</dt><dd><a href="mailto:info@estnor.ee">info@estnor.ee</a></dd></div>
          <div><dt>Telefon</dt><dd><a href="tel:+3726516174">+372 651 6174</a></dd></div>
          <div><dt>Telefax</dt><dd>+372 651 6074</dd></div>
          <div><dt>Anschrift</dt><dd>EstNor OÜ<br>Kurna tee 33, 75401 Kiili<br>Sepamäe tee 3, Kiili vald<br>Harjumaa, Estland</dd></div>
        </dl>
        <p>Registrikood 10706304 · USt-IdNr. EE100650305.</p>
        <p>Anfragen aus Deutschland beantwortet EstNor auf Deutsch. Gern vereinbaren wir einen Termin oder einen Rückruf.</p>

        <div class="map-frame">
          <iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Kurna+tee+33,+Kiili,+Estonia&output=embed" title="Standort von EstNor"></iframe>
        </div>
      </div>

      <div class="card">
        <h2>Nachricht senden</h2>
        <p id="form-result" hidden></p>
        <form id="contact-form" class="contact-form" novalidate>
          <label>Name *
            <input type="text" name="name" required>
          </label>
          <label>Unternehmen
            <input type="text" name="company">
          </label>
          <label>E-Mail *
            <input type="email" name="email" required>
          </label>
          <label>Telefon
            <input type="text" name="phone">
          </label>
          <label>Betreff
            <select name="subject">
              <option>Elementhäuser</option>
              <option>Modulhäuser</option>
              <option>Serielle Sanierung / Fassadenelemente</option>
              <option>Sonstiges</option>
            </select>
          </label>
          <label>Nachricht *
            <textarea name="message" rows="6" required></textarea>
          </label>
          <label class="hp" aria-hidden="true">Bitte frei lassen
            <input type="text" name="website" tabindex="-1" autocomplete="off">
          </label>
          <button type="submit" class="btn btn-primary">Absenden</button>
          <p class="form-note">Dies ist eine statische Demo-Seite — das Formular ist nicht mit einem Mailserver verbunden. Bitte schreiben Sie direkt an <a href="mailto:info@estnor.ee">info@estnor.ee</a>.</p>
        </form>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
