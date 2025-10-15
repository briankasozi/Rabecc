/**
 * RABEC Emergency Care Consultancy - Main JavaScript File
 * 
 * This file contains all the JavaScript functionality for the website including:
 * - Hero slider with automatic transitions
 * - Smooth scrolling animations
 * - Mobile menu toggle
 * - Fade-in animations on scroll
 * - General interactivity features
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===========================================
    // Hero Slider Functionality
    // ===========================================
    
    let currentSlide = 0;
    let slideInterval;
    let isTransitioning = false;
    
    const heroSlider = document.getElementById('heroSlider');
    const slides = document.querySelectorAll('.slide');
    const sliderDots = document.querySelectorAll('.slider-dot');
    const prevButton = document.getElementById('prevSlide');
    const nextButton = document.getElementById('nextSlide');
    
    // Initialize slider if hero slider exists
    if (heroSlider && slides.length > 0) {
        initializeSlider();
        startAutoSlide();
        
        // Previous slide button
        if (prevButton) {
            prevButton.addEventListener('click', function() {
                if (!isTransitioning) {
                    goToSlide(currentSlide - 1);
                    resetAutoSlide();
                }
            });
        }
        
        // Next slide button  
        if (nextButton) {
            nextButton.addEventListener('click', function() {
                if (!isTransitioning) {
                    goToSlide(currentSlide + 1);
                    resetAutoSlide();
                }
            });
        }
        
        // Slider dots
        sliderDots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                if (!isTransitioning && index !== currentSlide) {
                    goToSlide(index);
                    resetAutoSlide();
                }
            });
        });
        
        // Pause slider on hover
        heroSlider.addEventListener('mouseenter', stopAutoSlide);
        heroSlider.addEventListener('mouseleave', startAutoSlide);
        
        // Keyboard navigation
        heroSlider.addEventListener('keydown', function(e) {
            if (!isTransitioning) {
                if (e.key === 'ArrowLeft') {
                    goToSlide(currentSlide - 1);
                    resetAutoSlide();
                } else if (e.key === 'ArrowRight') {
                    goToSlide(currentSlide + 1);
                    resetAutoSlide();
                }
            }
        });
    }
    
    function initializeSlider() {
        // Hide all slides initially except the first one
        slides.forEach((slide, index) => {
            if (index === 0) {
                slide.classList.add('active');
                animateSlideContent(slide, true);
            } else {
                slide.classList.remove('active');
            }
        });
        
        updateDots(0);
        
        // Set focus for accessibility
        if (heroSlider) {
            heroSlider.setAttribute('tabindex', '0');
        }
    }
    
    function goToSlide(slideIndex) {
        if (isTransitioning) return;
        
        // Handle wrap around
        if (slideIndex < 0) {
            slideIndex = slides.length - 1;
        } else if (slideIndex >= slides.length) {
            slideIndex = 0;
        }
        
        // Don't transition if already on the target slide
        if (slideIndex === currentSlide) return;
        
        isTransitioning = true;
        
        const currentSlideElement = slides[currentSlide];
        const nextSlideElement = slides[slideIndex];
        
        // Update hero slider background image
        updateHeroBackground(nextSlideElement);
        
        // Add exiting class for smooth exit animation
        currentSlideElement.classList.add('exiting');
        
        // Start exit animation for current slide
        animateSlideContent(currentSlideElement, false);
        
        setTimeout(() => {
            // Hide current slide and show next slide
            currentSlideElement.classList.remove('active', 'exiting');
            nextSlideElement.classList.add('active');
            
            // Update current slide index
            currentSlide = slideIndex;
            
            // Start enter animation for next slide
            setTimeout(() => {
                animateSlideContent(nextSlideElement, true);
                
                // Update dots
                updateDots(slideIndex);
                
                // Allow next transition
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }, 200);
        }, 600);
    }
    
    function updateHeroBackground(slideElement) {
        const backgroundImage = slideElement.style.backgroundImage;
        if (backgroundImage && heroSlider) {
            // Create a smooth background transition effect
            const heroAfter = heroSlider.querySelector('::after') || heroSlider;
            if (heroAfter) {
                setTimeout(() => {
                    heroSlider.style.setProperty('--bg-image', backgroundImage);
                }, 100);
            }
        }
    }
    
    function animateSlideContent(slide, isEntering) {
        const slideContent = slide.querySelectorAll('.slide-content');
        
        slideContent.forEach((content, index) => {
            if (isEntering) {
                // Remove initial hidden state and add entrance animation
                setTimeout(() => {
                    content.classList.remove('opacity-0', 'translate-y-8');
                    content.classList.add('opacity-100', 'translate-y-0');
                    
                    // Add staggered entrance animation
                    content.style.transitionDelay = `${index * 0.2}s`;
                    content.style.transform = 'translateY(0px)';
                    content.style.opacity = '1';
                }, index * 150);
            } else {
                // Exit animation
                content.style.transitionDelay = '0s';
                content.classList.remove('opacity-100', 'translate-y-0');
                content.classList.add('opacity-0', 'translate-y-8');
                content.style.transform = 'translateY(20px)';
                content.style.opacity = '0';
            }
        });
    }
    
    function updateDots(activeIndex) {
        sliderDots.forEach((dot, index) => {
            if (index === activeIndex) {
                dot.classList.add('bg-white', 'bg-opacity-100');
                dot.classList.remove('bg-opacity-50');
                dot.setAttribute('aria-selected', 'true');
                dot.setAttribute('aria-label', `Slide ${index + 1} (current)`);
            } else {
                dot.classList.add('bg-opacity-50');
                dot.classList.remove('bg-opacity-100');
                dot.setAttribute('aria-selected', 'false');
                dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
            }
        });
    }
    
    function startAutoSlide() {
        slideInterval = setInterval(() => {
            if (!isTransitioning) {
                goToSlide(currentSlide + 1);
            }
        }, 3000); // 3 seconds autoplay for improved readability
    }
    
    function stopAutoSlide() {
        if (slideInterval) {
            clearInterval(slideInterval);
        }
    }
    
    function resetAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }
    
    // ===========================================
    // Mobile Menu Toggle
    // ===========================================
    
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                // Update button icon to X
                const svgs = mobileMenuButton.querySelectorAll('svg');
                svgs[0].classList.add('hidden');
                svgs[1].classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                // Update button icon to hamburger
                const svgs = mobileMenuButton.querySelectorAll('svg');
                svgs[0].classList.remove('hidden');
                svgs[1].classList.add('hidden');
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                const svgs = mobileMenuButton.querySelectorAll('svg');
                svgs[0].classList.remove('hidden');
                svgs[1].classList.add('hidden');
            }
        });
    }
    
    // ===========================================
    // Scroll Animations (Intersection Observer)
    // ===========================================
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);
    
    // Observe all elements with fade-in or slide-up classes
    const animatedElements = document.querySelectorAll('.fade-in, .slide-up');
    animatedElements.forEach(element => {
        observer.observe(element);
    });
    
    // ===========================================
    // Smooth Scrolling for Anchor Links
    // ===========================================
    
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip empty or just # links
            if (href === '#' || href === '') {
                return;
            }
            
            const target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                
                const navHeight = document.querySelector('nav').offsetHeight;
                const targetPosition = target.offsetTop - navHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    const svgs = mobileMenuButton.querySelectorAll('svg');
                    svgs[0].classList.remove('hidden');
                    svgs[1].classList.add('hidden');
                }
            }
        });
    });
    
    // ===========================================
    // Form Enhancement
    // ===========================================
    
    const contactForm = document.querySelector('form[action="form-handler.php"]');
    
    if (contactForm) {
        // Add loading state to submit button
        contactForm.addEventListener('submit', function() {
            const submitButton = this.querySelector('button[type="submit"]');
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = 'Sending...';
                submitButton.classList.add('opacity-75');
            }
        });
        
        // Form validation enhancement
        const requiredFields = contactForm.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            field.addEventListener('blur', function() {
                validateField(this);
            });
            
            field.addEventListener('input', function() {
                // Remove error state when user starts typing
                if (this.classList.contains('border-red-500')) {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-gray-300');
                }
            });
        });
        
        function validateField(field) {
            const value = field.value.trim();
            const isValid = field.checkValidity();
            
            if (!isValid || value === '') {
                field.classList.add('border-red-500');
                field.classList.remove('border-gray-300');
            } else {
                field.classList.remove('border-red-500');
                field.classList.add('border-gray-300');
            }
        }
    }
    
    // ===========================================
    // Navbar Scroll Effect
    // ===========================================
    
    const navbar = document.querySelector('nav');
    let lastScrollY = window.scrollY;
    
    if (navbar) {
        window.addEventListener('scroll', function() {
            const currentScrollY = window.scrollY;
            
            // Add shadow when scrolled
            if (currentScrollY > 10) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
            
            lastScrollY = currentScrollY;
        });
    }
    
    // ===========================================
    // Image Loading Enhancement
    // ===========================================
    
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        // Add loading placeholder
        img.addEventListener('load', function() {
            this.classList.add('opacity-100');
        });
        
        // Handle image load errors
        img.addEventListener('error', function() {
            this.style.backgroundColor = '#f3f4f6';
            this.style.color = '#6b7280';
            this.innerHTML = '<div class="flex items-center justify-center h-full"><span>Image not available</span></div>';
        });
    });
    
    // ===========================================
    // Performance Optimizations
    // ===========================================
    
    // Debounce scroll events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Throttle resize events
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
    
    // ===========================================
    // Accessibility Enhancements
    // ===========================================
    
    // Skip link functionality
    const skipLink = document.querySelector('.skip-link');
    if (skipLink) {
        skipLink.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.focus();
                target.scrollIntoView();
            }
        });
    }
    
    // ===========================================
    // Console Welcome Message
    // ===========================================
    
    console.log('%c🏥 RABEC Emergency Care Consultancy', 'color: #a8e6a1; font-size: 16px; font-weight: bold;');
    console.log('%cWebsite loaded successfully. For support, contact: info@rabec-consultancy.com', 'color: #6b7280; font-size: 12px;');
});

// ===========================================
// Utility Functions (Global Scope)
// ===========================================

/**
 * Scroll to top function
 */
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

/**
 * Format phone number
 */
function formatPhoneNumber(phoneNumber) {
    const cleaned = ('' + phoneNumber).replace(/\D/g, '');
    const match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
    if (match) {
        return '(' + match[1] + ') ' + match[2] + '-' + match[3];
    }
    return phoneNumber;
}

/**
 * Copy text to clipboard
 */
function copyToClipboard(text) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(function() {
            console.log('Text copied to clipboard successfully');
        });
    } else {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
    }
}