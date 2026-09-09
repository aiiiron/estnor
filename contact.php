<?php
require_once __DIR__ . '/inc/site.php';
require_once __DIR__ . '/inc/i18n.php';

$LANG   = 'et';
$ASSET  = '.';
$ACTIVE = 'contact';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Kontakt | EstNor';
$PAGE_DESC  = 'Kontakt EstNor OÜ — Kurna tee 33, Kiili, 75401 Harjumaa. Telefon +372 651 6174, e-post info@estnor.ee.';
require __DIR__ . '/partials/head.php';
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="index.php">Avaleht</a> / <span>Kontakt</span></div>
      <span class="eyebrow">Kontakt</span>
      <h1 class="hero-title">Räägime sinu projektist</h1>
      <p class="lead">Olgu tegu uue majaga või kortermaja tehaselise renoveerimisega — saada meile hoone põhiandmed ja anname esialgse hinnangu.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2>Kontaktandmed</h2>
        <dl class="contact-dl">
          <div><dt>E-post</dt><dd><a href="mailto:info@estnor.ee">info@estnor.ee</a></dd></div>
          <div><dt>Telefon</dt><dd><a href="tel:+3726516174">+372 651 6174</a></dd></div>
          <div><dt>Faks</dt><dd>+372 651 6074</dd></div>
          <div><dt>Aadress</dt><dd>EstNor OÜ<br>Kurna tee 33, 75401 Kiili<br>Sepamäe tee 3, Kiili vald<br>Harjumaa, Eesti</dd></div>
        </dl>
        <p>Registrikood 10706304 · KMKR nr EE100650305.</p>
        <p>Vastame E–R kell 8–17. Hea meelega leppime kokku kohtumise või tagasihelistamise.</p>

        <div class="map-frame">
          <iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Kurna+tee+33,+Kiili,+Estonia&output=embed" title="EstNori asukoht kaardil"></iframe>
        </div>
      </div>

      <div class="card">
        <h2>Saada sõnum</h2>
        <p id="form-result" hidden></p>
        <form id="contact-form" class="contact-form" novalidate>
          <label>Nimi *
            <input type="text" name="name" required>
          </label>
          <label>Ettevõte
            <input type="text" name="company">
          </label>
          <label>E-post *
            <input type="email" name="email" required>
          </label>
          <label>Telefon
            <input type="text" name="phone">
          </label>
          <label>Teema
            <select name="subject">
              <option>Elementmajad</option>
              <option>Moodulmajad</option>
              <option>Tehaseline renoveerimine / fassaadielemendid</option>
              <option>Muu</option>
            </select>
          </label>
          <label>Sõnum *
            <textarea name="message" rows="6" required></textarea>
          </label>
          <label class="hp" aria-hidden="true">Jäta tühjaks
            <input type="text" name="website" tabindex="-1" autocomplete="off">
          </label>
          <button type="submit" class="btn btn-primary">Saada sõnum</button>
          <p class="form-note">See on staatiline näidisleht — vorm ei ole ühendatud meiliserveriga. Kirjuta otse <a href="mailto:info@estnor.ee">info@estnor.ee</a>.</p>
        </form>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/partials/footer.php'; ?>
