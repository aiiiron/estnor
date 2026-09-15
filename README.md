# EstNor — multilingual site concept

A clone of **EstNor** (estnor.ee) — a prefabricated timber-house and
facade-element manufacturer in Kiili, Estonia (est. 2000) — rebuilt on a
modern, fast, dependency-free PHP stack in place of the original
WordPress site.

## Deployment

This repo is pulled directly by a **Hostinger** hosting account (the same
git-based auto-deploy pattern used for `ajaraamat.ee`), which executes the
`.php` files server-side. There is no database and nothing to build —
deploying is pulling the repo, full stop. Content lives in
`content/db/*.json` and is read straight off disk on each request, so a
content change goes live the moment the file is deployed, same as a code
change.

**One-time setup after cloning to Hostinger** — only needed if the site is
deployed into a URL subfolder rather than served at its domain's root:

1. Copy `config.example.php` to `config.php` (same directory) and set
   `base_path` to match where the site actually lives under its domain —
   e.g. `'/estnor-new'` if Hostinger's git deploy "root directory" points
   at a subfolder rather than the domain's own document root. Every
   internal link (nav, footer, language switcher, the root redirect) is
   built from this — get it wrong and every link 404s even though the
   pages themselves render fine.

If the site is served at its domain's root, skip this — `config.php` is
optional and `base_path` defaults to `''` when it's absent.

## Multilingual architecture

Real content in 5 languages (Estonian, English, German, Swedish,
Norwegian) was extracted from a `wget` mirror of the live estnor.ee site —
see `content/extracted/README.md` for how, and its per-language JSON for
the raw source text. Swedish, Norwegian and parts of German are
machine-translated from that real Estonian/English source and are flagged
in their JSON as worth a native-speaker review before relying on them
publicly.

- **Estonian lives at the root** (`/`), matching the real site's own
  convention; **English, German, Swedish and Norwegian each get their own
  folder** (`/en/`, `/de/`, `/sv/`, `/nb/`) — matching estnor.ee's actual
  URL scheme found in its sitemap, so links stay meaningful and shareable
  per language.
- **`inc/i18n.php`** resolves language *only at the root URL*: explicit
  `?lang=` → remembered `lang` cookie → the browser's `Accept-Language`
  header → English if nothing matches. It then 302-redirects into the
  right language folder and sets the cookie so the choice sticks for a
  year. Every other URL is an explicit choice and is never redirected.

## One template per page, one router, content read straight from JSON

Every page exists as a **single shared template** in `pages/`, regardless
of language. A page's own text — hero copy, card titles, checklists, form
labels, everything — lives in `content/db/*.json` as one JSON blob per
(language, page) pair, not hardcoded in PHP. Fixing a layout bug, or
restructuring a section, means editing one file in `pages/` — which is
exactly the maintenance problem this rearchitecture replaced (an earlier
version of this site had the full markup duplicated five times per page,
one per language, and every bug fix had to be applied five times to
match).

The 59 files under the language folders (`about-us/index.php`,
`en/about-us/index.php`, …) are now **one-line routing shims** —
`<?php require __DIR__ . '/../inc/route.php';` (with as many `../` as
needed to reach `inc/`) — that never need to change again once written.
All the actual routing logic lives in two files instead of being
duplicated across all 60:

- **`inc/route.php`** — the shared entry point every shim requires. Reads
  the requested URL itself (`$_SERVER['SCRIPT_NAME']`) to work out the
  language and the page's slug (no per-file variables to keep in sync),
  looks the slug up in `inc/pages.php`, builds the cross-page links that
  page's template needs (`$HOME_HREF`, `$CONTACT_HREF`, and whatever else
  — `$ELEMENT_HREF`, `$FACADE_HREF`, `$PARENT_HREF`, ... — per that
  page's entry) as absolute URLs via `page_url()`, loads its content, and
  hands off to the one real template in `pages/`.
- **`inc/pages.php`** — one entry per page (12 total, independent of
  language): which `pages/*.php` template renders it, which
  `content/db/pages/*.json` file its content comes from, its nav
  `$ACTIVE` key, and any extra cross-page links its template needs beyond
  the two every page gets automatically. Adding a page means one new
  entry here plus its template and content file — not five new shims.
- **`inc/db.php`** — despite the name (left as-is so nothing importing it
  had to change), this is no longer database-backed: `load_lang($code)`
  returns the site-chrome strings (nav, footer, homepage hero) for a
  language and `load_page($slug, $code)` returns one page's own content,
  both by reading the matching `content/db/*.json` file directly and
  caching the decoded result per request, so a page never re-parses the
  same file twice.
- **`content/db/global.json`** and **`content/db/pages/*.json`** are the
  human-editable source of truth AND what actually gets read at request
  time — one file per page, each holding all 5 languages side by side
  (`{"et": {...}, "en": {...}, ...}`). Edit these and deploy; there is no
  separate publish step.
- **`partials/head.php`** and **`partials/footer.php`** render the shared
  header/nav/footer from `$T` (the `load_lang()` result); **`pages/*.php`**
  render each page's own body from `$P` (the `load_page()` result).

The root `/index.php` is the one page that stays a real, standalone file
rather than a routing shim — it alone runs the language-detection /
redirect logic (`i18n_resolve_root()`), which only makes sense at the
one URL a first-time visitor actually lands on.

## Structure

```
index.php                          Root — language detection + Estonian home (the one
                                    page that isn't a routing shim; see above)
en/ , de/ , sv/ , nb/               Each language's one-line routing shims (about-us/,
                                    products/, ...) — all require inc/route.php
about-us/ , products/ , ...           Estonian routing shims (same page set, at root)
pages/*.php                         The actual page templates — one per page, shared by
                                    every language
inc/route.php                      The router every shim requires — see above
inc/pages.php                      The slug -> template/content/links table the router reads
inc/site.php                       Company facts (address, VAT, register code, ...);
                                    base_path()/url()/page_url() for building every link
inc/i18n.php                       Language detection + nav_active() helper
inc/db.php                         load_lang() / load_page() — reads content/db/*.json
                                    directly (see "content read straight from JSON" above)
config.example.php                 base_path template — copy to config.php, fill in
                                    (only needed for a subfolder deployment)
content/db/global.json             Nav/footer/home strings, all 5 languages
content/db/pages/*.json            Each page's own content, all 5 languages
partials/{head,footer,home}.php    Shared header/nav/head, footer, homepage layout
assets/                            CSS, JS, images (shared by every language)
content/extracted/                 Real scraped text per language (source material this
                                    was originally built from — see its own README)
_source/                           The sitemap, URL list and page-text mirror the
                                    content was extracted from (kept for provenance)
```

`inc/`, `partials/`, `content/` and `_source/` each carry a `.htaccess`
denying direct HTTP access — PHP's own `require`/`include` calls are
unaffected, only browser requests to those paths are blocked.

## Local preview

```
php -S localhost:8000
```

then open `http://localhost:8000/`. No setup step needed — content is
read straight from `content/db/*.json`. Force a language while testing
with `?lang=en` (etc.) on the root URL, or clear the `lang` cookie to see
detection run again.
