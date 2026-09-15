# Reference project photos

Photos for the References page (and the homepage's "3 latest" teaser) are
**not stored in this git repo** — there can be many per project, and
pushing them through git on every deploy is slow. Upload them straight to
the server instead (FTP, or your host's file manager), directly into the
matching folder below.

## Folders

Each reference project already has its own folder here, named to match its
`slug` in `content/db/references.json`:

- `stroomi-rannahoone/`
- `nature-hub/`
- `apartment-building-oslo/`
- `germany-model-house/`
- `element-family-home-sweden/`
- `cottage-development/`

## Adding photos

Drop any number of `.jpg`, `.jpeg`, `.png`, `.webp` or `.avif` files
directly into a project's folder — no other setup needed. The site reads
whatever is actually in the folder at page-load time, so:

- **No photos yet** → the card and its album overlay show a placeholder,
  nothing breaks.
- **Any photos added** → they appear automatically, first one as the card's
  cover photo, all of them in the album overlay.
- **Order** → files are listed in natural filename order. Name them
  `1.jpg`, `2.jpg`, `3.jpg`, ... if you want to control which photo shows
  first; otherwise plain alphabetical order is used.

## Adding a brand-new reference project

1. Add an entry (with a new `slug`) to every language in
   `content/db/references.json`.
2. Create a matching folder here: `assets/img/references/<slug>/`.
3. Upload its photos into that folder.

That's it — no other code changes needed.
