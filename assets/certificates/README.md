# assets/certificates/

Real certificate/compliance PDF files go here (ISO 9001, ETA, membership
certificates, etc.), publicly downloadable — this folder has no
`.htaccess` restriction, unlike `content/`, `inc/`, `pages/` and `db/`.

To link one from the About Us page's "Certificates & memberships"
checklist:

1. Drop the PDF file in this folder, e.g. `iso-9001.pdf`.
2. In `content/db/pages/about-us.json`, find the matching item under
   `certs.items` (once per language) and set its `"pdf"` field to the
   filename, e.g. `"pdf": "iso-9001.pdf"` — currently every item has
   `"pdf": null`, which hides the download link.
3. Run `php db/migrate.php` (or regenerate + import `db/seed.sql` — see
   the main README) to publish the change.

No files are checked in here yet — real certificate scans need to come
from EstNor.
