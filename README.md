# Sharp Spark — corporate website (PHP)

Marketing site for **Sharp Spark General Trading L.L.C** (Dubai, UAE). Content is taken from the company profile; licence numbers and phone numbers are **not** published.

## Stack

- PHP 8+ (plain PHP, no framework)
- HTML + CSS (bright black & gold editorial layout, design tokens in `design-system/sharp-spark/MASTER.md`)
- Client-side **Arabic** via `assets/js/i18n.js` and `localStorage` key `sharpspark-lang`

## Pages

| Route     | File          |
|-----------|---------------|
| `/`       | `index.php`   |
| `/about`  | `about.php`   |
| `/trade`  | `trade.php`   |
| `/contact`| `contact.php` |

## Local preview

```bash
cd Sharp-Spark
php -S localhost:8080 router.php
```

Open [http://localhost:8080](http://localhost:8080).

## Contact

- **Email only:** `sharpsparkgt@gmail.com`
- **Address on site:** Dubai, United Arab Emirates

Brand artwork lives in `assets/img/logo-sharp-spark.jpg` (original supplied logo). Header/footer use derivatives cut from that exact file: `logo-header.jpg` (horizontal nav lockup), `logo-lockup.jpg` (full stacked signature), `logo-mark.png` (favicon).

## Images

Photography from [Unsplash](https://unsplash.com) (illustrative, credited in the footer).
