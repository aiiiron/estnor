<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '../..';
$ACTIVE = 'suppliers';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Suppliers & Co-operators — EstNor';
$PAGE_DESC  = "EstNor's material suppliers, logistics partners and certification bodies supporting its timber house and facade element production.";
require __DIR__ . '/../../partials/head.php';
?>
<section class="section page-hero">
<div class="wrap">
<div class="breadcrumb"><a href="../index.php">Home</a> / <a href="../about-us/index.php">About Us</a> / <span>Suppliers &amp; Co-operators</span></div>
<span class="eyebrow">Built on trusted partnerships</span>
<h1 class="hero-title">Who EstNor builds with</h1>
<p class="lead">Quality timber construction depends on a reliable network of material suppliers, logistics partners and certification bodies — for new houses and for facade renovation elements alike.</p>
</div>
</section>
<section class="section">
<div class="wrap">
<div class="grid cols-3">
<div class="card">
<h3>Timber &amp; materials</h3>
<p>Sustainably sourced pine and construction materials, including mineral wool insulation and energy-efficient PVC windows, meeting EU building standards.</p>
</div>
<div class="card">
<h3>Logistics partners</h3>
<p>Shipping and haulage partners moving completed elements and modules from Kiili across the Baltic Sea and overland — within the EU, without customs formalities.</p>
</div>
<div class="card">
<h3>Certification bodies</h3>
<p>ISO 9001 quality management, CE marking and European Technical Assessment (EOTA), plus the Ü-mark for use in Germany.</p>
</div>
</div>
</div>
</section>
<section class="section section--alt">
<div class="wrap">
<div class="section-head">
<span class="eyebrow">Memberships</span>
<h2>Industry &amp; trade bodies</h2>
</div>
<ul class="check">
<li>Estonian Woodhouse Association (Puitmajaliit)</li>
<li>Kiili Entrepreneurs Union</li>
<li>Norwegian-Estonian Chamber of Commerce</li>
</ul>
</div>
</section>
<section class="section section--dark">
<div class="wrap cta-band">
<div>
<h2>Building with EstNor?</h2>
<p>Ask your project contact about our suppliers, certification, and logistics for your specific market.</p>
</div>
<a class="btn btn-primary" href="../contact.php">Get in touch</a>
</div>
</section>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
