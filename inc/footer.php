<footer class="site-footer">
    <div class="shell">
        <div class="footer-grid">
            <nav class="footer-col" aria-label="Footer">
                <h2 class="footer-heading" data-i18n="footer.explore">Explore</h2>
                <ul>
                    <?php foreach (NAV_ITEMS as $route => $label): ?>
                        <li><a href="<?= e($route) ?>" data-i18n="<?= e(NAV_KEYS[$route]) ?>"><?= e($label) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="footer-col">
                <h2 class="footer-heading" data-i18n="footer.scope">Scope</h2>
                <ul>
                    <?php foreach (PRODUCT_CATEGORIES as $cat): ?>
                        <li><span data-i18n="cat.<?= e(strtolower(str_replace(' ', '_', $cat['title']))) ?>.title"><?= e($cat['title']) ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-col">
                <h2 class="footer-heading" data-i18n="footer.compliance">Compliance</h2>
                <ul>
                    <li><span data-i18n="about.fact.legal.value"><?= e(LEGAL_FORM) ?></span></li>
                    <li><span data-i18n="about.fact.established">Established</span> <span dir="ltr"><?= e(ESTABLISHED) ?></span></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= SITE_YEAR ?> <span dir="ltr"><?= e(SITE_LEGAL_NAME) ?></span></p>
            <p class="footer-credit">
                <span data-i18n="footer.credit.prefix">Photography via</span>
                <a href="https://unsplash.com" rel="noopener noreferrer" target="_blank">Unsplash</a>.
                <span data-i18n="footer.credit.suffix">Images are illustrative.</span>
            </p>
        </div>
    </div>
</footer>

<script src="assets/js/i18n.js" defer></script>
<script src="assets/js/main.js" defer></script>
</body>
</html>
