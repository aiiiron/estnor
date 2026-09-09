-- db/schema.sql — run once against a fresh database (Hostinger: hPanel ->
-- Databases -> phpMyAdmin -> Import). db/migrate.php also creates these
-- tables itself if they don't exist yet, so running this file by hand is
-- optional — it's here mainly as documentation of the shape.
--
-- Deliberately minimal: two tables, no joins needed to render a page.
-- All per-language content — nav, footer, home hero, and every page's own
-- body copy — is one JSON blob per (language, section) row. A page needs
-- at most two rows to render: the 'global' section (site chrome, shared by
-- every page via partials/head.php + partials/footer.php) and its own
-- "page:{slug}" section.

CREATE TABLE IF NOT EXISTS languages (
  code       VARCHAR(5)  NOT NULL PRIMARY KEY,
  name       VARCHAR(40) NOT NULL,
  is_default TINYINT(1)  NOT NULL DEFAULT 0
);

CREATE TABLE IF NOT EXISTS i18n_strings (
  lang_code  VARCHAR(5)   NOT NULL,
  section    VARCHAR(80)  NOT NULL,
  content    LONGTEXT     NOT NULL,
  updated_at TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (lang_code, section)
);
