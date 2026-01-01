# KFC WordPress Theme - Technical Reference Guide

**Version:** 1.0.3
**Last Updated:** 2025-12-31
**Purpose:** Quick reference for mobile optimization and future development work

---

## Table of Contents

1. [Theme Overview](#theme-overview)
2. [Theme Structure](#theme-structure)
3. [Recent Optimizations](#recent-optimizations)
4. [CSS Architecture](#css-architecture)
5. [Key Integrations](#key-integrations)
6. [Mobile Considerations](#mobile-considerations)
7. [Block Patterns](#block-patterns)
8. [Functions & Hooks](#functions--hooks)

---

## Theme Overview

**Type:** WordPress Block Theme (Full Site Editing)
**Base:** Custom-built for Kingston Fencing Club
**Primary Use Case:** WooCommerce course bookings and club information
**WordPress Version:** 6.0+ (tested up to 6.7)
**PHP Version:** 8.0+

### Key Features
- Full Site Editing (FSE) support
- WooCommerce integration for course bookings
- Custom block patterns for hero sections, features, schedules
- System font stack (no external fonts)
- Custom CSS variables for consistent theming
- Responsive design with mobile-first considerations

---

## Theme Structure

### Core Files

#### `/style.css`
Theme metadata and header information only (no actual styles).

#### `/theme.json`
Global theme configuration:
- **Color Palette:** 12 colors (primary #0099ff, navy #0a1e3c, accent #ff6600, etc.)
- **Typography:** System font stack, 5 size presets (small to xx-large)
- **Layout:** Content width 1200px, wide width 1400px
- **Spacing Units:** px, em, rem, %, vh, vw

#### `/functions.php` (423 lines)
Key functions:
- **Theme setup** (lines 15-48): WooCommerce support, custom logo, thumbnails
- **Script enqueue** (lines 53-62): Loads custom.css
- **Shortcodes:**
  - `[recent_news]` (lines 69-130): Displays recent posts grid
  - `[course_dates]` (lines 227-272): Shows product start/end dates
- **Block patterns registration** (lines 277-376): Registers 5 custom patterns
- **Comment disabling** (lines 135-188): Disables comments except on products
- **WooCommerce cart customization** (lines 211-220): Payment info text
- **Waiver notice** (lines 381-386): Adds waiver acceptance on checkout
- **Button style fix** (lines 391-422): JavaScript fixes for MailPoet/Instagram buttons

#### `/assets/css/custom.css` (2,250 lines)
Main stylesheet with all custom styling (detailed below).

### Directory Structure

```
kfc-theme/
├── style.css              # Theme header only
├── theme.json             # FSE configuration
├── functions.php          # PHP functions & hooks
├── assets/
│   ├── css/
│   │   └── custom.css     # All custom styles (1,959 lines)
│   ├── images/
│   │   ├── logo.png       # Site logo
│   │   ├── favicon-32x32.png
│   │   ├── favicon-192x192.png
│   │   └── apple-touch-icon.png
│   └── js/                # Empty (WOW.js removed)
├── patterns/              # 5 block patterns (PHP)
│   ├── features.php       # 2x2 grid features section
│   ├── hero-content.php   # Hero with image
│   ├── hero-video.php     # Hero with video
│   ├── schedule.php       # Weekly schedule
│   └── team-member.php    # Team member card
├── parts/                 # Template parts (HTML)
│   ├── header.html
│   ├── footer.html
│   ├── sidebar.html
│   └── comments.html
├── templates/             # Page templates (HTML)
│   ├── index.html
│   ├── front-page.html
│   ├── page.html
│   ├── single.html
│   ├── archive.html
│   ├── 404.html
│   ├── single-product.html
│   ├── archive-product.html
│   ├── page-basket.html
│   ├── page-checkout.html
│   └── page-my-account.html
└── build/                 # Build output (mirror of above)
```

---

## Recent Optimizations

Based on git history, the following optimizations were completed:

### 1. Font Optimization (Commit: d4ea535)
**Date:** Recent
**Changes:**
- Removed Google Fonts (Roboto)
- Implemented system font stack in `theme.json`:
  ```
  -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
  Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif
  ```
- **Impact:** Eliminates external font request, improves page load speed

### 2. WOW.js Removal (Commit: b7fe89d)
**Date:** Recent
**Changes:**
- Removed WOW.js animation library
- Removed unused animation keyframes from CSS
- **Impact:** Reduced JavaScript payload, faster page load

### 3. JavaScript Optimization (Commit: aecfa40)
**Date:** Recent
**Changes:**
- Made button style fix conditional (only loads on `/courses` page)
- Targets MailPoet and Instagram buttons
- **Impact:** JavaScript only runs where needed

### 4. CSS Variables Implementation (Commit: f125c8a)
**Date:** Recent
**Changes:**
- Added CSS custom properties (`:root` variables)
- Removed redundant code
- Centralized color and sizing values
- **Impact:** More maintainable CSS, easier theming

---

## CSS Architecture

### File: `/assets/css/custom.css` (2,250 lines)

### CSS Custom Properties (Lines 9-34)

```css
:root {
    /* Brand Colors */
    --color-primary: #0099ff;
    --color-primary-dark: #0077cc;
    --color-primary-hover: #00aaff;
    --color-primary-hover-dark: #0088dd;

    /* Gradients */
    --gradient-primary: linear-gradient(135deg, #0099ff 0%, #0077cc 100%);
    --gradient-hover: linear-gradient(135deg, #00aaff 0%, #0088dd 100%);
    --gradient-disabled: linear-gradient(135deg, #cccccc 0%, #aaaaaa 100%);

    /* Button Properties */
    --button-padding: 12px 28px;
    --button-radius: 6px;
    --button-font-size: 14px;
    --button-font-weight: 600;
    --button-letter-spacing: 0.5px;
}
```

### Major CSS Sections

#### 1. Universal Button Styling (Lines 51-142)
**Purpose:** Consistent button appearance across all contexts
**Key Features:**
- Blue gradient background with CSS variables
- Extensive use of `!important` flags (overrides plugin styles)
- Applies to: `.wp-block-button__link`, `.woocommerce .button`, form submits
- Hover effect: lift animation (`translateY(-1px)`)
- Disabled state: gray gradient, no pointer events

**Important Note:** Due to `!important` flags, pattern-specific overrides require equally specific selectors.

#### 2. Links (Lines 40-45)
Removes underlines from all content links.

#### 3. Tables (Lines 148-194)
Course listing tables with status colors:
- Available: `#28a745` (green)
- Full: `#dc3545` (red)
- In Progress: `#ff6600` (orange)
- Completed: `#28a745` (green)

#### 4. Recent News Shortcode (Lines 200-261)
CSS Grid layout: `repeat(auto-fill, minmax(300px, 1fr))`
Card-based design with hover shadow effect.

#### 5. MetaSlider Gap Fix (Lines 333-422)
**Purpose:** Remove gaps between slider and header on home page
**Targets:** `.metaslider`, `.flexslider`, `.wp-block-shortcode`
**Key Rules:**
- Zero margins/padding on all slider elements
- `line-height: 0` on shortcode wrapper
- Header margin removal on home page

#### 6. Navigation (Lines 428-611)
**Desktop Navigation:**
- Separators between menu items (pipe character `|`)
- Hover background: `rgba(255, 255, 255, 0.15)`
- WP Menu Cart integration with compact spacing
- **Breakpoints for progressive spacing reduction:**
  - 1600px: padding 0.7rem, font 0.95rem
  - 1400px: padding 0.5rem, font 0.9rem
  - 1200px: padding 0.4rem, font 0.85rem
  - 1000px: allow wrapping
- Separator hidden before cart item using `:nth-last-child(2)`

**Mobile Navigation (max-width: 782px):**
- Separators hidden
- Hamburger menu overlay
- Larger font size (1.25rem)

#### 7. WooCommerce Styling (Lines 281-330, 634-822)
**Product Pages:**
- Gallery images: 8px border radius
- Price color: primary blue, 1.5rem, 600 weight
- Sale badge: orange (#ff6600)
- Star ratings: yellow (#ffb900)

**Cart/Checkout:**
- Form fields: 1px solid #ddd, 4px radius
- Focus state: primary border + box shadow
- Coupon/gift card inputs: 42px height (matched with buttons)
- Reduced field gaps: 12px between fields, 2px label-to-input

**Notices (Lines 742-822):**
- Success/info: light blue background (#e6f4ff)
- Error: light red background (#ffe6e6)
- Constrained to 1400px max-width on cart page

#### 8. Features Pattern - CSS Grid (Lines 1672-1757)
**Purpose:** 2x2 equal-height feature cards
**Implementation:**
- Converts `.wp-block-columns` to `display: grid`
- Grid: `repeat(2, 1fr)` with `gap: 0`
- Images: `object-fit: cover` for full cell fill
- Flexbox content with buttons pushed to bottom (`margin-top: auto`)
- **Mobile (max-width: 782px):** Single column grid

**Critical Note:** Pattern uses `wp:columns` and `wp:media-text` blocks in editor but renders as CSS Grid on frontend.

#### 9. Features Pattern - Outline Buttons (Lines 1763-1795)
**Purpose:** Override global button styles in features pattern
**Specificity:** High selector specificity required
**Styles:**
- White outline on blue backgrounds
- Blue outline on white backgrounds
- Transparent background with 2px border
- Hover: subtle background tint

#### 10. Forminator Forms (Lines 1189-1321)
Custom styling for contact forms:
- Inputs: white background, #ddd border, 6px radius
- Focus: primary border + shadow
- Submit buttons: matches global button style
- Error messages: red text
- Success messages: green background

#### 11. MailPoet Forms (Lines 1326-1476)
Newsletter subscription forms:
- High specificity selectors to override inline styles
- Email input: 6px radius, primary focus state
- Submit button: uses CSS variables, gradient background
- Checkboxes: accent color from CSS variables

#### 12. WP Responsive Recent Post Slider (Lines 1482-1514)
**Plugin:** Uses Slick carousel (NOT BxSlider)
**Purpose:** Reduce gap between posts and navigation dots
**Key Rule:** `.wppsac-post-slider .slick-dots { margin-top: 15px !important; }`
**Adjustable:** Change 15px value to increase/decrease gap

#### 13. Spotlight Instagram Feed (Lines 1520-1576)
Follow and Load More buttons styled to match theme buttons.

#### 14. Hero Patterns (Lines 1843-1958)
**Hero Content (lines 1846-1882):**
- Zoom animation: 20s ease-in-out infinite alternate
- Minimum height: 500px (300px mobile)

**Hero Video (lines 1888-1958):**
- Video: `object-fit: cover` for full coverage
- Equal height columns with flexbox
- Outline buttons on navy background

#### 15. Schedule Pattern (Lines 1646-1669)
Card styling with hover effect:
- Border: 1px solid #e0e0e0
- Hover: lift animation + shadow increase

#### 16. Team Member Pattern (Lines 1801-1840)
Similar card styling to schedule with rounded images.

#### 17. Footer (Lines 918-998)
- Navigation without separators
- Checkmark icons before links (lines 1604-1616)
- Social media hover: lift + scale animation (lines 1622-1641)
- **Mobile (max-width: 782px):** Stack columns, center align

#### 18. Sidebar (Lines 855-912)
Widget styling for recent posts and archives.

#### 19. Single Product Pages (Lines 1004-1183)
Comprehensive WooCommerce product page styling including gallery, price, tabs, and reviews.

#### 20. Checkout Waiver Notice (Lines 1582-1597)
Styling for waiver acceptance text below terms and conditions.

### Responsive Breakpoints

The theme uses the following breakpoints throughout:

| Breakpoint | Purpose | Key Changes |
|------------|---------|-------------|
| **1600px** | Navigation squeeze | Reduce padding to 0.7rem, font to 0.95rem |
| **1400px** | Navigation squeeze | Reduce padding to 0.5rem, font to 0.9rem |
| **1200px** | Navigation squeeze | Reduce padding to 0.4rem, font to 0.85rem |
| **1000px** | Navigation wrap | Allow header and nav to wrap |
| **782px** | Mobile breakpoint | Single column layouts, hide separators, stack columns |
| **768px** | Mobile content | Single column news grid, table scroll |

**Standard Mobile Breakpoint:** `max-width: 782px` (matches WordPress admin bar breakpoint)

---

## Key Integrations

### WooCommerce Customizations

#### Course Booking Fields
Custom checkout fields based on product category:
- **Courses:** Participant name, emergency contact, medical conditions
- **Junior:** Adds participant age, photo consent checkbox
- **Lesson:** One-off lesson fields
- **Fees:** Visit date field

**Implementation:** Handled by Course Booker plugin (separate repository)

#### Product Attributes
- `Start` - Course start date
- `End` - Course end date
- `Coaches` - Instructor names

**Display:** `[course_dates]` shortcode formats and displays dates

#### Cart/Checkout Enhancements
- Payment methods text after "Proceed to Checkout" button
- PayPal note below cart totals
- Waiver acceptance notice on checkout page

### Plugin-Specific Styling

#### 1. Forminator (Contact Forms)
**Version:** Unknown
**CSS Location:** Lines 1189-1321
**Styled Elements:**
- Form inputs, textareas, selects
- Submit buttons (matches theme buttons)
- Error/success messages
- Radio/checkbox inputs

#### 2. MailPoet (Newsletter)
**Version:** Unknown
**CSS Location:** Lines 1326-1476
**Styled Elements:**
- Email input fields
- Submit button (high specificity selectors)
- Checkbox lists
- Success/error messages

**JavaScript Fix:** Button border-radius override (functions.php lines 399-407)

#### 3. WP Responsive Recent Post Slider
**Version:** Unknown
**CSS Location:** Lines 1482-1514
**Carousel Library:** Slick (not BxSlider)
**Key Classes:** `.wppsac-post-slider`, `.slick-dots`
**Customization:** Gap between posts and dots (15px)

#### 4. Spotlight Social Feeds (Instagram)
**Version:** Unknown
**CSS Location:** Lines 1520-1576
**Styled Elements:**
- Follow button (`.FollowButton`)
- Load More button (`.LoadMoreButton`)

**JavaScript Fix:** Button border-radius override (functions.php lines 410-417)

#### 5. MetaSlider
**Version:** Unknown
**CSS Location:** Lines 333-422
**Purpose:** Remove gaps on front page
**Targets:** Flexslider implementation

#### 6. WP Menu Cart
**Version:** Unknown
**CSS Location:** Lines 473-488
**Purpose:** Display cart in navigation
**Features:**
- Compact display (nowrap, reduced font size)
- Hidden when empty
- Separator hidden before cart item

---

## Mobile Considerations

### Current Mobile Optimizations

#### 1. Responsive Images
All images constrained with `max-width: 100%` and `height: auto` (lines 829-849).

#### 2. Layout Stacking
At 782px breakpoint:
- Columns convert to single column (flexbox `flex-direction: column`)
- Features pattern switches to single column grid
- Hero sections stack vertically
- Sidebar moves below main content

#### 3. Navigation
Mobile menu (hamburger):
- Full-screen overlay with primary blue background
- Larger text (1.25rem)
- No separators between items
- Touch-friendly spacing

#### 4. Typography Scaling
Hero headings reduce from 2rem (xx-large) to 1.75rem on mobile (line 1955-1957).

#### 5. Table Scrolling
Tables scroll horizontally on mobile with minimum width (lines 622-629).

#### 6. Touch Targets
Buttons maintain adequate padding (12px 28px) for touch interaction.

### Known Mobile Considerations

#### Potential Issues:
1. **Button text wrapping:** Long button text may wrap on small screens
2. **Course table complexity:** Wide tables may be difficult to navigate on mobile
3. **Form field heights:** All inputs standardized to 42px (may need testing on various devices)
4. **Video hero performance:** Large video files on mobile data connections
5. **MetaSlider images:** Large slider images may impact mobile page load

#### Areas for Further Mobile Optimization:
1. **Performance:**
   - Image lazy loading not implemented
   - No responsive image srcsets
   - Large hero videos not optimized for mobile

2. **Touch Interactions:**
   - No touch-specific hover states
   - Dropdowns may need touch optimization

3. **Typography:**
   - Font sizes mostly use fixed rem values
   - Could benefit from fluid typography (clamp)

4. **Spacing:**
   - Padding/margins mostly fixed values
   - Could use responsive spacing scale

5. **Navigation:**
   - Hamburger menu could be optimized
   - Submenu interactions on touch devices

---

## Block Patterns

All patterns located in `/patterns/` directory as PHP files.

### 1. Features Pattern (`features.php`)
**Purpose:** 2x2 grid showcasing club programs
**Blocks Used:** `wp:columns`, `wp:media-text`, `wp:button`
**CSS Classes:** `.has-light-background-color`
**Layout:** CSS Grid (2 columns desktop, 1 column mobile)
**Features:**
- Alternating blue/white backgrounds
- Equal height cards
- Images fill cells with `object-fit: cover`
- Outline buttons adapt to background color

**Content:**
1. Adult Classes (blue background, left image)
2. Junior Classes (white background, left image)
3. Private Lessons (white background, right image)
4. Competition Training (blue background, right image)

### 2. Hero Content Pattern (`hero-content.php`)
**Purpose:** Hero section with image and text
**Blocks Used:** `wp:cover`, `wp:heading`, `wp:button`
**CSS Class:** `.hero-image-zoom`
**Animation:** 20s zoom effect on background image
**Height:** Min 500px (300px mobile)

### 3. Hero Video Pattern (`hero-video.php`)
**Purpose:** Hero section with video background
**Blocks Used:** `wp:video`, `wp:columns`, `wp:heading`
**CSS Class:** `.hero-video`
**Layout:** Video left, text right (stacks on mobile)
**Height:** Min 500px (300px mobile)

### 4. Schedule Pattern (`schedule.php`)
**Purpose:** Weekly training schedule display
**Blocks Used:** `wp:columns`, `wp:group`
**CSS Class:** `.schedule-card`
**Features:** Card styling with hover effect

### 5. Team Member Pattern (`team-member.php`)
**Purpose:** Individual team member profile
**Blocks Used:** `wp:columns`, `wp:image`, `wp:paragraph`
**CSS Classes:** `.team-member-card`, `.team-member-photo`
**Layout:** Photo left, bio right (stacks on mobile)

**Registration:** All patterns registered in `functions.php` lines 277-376.

---

## Functions & Hooks

### Key PHP Functions

#### Theme Setup (`kfc_theme_setup`)
**Hook:** `after_setup_theme`
**Actions:**
- Enables block styles, editor styles, responsive embeds
- Registers custom logo support
- Adds WooCommerce support (gallery zoom, lightbox, slider)
- Registers primary and footer navigation menus

#### Script Enqueue (`kfc_theme_scripts`)
**Hook:** `wp_enqueue_scripts`
**Loads:** `/assets/css/custom.css` with theme version number

#### Recent News Shortcode (`kfc_recent_news_shortcode`)
**Shortcode:** `[recent_news]` or `[recent_news count="4"]`
**Default:** 6 posts
**Output:** Grid of news cards with thumbnail, title, date, excerpt, read more

#### Course Dates Shortcode (`kfc_course_dates_shortcode`)
**Shortcode:** `[course_dates]`
**Context:** Single product pages
**Reads:** Start/End product attributes
**Output:** Formatted date range or single date

#### Comment Disabling (`kfc_disable_comments`)
**Hook:** `init`
**Purpose:** Disable comments site-wide except on products (for reviews)
**Actions:**
- Closes comments and pingbacks
- Hides existing comments
- Removes admin menu and metaboxes
- Redirects comments page access

#### Comment Support Removal (`kfc_remove_comment_support`)
**Hook:** `init` (priority 100)
**Purpose:** Remove comment support from posts and pages (not products)

#### Favicon Addition (`kfc_theme_favicon`)
**Hook:** `wp_head`
**Adds:** 32x32, 192x192 favicons and apple-touch-icon

#### WooCommerce Payment Info (`kfc_add_payment_info_text`)
**Hook:** `woocommerce_proceed_to_checkout` (priority 15)
**Output:** Payment methods accepted text

#### PayPal Note (`kfc_add_paypal_note`)
**Hook:** `woocommerce_after_cart_totals`
**Output:** Note about not needing PayPal account

#### Waiver Notice (`kfc_add_waiver_notice_checkout`)
**Hook:** `woocommerce_checkout_after_terms_and_conditions`
**Output:** Link to waiver acceptance

#### Button Style Fix (`kfc_button_style_fix`)
**Hook:** `wp_footer`
**Condition:** Only loads on `/courses` page
**Purpose:** JavaScript override for MailPoet and Instagram button border-radius
**Targets:** `.mailpoet_submit`, `.LoadMoreButton`

#### Block Pattern Registration (`kfc_register_block_patterns`)
**Hook:** `init`
**Actions:**
- Registers `kfc-theme` pattern category
- Registers 5 custom patterns from `/patterns/` directory
- Uses output buffering to include PHP pattern files

---

## Development Notes

### CSS Maintenance
- All styles in single file (`/assets/css/custom.css`)
- CSS variables centralized in `:root` (lines 9-34)
- Heavy use of `!important` flags for plugin overrides (consider refactoring)
- Comments mark major sections with ASCII headers

### JavaScript
- `/assets/js/` directory empty (WOW.js removed)
- Only inline JS in `functions.php` for button style fixes
- Conditionally loaded on specific pages

### Performance
- System fonts eliminate external requests
- No JavaScript libraries loaded
- Single CSS file (1,959 lines = ~65KB)
- Favicon sizes: 32x32, 192x192, apple-touch-icon

### Browser Compatibility
- Modern CSS (Grid, Flexbox, custom properties)
- Targets evergreen browsers
- No IE11 support

### Theme Updates
Version in `style.css` should match `functions.php` enqueue version for cache busting.

---

## Quick Reference: Common Tasks

### Change Button Colors
Edit CSS variables in `/assets/css/custom.css` lines 9-34:
```css
--color-primary: #0099ff;
--gradient-primary: linear-gradient(135deg, #0099ff 0%, #0077cc 100%);
```

### Adjust Navigation Breakpoints
Edit `/assets/css/custom.css` lines 532-581 (media queries at 1600px, 1400px, 1200px, 1000px).

### Modify Features Grid
Edit `/assets/css/custom.css` lines 1672-1757 (grid layout and responsive behavior).

### Change Mobile Breakpoint
Replace `782px` with desired breakpoint throughout custom.css (WordPress standard).

### Add New Color to Palette
Edit `/theme.json` lines 10-77 and add corresponding CSS variable to `custom.css`.

### Adjust Slider Gap
Edit `/assets/css/custom.css` line 1496:
```css
.wppsac-post-slider .slick-dots { margin-top: 15px !important; }
```

---

## Files Summary

| File | Lines | Purpose |
|------|-------|---------|
| `style.css` | 15 | Theme metadata only |
| `theme.json` | 266 | FSE configuration |
| `functions.php` | 423 | PHP functions & hooks |
| `assets/css/custom.css` | 1,959 | All custom styles |
| `patterns/*.php` | 5 files | Block patterns |
| `parts/*.html` | 4 files | Template parts |
| `templates/*.html` | 11 files | Page templates |

**Total Active Code:** ~2,663 lines (excluding templates and build directory)

---

## Additional Resources

- **WordPress Codex:** https://developer.wordpress.org/
- **WooCommerce Docs:** https://woocommerce.com/documentation/
- **Block Editor Handbook:** https://developer.wordpress.org/block-editor/
- **Theme.json Reference:** https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/

---

**End of Reference Document**
