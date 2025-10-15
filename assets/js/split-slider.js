// Split Screen Slider JavaScript
class SplitScreenSlider {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.split-slide');
        this.dots = document.querySelectorAll('.split-dot');
        this.prevBtn = document.getElementById('splitPrev');
        this.nextBtn = document.getElementById('splitNext');
        this.totalSlides = this.slides.length;
        this.autoSlideInterval = null;
        this.isAnimating = false;
        
        this.init();
    }
    
    init() {
        // Add event listeners
        this.prevBtn?.addEventListener('click', () => this.prevSlide());
        this.nextBtn?.addEventListener('click', () => this.nextSlide());
        
        // Add dot navigation
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') this.prevSlide();
            if (e.key === 'ArrowRight') this.nextSlide();
        });
        
        // Touch/swipe support
        this.addTouchSupport();
        
        // Start auto-slide
        this.startAutoSlide();
        
        // Pause on hover
        const sliderContainer = document.getElementById('splitSlider');
        sliderContainer?.addEventListener('mouseenter', () => this.stopAutoSlide());
        sliderContainer?.addEventListener('mouseleave', () => this.startAutoSlide());
        
        // Initialize first slide
        this.updateSlider();
    }
    
    addTouchSupport() {
        const slider = document.getElementById('splitSlider');
        if (!slider) return;
        
        let startX = 0;
        let startY = 0;
        
        slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        }, { passive: true });
        
        slider.addEventListener('touchend', (e) => {
            if (!startX || !startY) return;
            
            const endX = e.changedTouches[0].clientX;
            const endY = e.changedTouches[0].clientY;
            
            const diffX = startX - endX;
            const diffY = startY - endY;
            
            // Only process horizontal swipes (ignore vertical)
            if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    this.nextSlide(); // Swipe left - next slide
                } else {
                    this.prevSlide(); // Swipe right - previous slide
                }
            }
            
            startX = 0;
            startY = 0;
        }, { passive: true });
    }
    
    nextSlide() {
        if (this.isAnimating) return;
        
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateSlider();
    }
    
    prevSlide() {
        if (this.isAnimating) return;
        
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.updateSlider();
    }
    
    goToSlide(index) {
        if (this.isAnimating || index === this.currentSlide) return;
        
        this.currentSlide = index;
        this.updateSlider();
    }
    
    updateSlider() {
        this.isAnimating = true;
        
        // Remove active class from all slides
        this.slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Update dots
        this.dots.forEach((dot, index) => {
            if (index === this.currentSlide) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
        
        // Activate current slide with slight delay for smooth transition
        setTimeout(() => {
            if (this.slides[this.currentSlide]) {
                this.slides[this.currentSlide].classList.add('active');
            }
        }, 50);
        
        // Reset animation lock after transition completes
        setTimeout(() => {
            this.isAnimating = false;
        }, 1200); // Match the CSS transition duration + buffer
    }
    
    startAutoSlide() {
        this.stopAutoSlide(); // Clear any existing interval
        this.autoSlideInterval = setInterval(() => {
            this.nextSlide();
        }, 3000); // 3 seconds - auto scroll every 3 seconds for better readability
    }
    
    stopAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
    
    // Method to programmatically control the slider
    pause() {
        this.stopAutoSlide();
    }
    
    resume() {
        this.startAutoSlide();
    }
    
    // Method to get current slide info
    getCurrentSlide() {
        return {
            index: this.currentSlide,
            total: this.totalSlides
        };
    }
}

// Initialize split screen slider when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('splitSlider')) {
        window.splitSlider = new SplitScreenSlider();
    }
});

// Handle window resize for responsive behavior
window.addEventListener('resize', function() {
    // Trigger a re-render if needed
    if (window.splitSlider) {
        window.splitSlider.updateSlider();
    }
});

// Handle visibility change to pause/resume slider when tab is not visible
document.addEventListener('visibilitychange', function() {
    if (window.splitSlider) {
        if (document.hidden) {
            window.splitSlider.pause();
        } else {
            window.splitSlider.resume();
        }
    }
});