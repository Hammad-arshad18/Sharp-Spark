/**
 * Arabic UI layer. Preference: localStorage key "sharpspark-lang" (en | ar).
 */
(function () {
    "use strict";

    var STORAGE_KEY = "sharpspark-lang";
    var AR = {
        "meta.home.title": "شارب سبارك — تجارة عامة في دبي، الإمارات",
        "meta.home.description": "شارب سبارك للتجارة العامة ذ.م.م — توريد واستيراد وتوزيع السلع الاستهلاكية والصناعية في الإمارات ودول مجلس التعاون.",
        "meta.about.title": "من نحن — شارب سبارك للتجارة العامة، دبي",
        "meta.about.description": "تعرّف على شارب سبارك للتجارة العامة ذ.م.م — الرؤية والرسالة وآلية العمل في دبي والخليج.",
        "meta.trade.title": "ماذا نتاجر — شارب سبارك، دبي",
        "meta.trade.description": "فئات المنتجات ونطاق التجارة لشارب سبارك للتجارة العامة ذ.م.م في دبي.",
        "meta.contact.title": "اتصل بنا — شارب سبارك للتجارة العامة، دبي",
        "meta.contact.description": "تواصل مع شارب سبارك للتجارة العامة ذ.م.م في دبي، الإمارات — بريد إلكتروني ونموذج استفسار.",
        "meta.404.title": "الصفحة غير موجودة — شارب سبارك",
        "meta.404.description": "الصفحة المطلوبة غير متاحة.",

        "skip": "تخطَّ إلى المحتوى",
        "brand.name": "شارب سبارك",
        "brand.first": "شارب",
        "brand.last": "سبارك",
        "brand.sub": "تجارة عامة ذ.م.م",
        "address": "دبي، الإمارات العربية المتحدة",
        "nav.home": "الرئيسية",
        "nav.about": "من نحن",
        "nav.trade": "ماذا نتاجر",
        "nav.contact": "اتصل بنا",
        "nav.primary": "التنقل الرئيسي",
        "nav.mobile": "قائمة الجوال",
        "nav.open": "فتح القائمة",
        "nav.close": "إغلاق القائمة",
        "nav.enquire": "استفسار",
        "lang.to_english": "التبديل إلى الإنجليزية",
        "footer.note": "شركة تجارة عامة مقرها دبي، تخدم الإمارات وأسواقاً مختارة في دول مجلس التعاون.",
        "footer.explore": "استكشف",
        "footer.scope": "المجالات",
        "footer.contact": "التواصل",
        "footer.send": "أرسل استفساراً",
        "footer.credit.prefix": "الصور من",
        "footer.credit.suffix": "الصور لأغراض توضيحية.",
        "footer.license": "مرخّصة من دائرة الاقتصاد بدبي",
        "footer.compliance": "الامتثال",
        "footer.contact.heading": "المكتب والتواصل",

        "home.hero.eyebrow": "تجارة عامة · دبي",
        "home.hero.title": "تجارة<br>تصل <span class=\"hl\">في وقتها.</span>",
        "home.hero.sub": "نورد ونستورد ونوزّع السلع الاستهلاكية والصناعية لتجار التجزئة والشركات الصغيرة والمتوسطة ومشتري المشاريع في الإمارات وأسواقاً مختارة في الخليج.",
        "home.hero.cta1": "ماذا نتاجر",
        "home.hero.cta2": "راسلنا",
        "home.hero.alt": "صفوف حاويات شحن في ساحة لوجستيات مينائية",
        "home.hero.stat1.label": "مقرنا",
        "home.hero.stat1.value": "دبي، الإمارات",
        "home.hero.stat2.label": "النشاط",
        "home.hero.stat2.value": "تجارة عامة",
        "home.hero.stat3.label": "الأسواق",
        "home.hero.stat3.value": "الإمارات والخليج",
        "home.route.origin": "المصدر",
        "home.route.hub": "دبي",
        "home.route.buyer": "المشتري",
        "home.band.label": "مصممون لـ",
        "home.band.1": "التجزئة",
        "home.band.2": "الضيافة",
        "home.band.3": "المشاريع",
        "home.band.4": "الموزعون",
        "home.band.5": "الاستيراد والتصدير",
        "home.intro.eyebrow": "نظرة على الشركة",
        "home.intro.title": "شريك تجاري يقوم على <span class=\"hl\">السرعة</span> والامتثال.",
        "home.intro.p1": "شارب سبارك للتجارة العامة ذ.م.م شركة تجارة عامة مقرها دبي، تأسست في 18 نوفمبر 2024. نربط الموردين بالمشترين الذين يحتاجون مخزوناً ثابتاً ووثائقاً واضحة وخدمة سريعة الاستجابة.",
        "home.intro.p2": "من السلع الاستهلاكية سريعة الحركة إلى المستلزمات الصناعية، نركّز على الفئات التي تهم فيها الموثوقية والمواعيد والجاهزية الجمركية بقدر السعر.",
        "home.intro.link": "عن شارب سبارك",
        "home.intro.alt": "فريق أعمال يراجع مستندات التوريد على مكتب",
        "home.intro.tag": "تأسست نوفمبر 2024 · دبي",
        "home.activities.eyebrow": "أعمالنا",
        "home.activities.title": "الأنشطة الأساسية",
        "home.strengths.eyebrow": "لماذا يتعاملون معنا",
        "home.strengths.title": "منظومة مبنية على إمداد <span class=\"hl\">موثوق.</span>",
        "home.strengths.alt": "داخل مستودع حديث مع رفوف ومخزون",
        "home.strengths.alt2": "حاويات شحن جاهزة للنقل الدولي",
        "home.categories.eyebrow": "الفئات",
        "home.categories.title": "ما يمر عبر دفاترنا",
        "home.cta.eyebrow": "تواصل معنا",
        "home.cta.title": "أخبرنا بما تحتاج تخزينه.",
        "home.cta.copy": "شاركنا خطوط المنتجات أو الأحجام أو جداول المشاريع — نرد عبر البريد الإلكتروني.",
        "home.trust.licensed": "مرخّصة من دائرة الاقتصاد بدبي",
        "home.trust.established": "تأسست 2024",
        "home.trust.location": "دبي، الإمارات",
        "home.stats.eyebrow": "نظرة سريعة",
        "home.stats.title": "عملية تجارية بالأرقام.",
        "home.stats.1.label": "التأسيس",
        "home.stats.1.value": "2024",
        "home.stats.2.label": "فئات المنتجات",
        "home.stats.2.value": "05",
        "home.stats.3.label": "شرائح العملاء",
        "home.stats.3.value": "04",
        "home.stats.4.label": "الأسواق",
        "home.stats.4.value": "الإمارات والخليج",
        "home.contact.eyebrow": "تواصل معنا",
        "home.contact.title": "لنتحدث عن طلبك القادم.",
        "home.contact.copy": "تواصل معنا عبر البريد — نرد بسرعة.",
        "home.contact.map": "الموقع",

        "activity.0.title": "التوريد والمشتريات",
        "activity.0.copy": "مشتريات محلية ودولية للسلع الاستهلاكية والصناعية، مع تقييم الموردين وشروط تنافسية.",
        "activity.1.title": "الاستيراد والتوزيع",
        "activity.1.copy": "استيراد وتخزين وتوزيع داخل الإمارات وإلى أسواق مختارة في دول مجلس التعاون.",
        "activity.2.title": "توريد بالجملة",
        "activity.2.copy": "إمداد بالجملة لتجار التجزئة والضيافة ومشاريع البناء والمشترين المؤسسيين.",
        "activity.3.title": "تنسيق اللوجستيات",
        "activity.3.copy": "تنسيق لوجستي وإجراءات تخليص جمركي من البداية حتى التسليم.",

        "strength.0.title": "توريد مرن",
        "strength.0.copy": "تحديد سريع للموردين وشروط تجارية تنافسية.",
        "strength.1.title": "الامتثال أولاً",
        "strength.1.copy": "خبرة تنظيمية وجمركية لتسهيل الاستيراد إلى الإمارات.",
        "strength.2.title": "موثوقية الإمداد",
        "strength.2.copy": "شركاء لوجستيون موثوقون وحلول تخزين عملية.",
        "strength.3.title": "شروط مرنة",
        "strength.3.copy": "تسعير للكميات والمشاريع، مع شروط ائتمان للعملاء المعتمدين.",
        "strength.4.title": "تركيز على العميل",
        "strength.4.copy": "تشكيلات مخصّصة ودعم ما بعد البيع سريع الاستجابة.",

        "about.hero.eyebrow": "من نحن",
        "about.hero.title": "شارب سبارك للتجارة العامة ذ.م.م",
        "about.hero.lede": "شركة تجارة عامة في دبي تركّز على التوريد والاستيراد والتوزيع لتجار التجزئة والضيافة والبناء والمشترين المؤسسيين.",
        "about.profile.title": "ملف الشركة",
        "about.profile.heading": "مبنية في دبي.<br><span class=\"hl\">نتاجر للمنطقة.</span>",
        "about.profile.p1": "نورد ونستورد ونوزّع مجموعة واسعة من السلع الاستهلاكية والصناعية في الإمارات وأسواقاً مختارة في الخليج، مع تركيز على المنتجات سريعة الحركة والمستلزمات الصناعية وخطوط B2B المتخصصة.",
        "about.customers.heading": "مشترون يحتاجون مخزوناً يصل.",
        "about.team.heading": "فرق بحسب المهام.",
        "about.fact.legal": "الشكل القانوني",
        "about.fact.license": "الجهة المرخِّصة",
        "about.fact.license.value": "دائرة الاقتصاد بدبي",
        "about.fact.legal.value": "شركة ذات مسؤولية محدودة",
        "about.fact.activity": "النشاط المرخّص",
        "about.fact.activity.value": "تجارة عامة",
        "about.fact.established": "تاريخ التأسيس",
        "about.fact.location": "الموقع",
        "about.compliance.note": "نحافظ على وثائق التجارة والجمارك المطلوبة لأنشطة الاستيراد والتصدير. لا ننشر أرقام الرخص أو السجل على هذا الموقع.",
        "about.image.alt": "أفق دبي مع أبراج حديثة عند الغروب",
        "about.vision.eyebrow": "الرؤية",
        "about.vision.copy": "أن نكون شريك تجارة عامة معتمداً في دول الخليج — معروفين بالسرعة والنزاهة وجودة المنتجات.",
        "about.mission.eyebrow": "الرسالة",
        "about.mission.copy": "تقديم توفر منتجات ثابت وقيمة من خلال توريد فعّال وضوابط جودة صارمة وخدمة عملاء سريعة الاستجابة.",
        "about.customers.title": "من نخدم",
        "customer.0": "تجار تجزئة مستقلون وسلاسل",
        "customer.1": "فنادق ومطاعم وتموين",
        "customer.2": "شركات البناء والمرافق",
        "customer.3": "موزعون وتجار إعادة بيع",
        "about.team.title": "كيف نعمل",
        "about.team.intro": "فرق بحسب المهام — وليس دليلاً للبيانات الشخصية.",
        "team.0.role": "الشريك المدير / الرئيس التنفيذي",
        "team.0.focus": "الاستراتيجية والترخيص وعلاقات الموردين الرئيسية",
        "team.1.role": "رئيس المشتريات",
        "team.1.focus": "التوريد وتأهيل الموردين وفحوصات الجودة",
        "team.2.role": "مدير العمليات واللوجستيات",
        "team.2.focus": "التخزين والتوزيع والتخليص الجمركي",
        "team.3.role": "المبيعات والحسابات",
        "team.3.focus": "مبيعات B2B والانضمام والفوترة والائتمان",

        "trade.hero.eyebrow": "نطاق التجارة",
        "trade.hero.title": "ماذا نتاجر",
        "trade.hero.lede": "تشكيلات مخصّصة لتجار التجزئة والضيافة والمشاريع والموزعين — مع التوريد والامتثال والجاهزية اللوجستية.",
        "trade.services.title": "أبعد من قائمة المنتجات",
        "trade.services.heading": "دعم يحيط بالبضاعة.",
        "trade.extra.1": "توريد المنتجات وتقييم الموردين",
        "trade.extra.2": "تغليف بعلامة خاصة عند الحاجة",
        "trade.extra.3": "تنسيق التخليص الجمركي",
        "trade.extra.4": "شروط تجارية للكميات والمشاريع",
        "trade.cta.title": "اطلب قائمة منتجات أو عرض سعر",
        "trade.cta.copy": "راسلنا بالفئات أو العلامات أو المواصفات — نرد عبر البريد.",
        "trade.cta.button": "تواصل عبر البريد",

        "cat.fmcg.title": "سلع استهلاكية سريعة",
        "cat.fmcg.items": "أطعمة معبأة ومشروبات ومستلزمات منزلية استهلاكية",
        "cat.fmcg.alt": "رفوف سوبرماركت بمنتجات متنوعة",
        "cat.personal_care.title": "العناية الشخصية",
        "cat.personal_care.items": "منتجات النظافة والعناية الشخصية",
        "cat.personal_care.alt": "منتجات عناية شخصية على رف",
        "cat.industrial_supplies.title": "مستلزمات صناعية",
        "cat.industrial_supplies.items": "مواد استهلاكية وصيانة",
        "cat.industrial_supplies.alt": "مستودع بمستلزمات صناعية",
        "cat.light_electricals.title": "كهربائيات خفيفة",
        "cat.light_electricals.items": "سلع كهربائية خفيفة وقطع غيار",
        "cat.light_electricals.alt": "حاويات شحن للبضائع",
        "cat.packaging.title": "تعبئة وتغليف",
        "cat.packaging.items": "مواد تغليف وأساسيات تجارية",
        "cat.packaging.alt": "فريق يراجع مستندات تجارة",

        "contact.hero.eyebrow": "اتصل بنا",
        "contact.hero.title": "تواصل مع فريقنا",
        "contact.hero.lede": "راسلنا على <a href=\"mailto:sharpsparkgt@gmail.com\" dir=\"ltr\">sharpsparkgt@gmail.com</a>. مقرّنا في دبي، الإمارات العربية المتحدة.",
        "contact.aside.title": "بيانات العمل",
        "contact.fact.company": "الشركة",
        "contact.fact.email": "البريد الإلكتروني",
        "contact.fact.address": "العنوان",
        "contact.fact.license": "الجهة المرخِّصة",
        "contact.form.title": "أرسل استفساراً",
        "contact.form.name": "اسمك",
        "contact.form.name.placeholder": "الاسم الكامل",
        "contact.form.company": "الشركة (اختياري)",
        "contact.form.company.placeholder": "اسم الشركة",
        "contact.form.email": "البريد الإلكتروني",
        "contact.form.email.placeholder": "you@company.com",
        "contact.form.message": "الرسالة",
        "contact.form.message.placeholder": "المنتجات، الكميات، الجداول الزمنية…",
        "contact.form.submit": "إرسال الرسالة",
        "contact.form.note": "تفضّل البريد؟ راسلنا مباشرة — يعمل دائماً.",
        "contact.form.success": "شكراً — تم إرسال رسالتك. سنرد عبر البريد الإلكتروني.",
        "contact.form.error.validation": "يرجى إدخال الاسم وبريد إلكتروني صالح ورسالة.",
        "contact.form.error.mail": "تعذّر الإرسال من هذا الخادم. راسلنا مباشرة عبر البريد.",

        "404.eyebrow": "غير موجودة",
        "404.title": "هذه الصفحة غير متاحة.",
        "404.copy": "جرّب الصفحة الرئيسية أو تواصل معنا عبر البريد.",
        "404.home": "العودة للرئيسية"
    };

    var current = "en";
    var textOriginal = new WeakMap();
    var htmlOriginal = new WeakMap();

    function storedLang() {
        try {
            var v = localStorage.getItem(STORAGE_KEY);
            return v === "ar" ? "ar" : "en";
        } catch (e) {
            return "en";
        }
    }

    function textNode(el) {
        for (var i = 0; i < el.childNodes.length; i++) {
            var node = el.childNodes[i];
            if (node.nodeType === 3 && node.nodeValue.trim() !== "") {
                return node;
            }
        }
        return null;
    }

    function setText(el, value) {
        var node = textNode(el);
        if (node) {
            if (!textOriginal.has(el)) textOriginal.set(el, node.nodeValue);
            node.nodeValue = value;
        } else {
            if (!htmlOriginal.has(el)) htmlOriginal.set(el, el.innerHTML);
            el.textContent = value;
        }
    }

    function restore(el) {
        if (textOriginal.has(el)) {
            var node = textNode(el);
            if (node) node.nodeValue = textOriginal.get(el);
        } else if (htmlOriginal.has(el)) {
            el.innerHTML = htmlOriginal.get(el);
        }
    }

    function attribute(el, attr, key, isAr, storeKey) {
        if (!el.dataset[storeKey]) el.dataset[storeKey] = el.getAttribute(attr) || "";
        el.setAttribute(attr, isAr && AR[key] ? AR[key] : el.dataset[storeKey]);
    }

    function apply(lang) {
        current = lang === "ar" ? "ar" : "en";
        var isAr = current === "ar";
        var root = document.documentElement;

        root.lang = isAr ? "ar" : "en";
        root.dir = isAr ? "rtl" : "ltr";
        root.classList.toggle("lang-ar", isAr);

        document.querySelectorAll("[data-i18n]").forEach(function (el) {
            if (isAr && AR[el.dataset.i18n]) setText(el, AR[el.dataset.i18n]);
            else if (!isAr) restore(el);
        });

        document.querySelectorAll("[data-i18n-html]").forEach(function (el) {
            var key = el.dataset.i18nHtml;
            var original = htmlOriginal.has(el) ? htmlOriginal.get(el) : el.innerHTML;
            if (!htmlOriginal.has(el)) htmlOriginal.set(el, original);
            el.innerHTML = isAr && AR[key] ? AR[key] : original;
        });

        document.querySelectorAll("[data-i18n-aria]").forEach(function (el) {
            attribute(el, "aria-label", el.dataset.i18nAria, isAr, "i18nAriaEn");
        });

        document.querySelectorAll("[data-i18n-placeholder]").forEach(function (el) {
            attribute(el, "placeholder", el.dataset.i18nPlaceholder, isAr, "i18nPlaceholderEn");
        });

        document.querySelectorAll("[data-i18n-alt]").forEach(function (el) {
            attribute(el, "alt", el.dataset.i18nAlt, isAr, "i18nAltEn");
        });

        var page = document.body.getAttribute("data-page") || "home";
        var description = document.querySelector('meta[name="description"]');
        if (!document.documentElement.dataset.i18nTitle) {
            document.documentElement.dataset.i18nTitle = document.title;
        }
        var englishTitle = document.documentElement.dataset.i18nTitle;
        document.title = isAr && AR["meta." + page + ".title"] ? AR["meta." + page + ".title"] : englishTitle;
        if (description) {
            if (!description.dataset.i18nEnglish) {
                description.dataset.i18nEnglish = description.getAttribute("content") || "";
            }
            description.setAttribute(
                "content",
                isAr && AR["meta." + page + ".description"] ? AR["meta." + page + ".description"] : description.dataset.i18nEnglish
            );
        }

        document.querySelectorAll("[data-lang-toggle]").forEach(function (button) {
            var label = button.querySelector(".lang-toggle-label");
            if (label) label.textContent = isAr ? "EN" : "AR";
            button.setAttribute("aria-label", isAr ? (AR["lang.to_english"] || "Switch to English") : "Switch to Arabic");
        });

        var navToggle = document.querySelector("[data-nav-toggle]");
        if (navToggle) {
            var open = document.body.classList.contains("nav-open");
            navToggle.setAttribute(
                "aria-label",
                isAr
                    ? (AR[open ? "nav.close" : "nav.open"] || "Menu")
                    : (open ? "Close menu" : "Open menu")
            );
        }
    }

    function t(key) {
        return current === "ar" && AR[key] ? AR[key] : null;
    }

    document.querySelectorAll("[data-lang-toggle]").forEach(function (button) {
        button.addEventListener("click", function () {
            var next = current === "ar" ? "en" : "ar";
            try {
                localStorage.setItem(STORAGE_KEY, next);
            } catch (error) {}
            apply(next);
        });
    });

    window.sharpSparkI18n = { apply: apply, lang: function () { return current; }, t: t };

    apply(storedLang());
})();
