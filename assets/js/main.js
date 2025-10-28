// RoboNews - JavaScript Principal
// Desenvolvido pela equipe RoboNews

document.addEventListener("DOMContentLoaded", function () {
  console.log("🤖 RoboNews carregado com sucesso!");

  // Initialize all components
  initializeLoadingScreen();
  initializeAnimationCounters();
  initializeBackToTop();
  initializeNewsFilters();
  initializeSmoothScroll();
  initializeNewsInteractions();
  initializeNewsletterForm();
  initializeTypingEffect();
  initializeLazyLoading();
  initializePerformanceOptimizations();
});

/**
 * Loading Screen Management
 */
function initializeLoadingScreen() {
  const loadingScreen = document.getElementById("loadingScreen");

  // Simulate loading time
  setTimeout(() => {
    if (loadingScreen) {
      loadingScreen.classList.add("hidden");
      setTimeout(() => {
        loadingScreen.style.display = "none";
      }, 500);
    }
  }, 1500);

  // Hide loading screen when page is fully loaded
  window.addEventListener("load", () => {
    if (loadingScreen) {
      loadingScreen.classList.add("hidden");
    }
  });
}

/**
 * Animated Counters for Statistics
 */
function initializeAnimationCounters() {
  const counters = document.querySelectorAll("[data-target]");
  const observerOptions = {
    threshold: 0.5,
    rootMargin: "0px 0px -100px 0px",
  };

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        const target = parseInt(counter.dataset.target);
        const increment = target / 100;
        let current = 0;

        const updateCounter = () => {
          if (current < target) {
            current += increment;
            counter.textContent = Math.ceil(current).toLocaleString();
            requestAnimationFrame(updateCounter);
          } else {
            counter.textContent = target.toLocaleString() + "+";
          }
        };

        updateCounter();
        counterObserver.unobserve(counter);
      }
    });
  }, observerOptions);

  counters.forEach((counter) => {
    counterObserver.observe(counter);
  });
}

/**
 * Back to Top Button
 */
function initializeBackToTop() {
  const backToTopBtn = document.getElementById("backToTop");

  if (!backToTopBtn) return;

  // Show/hide button based on scroll position
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 300) {
      backToTopBtn.classList.add("visible");
    } else {
      backToTopBtn.classList.remove("visible");
    }
  });

  // Smooth scroll to top
  backToTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}

/**
 * News Category Filters
 */
function initializeNewsFilters() {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const newsCards = document.querySelectorAll(".news-card[data-category]");

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const filter = button.dataset.filter;

      // Update active button
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      // Filter news cards
      newsCards.forEach((card) => {
        const category = card.dataset.category;

        if (filter === "all" || category === filter) {
          card.style.display = "block";
          card.style.animation = "fadeInUp 0.5s ease forwards";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
}

/**
 * Smooth Scrolling for Navigation Links
 */
function initializeSmoothScroll() {
  const scrollLinks = document.querySelectorAll(".smooth-scroll");

  scrollLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const targetId = link.getAttribute("href");
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        const offsetTop = targetElement.offsetTop - 100;

        window.scrollTo({
          top: offsetTop,
          behavior: "smooth",
        });
      }
    });
  });
}

/**
 * News Card Interactions
 */
function initializeNewsInteractions() {
  // Like button functionality
  const likeButtons = document.querySelectorAll(".like-btn");
  likeButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();

      const icon = button.querySelector("i");
      const countSpan = button.querySelector("span");
      let count = parseInt(
        countSpan.textContent.replace("K", "000").replace(",", "")
      );

      if (icon.classList.contains("far")) {
        // Like
        icon.classList.remove("far");
        icon.classList.add("fas");
        button.classList.add("liked");
        count += 1;

        // Animation
        button.style.transform = "scale(1.2)";
        setTimeout(() => {
          button.style.transform = "scale(1)";
        }, 150);
      } else {
        // Unlike
        icon.classList.remove("fas");
        icon.classList.add("far");
        button.classList.remove("liked");
        count -= 1;
      }

      // Update count display
      if (count >= 1000) {
        countSpan.textContent = (count / 1000).toFixed(1) + "K";
      } else {
        countSpan.textContent = count;
      }
    });
  });

  // Share button functionality
  const shareButtons = document.querySelectorAll(".share-btn");
  shareButtons.forEach((button) => {
    button.addEventListener("click", async (e) => {
      e.preventDefault();
      e.stopPropagation();

      const article = button.closest("article");
      const title = article.querySelector(
        ".article-title, .card-title"
      ).textContent;
      const url = window.location.href;

      if (navigator.share) {
        try {
          await navigator.share({
            title: title,
            url: url,
          });
        } catch (err) {
          console.log("Compartilhamento cancelado");
        }
      } else {
        // Fallback - copy to clipboard
        navigator.clipboard.writeText(url).then(() => {
          showNotification("Link copiado para a área de transferência!");
        });
      }
    });
  });

  // Follow button functionality
  const followButtons = document.querySelectorAll(
    ".follow-btn, .follow-expert-btn"
  );
  followButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();

      if (button.classList.contains("following")) {
        button.classList.remove("following");
        button.innerHTML = '<i class="fas fa-plus"></i> Seguir';
      } else {
        button.classList.add("following");
        button.innerHTML = '<i class="fas fa-check"></i> Seguindo';

        // Success animation
        button.style.transform = "scale(1.1)";
        setTimeout(() => {
          button.style.transform = "scale(1)";
        }, 200);
      }
    });
  });
}

