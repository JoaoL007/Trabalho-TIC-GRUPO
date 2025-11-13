# 🚀 Quick Start Guide - RoboNews Landing Page

## ⚡ Getting Started (5 minutes)

### 1. Start Your Server

```bash
# If using XAMPP
- Open XAMPP Control Panel
- Start Apache

# Access the site
http://localhost/Trabalho-TIC-GRUPO/
```

### 2. What You'll See

#### ✨ **Modern Landing Page With:**

- Animated hero section with floating elements
- Breaking news ticker
- Statistics counter animation
- Featured news cards
- Category sections
- Newsletter signup form
- Smooth scrolling & animations

## 📁 File Structure

```
Trabalho-TIC-GRUPO/
│
├── index.php                    ← Main landing page
│
├── assets/
│   ├── css/
│   │   ├── style.css           ← Base styles + header/footer
│   │   ├── landing.css         ← ⭐ NEW: Landing page styles
│   │   ├── utilities.css       ← ⭐ NEW: Helper classes
│   │   └── noticias.css        ← News page styles
│   │
│   ├── js/
│   │   └── main.js             ← ⭐ UPDATED: All interactions
│   │
│   └── images/                 ← Your images here
│
├── includes/
│   ├── header.php              ← Site header
│   ├── nav.php                 ← Navigation menu
│   └── footer.php              ← Site footer
│
├── pages/
│   ├── noticias.php
│   ├── artigo.php
│   └── sobre.php
│
└── docs/
    ├── IMPROVEMENTS.md          ← ⭐ What was improved
    ├── DESIGN-GUIDE.md          ← ⭐ Visual documentation
    └── QUICK-START.md           ← This file
```

## 🎨 Customization Quick Tips

### Change Colors

Edit `assets/css/landing.css` (lines 5-17):

```css
:root {
    --primary-color: #6366f1;     ← Change this
    --secondary-color: #8b5cf6;   ← And this
    --accent-color: #ec4899;      ← And this
}
```

### Add a News Card

In `index.php`, duplicate this block:

```html
<article class="news-card">
  <div class="card-image">
    <img src="YOUR_IMAGE_URL" alt="Description" />
    <div class="card-badge">Category</div>
  </div>
  <div class="card-content">
    <span class="card-category">Category Name</span>
    <h3 class="card-title">Your Title Here</h3>
    <p class="card-excerpt">Your description...</p>
    <div class="card-meta">
      <span><i class="fas fa-eye"></i> 1.2K</span>
      <span><i class="fas fa-calendar"></i> Today</span>
    </div>
    <a href="pages/artigo.php?id=X" class="card-link">
      Leia mais <i class="fas fa-chevron-right"></i>
    </a>
  </div>
</article>
```

### Update Statistics

Find `.stat-item` in `index.php` and change:

```html
<div class="stat-number" data-target="1250">1250</div>
```

The `data-target` enables counter animation.

### Modify Hero Text

In `index.php`, find `.hero-text` section:

```html
<h1 class="hero-title">
  <span class="gradient-text">Your Brand</span>
  <br /><span class="typing-effect">Your Tagline</span>
</h1>
```

## 🔧 Common Tasks

### Add Mobile Menu Button

If not in `nav.php`, add:

```html
<button class="mobile-menu-btn" aria-label="Toggle menu">
  <i class="fas fa-bars"></i>
</button>
```

### Change Font

In `landing.css` or `style.css`:

```css
body {
  font-family: "Your Font", sans-serif;
}
```

### Adjust Spacing

Use utility classes from `utilities.css`:

```html
<div class="mt-4 mb-2">
  ← margin-top: 2rem, margin-bottom: 1rem
  <div class="pt-3 pb-3">← padding top & bottom: 1.5rem</div>
</div>
```

### Make Something Full Width

```html
<div class="w-full">← width: 100%</div>
```

## 🐛 Troubleshooting

### Styles Not Loading?

1. Check file paths in `index.php`
2. Clear browser cache (Ctrl+Shift+R)
3. Verify files exist in `assets/css/`

### JavaScript Not Working?

1. Open browser console (F12)
2. Look for errors
3. Check if `main.js` is loaded

