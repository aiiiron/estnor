# Reference projects

Every reference project shown on the References page (and the
homepage's "3 latest" teaser) is just one folder here — its photos
**and** its text content both live in it. There is no other file to
edit: adding, renaming or removing a folder is the whole content
system.

**This folder's contents are part of the git repository** and get
deployed along with everything else — add photos and text here in
your local checkout, then commit, push, and deploy as usual. (An
earlier version of this tried to keep photos and text out of git,
edited directly on the live server via FTP instead — that doesn't work
on this host: its deploy rebuilds the entire live site from git every
time, so anything not actually committed gets silently wiped on the
next deploy. Committing it here is what makes it survive.)

## Folder = one project

```
assets/img/references/
  stroomi-rannahoone/
    en.txt          ← English text
    et.txt          ← Estonian text
    de.txt, sv.txt, nb.txt
    1.jpg, 2.jpg, 3.jpg   ← any number, any filenames
  nature-hub/
    ...
```

The folder name (its "slug") is never shown to visitors — call it
whatever's easy to recognize.

## Controlling display order

Two ways — pick whichever's easier:

1. **Name the folder with a leading number**: `1-germany-model-house`,
   `2-nature-hub`, `3-stroomi-rannahoone`, ... — the **highest number
   shows first**, so the most recent project always has the biggest
   number. **Recommended.** To add a new project, give it one more
   than the current highest (`4-...`) — nothing else needs renaming.
   The same numbering shows the order in your local file browser too.
2. **A `Date:` line** in the text file (see below) — projects with no
   number in their folder name sort by this, newest first, after every
   numbered folder. Simple, but Date is read per-language, so if you
   only update one language's file the same project can end up ranked
   differently across languages — the folder-number method doesn't
   have that problem, since a folder only has the one name.

A numbered folder always shows before an unnumbered one, regardless of
Date.

## The text files (`en.txt`, `et.txt`, ...)

Plain text, one `Label: value` per line. **The labels always stay in
English**, in every language's file — only the values after the colon
change — so there's one template to remember no matter which language
you're filling in:

```
Product type: Facade and roof elements
Name: Stroomi Rannahoone
Location: Pärnu, Estonia
Date: 2024-09-01
Description: A seaside building in Pärnu, built using EstNor's element
and facade technology.
```

- **Product type** — whatever you want the little tag on the card to
  say (e.g. "Element houses", "Modular houses", "Facade and roof
  elements") — free text, not limited to a fixed list.
- **Name** — the project's title.
- **Location** — shown on the card and in the album.
- **Date** — optional, any format like `2024-09-01` works. Only used
  for sort order among unnumbered folders (see "Controlling display
  order" above) — doesn't need to be exact, just roughly right
  relative to the others. Projects with neither a number nor a date
  sort to the very end.
- **Description** — shown in the album overlay, under the photos.

Only add the language files you actually have text for — a missing
language automatically shows the English text (or Estonian, if English
is missing too), same as everywhere else on the site. A project with
**no** text file in any language doesn't appear at all.

Save these as plain `.txt`, UTF-8 encoded, so accented letters (ä, õ,
ü, ...) show up correctly.

## The photos

Add any number of `.jpg`, `.jpeg`, `.png`, `.webp` or `.avif` files
directly into the project's folder:

- **No photos yet** → the card and its album overlay show a
  placeholder, nothing breaks.
- **Any photos added** → they appear automatically, first one as the
  card's cover photo, all of them in the album overlay.
- **Order** → files are listed in natural filename order. Name them
  `1.jpg`, `2.jpg`, `3.jpg`, ... if you want to control which photo
  shows first; otherwise plain alphabetical order is used.

Since these ARE committed to git now, it's worth keeping them
web-sized (a couple thousand pixels wide, reasonably compressed) —
good for page load speed regardless, and keeps the repository from
growing huge with full-resolution camera originals.

## Adding a brand-new reference project

1. Create a new folder here, named however you like.
2. Add its text file(s) (`en.txt` at least).
3. Add its photos.
4. Commit, push, deploy.

That's it — no other file to touch, no code change.
