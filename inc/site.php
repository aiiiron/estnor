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