/**
 * Enhanced Newsletter Form
 */
function initializeNewsletterForm() {
  const form = document.getElementById("newsletterForm");
  if (!form) return;

  const submitBtn = form.querySelector(".btn-newsletter");
  const successDiv = document.getElementById("newsletterSuccess");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    // Validation
    const email = form.querySelector("#newsletterEmail").value;
    const name = form.querySelector("#newsletterName").value;
    const interest = form.querySelector("#newsletterInterest").value;

    if (!email || !name || !interest) {
      showNotification("Por favor, preencha todos os campos!", "error");
      return;
    }

    if (!isValidEmail(email)) {
      showNotification("Por favor, insira um email válido!", "error");
      return;
    }

    // Show loading state
    submitBtn.classList.add("loading");
    submitBtn.disabled = true;

    try {
      // Simulate API call (replace with actual implementation)
      await simulateAPICall();

      // Hide form and show success message
      form.style.display = "none";
      successDiv.style.display = "block";

      // Track conversion
      trackNewsletterSignup(email, interest);

      showNotification("Inscrição realizada com sucesso!", "success");
    } catch (error) {
      showNotification(
        "Erro ao processar inscrição. Tente novamente.",
        "error"
      );
      console.error("Newsletter signup error:", error);
    } finally {
      submitBtn.classList.remove("loading");
      submitBtn.disabled = false;
    }
  });

  // Real-time email validation
  const emailInput = form.querySelector("#newsletterEmail");
  emailInput.addEventListener("input", (e) => {
    const email = e.target.value;
    if (email && !isValidEmail(email)) {
      emailInput.setCustomValidity("Por favor, insira um email válido");
    } else {
      emailInput.setCustomValidity("");
    }
  });
}

/**
 * Typing Effect for Hero Title
 */
function initializeTypingEffect() {
  const typingElement = document.querySelector(".typing-effect");
  if (!typingElement) return;

  const texts = [
    "O Futuro da Tecnologia",
    "Inovação em Robótica",
    "Inteligência Artificial",
    "Automação Industrial",
  ];

  let currentTextIndex = 0;
  let currentCharIndex = 0;
  let isDeleting = false;

  function typeEffect() {
    const currentText = texts[currentTextIndex];

    if (isDeleting) {
      typingElement.textContent = currentText.substring(
        0,
        currentCharIndex - 1
      );
      currentCharIndex--;
    } else {
      typingElement.textContent = currentText.substring(
        0,
        currentCharIndex + 1
      );
      currentCharIndex++;
    }

    let typeSpeed = isDeleting ? 50 : 100;

    if (!isDeleting && currentCharIndex === currentText.length) {
      typeSpeed = 2000; // Pause at end
      isDeleting = true;
    } else if (isDeleting && currentCharIndex === 0) {
      isDeleting = false;
      currentTextIndex = (currentTextIndex + 1) % texts.length;
    }

    setTimeout(typeEffect, typeSpeed);
  }

  // Start typing effect after a delay
  setTimeout(typeEffect, 1000);
}

/**
 * Lazy Loading Implementation
 */
function initializeLazyLoading() {
  const lazyImages = document.querySelectorAll("img[data-src]");

  if ("IntersectionObserver" in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove("lazy");
          imageObserver.unobserve(img);
        }
      });
    });

    lazyImages.forEach((img) => {
      imageObserver.observe(img);
    });
  } else {
    // Fallback for older browsers
    lazyImages.forEach((img) => {
      img.src = img.dataset.src;
    });
  }
}

/**
 * Performance Optimizations
 */
