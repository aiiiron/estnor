# Extracted content (raw source of truth)

Real text pulled from the `estnor-text.zip` mirror (`wget -i estnor-urls.txt`,
Sept 2026). One JSON file per **actual** language, keyed by the crawled URL
path.

## Language detection

Language is taken from the page's own theme marker
(`class="... language-xx ..."` on the page wrapper), **not** the URL prefix.
The real site's URL routing turned out to be inconsistent — WPML/Polylang
fallback and leftover routes from an older URL scheme mean some `/en/...`
and `/sv/...` paths actually serve Swedish, Norwegian or Estonian content
under a mismatched prefix. Trusting the page's own language marker instead
of the URL avoided importing 20+ mislabelled pages. Page counts came out
close to the sitemap's per-language totals (et 48, de 41, sv 27, nb 25,
en 24 vs. the sitemap's et 48/de 45/sv 61/nb 62/en 60 — the sitemap counts
include stale/duplicate legacy URLs that no longer resolve to distinct
content).

## Per-page record shape

```json
{
  "/majad/elementmaja/": {
    "title": "Elementmaja | EstNor",
    "meta": "<meta name=description> content, if present",
    "crawled_path": "majad/elementmaja/index.html",
    "lines": ["visible text line 1", "visible text line 2", "..."]
  }
}
```

`lines` is the page's visible body text (header/nav/footer already
stripped), in document order, one entry per block-level chunk — not yet
cleaned into prose or mapped onto this site's page templates. A few lines
recur on nearly every page (e.g. the "Get in touch" CTA sidebar) and are
boilerplate, not page-specific content.

## What this is for

This is intermediate, working data — the real EstNor copy in all 5
languages, safely versioned — to be hand-woven into the site's actual
page templates (see `/`, `/about-us/`, `/houses/`, `/serial-renovation/`,
etc.) as that work proceeds language by language. It is not meant to be
served directly.
