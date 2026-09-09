<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'nb';
$ASSET  = '..';
$ACTIVE = 'contact';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Kontakt | EstNor';
$PAGE_DESC  = 'Kontakt EstNor OÜ — Kurna tee 33, Kiili, 75401 Harjumaa, Estland. Telefon +372 651 6174, e-post info@estnor.ee.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Forsiden</a> / <span>Kontakt</span></div>
      <span class="eyebrow">Kontakt</span>
      <h1 class="hero-title">La oss snakke om prosjektet ditt</h1>
      <p class="lead">Enten det er et nytt trehus eller seriell fasaderehabilitering av et leilighetsbygg: send oss nøkkeltallene, så kommer vi tilbake med en første vurdering.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Kontaktinformasjon</h2>
        <dl class="contact-dl">
          <div><dt>E-post</dt><dd><a href="mailto:info@estnor.ee">info@estnor.ee</a></dd></div>
          <div><dt>Telefon</dt><dd><a href="tel:+3726516174">+372 651 6174</a></dd></div>
          <div><dt>Faks</dt><dd>+372 651 6074</dd></div>
          <div><dt>Adresse</dt><dd>EstNor OÜ<br>Kurna tee 33, 75401 Kiili<br>Sepamäe tee 3, Kiili vald<br>Harjumaa, Estland</dd></div>
        </dl>
        <p>Registrikood 10706304 · MVA-nummer EE100650305.</p>
        <p>Vi svarer mandag–fredag kl. 8–17. Vi avtaler gjerne et møte eller en tilbakeringing.</p>

        <div class="map-frame">
          <iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Kurna+tee+33,+Kiili,+Estonia&output=embed" title="EstNors adresse på kartet"></iframe>
        </div>
      </div>

      <div class="card">
        <h2>Send en melding</h2>
        <p id="form-result" hidden></p>
        <form id="contact-form" class="contact-form" novalidate>
          <label>Navn *
            <input type="text" name="name" required>
          </label>
          <label>Firma
            <input type="text" name="company">
          </label>
          <label>E-post *
            <input type="email" name="email" required>
          </label>
          <label>Telefon
            <input type="text" name="phone">
          </label>
          <label>Emne
            <select name="subject">
              <option>Elementhus</option>
              <option>Modulhus</option>
              <option>Modernisering / fasadeelementer</option>
              <option>Annet</option>
            </select>
          </label>
          <label>Melding *
            <textarea name="message" rows="6" required></textarea>
          </label>
          <label class="hp" aria-hidden="true">La stå tomt
            <input type="text" name="website" tabindex="-1" autocomplete="off">
          </label>
          <button type="submit" class="btn btn-primary">Send</button>
          <p class="form-note">Dette er en statisk demoside — skjemaet er ikke koblet til en e-postserver. Skriv gjerne direkte til <a href="mailto:info@estnor.ee">info@estnor.ee</a>.</p>
        </form>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
