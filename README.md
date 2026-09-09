# EstNor — multilingual site concept

A clone of **EstNor** (estnor.ee) — a prefabricated timber-house and
facade-element manufacturer in Kiili, Estonia (est. 2000) — rebuilt on a
modern, fast PHP + MySQL stack in place of the original WordPress site.

## Deployment

This repo is pulled directly by a **Hostinger** hosting account (the same
git-based auto-deploy pattern used for `ajaraamat.ee`), which executes the
`.php` files server-side.

**One-time setup after cloning to Hostinger:**

1. hPanel → Databases → MySQL Databases → create a database and a user,
   attach the user to the database.
2. Copy `config.example.php` to `config.php` (same directory) and fill in
   the host/database/user/password Hostinger gave you. `config.php` is
   gitignored — it holds real credentials and is never committed.
3. Set `base_path` in `config.php` to match where the site actually lives
   under its domain: `''` if it's served at the domain's root, or e.g.
   `'/estnor-new'` if Hostinger's git deploy "root directory" points at a
   subfolder rather than the domain's own document root. Every internal
   link (nav, footer, language switcher, the root redirect) is built from
   this — get it wrong and every link 404s even though the pages
   themselves render fine.
4. Load the database — two ways, pick whichever you have access to:
   - **With SSH:** `php db/migrate.php`. Creates the tables and loads
     every language's content from `content/db/*.json`.
   - **Without SSH:** hPanel → Databases → phpMyAdmin → select your
     database → Import → choose `db/seed.sql` → Go. Same content, as a
     plain SQL file phpMyAdmin can run directly — no PHP CLI needed.
5. Re-run whichever method you used any time a file under `content/db/`
   changes — both are upserts, safe to run repeatedly. If you edit
   `content/db/*.json` and only have phpMyAdmin access, regenerate
   `db/seed.sql` first (`php db/generate_seed.php`, run locally where you
   do have PHP) and re-import it.

Local preview needs no MySQL server: `config.php` can point at a local
SQLite file instead (see the comment in `config.example.php`) — the app
is written against plain PDO, so the same code runs against either.
`db/seed.sql` is MySQL-specific (used only for the phpMyAdmin import
path above), so local SQLite preview always uses `db/migrate.php`.

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

## One template per page, content from the database

Every page exists as a **single shared template** in `pages/`, regardless
of language. A page's own text — hero copy, card titles, checklists, form
labels, everything — lives in the database as one JSON blob per
(language, page) pair, not hardcoded in PHP. The 60 files under the
language folders (`about-us/index.php`, `en/about-us/index.php`, …) are
now thin routing shims of about a dozen lines each: they set which
language and asset path apply, load that language's content, and hand off
to the one real template. Fixing a layout bug, or restructuring a
section, now means editing one file in `pages/` instead of five nearly
identical copies — which is exactly the maintenance problem this
rearchitecture replaced (an earlier version of this site had the full
markup duplicated five times per page, and every bug fix had to be
applied five times to match).

- **`inc/db.php`** — a thin PDO wrapper. `load_lang($code)` returns the
  site-chrome strings (nav, footer, homepage hero) for a language;
  `load_page($slug, $code)` returns one page's own content. Both read
  from the `i18n_strings` table and cache per request, so a page never
  issues more than two queries.
- **`content/db/global.json`** and **`content/db/pages/*.json`** are the
  human-editable source of truth, one file per page, each holding all 5
  languages side by side (`{"et": {...}, "en": {...}, ...}`). Edit these
  and re-run `db/migrate.php` to publish a change — never edit the
  database rows directly, or the next migrate will overwrite them.
- **`partials/head.php`** and **`partials/footer.php`** render the shared
  header/nav/footer from `$T` (the `load_lang()` result); **`pages/*.php`**
  render each page's own body from `$P` (the `load_page()` result).

## Structure

```
index.php                          Root — language detection + Estonian home
en/ , de/ , sv/ , nb/               Each language's routing shims (about-us/, houses/, ...)
about-us/ , houses/ , ...           Estonian routing shims (same page set, at root)
pages/*.php                         The actual page templates — one per page, shared by
                                    every language
inc/site.php                       Company facts (address, VAT, register code, ...)
inc/i18n.php                       Language detection + nav_active() helper
inc/db.php                         PDO connection + load_lang() / load_page()
config.example.php                 DB connection template — copy to config.php, fill in
db/schema.sql                      Table definitions (documentation; migrate.php also
                                    creates them)
db/migrate.php                     Loads content/db/*.json into the database
content/db/global.json             Nav/footer/home strings, all 5 languages
content/db/pages/*.json            Each page's own content, all 5 languages
partials/{head,footer,home}.php    Shared header/nav/head, footer, homepage layout
assets/                            CSS, JS, images (shared by every language)
content/extracted/                 Real scraped text per language (source material this
                                    was originally built from — see its own README)
_source/                           The sitemap, URL list and page-text mirror the
                                    content was extracted from (kept for provenance)
```

`inc/`, `partials/`, `content/`, `db/` and `_source/` each carry a
`.htaccess` denying direct HTTP access — PHP's own `require`/`include`
calls are unaffected, only browser requests to those paths are blocked.

## Local preview

```
cp config.example.php config.php
# edit config.php: 'dsn' => 'sqlite:' . __DIR__ . '/db/dev.sqlite', 'user' => null, 'pass' => null,
php db/migrate.php
php -S localhost:8000
```

then open `http://localhost:8000/`. Force a language while testing with
`?lang=en` (etc.) on the root URL, or clear the `lang` cookie to see
detection run again.
