<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '..';
$ACTIVE = 'contact';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Contact — EstNor';
$PAGE_DESC  = 'Contact EstNor — Kurna tee 33, Kiili, Harju County, Estonia. Phone +372 651 6174, email info@estnor.ee.';
require __DIR__ . '/../partials/head.php';
?>
<section class="section page-hero">
<div class="wrap">
<div class="breadcrumb"><a href="index.php">Home</a> / <span>Contact</span></div>
<span class="eyebrow">Contact</span>
<h1 class="hero-title">Let's talk about your project</h1>
<p class="lead">Whether it's a new timber house or a serial facade renovation: send us the key details — building type, size, timeframe — and we'll come back with an initial assessment.</p>
</div>
</section>
<section class="section">
<div class="wrap split">
<div>
<h2>Contact details</h2>
<dl class="contact-dl">
<div><dt>Email</dt><dd><a href="mailto:info@estnor.ee">info@estnor.ee</a></dd></div>
<div><dt>Phone</dt><dd><a href="tel:+3726516174">+372 651 6174</a></dd></div>
<div><dt>Mobile</dt><dd><a href="tel:+3725060596">+372 506 0596</a></dd></div>
<div><dt>Address</dt><dd>EstNor OÜ<br/>Kurna tee 33, 75401 Kiili<br/>Harju maakond, Estonia</dd></div>
</dl>
<p>Registry code 10706304 · VAT EE100650305 — Estonian e-Business Register.</p>
<p>Office hours: Mon–Fri, 08:00–17:00 EET. We're happy to arrange a meeting or a call back.</p>
<div class="map-frame">
<iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Kurna+tee+33,+Kiili,+Estonia&amp;output=embed" title="EstNor location map"></iframe>
</div>
</div>
<div class="card">
<h2>Send a message</h2>
<p hidden="" id="form-result"></p>
<form class="contact-form" id="contact-form" novalidate="">
<label>Full name *
            <input name="name" required="" type="text"/>
</label>
<label>Company
            <input name="company" type="text"/>
</label>
<label>Email *
            <input name="email" required="" type="email"/>
</label>
<label>Phone
            <input name="phone" type="text"/>
</label>
<label>Subject
            <select name="subject">
<option>Element houses</option>
<option>Modular houses</option>
<option>Serial renovation / facade elements</option>
<option>Something else</option>
</select>
</label>
<label>Message *
            <textarea name="message" required="" rows="6"></textarea>
</label>
<label aria-hidden="true" class="hp">Leave blank
            <input autocomplete="off" name="website" tabindex="-1" type="text"/>
</label>
<button class="btn btn-primary" type="submit">Send message</button>
<p class="form-note">This is a static demo site — the form isn't wired to a mail server. Please email <a href="mailto:info@estnor.ee">info@estnor.ee</a> directly.</p>
</form>
</div>
</div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
