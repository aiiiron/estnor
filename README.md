# EstNor — multilingual site concept

A clone of **EstNor** (estnor.ee) — a prefabricated timber-house and
facade-element manufacturer in Kiili, Estonia (est. 2000) — rebuilt on a
modern, fast PHP stack in place of the original WordPress site.

## Deployment

This repo is pulled directly by a **Hostinger** hosting account (the same
git-based auto-deploy pattern used for `ajaraamat.ee`), which executes the
`.php` files server-side. There is no build step and no database — pages
render on request from plain PHP arrays.

## Multilingual architecture

Real content in 5 languages (Estonian, English, German, Swedish,
Norwegian) was extracted from a `wget` mirror of the live estnor.ee site —
see `content/extracted/README.md` for how, and its per-language JSON for
the raw source text.

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
- **`lang/<code>.php`** returns one array per language: nav labels,
  footer strings, and page content, looked up as `$T['nav']`,
  `$T['home']['h1']`, etc. `partials/head.php` and `partials/footer.php`
  render the shared header/nav/footer from that array, so every page in
  every language shares one template instead of duplicating markup.
- **Only the homepage is fully translated into all 5 languages so far.**
  Every inner page (Houses, Serial Renovation, Gallery, …) exists only in
  English today; the other languages' nav/footer links point at the
  English version until each section is translated and built out —
  visible in each `lang/<code>.php` file's `_note`.

## Structure

```
index.php                          Root — language detection + Estonian home
en/ , de/ , sv/ , nb/               Each language's home (+ full site under en/)
inc/site.php                       Company facts (address, VAT, register code, ...)
inc/i18n.php                       Language detection + load_lang()/nav_active() helpers
lang/{et,en,de,sv,nb}.php           Per-language nav, footer, and page strings
partials/{head,footer,home}.php    Shared header/nav/head, footer, homepage layout
assets/                            CSS, JS, images (shared by every language)
content/extracted/                 Real scraped text per language (source material,
                                    not served — see its own README)
_source/                           The sitemap, URL list and page-text mirror this was
                                    built from (kept for provenance; not linked from
                                    any page)
```

`inc/`, `lang/`, `partials/`, `content/` and `_source/` each carry a
`.htaccess` denying direct HTTP access — PHP's own `require`/`include`
calls are unaffected, only browser requests to those paths are blocked.

## Local preview

```
php -S localhost:8000
```

then open `http://localhost:8000/`. Force a language while testing with
`?lang=en` (etc.) on the root URL, or clear the `lang` cookie to see
detection run again.
