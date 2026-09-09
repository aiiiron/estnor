# EstNor — modern site concept

A modern, static clone of the **EstNor** (estnor.ee) site structure and content:
EstNor OÜ is an Estonian manufacturer of element, handcrafted log and modular
timber houses, founded in 2000 in Kiili, Harju County, exporting mainly to
Norway, Sweden and Estonia.

## Important note on sourcing

This session's sandboxed network could not reach `estnor.ee` (or any
non-allowlisted domain) directly, so the live HTML, photos and logo file
could not be scraped or copied. Instead:

- **Site structure and copy** were reconstructed from public search-indexed
  snippets of estnor.ee/estnor.no pages, plus the Estonian business
  registry (Ariregister/Inforegister), to keep the page hierarchy, company
  facts (founding date, address, export markets, certifications, etc.) and
  navigation faithful to the real site.
- **Visual design is an original modern redesign** — a Nordic-timber colour
  palette (deep pine green, warm amber/wood accent, cream background), a
  recreated wordmark/mark (not the real EstNor logo file, which wasn't
  reachable), and hand-built SVG illustrations in place of scraped photos.

If you can share the actual logo file or photos, drop them into
`assets/img/` and I'll wire them in, and I'm happy to adjust the palette to
match the real brand exactly if you can confirm it.

## Structure

```
index.html                     Home
about-us/index.html            Company profile & history
about-us/furniture.html        Furniture procurement
about-us/suppliers.html        Suppliers & co-operators
houses/index.html              Houses overview
houses/element-houses.html     Element houses
houses/log-houses.html         Handcrafted log houses
houses/modular-houses.html     Modular houses
serial-renovation.html         Renovation with factory elements
gallery.html                   Production/houses gallery
projects.html                  Featured projects (incl. Oslo apartment building)
contact.html                   Contact details, map embed, contact form
assets/css/style.css           Shared design system
assets/js/main.js              Mobile nav, scroll-reveal, header shadow
assets/img/                    Logo mark & favicon (SVG)
```

Plain HTML/CSS/JS — no build step. All internal links and asset references
use relative paths, so the site works both at a domain root and under a
project subpath (e.g. GitHub Pages' `/estnor/`). Serve locally with any
static server, e.g.:

```
python3 -m http.server 8000
```

then open `http://localhost:8000/`.

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
