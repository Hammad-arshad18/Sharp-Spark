<?php
$pageTitle       = 'Contact — Sharp Spark General Trading, Dubai';
$pageDescription = 'Contact Sharp Spark General Trading L.L.C in Dubai, UAE — email and enquiry form.';
$pageClass       = 'page-contact';
$pageKey         = 'contact';

require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/mail.php';

$success = false;
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim((string) ($_POST['name'] ?? ''));
    $company = trim((string) ($_POST['company'] ?? ''));
    $email   = trim((string) ($_POST['email'] ?? ''));
    $message = trim((string) ($_POST['message'] ?? ''));

    if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter your name, a valid email address, and a message.';
    } elseif (send_contact_mail($name, $company, $email, $message)) {
        $success = true;
    } else {
        $error = 'We could not send from this server. Please email us directly.';
    }
}

require __DIR__ . '/inc/header.php';
?>

<main id="main">
    <section class="page-hero">
        <div class="shell">
            <p class="eyebrow"><span data-i18n="contact.hero.eyebrow">Contact</span></p>
            <h1 data-i18n="contact.hero.title">Talk to our team</h1>
            <p class="lede" data-i18n-html="contact.hero.lede">
                Reach us at <a href="mailto:<?= e(SITE_EMAIL) ?>" dir="ltr"><?= e(SITE_EMAIL) ?></a>.
                We are based in Dubai, UAE.
            </p>
        </div>
    </section>

    <section class="section section--paper">
        <div class="shell">
            <div class="contact-grid" data-reveal>
                <aside class="contact-aside">
                    <p class="eyebrow"><span class="eyebrow__num">01</span> <span data-i18n="contact.aside.title">Business details</span></p>
                    <dl class="contact-facts">
                        <dt data-i18n="contact.fact.company">Company</dt>
                        <dd dir="ltr"><?= e(SITE_LEGAL_NAME) ?></dd>
                        <dt data-i18n="contact.fact.email">Email</dt>
                        <dd><a href="mailto:<?= e(SITE_EMAIL) ?>" dir="ltr"><?= e(SITE_EMAIL) ?></a></dd>
                        <dt data-i18n="contact.fact.address">Address</dt>
                        <dd data-i18n="address"><?= e(SITE_ADDRESS) ?></dd>
                        <dt data-i18n="contact.fact.license">Licensed by</dt>
                        <dd data-i18n="about.fact.license.value"><?= e(LICENSE_AUTHORITY) ?></dd>
                    </dl>
                </aside>

                <div class="contact-form-wrap">
                    <?php if ($success): ?>
                        <p class="form-banner form-banner-ok" role="status" data-i18n="contact.form.success">
                            Thank you — your message has been sent. We will reply by email.
                        </p>
                    <?php elseif ($error !== ''): ?>
                        <p class="form-banner form-banner-err" role="alert" data-i18n="<?= $error === 'Please enter your name, a valid email address, and a message.' ? 'contact.form.error.validation' : 'contact.form.error.mail' ?>">
                            <?= e($error) ?>
                        </p>
                    <?php endif; ?>

                    <p class="eyebrow"><span class="eyebrow__num">02</span> <span data-i18n="contact.form.title">Send an enquiry</span></p>
                    <form class="contact-form" method="post" action="./contact" novalidate>
                        <label>
                            <span data-i18n="contact.form.name">Your name</span>
                            <input type="text" name="name" autocomplete="name" required
                                   data-i18n-placeholder="contact.form.name.placeholder" placeholder="Full name">
                        </label>
                        <label>
                            <span data-i18n="contact.form.company">Company (optional)</span>
                            <input type="text" name="company" autocomplete="organization"
                                   data-i18n-placeholder="contact.form.company.placeholder" placeholder="Company name">
                        </label>
                        <label>
                            <span data-i18n="contact.form.email">Email</span>
                            <input type="email" name="email" autocomplete="email" inputmode="email" required
                                   data-i18n-placeholder="contact.form.email.placeholder" placeholder="you@company.com">
                        </label>
                        <label>
                            <span data-i18n="contact.form.message">Message</span>
                            <textarea name="message" rows="5" required
                                      data-i18n-placeholder="contact.form.message.placeholder" placeholder="Products, volumes, timelines…"></textarea>
                        </label>
                        <button class="btn btn--gold" type="submit" data-i18n="contact.form.submit">Send message</button>
                        <p class="form-note" data-i18n="contact.form.note">
                            Prefer email? Write to us directly — it always works.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/inc/footer.php'; ?>
