# Design System Master File

> **LOGIC:** When building a specific page, first check `design-system/pages/[page-name].md`.
> If that file exists, its rules **override** this Master file.
> If not, strictly follow the rules below.

---

**Project:** Sharp Spark
**Category:** Luxury B2B trading & distribution

---

## Global Rules

### Color Palette

| Role | Hex | CSS Variable |
|------|-----|--------------|
| Ink / canvas | `#0B0A09` | `--ink` |
| Ink raised | `#12100D` | `--ink-2` |
| Gold (accent) | `#C9A05A` | `--gold` |
| Gold light | `#E7C987` | `--gold-light` |
| Gold deep | `#9A742E` | `--gold-deep` |
| Gold text on paper | `#7F5C1C` | `--gold-ink` |
| On gold (labels) | `#171207` | `--on-gold` |
| Cream | `#F6F1E7` | `--cream` |
| Paper (light canvas) | `#FAF8F4` | `--paper` |
| Paper shade | `#F2ECE1` | `--paper-2` |
| Body text on paper | `#4A443D` | `--body-soft` |
| Muted on paper | `#7A7167` | `--muted` |
| Muted on ink | `#A89F92` | `--muted-dark` |
| Hairline on ink | `rgba(231,201,135,.18)` | `--line` |
| Hairline on paper | `rgba(20,17,14,.14)` | `--line-dark` |

**Color Notes:** Lifted from the mark — metallic gold ribbon, black/cream core, warm near-black canvas. Gold fills always take `--on-gold` text; never cream or white on gold (contrast fails).

### Typography

- **Heading Font:** Cormorant Garamond (500, with italic for emphasis)
- **Body / UI Font:** Montserrat (300–600), uppercase tracked labels
- **Arabic:** Cairo
- **Google Fonts:** [Cormorant Garamond + Montserrat + Cairo](https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&display=swap)

### Brand motifs

- Four-point spark and ribbon "S": hero / page-hero watermarks, favicon, footer mark.
- `.hl` — italic Cormorant in gold for emphasis inside headlines.
- Gold hairlines (1px), tracked uppercase labels, sharp (0 radius) edges.
- Logo: the supplied artwork `assets/img/logo-sharp-spark.jpg` is the single source of truth. Derivatives cut from it: `logo-header.jpg` (header lockup), `logo-lockup.jpg` (footer signature), `logo-mark.png` (favicon). Never redraw or recolour the mark.

### Spacing Variables

| Token | Value | Usage |
|-------|-------|-------|
| `--space-xs` | `4px` / `0.25rem` | Tight gaps |
| `--space-sm` | `8px` / `0.5rem` | Icon gaps, inline spacing |
| `--space-md` | `16px` / `1rem` | Standard padding |
| `--space-lg` | `24px` / `1.5rem` | Section padding |
| `--space-xl` | `32px` / `2rem` | Large gaps |
| `--space-2xl` | `48px` / `3rem` | Section margins |
| `--space-3xl` | `64px` / `4rem` | Hero padding |

### Shadow Depths

| Level | Value | Usage |
|-------|-------|-------|
| `--shadow-sm` | `0 1px 2px rgba(0,0,0,0.05)` | Subtle lift |
| `--shadow-md` | `0 4px 6px rgba(0,0,0,0.1)` | Cards, buttons |
| `--shadow-lg` | `0 24px 60px -30px rgba(11,10,9,0.55)` | Modals, dropdowns |
| `--shadow-xl` | `0 20px 25px rgba(0,0,0,0.15)` | Hero images, featured cards |

---

## Component Specs

### Buttons