### Images Not Showing?

1. Check image URLs
2. Verify paths are correct
3. Use placeholder URLs from Unsplash for testing

### Animations Not Smooth?

1. Check if AOS library is loaded
2. Verify CDN links in `index.php`
3. Check browser compatibility

## 📱 Test Responsiveness

### Using Chrome DevTools:

1. Press `F12`
2. Click device toggle icon (Ctrl+Shift+M)
3. Test these sizes:
   - 375px (Mobile)
   - 768px (Tablet)
   - 1024px (Desktop)
   - 1440px (Large Desktop)

## ⚡ Performance Tips

### Optimize Images

```bash
# Recommended sizes:
- Hero images: 1920x1080 (max 200KB)
- Card images: 800x600 (max 100KB)
- Thumbnails: 400x300 (max 50KB)
```

### Use WebP Format

```html
<picture>
  <source srcset="image.webp" type="image/webp" />
  <img src="image.jpg" alt="Description" />
</picture>
```

### Lazy Load Images

```html
<img data-src="image.jpg" class="lazy" alt="Description" />
```

JavaScript in `main.js` handles this automatically!

## 🎯 Next Steps

### 1. Content (Priority 1)

- [ ] Replace placeholder images
- [ ] Write real article content
- [ ] Add actual news data
- [ ] Update statistics with real numbers

### 2. Functionality (Priority 2)

- [ ] Connect newsletter form to email service
- [ ] Add search functionality
- [ ] Implement categories filter
- [ ] Create article pages

### 3. Enhancement (Priority 3)

- [ ] Add dark/light mode toggle
- [ ] Implement social sharing
- [ ] Add comments system
- [ ] Create user accounts

### 4. Optimization (Priority 4)

- [ ] Minify CSS/JS
- [ ] Optimize images
- [ ] Add service worker (PWA)
- [ ] Implement caching

## 📚 Resources

### Documentation

- [IMPROVEMENTS.md](./IMPROVEMENTS.md) - What was changed
- [DESIGN-GUIDE.md](./DESIGN-GUIDE.md) - Visual guide
- [Font Awesome Icons](https://fontawesome.com/icons)
- [AOS Library](https://michalsnik.github.io/aos/)

### Design Inspiration

- [Unsplash](https://unsplash.com/) - Free images
- [Coolors](https://coolors.co/) - Color palettes
- [Google Fonts](https://fonts.google.com/) - Typography

### Learning

- [MDN Web Docs](https://developer.mozilla.org/) - HTML/CSS/JS
- [CSS Tricks](https://css-tricks.com/) - CSS techniques
- [Web.dev](https://web.dev/) - Performance tips

## 💡 Pro Tips

1. **Use CSS Variables** - Easy theme changes
2. **Mobile First** - Design for mobile, enhance for desktop
3. **Semantic HTML** - Better SEO and accessibility
4. **Comment Your Code** - Help future you
5. **Test Often** - Check in multiple browsers
6. **Git Commits** - Small, frequent commits
7. **Ask Questions** - Don't struggle alone

## 🆘 Need Help?

### Quick Checks:

1. ✅ Is XAMPP running?
2. ✅ Are file paths correct?
3. ✅ Did you clear cache?
4. ✅ Any console errors?
5. ✅ Is the file saved?

### Common Fixes:

```bash
# Restart Apache
XAMPP Control Panel → Stop → Start

# Clear browser cache
Ctrl + Shift + R (Chrome)
Ctrl + F5 (Firefox)

# Check PHP errors
Look in: xampp/apache/logs/error.log
```

## ✨ Quick Wins

Want to impress quickly? Try these:

### 1. Add a Cool Gradient

```css
.your-element {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
```

### 2. Smooth Hover Effect

```css
.your-button {
  transition: all 0.3s ease;
}
.your-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
```

### 3. Add a Badge

```html
<span class="badge"> <i class="fas fa-fire"></i> Hot </span>
```

---

## 🎉 You're Ready!

Open `http://localhost/Trabalho-TIC-GRUPO/` and enjoy your modern landing page!

**Happy coding! 🚀**
