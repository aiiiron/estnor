<?php
/**
 * pages/contact.php — shared body template for the Contact page. Caller
 * sets $LANG/$ASSET/$ACTIVE, requires partials/head.php, and defines
 * $P = load_page('contact', $LANG) plus $HOME_HREF.
 *
 * The Google Maps embed URL and mailto address are not translatable
 * content — they come from $SITE (inc/site.php), already loaded by every
 * page that reaches here.
 */
?>

  <section class="section page-hero">
    <div class="wrap">
      <div class="breadcrumb"><a href="<?= e($HOME_HREF) ?>"><?= e($P['hero']['crumb']) ?></a> / <span><?= e($P['hero']['label']) ?></span></div>
      <span class="eyebrow"><?= e($P['hero']['eyebrow']) ?></span>
      <h1 class="hero-title"><?= e($P['hero']['h1']) ?></h1>
      <p class="lead"><?= e($P['hero']['lead']) ?></p>
    </div>
  </section>

  <section class="section">
    <div class="wrap split">
      <div>
        <h2><?= e($P['contact_heading']) ?></h2>
        <dl class="contact-dl">
          <div><dt><?= e($P['labels']['email']) ?></dt><dd><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a></dd></div>
          <div><dt><?= e($P['labels']['phone']) ?></dt><dd><a href="tel:<?= e($SITE['contact']['phone_href']) ?>"><?= e($SITE['contact']['phone']) ?></a></dd></div>
          <div><dt><?= e($P['labels']['fax']) ?></dt><dd><?= e($SITE['contact']['fax']) ?></dd></div>
          <div><dt><?= e($P['labels']['address']) ?></dt><dd><?= implode('<br>', array_map('e', $P['address_lines'])) ?></dd></div>
        </dl>
        <p><?= e($P['registry_note']) ?></p>
        <p><?= e($P['office_hours']) ?></p>

        <div class="map-frame">
          <iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Kurna+tee+33,+Kiili,+Estonia&output=embed" title="<?= e($P['map_title']) ?>"></iframe>
        </div>
      </div>

      <div class="card">
        <h2><?= e($P['form_heading']) ?></h2>
        <p id="form-result" hidden></p>
        <form id="contact-form" class="contact-form" novalidate>
          <label><?= e($P['form']['name']) ?>
            <input type="text" name="name" required>
          </label>
          <label><?= e($P['form']['company']) ?>
            <input type="text" name="company">
          </label>
          <label><?= e($P['form']['email']) ?>
            <input type="email" name="email" required>
          </label>
          <label><?= e($P['form']['phone']) ?>
            <input type="text" name="phone">
          </label>
          <label><?= e($P['form']['subject']) ?>
            <select name="subject">
<?php foreach ($P['subject_options'] as $opt): ?>
              <option><?= e($opt) ?></option>
<?php endforeach; ?>
            </select>
          </label>
          <label><?= e($P['form']['message']) ?>
            <textarea name="message" rows="6" required></textarea>
          </label>
          <label class="hp" aria-hidden="true"><?= e($P['form']['hp']) ?>
            <input type="text" name="website" tabindex="-1" autocomplete="off">
          </label>
          <button type="submit" class="btn btn-primary"><?= e($P['form']['submit']) ?></button>
          <p class="form-note"><?= e($P['form_note_pre']) ?><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a><?= e($P['form_note_post']) ?></p>
        </form>
      </div>
    </div>
  </section>
