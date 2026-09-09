<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '..';
$ACTIVE = 'gallery';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Gallery — EstNor';
$PAGE_DESC  = "A look inside EstNor's production facility and finished timber houses and facade elements.";
require __DIR__ . '/../partials/head.php';
?>
<section class="section page-hero">
<div class="wrap">
<div class="breadcrumb"><a href="index.php">Home</a> / <span>Gallery</span></div>
<span class="eyebrow">Inside the factory, and out on site</span>
<h1 class="hero-title">Production, houses and facade elements</h1>
<p class="lead">A visual look at production in Kiili, the houses that leave our factory floor, and the facade elements shipped for serial renovation.</p>
</div>
</section>
<section class="section">
<div class="wrap">
<div class="gallery-grid">
<div class="tile tall">
<svg preserveaspectratio="xMidYMid slice" viewbox="0 0 300 640"><rect fill="#13342a" height="640" width="300"></rect><g fill="#e9efe7" opacity=".9"><rect height="18" width="220" x="40" y="60"></rect><rect height="18" width="220" x="40" y="100"></rect><rect height="18" width="220" x="40" y="140"></rect></g><rect fill="#1f4d3a" height="380" width="220" x="40" y="200"></rect></svg>
<div class="cap">Production floor</div>
</div>
<div class="tile">
<svg preserveaspectratio="xMidYMid slice" viewbox="0 0 300 300"><rect fill="#1f4d3a" height="300" width="300"></rect><polygon fill="#e9efe7" points="30,220 150,110 270,220"></polygon></svg>
<div class="cap">Element assembly</div>
</div>
<div class="tile">
<svg preserveaspectratio="xMidYMid slice" viewbox="0 0 300 300"><rect fill="#dd8a2c" height="300" width="300"></rect><g fill="#13342a" opacity=".85"><rect height="30" width="240" x="30" y="60"></rect><rect height="30" width="240" x="30" y="110"></rect><rect height="30" width="240" x="30" y="160"></rect></g></svg>
<div class="cap">Facade elements ready to ship</div>
</div>
<div class="tile">
<svg preserveaspectratio="xMidYMid slice" viewbox="0 0 300 300"><rect fill="#13342a" height="300" width="300"></rect><rect fill="#f6f4ee" height="180" width="180" x="60" y="60"></rect></svg>
<div class="cap">Finished module</div>
</div>
<div class="tile">
<svg preserveaspectratio="xMidYMid slice" viewbox="0 0 300 300"><rect fill="#e9efe7" height="300" width="300"></rect><circle cx="150" cy="150" fill="#1f4d3a" r="90"></circle></svg>
<div class="cap">Interior finishing</div>
</div>
<div class="tile tall">
<svg preserveaspectratio="xMidYMid slice" viewbox="0 0 300 640"><rect fill="#1f4d3a" height="640" width="300"></rect><rect fill="#e9efe7" height="300" width="220" x="40" y="300"></rect><polygon fill="#f6f4ee" points="20,300 150,180 280,300"></polygon></svg>
<div class="cap">Delivered house</div>
</div>
</div>
</div>
</section>
<section class="section section--dark">
<div class="wrap cta-band">
<div>
<h2>Want to see more?</h2>
<p>Browse a full project write-up, or get in touch to arrange a factory visit.</p>
</div>
<a class="btn btn-primary" href="projects.php">View projects</a>
</div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