function initializePerformanceOptimizations() {
  // Preload critical resources
  preloadCriticalResources();

  // Initialize service worker for caching
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("/sw.js").catch((err) => {
      console.log("Service Worker registration failed:", err);
    });
  }

  // Optimize scroll performance
  let ticking = false;

  function updateScrollElements() {
    // Update any scroll-dependent elements here
    ticking = false;
  }

  window.addEventListener("scroll", () => {
    if (!ticking) {
      requestAnimationFrame(updateScrollElements);
      ticking = true;
    }
  });
}

/**
 * Utility Functions
 */

// Email validation
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// API call simulation
function simulateAPICall() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      // Simulate success (90% success rate)
      if (Math.random() > 0.1) {
        resolve({ success: true });
      } else {
        reject(new Error("API Error"));
      }
    }, 2000);
  });
}

// Notification system
function showNotification(message, type = "info") {
  // Remove existing notifications
  const existingNotifications = document.querySelectorAll(".notification");
  existingNotifications.forEach((notification) => {
    notification.remove();
  });

  const notification = document.createElement("div");
  notification.className = `notification notification-${type}`;
  notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-message">${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;

  // Styles
  notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${
          type === "error"
            ? "#ef4444"
            : type === "success"
            ? "#10b981"
            : "#3b82f6"
        };
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `;

  document.body.appendChild(notification);

  // Animate in
  setTimeout(() => {
    notification.style.transform = "translateX(0)";
  }, 100);

  // Close button
  const closeBtn = notification.querySelector(".notification-close");
  closeBtn.addEventListener("click", () => {
    notification.style.transform = "translateX(100%)";
    setTimeout(() => notification.remove(), 300);
  });

  // Auto remove after 5 seconds
  setTimeout(() => {
    if (notification.parentNode) {
      notification.style.transform = "translateX(100%)";
      setTimeout(() => notification.remove(), 300);
    }
  }, 5000);
}

// Analytics tracking
function trackNewsletterSignup(email, interest) {
  // Google Analytics
  if (typeof gtag !== "undefined") {
    gtag("event", "newsletter_signup", {
      event_category: "engagement",
      event_label: interest,
      custom_parameter_email: email,
    });
  }

  // Facebook Pixel
  if (typeof fbq !== "undefined") {
    fbq("track", "Lead", {
      content_category: interest,
    });
  }

  console.log("Newsletter signup tracked:", { email, interest });
}

// Preload critical resources
function preloadCriticalResources() {
  const criticalResources = [
    "/assets/css/style.css",
    "/assets/css/index.css",
    "/assets/js/main.js",
  ];

  criticalResources.forEach((resource) => {
    const link = document.createElement("link");
    link.rel = "preload";
    link.href = resource;
    link.as = resource.endsWith(".css") ? "style" : "script";
    document.head.appendChild(link);
  });
}

// Dark mode toggle (optional future feature)
function initializeDarkMode() {
  const darkModeToggle = document.getElementById("darkModeToggle");
  if (!darkModeToggle) return;

  const currentTheme = localStorage.getItem("theme") || "light";
  document.documentElement.setAttribute("data-theme", currentTheme);

  darkModeToggle.addEventListener("click", () => {
    const currentTheme = document.documentElement.getAttribute("data-theme");
    const newTheme = currentTheme === "dark" ? "light" : "dark";

    document.documentElement.setAttribute("data-theme", newTheme);
    localStorage.setItem("theme", newTheme);
  });
}

// Search functionality (for future implementation)
function initializeSearch() {
  const searchInput = document.getElementById("searchInput");
  const searchResults = document.getElementById("searchResults");

  if (!searchInput) return;

  let searchTimeout;

  searchInput.addEventListener("input", (e) => {
    const query = e.target.value.trim();

    clearTimeout(searchTimeout);

    if (query.length >= 3) {
      searchTimeout = setTimeout(() => {
        performSearch(query);
      }, 300);
    } else {
      hideSearchResults();
    }
  });
}

function performSearch(query) {
  // Implement search logic here
  console.log("Searching for:", query);
}

function hideSearchResults() {
  const searchResults = document.getElementById("searchResults");
  if (searchResults) {
    searchResults.style.display = "none";
  }
}

// Error handling
window.addEventListener("error", (event) => {
  console.error("JavaScript error:", event.error);
  // You can send this to your analytics service
});

// Performance monitoring
window.addEventListener("load", () => {
  // Measure performance
  if (window.performance) {
    const navigation = performance.getEntriesByType("navigation")[0];
    const loadTime = navigation.loadEventEnd - navigation.loadEventStart;
    console.log(`Page load time: ${loadTime}ms`);
  }
});

console.log("🚀 RoboNews JavaScript initialized successfully!");