```css
/* Primary — gold gradient, near-black label */
.btn--gold {
  background: linear-gradient(135deg, #f0d79c 0%, #cfa662 45%, #a87d35 100%);
  color: #171207;
  padding: 14px 24px;
  border-radius: 0;
  font-family: Montserrat, sans-serif;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: .18em;
  text-transform: uppercase;
  box-shadow: 0 18px 40px -24px rgba(201,160,90,.9);
  transition: transform 250ms ease, box-shadow 250ms ease, background 250ms ease;
  cursor: pointer;
}

.btn--gold:hover { transform: translateY(-1px); }

/* Secondary — gold hairline on ink */
.btn--ghost {
  background: transparent;
  color: #f6f1e7;
  border: 1px solid rgba(231,201,135,.34);
  padding: 14px 24px;
  border-radius: 0;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: .18em;
  text-transform: uppercase;
  transition: border-color 250ms ease, color 250ms ease;
  cursor: pointer;
}
```

### Cards / panels

```css
.panel {
  background: #12100d;
  border: 1px solid rgba(231,201,135,.18);
  border-radius: 0;
  padding: 32px;
  color: #f6f1e7;
}
```

### Inputs

```css
.input {
  padding: 14px 16px;
  border: 1px solid rgba(20,17,14,.26);
  border-radius: 0;
  background: #faf8f4;
  font-family: Montserrat, sans-serif;
  font-size: 15px;
  transition: border-color 250ms ease, box-shadow 250ms ease;
}

.input:focus {
  border-color: #9a742e;
  outline: none;
  box-shadow: inset 0 0 0 1px #9a742e;
}
```

### Modals

```css
.modal-overlay {
  background: rgba(11, 10, 9, 0.7);
  backdrop-filter: blur(6px);
}

.modal {
  background: #12100d;
  color: #f6f1e7;
  border: 1px solid rgba(231,201,135,.24);
  border-radius: 0;
  padding: 32px;
  box-shadow: 0 40px 80px -40px rgba(0,0,0,.85);
  max-width: 500px;
  width: 90%;
}
```

---

## Style Guidelines

**Style:** Light black & gold editorial — ivory/white fields, full-colour photography, near-black bands for contact and footer, metallic gold hairlines and serif display type

**Keywords:** Premium, bright, restrained, metallic, editorial, high contrast, generous whitespace, sharp edges

**Best For:** Trading, logistics, luxury B2B corporate

**Key Effects:** 1px gold hairlines, italic serif gold emphasis (`.hl`), full-colour photography in white/gold frames, gold offset borders, near-black contact band, 250–700ms eased transitions

### Page Pattern

**Pattern Name:** Hero + Features + CTA

- **Conversion Strategy:** Deep CTA placement. For CTA label text, verify at least 4.5:1 against the button fill; use 7:1 only when the product explicitly targets AAA normal-text contrast. Keep focus and component boundaries independently visible. Disable hero parallax under reduced motion and render its static final state.
- **CTA Placement:** Hero (sticky) + Bottom
- **Section Order:** Hero with headline/image > Value prop > Key features (3-5) > CTA section > Footer

---

## Anti-Patterns (Do NOT Use)

- ❌ Excessive animation
- ❌ Blue or plum SaaS palettes (brand is black + gold only)
- ❌ Cream/white text on gold fills (contrast fails — use `--on-gold`)

### Additional Forbidden Patterns

- ❌ **Emojis as icons** — Use SVG icons (Heroicons, Lucide, Simple Icons)
- ❌ **Missing cursor:pointer** — All clickable elements must have cursor:pointer
- ❌ **Layout-shifting hovers** — Avoid scale transforms that shift layout
- ❌ **Low contrast text** — Maintain 4.5:1 minimum contrast ratio
- ❌ **Instant state changes** — Always use transitions (150-300ms)
- ❌ **Invisible focus states** — Focus states must be visible for a11y

---

## Pre-Delivery Checklist

Before delivering any UI code, verify:

- [ ] No emojis used as icons (use SVG instead)
- [ ] All icons from consistent icon set (Heroicons/Lucide)
- [ ] `cursor-pointer` on all clickable elements
- [ ] Hover states with smooth transitions (150-300ms)
- [ ] Light mode: text contrast 4.5:1 minimum
- [ ] Focus states visible for keyboard navigation
- [ ] `prefers-reduced-motion` respected
- [ ] Responsive: 375px, 768px, 1024px, 1440px
- [ ] No content hidden behind fixed navbars
- [ ] No horizontal scroll on mobile
