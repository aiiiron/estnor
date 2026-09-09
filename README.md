# EstNor — site concept

A static clone of the **EstNor** (estnor.ee) site structure and content:
EstNor OÜ is an Estonian manufacturer of prefabricated element and modular
timber houses, and of prefabricated facade elements for **serial renovation**,
founded in 2000 in Kiili, Harju County, exporting mainly to Norway, Sweden,
Estonia and the DACH region.

## Design system

The visual design is ported from **seriell-sanierung.de** — EstNor's own
German-market marketing site for serial facade renovation
(`github.com/aiiiron/seriell-sanierung`) — so the whole site shares one
look: the same colour tokens (deep spruce green `#1f4d3a`, warm ochre accent
`#dd8a2c`, warm paper background), the same type pairing (Bricolage
Grotesque for display, Inter for body text, an italic EB Garamond accent in
hero titles), and the same component set (`.wrap`, `.section`/`--alt`/`--tint`/
`--dark`, `.card`, `.steps`, `.check`, `.buildup`, `.panel-stack`,
`.project-card`, `.cta-band`, `.contact-dl`/`.contact-form`, `.foot-grid`,
the checkbox-only mobile nav). `assets/css/style.css` documents this in
full; a short "EstNor extensions" section at the bottom adds the few
components that site didn't need (dropdown sub-nav, breadcrumbs, a history
timeline, the image gallery) in the same token system.

The real EstNor logo (`assets/img/estnor-logo-rgb.png` /
`logo-mono-white-small.png`) and the real hero photograph
(`assets/img/hero.jpg` / `.webp`) are copied from that same repo — both are
genuine EstNor marketing assets, not recreations.

**Furniture and handcrafted log houses have been dropped** from this site
(per request) — EstNor's product range here is Element Houses, Modular
Houses, and Serial Renovation facade elements.

## Structure

```
index.html                              Home
about-us/index.html                     Company profile, history, certifications
about-us/suppliers.html                 Suppliers & co-operators
houses/index.html                       Houses overview
houses/element-houses.html              Element houses
houses/modular-houses.html              Modular houses
serial-renovation/index.html            What is serial renovation? (concept, benefits, process, funding)
serial-renovation/facade-elements.html  The facade element: build-up, prefabrication, installation, logistics
serial-renovation/references.html       KredEx pilot programme, Loodusmaja, first export projects
gallery.html                            Production / houses / elements gallery
projects.html                           Featured new-build & renovation projects
contact.html                            Contact details, map embed, contact form
assets/css/style.css                    Shared design system (see above)
assets/js/main.js                       Mobile nav close-on-click, demo contact form
assets/img/                             Real EstNor logo, hero photo, favicon
```

All internal links and asset references use relative paths, so the site
works both at a domain root and under a project subpath (e.g. GitHub Pages'
`/estnor/`). Plain HTML/CSS/JS — no build step. Serve locally with any
static server, e.g.:

```
python3 -m http.server 8000
```

then open `http://localhost:8000/`.

## Content sourcing

Company facts, product descriptions and the serial-renovation content are
drawn from public estnor.ee/estnor.no pages, the Estonian business registry
(Registrikood 10706304, VAT EE100650305), and the copy already written for
seriell-sanierung.de. Where this session's network couldn't reach a source
directly, content was reconstructed from indexed search snippets — flagged
inline where it matters.

## Deployment (GitHub Pages)

A workflow at `.github/workflows/deploy-pages.yml` publishes this site to
GitHub Pages on every push to `main` or `claude/estnor-website-clone-ayyetv`
(and can be run manually via **Actions → Deploy to GitHub Pages → Run
workflow**). It uploads the repo root as the Pages artifact — no build step
required.

**One-time setup** (repo admin, do this once): go to
**Settings → Pages** and set **Source** to **GitHub Actions**. After that,
the workflow deploys automatically on every push, and the Pages URL shown
there (typically `https://<owner>.github.io/<repo>/`) stays up to date.
