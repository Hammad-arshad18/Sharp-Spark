<?php
http_response_code(404);
$pageTitle       = 'Page not found — Sharp Spark';
$pageDescription = 'The page you requested could not be found.';
$pageClass       = 'page-404';
$pageKey         = '404';

require __DIR__ . '/inc/header.php';
?>

<main id="main" class="not-found">
    <div class="shell not-found__inner" style="max-width: 38rem;">
        <p class="eyebrow" style="justify-content: center;"><span class="eyebrow__num">404</span> <span data-i18n="404.eyebrow">Not found</span></p>
        <h1 data-i18n="404.title">This page is not available.</h1>
        <p class="muted" data-i18n="404.copy">Try the home page or contact us by email.</p>
        <div class="hero__actions">
            <a class="btn btn--gold" href="./" data-i18n="404.home">Back to home</a>
            <a class="btn btn--ghost" href="./contact" data-i18n="nav.contact">Contact</a>
        </div>
    </div>
</main>

<?php require __DIR__ . '/inc/footer.php'; ?>
