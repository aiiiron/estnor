# Reference projects

Every reference project shown on the References page (and the
homepage's "3 latest" teaser) is just one folder here — its photos
**and** its text content both live in it. There is no other file to
edit: adding, renaming or removing a folder is the whole content
system.

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

1. **Name the folder with a leading number**: `10-stroomi-rannahoone`,
   `20-nature-hub`, ... — shown in ascending order (lowest number
   first). **Recommended.** Leave gaps (10, 20, 30 — not 1, 2, 3) so a
   new "most recent" project can be inserted later as `5-...` without
   renaming anything else. Renaming a folder in an FTP client moves
   its contents with it automatically, so this is a single, safe
   rename whenever you want to reorder or promote a project.
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

Save these as plain `.txt`, UTF-8 encoded (the default in Notepad,
TextEdit, and any FTP client's built-in editor) so accented letters
(ä, õ, ü, ...) show up correctly.

## The photos

Drop any number of `.jpg`, `.jpeg`, `.png`, `.webp` or `.avif` files
directly into the project's folder. The site reads whatever is
actually there at page-load time:

- **No photos yet** → the card and its album overlay show a
  placeholder, nothing breaks.
- **Any photos added** → they appear automatically, first one as the
  card's cover photo, all of them in the album overlay.
- **Order** → files are listed in natural filename order. Name them
  `1.jpg`, `2.jpg`, `3.jpg`, ... if you want to control which photo
  shows first; otherwise plain alphabetical order is used.

## Adding a brand-new reference project

1. Create a new folder here, named however you like.
2. Add its text file(s) (`en.txt` at least).
3. Upload its photos.

That's it — no code, no other file, nothing to touch in git. The new
project appears the next time the page loads.

## Why photos aren't tracked in git (but the `.txt` files are)

Photos are uploaded straight to the server (FTP, or your host's file
manager) and are **not** part of this repository — there can be many
per project, and pushing them through git on every code deploy is
slow. The small `.txt` files, on the other hand, are tracked normally,
so they're backed up and versioned along with the rest of the site —
but you can still edit them the same way, straight on the server, and
those edits show up immediately without needing a deploy at all.
