// Modern JavaScript for Sportlandija website
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initSlideshow();
    initMobileNavigation();
    initScrollEffects();
    initSmoothScrolling();
});

// Slideshow functionality
function initSlideshow() {
    let currentSlide = 1;
    const slides = document.querySelectorAll('.slide');
    const thumbnails = document.querySelectorAll('.thumbnail');
    const totalSlides = slides.length;

    // Show initial slide
    showSlide(currentSlide);

    // Function to show a specific slide
    function showSlide(n) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });

        // Remove active class from all thumbnails
        thumbnails.forEach(thumb => {
            thumb.classList.remove('active');
        });

        // Show current slide
        if (n > totalSlides) currentSlide = 1;
        if (n < 1) currentSlide = totalSlides;

        slides[currentSlide - 1].classList.add('active');
        thumbnails[currentSlide - 1].classList.add('active');
    }

    // Function to change slide
    function changeSlide(direction) {
        showSlide(currentSlide += direction);
    }

    // Function to go to specific slide
    function goToSlide(n) {
        currentSlide = n;
        showSlide(currentSlide);
    }

    // Add event listeners for navigation arrows
    const prevBtn = document.querySelector('.slide-nav.prev');
    const nextBtn = document.querySelector('.slide-nav.next');

    if (prevBtn) {
        prevBtn.addEventListener('click', () => changeSlide(-1));
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => changeSlide(1));
    }

    // Add event listeners for thumbnails
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => goToSlide(index + 1));
    });

    // Auto-advance slides every 5 seconds
    setInterval(() => {
        changeSlide(1);
    }, 5000);

    // Make functions globally available
    window.changeSlide = changeSlide;
    window.currentSlide = goToSlide;
}

// Mobile navigation functionality
function initMobileNavigation() {
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navbar = document.getElementById('navbar');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!navToggle.contains(event.target) && !navMenu.contains(event.target)) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }

    // Navbar scroll effect
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }
}

// Scroll effects and animations
function initScrollEffects() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll('.section, .partner-card');
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// Smooth scrolling functionality
function initSmoothScrolling() {
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Keyboard navigation for slideshow
document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft') {
        window.changeSlide(-1);
    } else if (e.key === 'ArrowRight') {
        window.changeSlide(1);
    }
});

// Touch/swipe support for mobile slideshow
function initTouchSupport() {
    let startX = 0;
    let endX = 0;
    
    const slideshow = document.querySelector('.slideshow-container');
    
    if (slideshow) {
        slideshow.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
        });
        
        slideshow.addEventListener('touchend', function(e) {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - next slide
                    window.changeSlide(1);
                } else {
                    // Swipe right - previous slide
                    window.changeSlide(-1);
                }
            }
        }
    }
}

// Initialize touch support
initTouchSupport();

// Performance optimization: Lazy loading for images
function initLazyLoading() {
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => imageObserver.observe(img));
    }
}

// Initialize lazy loading
initLazyLoading();

// Accessibility improvements
function initAccessibility() {
    // Add skip to main content link
    const skipLink = document.createElement('a');
    skipLink.href = '#main';
    skipLink.textContent = 'Pāriet uz galveno saturu';
    skipLink.className = 'skip-link';
    skipLink.style.cssText = `
        position: absolute;
        top: -40px;
        left: 6px;
        background: #667eea;
        color: white;
        padding: 8px;
        text-decoration: none;
        border-radius: 4px;
        z-index: 1001;
    `;
    
    skipLink.addEventListener('focus', function() {
        this.style.top = '6px';
    });
    
    skipLink.addEventListener('blur', function() {
        this.style.top = '-40px';
    });
    
    document.body.insertBefore(skipLink, document.body.firstChild);
    
    // Add main content id
    const mainContent = document.querySelector('main');
    if (mainContent) {
        mainContent.id = 'main';
    }
}

// Initialize accessibility features
initAccessibility();

// Service Worker registration for PWA capabilities
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
            .then(function(registration) {
                console.log('ServiceWorker registration successful');
            })
            .catch(function(err) {
                console.log('ServiceWorker registration failed');
            });
    });
}
