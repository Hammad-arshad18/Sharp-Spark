<?php
$pageTitle       = 'About — Sharp Spark General Trading, Dubai';
$pageDescription = 'Learn about Sharp Spark General Trading L.L.C — vision, mission, and how we operate in Dubai and the GCC.';
$pageClass       = 'page-about';
$pageKey         = 'about';

require __DIR__ . '/inc/header.php';
?>

<main id="main">
    <section class="page-hero">
        <div class="shell">
            <p class="eyebrow"><span data-i18n="about.hero.eyebrow">About us</span></p>
            <h1 data-i18n="about.hero.title">Sharp Spark General Trading L.L.C</h1>
            <p class="lede" data-i18n="about.hero.lede">
                A Dubai-based general trading company focused on sourcing, import, and distribution
                for retailers, hospitality, construction, and institutional buyers.
            </p>
            <dl class="page-hero__meta">
                <div>
                    <dt data-i18n="about.fact.legal">Legal form</dt>
                    <dd data-i18n="about.fact.legal.value"><?= e(LEGAL_FORM) ?></dd>
                </div>
                <div>
                    <dt data-i18n="about.fact.license">License authority</dt>
                    <dd data-i18n="about.fact.license.value"><?= e(LICENSE_AUTHORITY) ?></dd>
                </div>
                <div>
                    <dt data-i18n="about.fact.established">Established</dt>
                    <dd dir="ltr"><?= e(ESTABLISHED) ?></dd>
                </div>
                <div>
                    <dt data-i18n="about.fact.location">Location</dt>
                    <dd data-i18n="address"><?= e(SITE_ADDRESS) ?></dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="section section--paper">
        <div class="shell split">
            <div class="split__copy" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">01</span> <span data-i18n="about.profile.title">Company profile</span></p>
                <h2 data-i18n-html="about.profile.heading">Built in Dubai.<br><span class="hl">Trading for the region.</span></h2>
                <p class="lede" data-i18n="about.profile.p1">
                    We source, import, and distribute a wide range of consumer and industrial goods
                    across the UAE and selected GCC markets, with an emphasis on fast-moving products,
                    industrial supplies, and specialty lines for B2B buyers.
                </p>
                <ul class="fact-grid">
                    <li><span data-i18n="about.fact.legal">Legal form</span><strong data-i18n="about.fact.legal.value"><?= e(LEGAL_FORM) ?></strong></li>
                    <li><span data-i18n="about.fact.activity">Licensed activity</span><strong data-i18n="about.fact.activity.value"><?= e(LICENSE_ACTIVITY) ?></strong></li>
                    <li><span data-i18n="about.fact.license">License authority</span><strong data-i18n="about.fact.license.value"><?= e(LICENSE_AUTHORITY) ?></strong></li>
                    <li><span data-i18n="about.fact.established">Established</span><strong dir="ltr"><?= e(ESTABLISHED) ?></strong></li>
                    <li><span data-i18n="about.fact.location">Registered office</span><strong data-i18n="address"><?= e(SITE_ADDRESS) ?></strong></li>
                </ul>
                <p class="note" data-i18n="about.compliance.note">
                    We maintain the trade and customs documentation required for our import and export
                    activities. Licence and registry numbers are not published on this website.
                </p>
            </div>
            <figure class="frame frame--wide" data-reveal>
                <img src="assets/img/dubai.jpg" srcset="assets/img/dubai-800.jpg 800w, assets/img/dubai.jpg 1200w"
                     sizes="(min-width: 900px) 46vw, 100vw"
                     alt="Dubai skyline at golden hour"
                     width="1200" height="800" loading="lazy" decoding="async">
                <figcaption class="frame__tag" data-i18n="address"><?= e(SITE_ADDRESS) ?></figcaption>
            </figure>
        </div>
    </section>

    <section class="section section--ink">
        <div class="shell">
            <div class="duo" data-reveal>
                <article>
                    <h3 data-i18n="about.vision.eyebrow">Vision</h3>
                    <p data-i18n="about.vision.copy"><?= e(VISION) ?></p>
                </article>
                <article>
                    <h3 data-i18n="about.mission.eyebrow">Mission</h3>
                    <p data-i18n="about.mission.copy"><?= e(MISSION) ?></p>
                </article>
            </div>
        </div>
    </section>

    <section class="section section--paper">
        <div class="shell">
            <header class="section-head" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">02</span> <span data-i18n="about.customers.title">Who we serve</span></p>
                <h2 data-i18n="about.customers.heading">Buyers who need stock that shows up.</h2>
            </header>
            <ul class="serve-grid" data-reveal>
                <?php foreach (TARGET_CUSTOMERS as $i => $label): ?>
                    <li>
                        <span class="idx">0<?= $i + 1 ?></span>
                        <span data-i18n="customer.<?= $i ?>"><?= e($label) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section class="section section--paper" style="padding-top: 0;">
        <div class="shell">
            <header class="section-head" data-reveal>
                <p class="eyebrow"><span class="eyebrow__num">03</span> <span data-i18n="about.team.title">How we are organised</span></p>
                <h2 data-i18n="about.team.heading">Role-focused teams.</h2>
                <p class="lede muted" data-i18n="about.team.intro">Role-focused teams — not a directory of personal data.</p>
            </header>
            <ul class="team-list" data-reveal>
                <?php foreach (TEAM_ROLES as $i => $row): ?>
                    <li>
                        <span class="idx">0<?= $i + 1 ?></span>
                        <h3 data-i18n="team.<?= $i ?>.role"><?= e($row['role']) ?></h3>
                        <p data-i18n="team.<?= $i ?>.focus"><?= e($row['focus']) ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>

<?php require __DIR__ . '/inc/footer.php'; ?>
