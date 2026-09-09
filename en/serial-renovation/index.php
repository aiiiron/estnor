<?php
require_once __DIR__ . '/../../inc/site.php';
require_once __DIR__ . '/../../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '../..';
$ACTIVE = 'renovation';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Serial Renovation — EstNor';
$PAGE_DESC  = 'Serial renovation explained: energy-efficient modernisation of apartment buildings with prefabricated facade and roof elements, based on the Energiesprong principle.';
require __DIR__ . '/../../partials/head.php';
?>
<section class="hero">
<picture aria-hidden="true" class="hero-bg">
<source srcset="../../assets/img/hero.webp" type="image/webp">
<img alt="" decoding="async" fetchpriority="high" height="1230" src="../../assets/img/hero.jpg" width="1844"/>
</source></picture>
<div class="hero-inner wrap">
<div class="breadcrumb"><a href="../index.php">Home</a> / <span>Serial Renovation</span></div>
<span class="eyebrow">Fundamentals</span>
<h1 class="hero-title">
<span>Serial renovation: the building envelope</span>
<span class="hero-accent">comes from the factory.</span>
</h1>
<p class="lead">Serial renovation applies the principle of industrial prefabrication to the energy-efficient modernisation of existing buildings. Instead of coordinating scaffolding, individual trades and the weather on site, facade and roof elements are planned digitally, produced in the factory and installed on site in a short time.</p>
<div class="btn-row">
<a class="btn btn-primary" href="../contact.php">Discuss a project</a>
<a class="btn btn-ghost" href="facade-elements.php">See the facade element</a>
</div>
</div>
</section>
<section class="section">
<div class="wrap split">
<div>
<h2>Where the concept comes from</h2>
<p>The idea goes back to the Dutch <b>Energiesprong</b> principle (since 2013). The goal is fast, standardised and affordable renovation of the existing stock at scale — up to a net-zero standard in operation. In Germany the approach is supported through the Federal Funding for Efficient Buildings (BEG) and KfW programmes.</p>
<p>The decisive lever is the <b>highest possible degree of prefabrication</b>: entire facade modules are made in the factory and delivered to site ready-built — with insulation, windows, ventilation routing and surface.</p>
</div>
<div>
<h2>What this delivers in practice</h2>
<ul class="check">
<li>Much shorter construction time on site — often with tenants in place</li>
<li>Consistent quality thanks to production under factory conditions</li>
<li>Predictable costs through standardised processes and repetition</li>
<li>Less noise, dust and access disruption for residents</li>
<li>No scaffolding for months, fewer people on site</li>
</ul>
</div>
</div>
</section>
<section class="section section--tint">
<div class="wrap">
<div class="section-head center">
<span class="eyebrow">How it works</span>
<h2>From building scan to installed facade</h2>
</div>
<ol class="steps">
<li><h3>Digital survey</h3><p>3D scan of the existing building from the ground and by drone.</p></li>
<li><h3>BIM model</h3><p>A dimensionally accurate building model is created from the point cloud.</p></li>
<li><h3>Engineering &amp; production</h3><p>Precisely fitting elements including windows, connection details and ventilation; series production in the factory.</p></li>
<li><h3>Installation</h3><p>Corner element, row by row, then ventilation, stairwell elements, joints, rainwater and roof.</p></li>
</ol>
</div>
</section>
<section class="section">
<div class="wrap split">
<div>
<span class="eyebrow">Typical target buildings</span>
<h2>Where serial renovation works best</h2>
<p>Apartment buildings from 1950–1979 with standardised floor plans and high energy consumption: linear blocks and large-panel buildings, residential blocks, estates with many identical houses. Similar geometries can be renovated efficiently with recurring element types — a whole neighbourhood rather than a single building.</p>
</div>
<div>
<span class="eyebrow">Funding in Germany</span>
<ul class="check">
<li>BEG funding for renovation to Efficiency House standard</li>
<li>Additional bonus for serial renovation within the BEG</li>
<li>Can be combined with roof storey additions / densification</li>
<li>The funding landscape changes — check current terms before starting a project</li>
</ul>
<div class="callout"><b>Note:</b> funding details and bonus rates should be verified before relying on them (BEG / KfW, as applicable for the relevant programme year).</div>
</div>
</div>
</section>
<section class="section section--alt">
<div class="wrap">
<div class="section-head center">
<span class="eyebrow">Go deeper</span>
<h2>Explore serial renovation at EstNor</h2>
</div>
<div class="grid cols-2">
<a class="card" href="facade-elements.php">
<h3>Facade Elements</h3>
<p>The build-up of EstNor's facade element: timber frame, insulation, windows, ventilation and finished surface — plus how it's installed on site.</p>
</a>
<a class="card" href="references.php">
<h3>References</h3>
<p>The KredEx pilot programme, the Loodusmaja environmental building, and EstNor's first projects planned for Germany.</p>
</a>
</div>
</div>
</section>
<section class="section section--dark">
<div class="wrap cta-band">
<div>
<h2>Getting started with serial renovation?</h2>
<p>EstNor supplies the prefabricated elements — you bring local planning, sales and installation. Let's talk about working together.</p>
</div>
<a class="btn btn-primary" href="../contact.php">Contact EstNor</a>
</div>
</section>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
