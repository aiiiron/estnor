<?php
/**
 * inc/site.php — company facts shared by every page, in every language.
 * Sources: estnor.ee (Impressum/Kontakt) and the Estonian e-Business
 * Register (ariregister.rik.ee, Registrikood 10706304), Sept 2026.
 */

$SITE = [
    'name' => 'EstNor',
    'company' => [
        'legal_name' => 'EstNor OÜ',
        'founded'    => 2000,
        'street'     => 'Kurna tee 33',
        'zip_city'   => '75401 Kiili',
        'region'     => 'Harju maakond, Estonia',
        'reg_code'   => '10706304',
        'vat_id'     => 'EE100650305',
        'ceo'        => 'Renee Mikomägi',
    ],
    'contact' => [
        'email'      => 'info@estnor.ee',
        'phone'      => '+372 651 6174',
        'phone_href' => '+3726516174',
        'fax'        => '+372 651 6074',
    ],
    'social' => [
        'linkedin' => 'https://ee.linkedin.com/company/estnor',
        'facebook' => 'https://www.facebook.com/estnor/',
    ],
];

/** e() — HTML-escape shorthand for output. */
function e(?string $s): string {
    return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * The URL path this site is mounted under — '' at a domain's root, or
 * something like '/estnor-new' when deployed into a subfolder of a
 * domain (e.g. https://voolaid.eu/estnor-new/). Set via config.php's
 * 'base_path' key; defaults to '' (root) if unset or config.php is
 * missing, so this never blocks local preview.
 */
function base_path(): string {
    static $path = null;
    if ($path !== null) return $path;
    $configPath = __DIR__ . '/../config.php';
    $config = is_file($configPath) ? require $configPath : [];
    return $path = rtrim($config['base_path'] ?? '', '/');
}

/**
 * Prefix a root-relative URL ("/en/contact.php") with this deployment's
 * base path. Page-relative hrefs (no leading "/", e.g. "contact.php" or
 * "../contact.php") and external/protocol URLs pass through unchanged —
 * only nav/footer/language-switcher links stored as absolute paths need
 * this, since those are the only links that must resolve correctly from
 * every page regardless of that page's own depth.
 */
function url(string $path): string {
    if ($path === '' || $path[0] !== '/') return $path;
    return base_path() . $path;
}
