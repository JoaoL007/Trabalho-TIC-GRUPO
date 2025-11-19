# 🎨 RoboNews Landing Page - Visual Guide

## Layout Structure

```
┌─────────────────────────────────────────┐
│           HEADER (Sticky)                │
│  Logo             Navigation Menu        │
├─────────────────────────────────────────┤
│                                          │
│         HERO SECTION (Full Height)       │
│  ┌────────────┐      ┌──────────────┐  │
│  │   Text     │      │   Visual     │  │
│  │ • Badge    │      │  Floating    │  │
│  │ • Title    │      │   Cards      │  │
│  │ • Subtitle │      │   Robot      │  │
│  │ • Features │      │   Icon       │  │
│  │ • Buttons  │      │              │  │
│  └────────────┘      └──────────────┘  │
│           ▼ Scroll Indicator             │
├─────────────────────────────────────────┤
│      BREAKING NEWS TICKER                │
│  🔥 ÚLTIMAS | News scrolling...         │
├─────────────────────────────────────────┤
│         STATISTICS SECTION               │
│  ┌──────┐ ┌──────┐ ┌──────┐ ┌──────┐  │
│  │ 1250 │ │87.5K │ │  45  │ │  8   │  │
│  │Articles│Readers│Experts│Years│  │
│  └──────┘ └──────┘ └──────┘ └──────┘  │
├─────────────────────────────────────────┤
│       FEATURED NEWS SECTION              │
│  ┌─────────────────────────────────┐   │
│  │    FEATURED HERO ARTICLE        │   │
│  │  [Image] | Content               │   │
│  └─────────────────────────────────┘   │
│  ┌────────┐ ┌────────┐ ┌────────┐     │
│  │ Card 1 │ │ Card 2 │ │ Card 3 │     │
│  │[Image] │ │[Image] │ │[Image] │     │
│  │ Title  │ │ Title  │ │ Title  │     │
│  └────────┘ └────────┘ └────────┘     │
├─────────────────────────────────────────┤
│        CATEGORIES SECTION                │
│  ┌─────┐ ┌─────┐ ┌─────┐ ┌─────┐      │
│  │ 🧠  │ │ 🤖  │ │ 📡  │ │ 🏭  │      │
│  │ IA  │ │Robot│ │ IoT │ │Ind. │      │
│  └─────┘ └─────┘ └─────┘ └─────┘      │
├─────────────────────────────────────────┤
│       NEWSLETTER SECTION                 │
│         📧 Fique Atualizado             │
│    [Email Input] [Name Input]           │
│        [Subscribe Button]                │
├─────────────────────────────────────────┤
│              FOOTER                      │
│    © 2025 RoboNews | Links              │
└─────────────────────────────────────────┘
                 ⬆️ [Back to Top]
```

## Color Palette

### Primary Colors

```css
Primary:   #6366f1  ████████  (Indigo Blue)
Secondary: #8b5cf6  ████████  (Purple)
Accent:    #ec4899  ████████  (Pink)
```

### Background Colors

```css
Dark BG:    #0f172a  ████████  (Deep Navy)
Darker BG:  #020617  ████████  (Almost Black)
```

### Text Colors

```css
Light Text: #f8fafc  ████████  (Almost White)
Gray Text:  #94a3b8  ████████  (Slate Gray)
```

### Utility Colors

```css
Success:    #10b981  ████████  (Green)
Warning:    #f59e0b  ████████  (Amber)
```

## Typography Scale

```
Hero Title:         56px  (Bold 800)
Section Title:      42px  (Bold 700)
Newsletter Title:   42px  (Bold 700)
Article Title:      28px  (Bold 700)
Card Title:         18px  (Bold 700)
Body Text:          16px  (Regular 400)
Small Text:         14px  (Regular 400)
Tiny Text:          12px  (Regular 400)
```

## Spacing System

```
Extra Small:  0.5rem  (8px)
Small:        1rem    (16px)
Medium:       1.5rem  (24px)
Large:        2rem    (32px)
Extra Large:  3rem    (48px)
```

## Component Breakpoints

### Desktop (>1024px)

- 2 column hero layout
- 3 column news grid
- 4 column category grid
- Full navigation menu

### Tablet (768px - 1024px)

- 1 column hero layout
- 2 column news grid
- 2 column category grid
- Full navigation menu

### Mobile (<768px)

- 1 column layout
- Hamburger menu
- Stacked cards
- Optimized font sizes

## Interactive Elements

### Buttons

```
Primary Button:
┌──────────────────┐
│ 🚀 Text Content  │  ← Gradient background
└──────────────────┘     Hover: Lift up + glow

Outline Button:
┌──────────────────┐
│ ℹ️  Text Content  │  ← Transparent with border
└──────────────────┘     Hover: Fill with color
```

### Cards

```
News Card:
┌──────────────────┐
│   [Image]        │
│ ┌──────────────┐ │
│ │ Category Tag │ │
│ └──────────────┘ │
│  Card Title      │
│  Description...  │
│  👁️ 12.5K 📅 26 Oct│
│  Read more →     │
└──────────────────┘
Hover: Lift + border glow
```

### Stats Counter

```
┌──────────────┐
│      📰      │  ← Icon
│    1,250     │  ← Animated number
│   Articles   │  ← Label
│  ↗️ +15% ✨   │  ← Growth indicator
└──────────────┘
Hover: Lift + glow effect
```

## Animation Details

### On Page Load

1. Loading screen fade out (1s)
2. Elements fade in with AOS
3. Stats numbers count up
4. Ticker starts scrolling

### Scroll Animations

- Fade in from bottom
- Slide in from sides
- Scale up effects
- Stagger delays

### Hover Effects

- Lift up (translateY -5px to -10px)
- Scale (1.05x)
- Glow shadows
- Color transitions

### Transitions

- Fast: 0.15s
- Standard: 0.3s
- Slow: 0.5s
- All using: cubic-bezier(0.4, 0, 0.2, 1)

## Icon Usage

### FontAwesome Icons Used

```
Navigation:
- fa-home         🏠 Home
- fa-newspaper    📰 News
- fa-info-circle  ℹ️  About

Features:
- fa-brain        🧠 AI
- fa-robot        🤖 Robotics
- fa-wifi         📡 IoT
- fa-industry     🏭 Industry

Actions:
- fa-clock        🕐 Time
- fa-users        👥 Users
- fa-fire         🔥 Hot
- fa-star         ⭐ Featured
- fa-arrow-right  → Link
- fa-chevron-up   ↑ Scroll
- fa-envelope     📧 Email
```

## Design Principles Applied

### 1. **Visual Hierarchy**

- Large hero title draws attention
- Section titles clearly separate content
- Card structure guides reading flow

### 2. **Contrast**

- Dark backgrounds with light text
- Colorful accents on dark base
- Borders for element separation

### 3. **Consistency**

- Repeated border radius (8px, 16px)
- Consistent spacing scale
- Unified color palette

### 4. **Feedback**

- Hover states on all interactive elements
- Loading states for async actions
- Success/error notifications

### 5. **Accessibility**

- High contrast ratios
- Keyboard navigation support
- Semantic HTML structure
- ARIA labels where needed

## Performance Optimizations

- ✅ Lazy loading images
- ✅ CSS variables for quick theme changes
- ✅ Minimal JavaScript dependencies
- ✅ Optimized animations (transform/opacity)
- ✅ Mobile-first responsive design
- ✅ Efficient CSS selectors

## Browser Support

- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ⚠️ IE11 (limited - no CSS variables)

---

**Note:** This is a provisional design. Fine-tune colors, spacing, and content based on team feedback and brand guidelines.
