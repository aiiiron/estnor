<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'sv';
$ASSET  = '..';
$ACTIVE = 'contact';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Kontakt | EstNor';
$PAGE_DESC  = 'Kontakta EstNor OÜ — Kurna tee 33, Kiili, 75401 Harjumaa, Estland. Telefon +372 651 6174, e-post info@estnor.ee.';
require __DIR__ . '/../partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Startsida</a> / <span>Kontakt</span></div>
      <span class="eyebrow">Kontakt</span>
      <h1 class="hero-title">Låt oss diskutera ert projekt</h1>
      <p class="lead">Oavsett om det gäller ett nytt trähus eller seriell fasadrenovering av ett flerbostadshus: skicka oss nyckeltalen så återkommer vi med en första bedömning.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Kontaktuppgifter</h2>
        <dl class="contact-dl">
          <div><dt>E-post</dt><dd><a href="mailto:info@estnor.ee">info@estnor.ee</a></dd></div>
          <div><dt>Telefon</dt><dd><a href="tel:+3726516174">+372 651 6174</a></dd></div>
          <div><dt>Fax</dt><dd>+372 651 6074</dd></div>
          <div><dt>Adress</dt><dd>EstNor OÜ<br>Kurna tee 33, 75401 Kiili<br>Sepamäe tee 3, Kiili vald<br>Harjumaa, Estland</dd></div>
        </dl>
        <p>Registrikood 10706304 · Momsregistreringsnummer EE100650305.</p>
        <p>Vi svarar måndag–fredag kl. 8–17. Vi bokar gärna in ett möte eller en återuppringning.</p>

        <div class="map-frame">
          <iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Kurna+tee+33,+Kiili,+Estonia&output=embed" title="EstNors adress på kartan"></iframe>
        </div>
      </div>

      <div class="card">
        <h2>Skicka ett meddelande</h2>
        <p id="form-result" hidden></p>
        <form id="contact-form" class="contact-form" novalidate>
          <label>Namn *
            <input type="text" name="name" required>
          </label>
          <label>Företag
            <input type="text" name="company">
          </label>
          <label>E-post *
            <input type="email" name="email" required>
          </label>
          <label>Telefon
            <input type="text" name="phone">
          </label>
          <label>Ämne
            <select name="subject">
              <option>Elementhus</option>
              <option>Modulhus</option>
              <option>Modernisering / fasadelement</option>
              <option>Annat</option>
            </select>
          </label>
          <label>Meddelande *
            <textarea name="message" rows="6" required></textarea>
          </label>
          <label class="hp" aria-hidden="true">Lämna tomt
            <input type="text" name="website" tabindex="-1" autocomplete="off">
          </label>
          <button type="submit" class="btn btn-primary">Skicka</button>
          <p class="form-note">Detta är en statisk demosida — formuläret är inte kopplat till en e-postserver. Skriv gärna direkt till <a href="mailto:info@estnor.ee">info@estnor.ee</a>.</p>
        </form>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
