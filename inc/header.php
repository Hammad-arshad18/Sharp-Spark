<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$pageTitle       = $pageTitle ?? SITE_NAME;
$pageDescription = $pageDescription ?? 'Sharp Spark General Trading L.L.C — general trading, sourcing and distribution in Dubai, UAE.';
$pageClass       = $pageClass ?? '';
$pageKey         = $pageKey ?? 'home';
$currentRoute    = current_route();

$scheme  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host    = $_SERVER['HTTP_HOST'] ?? '';
$baseUrl = SITE_ORIGIN !== '' ? SITE_ORIGIN : ($host !== '' ? $scheme . '://' . $host : '');

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$path = rtrim($path, '/') ?: '/';
if ($path === '/index' || $path === '/index.php') {
    $path = '/';
}
$pageUrl = $baseUrl . $path;

$ogImage     = ($baseUrl !== '' ? $baseUrl : '') . OG_IMAGE_PATH;
$ogImageAlt  = $ogImageAlt ?? OG_IMAGE_ALT;
$ogLocale    = $ogLocale ?? 'en_AE';
$pageType    = $pageType ?? 'website';

$jsonLd = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'      => 'Organization',
            '@id'        => ($baseUrl !== '' ? $baseUrl : '') . '/#organization',
            'name'       => SITE_NAME,
            'legalName'  => SITE_LEGAL_NAME,
            'url'        => ($baseUrl !== '' ? $baseUrl : '') . '/',
            'logo'       => ($baseUrl !== '' ? $baseUrl : '') . '/assets/img/logo-sharp-spark.jpg',
            'email'      => SITE_EMAIL,
            'address'    => [
                '@type'           => 'PostalAddress',
                'addressLocality' => SITE_CITY,
                'addressCountry'  => 'AE',
            ],
            'description' => 'General trading company in Dubai, United Arab Emirates.',
            'areaServed'  => ['United Arab Emirates', 'GCC'],
        ],
        [
            '@type'       => 'WebSite',
            '@id'         => ($baseUrl !== '' ? $baseUrl : '') . '/#website',
            'url'         => ($baseUrl !== '' ? $baseUrl : '') . '/',
            'name'        => SITE_NAME,
            'publisher'   => ['@id' => ($baseUrl !== '' ? $baseUrl : '') . '/#organization'],
            'inLanguage'  => ['en', 'ar'],
        ],
        [
            '@type'       => 'WebPage',
            '@id'         => $pageUrl . '#webpage',
            'url'         => $pageUrl,
            'name'        => $pageTitle,
            'description' => $pageDescription,
            'isPartOf'    => ['@id' => ($baseUrl !== '' ? $baseUrl : '') . '/#website'],
            'about'       => ['@id' => ($baseUrl !== '' ? $baseUrl : '') . '/#organization'],
            'inLanguage'  => 'en',
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    <meta name="theme-color" content="#0b0a09">

    <script>
        (function () {
            try {
                if (localStorage.getItem("sharpspark-lang") === "ar") {
                    var root = document.documentElement;
                    root.lang = "ar";
                    root.dir = "rtl";
                    root.classList.add("lang-ar");
                }
            } catch (error) {}
        })();
    </script>

    <meta property="og:type" content="<?= e($pageType) ?>">
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta property="og:locale" content="<?= e($ogLocale) ?>">
    <meta property="og:locale:alternate" content="ar_AE">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDescription) ?>">
    <?php if ($baseUrl !== ''): ?>
    <meta property="og:url" content="<?= e($pageUrl === $baseUrl ? $baseUrl . '/' : $pageUrl) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta property="og:image:width" content="<?= OG_IMAGE_WIDTH ?>">
    <meta property="og:image:height" content="<?= OG_IMAGE_HEIGHT ?>">
    <meta property="og:image:alt" content="<?= e($ogImageAlt) ?>">
    <?php endif; ?>

    <link rel="icon" href="assets/img/logo-mark.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/img/logo-mark.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">

    <?php if ($baseUrl !== ''): ?>
    <script type="application/ld+json"><?= json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) ?></script>
    <?php endif; ?>
</head>
<body class="<?= e($pageClass) ?>" data-page="<?= e($pageKey) ?>">
<a class="skip-link" href="#main" data-i18n="skip">Skip to content</a>

<header class="site-header" data-header>
    <div class="shell header-inner">
        <a class="brand" href="./" aria-label="Sharp Spark — Home">
            <img class="brand-lockup" src="assets/img/logo-header.jpg" width="1771" height="412" alt="">
        </a>

        <nav class="primary-nav" aria-label="Primary" data-i18n-aria="nav.primary">
            <ul>
                <?php foreach (NAV_ITEMS as $route => $label): ?>
                    <li>
                        <a href="<?= e($route) ?>" data-i18n="<?= e(NAV_KEYS[$route]) ?>"<?= $route === $currentRoute ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="header-actions">
            <button class="lang-toggle" type="button" data-lang-toggle aria-label="Switch to Arabic">
                <span class="lang-toggle-label">AR</span>
            </button>
            <a class="btn btn--gold btn--sm header-cta" href="./contact" data-i18n="nav.enquire">Enquire</a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" aria-label="Open menu" data-i18n-aria="nav.open" data-nav-toggle>
                <span class="nav-toggle-open"><?= icon('menu', 26) ?></span>
                <span class="nav-toggle-close"><?= icon('close', 26) ?></span>
            </button>
        </div>
    </div>

    <div class="mobile-nav" id="mobile-nav" hidden>
        <nav aria-label="Mobile" data-i18n-aria="nav.mobile">
            <ul>
                <?php $i = 1; foreach (NAV_ITEMS as $route => $label): ?>
                    <li>
                        <a href="<?= e($route) ?>" data-i18n="<?= e(NAV_KEYS[$route]) ?>"<?= $route === $currentRoute ? ' aria-current="page"' : '' ?>>
                            <span class="mobile-nav-index">0<?= $i ?></span>
                            <?= e($label) ?>
                        </a>
                    </li>
                <?php $i++; endforeach; ?>
            </ul>
        </nav>
        <div class="mobile-nav-foot">
            <a href="mailto:<?= e(SITE_EMAIL) ?>"><span dir="ltr"><?= e(SITE_EMAIL) ?></span></a>
            <p data-i18n="address"><?= e(SITE_ADDRESS) ?></p>
        </div>
    </div>
</header>
