<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '../..';
$ACTIVE = 'houses';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Houses — EstNor';
$PAGE_DESC  = 'EstNor builds element houses and modular houses at our factory in Kiili, Estonia.';
require __DIR__ . '/../../partials/head.php';
?>
<section class="section page-hero">
<div class="wrap">
<div class="breadcrumb"><a href="../index.php">Home</a> / <span>Houses</span></div>
<span class="eyebrow">Two build methods, one factory standard</span>
<h1 class="hero-title">Choose how your house is built</h1>
<p class="lead">Every EstNor house begins indoors. Choose the build method that fits your project — architecture, timeline and budget all play a part.</p>
</div>
</section>
<section class="section">
<div class="wrap grid cols-2">
<div class="house-card" style="min-height:400px;">
<div class="art">
<svg height="100%" preserveaspectratio="xMidYMid slice" viewbox="0 0 400 360" width="100%">
<rect fill="#1f4d3a" height="360" width="400"></rect>
<g fill="#e9efe7" opacity=".9"><rect height="130" width="280" x="60" y="150"></rect><polygon points="40,150 200,70 360,150"></polygon></g>
<g fill="#13342a"><rect height="80" width="40" x="180" y="200"></rect></g>
</svg>
</div>
<div class="content">
<span class="tag">Factory built</span>
<h3>Element Houses</h3>
<p>Walls, roofs and floors built indoors, then assembled on site — with no real limit on size or architectural complexity.</p>
<div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" href="../houses/element-houses.php" style="border-color:#fff;color:#fff;">Learn more</a></div>
</div>
</div>
<div class="house-card" style="min-height:400px;">
<div class="art">
<svg height="100%" preserveaspectratio="xMidYMid slice" viewbox="0 0 400 360" width="100%">
<rect fill="#13342a" height="360" width="400"></rect>
<g fill="#e9efe7" opacity=".92"><rect height="140" width="130" x="55" y="140"></rect><rect height="180" width="130" x="215" y="100"></rect></g>
<g fill="#dd8a2c"><rect height="8" width="130" x="55" y="140"></rect><rect height="8" width="130" x="215" y="100"></rect></g>
</svg>
</div>
<div class="content">
<span class="tag">Modular</span>
<h3>Modular Houses</h3>
<p>Fully finished modules — including electrics, plumbing and heating — joined together on site into the finished building.</p>
<div class="btn-row" style="margin-top:1rem;"><a class="btn btn-ghost" href="../houses/modular-houses.php" style="border-color:#fff;color:#fff;">Learn more</a></div>
</div>
</div>
</div>
</section>
<section class="section section--tint">
<div class="wrap">
<div class="section-head center">
<span class="eyebrow">Which method is right for you?</span>
<h2>Comparing the two build methods</h2>
</div>
<div class="grid cols-2">
<div class="card">
<h3>Element Houses</h3>
<p>Best for: large or architecturally complex homes and apartment buildings. Indoor-built walls, roofs and terraces assembled on site.</p>
</div>
<div class="card">
<h3>Modular Houses</h3>
<p>Best for: fast-track projects — private houses, townhouses, apartment and public buildings — with &gt;90% of work done in-factory.</p>
</div>
</div>
</div>
</section>
<section class="section section--alt">
<div class="wrap">
<div class="section-head">
<span class="eyebrow">Already have a building?</span>
<h2>EstNor also renovates, not just builds new</h2>
<p class="lead">The same factory precision applies to serial renovation: prefabricated facade elements that upgrade an existing apartment building in weeks.</p>
</div>
<div class="btn-row">
<a class="btn btn-ghost" href="../serial-renovation/index.php">What is serial renovation?</a>
</div>
</div>
</section>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
