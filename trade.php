<?php
$pageTitle       = 'What we trade — Sharp Spark, Dubai';
$pageDescription = 'Product categories and trading scope for Sharp Spark General Trading L.L.C in Dubai — FMCG, industrial supplies, electricals, and more.';
$pageClass       = 'page-trade';
$pageKey         = 'trade';

require __DIR__ . '/inc/header.php';
?>

<main id="main">
    <section class="page-hero">
        <div class="shell">
            <p class="eyebrow"><span data-i18n="trade.hero.eyebrow">Trading scope</span></p>
            <h1 data-i18n="trade.hero.title">What we trade</h1>
            <p class="lede" data-i18n="trade.hero.lede">
                Assortments tailored to retailers, hospitality, projects, and distributors — sourced
                with compliance and logistics readiness in mind.
            </p>
        </div>
    </section>

    <section class="section section--paper">
        <div class="shell">
            <header class="section-head" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">01</span> <span data-i18n="home.categories.eyebrow">Categories</span></p>
                <h2 data-i18n="home.categories.title">What moves through our books</h2>
            </header>
            <div class="catalogue">
                <?php
                $images = [
                    ['assets/img/fmcg.jpg', 'assets/img/fmcg-800.jpg', 'Fresh produce and packaged foods on retail shelves'],
                    ['assets/img/personal-care.jpg', 'assets/img/personal-care-800.jpg', 'Personal care and hygiene products'],
                    ['assets/img/industrial.jpg', 'assets/img/industrial-800.jpg', 'Industrial power tools'],
                    ['assets/img/electricals.jpg', 'assets/img/electricals-800.jpg', 'Electrical switchgear and breakers'],
                    ['assets/img/packaging.jpg', 'assets/img/packaging-800.jpg', 'Warehouse racking stacked with cartons'],
                ];
                foreach (PRODUCT_CATEGORIES as $index => $cat):
                    $slug = strtolower(str_replace(' ', '_', $cat['title']));
                    [$full, $thumb, $alt] = $images[$index % count($images)];
                ?>
                <article class="catalogue__item" id="<?= e($slug) ?>" data-reveal>
                    <span class="catalogue__index" aria-hidden="true">0<?= $index + 1 ?></span>
                    <div class="catalogue__media">
                        <img src="<?= e($full) ?>" srcset="<?= e($thumb) ?> 800w, <?= e($full) ?> 1200w" sizes="(min-width: 900px) 12rem, 90vw"
                             alt="<?= e($alt) ?>" loading="lazy" decoding="async" width="1200" height="800">
                    </div>
                    <div class="catalogue__body">
                        <h3 data-i18n="cat.<?= e($slug) ?>.title"><?= e($cat['title']) ?></h3>
                        <p data-i18n="cat.<?= e($slug) ?>.items"><?= e($cat['items']) ?></p>
                    </div>
                    <a class="catalogue__link" href="./contact">
                        <span data-i18n="footer.send">Send an enquiry</span>
                        <?= icon('arrow-right', 14) ?>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--ink">
        <div class="shell">
            <header class="section-head" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">02</span> <span data-i18n="trade.services.title">Beyond the product list</span></p>
                <h2 data-i18n="trade.services.heading">Support that sits around the goods.</h2>
            </header>
            <ul class="extra-list" data-reveal>
                <li><span class="idx">01</span> <span data-i18n="trade.extra.1">Product sourcing and supplier vetting</span></li>
                <li><span class="idx">02</span> <span data-i18n="trade.extra.2">Private-label packaging where required</span></li>
                <li><span class="idx">03</span> <span data-i18n="trade.extra.3">Customs-clearance coordination</span></li>
                <li><span class="idx">04</span> <span data-i18n="trade.extra.4">Bulk and project-based commercial terms</span></li>
            </ul>
        </div>
    </section>

    <section class="section section--paper">
        <div class="shell">
            <div class="cta-band" data-reveal>
                <h2 data-i18n="trade.cta.title">Request a line sheet or quote</h2>
                <p data-i18n="trade.cta.copy">Email us with categories, brands, or specifications — we reply by email.</p>
                <a class="btn btn--gold" href="./contact" data-i18n="trade.cta.button">Contact by email</a>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/inc/footer.php'; ?>
