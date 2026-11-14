<?php
$pageTitle       = 'Sharp Spark — General Trading in Dubai, UAE';
$pageDescription = 'Sharp Spark General Trading L.L.C sources, imports and distributes consumer and industrial goods across the UAE and GCC. Dubai, UAE.';
$pageClass       = 'page-home';
$pageKey         = 'home';

require __DIR__ . '/inc/header.php';
?>

<main id="main">
    <section class="hero" aria-labelledby="hero-title">
        <div class="shell hero__grid">
            <div class="hero__copy">
                <p class="eyebrow">
                    <span data-i18n="home.hero.eyebrow">General Trading · Dubai, UAE</span>
                </p>
                <h1 id="hero-title" data-i18n-html="home.hero.title">Trade that<br>moves on <span class="hl">time.</span></h1>
                <p class="hero__lede" data-i18n="home.hero.sub">
                    We source, import, and distribute consumer and industrial goods for retailers,
                    SMEs, and project buyers across the UAE and selected GCC markets.
                </p>
                <div class="hero__actions">
                    <a class="btn btn--gold" href="./trade">
                        <span data-i18n="home.hero.cta1">What we trade</span>
                        <?= icon('arrow-right', 16, 'icon-arrow') ?>
                    </a>
                    <a class="btn btn--line" href="./contact" data-i18n="home.hero.cta2">Email us</a>
                </div>
                <ul class="hero__trust">
                    <li data-i18n="home.trust.licensed">Licensed by Dubai DED</li>
                    <li data-i18n="home.trust.established">Established 2024</li>
                    <li data-i18n="home.trust.location">Dubai, UAE</li>
                </ul>
            </div>

            <aside class="hero__aside" data-reveal>
                <figure class="hero__figure">
                    <img src="assets/img/hero-logistics.jpg"
                         srcset="assets/img/hero-logistics-800.jpg 800w, assets/img/hero-logistics.jpg 1600w"
                         sizes="(min-width: 980px) 44vw, 92vw"
                         alt="Container terminal with stacked shipping containers and gantry cranes"
                         width="1600" height="1067" fetchpriority="high" decoding="async">
                    <figcaption class="hero__badge">
                        <span data-i18n="home.hero.stat1.value">Dubai, UAE</span>
                        <span aria-hidden="true">·</span>
                        <span>Est. 2024</span>
                    </figcaption>
                </figure>
                <dl class="hero__meta">
                    <div>
                        <dt data-i18n="home.hero.stat1.label">Based in</dt>
                        <dd data-i18n="home.hero.stat1.value">Dubai, UAE</dd>
                    </div>
                    <div>
                        <dt data-i18n="home.hero.stat2.label">Activity</dt>
                        <dd data-i18n="home.hero.stat2.value">General Trading</dd>
                    </div>
                    <div>
                        <dt data-i18n="home.hero.stat3.label">Markets</dt>
                        <dd data-i18n="home.hero.stat3.value">UAE &amp; GCC</dd>
                    </div>
                </dl>
            </aside>
        </div>

        <div class="service-band">
            <div class="shell service-band__inner">
                <span class="service-band__label" data-i18n="home.band.label">Built for</span>
                <ul class="service-band__list">
                    <li><span>01</span> <span data-i18n="home.band.1">Retail</span></li>
                    <li><span>02</span> <span data-i18n="home.band.2">Hospitality</span></li>
                    <li><span>03</span> <span data-i18n="home.band.3">Projects</span></li>
                    <li><span>04</span> <span data-i18n="home.band.4">Distributors</span></li>
                    <li><span>05</span> <span data-i18n="home.band.5">Import &amp; export</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section--paper" id="overview">
        <div class="shell split">
            <div class="split__copy" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">01</span> <span data-i18n="home.intro.eyebrow">Company overview</span></p>
                <h2 data-i18n-html="home.intro.title">A trading partner built for <span class="hl">speed</span> and compliance.</h2>
                <p class="lede" data-i18n="home.intro.p1">
                    Sharp Spark General Trading L.L.C is a Dubai-based general trading company established
                    on <?= e(ESTABLISHED) ?>. We connect suppliers with buyers who need consistent stock,
                    clear paperwork, and responsive service.
                </p>
                <p class="lede" data-i18n="home.intro.p2">
                    From fast-moving consumer products to industrial consumables, we focus on categories
                    where reliability, lead times, and customs readiness matter as much as price.
                </p>
                <a class="text-link" href="./about">
                    <span data-i18n="home.intro.link">About Sharp Spark</span>
                    <?= icon('arrow-up-right', 15) ?>
                </a>
            </div>
            <figure class="frame" data-reveal>
                <img src="assets/img/warehouse.jpg" srcset="assets/img/warehouse-800.jpg 800w, assets/img/warehouse.jpg 1200w"
                     sizes="(min-width: 900px) 46vw, 100vw"
                     alt="Warehouse aisle with racked pallets and cartons"
                     width="1200" height="1600" loading="lazy" decoding="async">
                <figcaption class="frame__tag" data-i18n="home.intro.tag">Est. Nov 2024 · Dubai</figcaption>
            </figure>
        </div>
    </section>

    <section class="stats-band" id="at-a-glance">
        <div class="shell">
            <header class="stats-head" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">02</span> <span data-i18n="home.stats.eyebrow">At a glance</span></p>
                <h2 data-i18n="home.stats.title">A trading operation, in numbers.</h2>
            </header>
            <dl class="stats" data-reveal>
                <div>
                    <dt data-i18n="home.stats.1.label">Established</dt>
                    <dd>2024</dd>
                </div>
                <div>
                    <dt data-i18n="home.stats.2.label">Product categories</dt>
                    <dd>05</dd>
                </div>
                <div>
                    <dt data-i18n="home.stats.3.label">Customer segments</dt>
                    <dd>04</dd>
                </div>
                <div>
                    <dt data-i18n="home.stats.4.label">Markets served</dt>
                    <dd class="stats__text" data-i18n="home.stats.4.value">UAE &amp; GCC</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="section section--cream" id="activities" aria-labelledby="activities-title">
        <div class="shell">
            <header class="section-head" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">03</span> <span data-i18n="home.activities.eyebrow">What we do</span></p>
                <h2 id="activities-title" data-i18n="home.activities.title">Core activities</h2>
            </header>
            <div class="cards">
                <?php foreach (ACTIVITIES as $index => $item): ?>
                    <article class="card-activity" data-reveal>
                        <span class="card-activity__icon" aria-hidden="true"><?= icon($item['icon'], 24) ?></span>
                        <p class="card-activity__index">0<?= $index + 1 ?></p>
                        <h3 data-i18n="activity.<?= $index ?>.title"><?= e($item['title']) ?></h3>
                        <p data-i18n="activity.<?= $index ?>.copy"><?= e($item['copy']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--paper" id="categories">
        <div class="shell">
            <header class="section-head" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">04</span> <span data-i18n="home.categories.eyebrow">Categories</span></p>
                <h2 data-i18n="home.categories.title">What moves through our books</h2>
            </header>
            <div class="category-grid">
                <?php
                $categoryImages = [
                    ['assets/img/fmcg.jpg', 'assets/img/fmcg-800.jpg', 'Fresh produce and packaged foods on retail shelves'],
                    ['assets/img/personal-care.jpg', 'assets/img/personal-care-800.jpg', 'Personal care and hygiene products'],
                    ['assets/img/industrial.jpg', 'assets/img/industrial-800.jpg', 'Industrial power tools'],
                    ['assets/img/electricals.jpg', 'assets/img/electricals-800.jpg', 'Electrical switchgear and breakers'],
                    ['assets/img/packaging.jpg', 'assets/img/packaging-800.jpg', 'Warehouse racking stacked with cartons'],
                ];
                foreach (PRODUCT_CATEGORIES as $index => $cat):
                    $slug = strtolower(str_replace(' ', '_', $cat['title']));
                    [$full, $thumb, $alt] = $categoryImages[$index % count($categoryImages)];
                ?>
                <a class="category" href="./trade#<?= e($slug) ?>" data-reveal>
                    <div class="category__media">
                        <img src="<?= e($full) ?>" srcset="<?= e($thumb) ?> 800w, <?= e($full) ?> 1200w" sizes="(min-width: 900px) 30vw, 100vw"
                             alt="<?= e($alt) ?>" loading="lazy" decoding="async" width="1200" height="800">
                    </div>
                    <div class="category__body">
                        <p class="category__index">0<?= $index + 1 ?></p>
                        <h3 data-i18n="cat.<?= e($slug) ?>.title"><?= e($cat['title']) ?></h3>
                        <p data-i18n="cat.<?= e($slug) ?>.items"><?= e($cat['items']) ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="category-cta" data-reveal>
                <p data-i18n="home.categories.cta.title">Need something else?</p>
                <a class="btn btn--gold btn--sm" href="./contact">
                    <span data-i18n="footer.send">Send an enquiry</span>
                    <?= icon('arrow-right', 14, 'icon-arrow') ?>
                </a>
            </div>
        </div>
    </section>

    <section class="section section--cream" id="strengths">
        <div class="shell split">
            <figure class="stack" data-reveal>
                <img class="stack__a" src="assets/img/containers.jpg" srcset="assets/img/containers-800.jpg 800w, assets/img/containers.jpg 1200w"
                     sizes="(min-width: 900px) 40vw, 88vw"
                     alt="Container ship being loaded at a port terminal"
                     width="1200" height="800" loading="lazy" decoding="async">
                <img class="stack__b" src="assets/img/fmcg.jpg" srcset="assets/img/fmcg-800.jpg 800w, assets/img/fmcg.jpg 1200w"
                     sizes="240px"
                     alt="Fresh produce on retail shelves"
                     width="1200" height="900" loading="lazy" decoding="async">
            </figure>
            <div class="split__copy" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">05</span> <span data-i18n="home.strengths.eyebrow">Why buyers work with us</span></p>
                <h2 data-i18n-html="home.strengths.title">Built around <span class="hl">dependable</span> supply.</h2>
                <ul class="strength-list">
                    <?php foreach (STRENGTHS as $i => $item): ?>
                        <li>
                            <span class="idx">0<?= $i + 1 ?></span>
                            <div>
                                <strong data-i18n="strength.<?= $i ?>.title"><?= e($item['title']) ?></strong>
                                <span data-i18n="strength.<?= $i ?>.copy"><?= e($item['copy']) ?></span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section--ink" id="contact" aria-labelledby="home-contact-title">
        <div class="shell contact-band">
            <div class="contact-band__copy" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">06</span> <span data-i18n="home.contact.eyebrow">Get in touch</span></p>
                <h2 id="home-contact-title" data-i18n="home.contact.title">Let's talk about your next order.</h2>
                <p data-i18n="home.contact.copy">Reach us by email — we respond quickly.</p>
            </div>
            <ul class="contact-lines" data-reveal>
                <li>
                    <span class="contact-lines__label" data-i18n="contact.fact.address">Address</span>
                    <span class="contact-lines__value" data-i18n="address"><?= e(SITE_ADDRESS) ?></span>
                </li>
                <li>
                    <span class="contact-lines__label" data-i18n="contact.fact.email">Email</span>
                    <a class="contact-lines__value" href="mailto:<?= e(SITE_EMAIL) ?>" dir="ltr"><?= e(SITE_EMAIL) ?></a>
                </li>
                <li>
                    <span class="contact-lines__label" data-i18n="contact.fact.license">Licensed by</span>
                    <span class="contact-lines__value" data-i18n="about.fact.license.value"><?= e(LICENSE_AUTHORITY) ?>, Dubai</span>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php require __DIR__ . '/inc/footer.php'; ?>
