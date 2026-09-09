<?php
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$LANG   = 'en';
$ASSET  = '..';
$ACTIVE = 'projects';
$T      = load_lang($LANG);
$PAGE_TITLE = 'Projects — EstNor';
$PAGE_DESC  = 'A selection of EstNor timber house and facade-renovation projects across Estonia, Norway and beyond, including the Oslo apartment building and the Loodusmaja environmental building.';
require __DIR__ . '/../partials/head.php';
?>
<section class="section page-hero">
<div class="wrap">
<div class="breadcrumb"><a href="index.php">Home</a> / <span>Projects</span></div>
<span class="eyebrow">Projects</span>
<h1 class="hero-title">New builds and renovations, side by side</h1>
<p class="lead">A selection of the homes, buildings and facade-renovation projects EstNor has delivered or is preparing — across Estonia, Norway, Sweden and beyond.</p>
</div>
</section>
<section class="section">
<div class="wrap">
<a class="card" href="#oslo" style="display:grid; grid-template-columns:1.1fr 1fr; gap:2rem; align-items:center; padding:1.5rem; margin-bottom:1.75rem;">
<div class="project-figure" style="aspect-ratio:16/10;">
<svg preserveaspectratio="xMidYMid slice" viewbox="0 0 400 260">
<rect fill="#13342a" height="260" width="400"></rect>
<rect fill="#e9efe7" height="190" width="90" x="40" y="40"></rect>
<rect fill="#f6f4ee" height="210" width="90" x="150" y="20"></rect>
<rect fill="#e9efe7" height="170" width="90" x="260" y="60"></rect>
<g fill="#1f4d3a" opacity=".8">
<rect height="18" width="18" x="55" y="55"></rect><rect height="18" width="18" x="98" y="55"></rect>
<rect height="18" width="18" x="165" y="40"></rect><rect height="18" width="18" x="207" y="40"></rect>
<rect height="18" width="18" x="275" y="80"></rect><rect height="18" width="18" x="317" y="80"></rect>
</g>
</svg>
</div>
<div id="oslo">
<span class="tag">Oslo, Norway</span>
<h3>Oslo apartment building</h3>
<p>A multi-storey apartment building delivered to Oslo using EstNor's factory-finished modules. Modules were completed inside and out — including wiring, plumbing and heating — before shipping, then joined together on site to form the finished building.</p>
</div>
</a>
<div class="grid cols-3">
<div class="card">
<span class="tag">Tallinn, Estonia</span>
<h3>Loodusmaja environmental building</h3>
<p>Around 8,000 m² of prefabricated facade and roof elements, including factory-installed windows, for one of the largest timber buildings in Estonia.</p>
</div>
<div class="card">
<span class="tag">Sweden</span>
<h3>Element-built family home</h3>
<p>A large family home built using factory-produced exterior and interior elements, assembled on a Swedish site.</p>
</div>
<div class="card">
<span class="tag">Estonia</span>
<h3>KredEx renovation programme</h3>
<p>Twelve apartment buildings renovated with EstNor facade elements as part of Estonia's state pilot programme for serial renovation.</p>
</div>
</div>
<div class="btn-row">
<a class="btn btn-ghost" href="serial-renovation/references.php">See serial renovation references</a>
</div>
</div>
</section>
<section class="section section--dark">
<div class="wrap cta-band">
<div>
<h2>Have a project of your own?</h2>
<p>Tell us about it and we'll suggest the right EstNor build method.</p>
</div>
<a class="btn btn-primary" href="contact.php">Contact EstNor</a>
</div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
