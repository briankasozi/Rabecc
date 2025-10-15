// Simple Hero Slider JavaScript
class SimpleSlider {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.slide');
        this.dots = document.querySelectorAll('.slider-dot');
        this.prevBtn = document.getElementById('prevSlide');
        this.nextBtn = document.getElementById('nextSlide');
        this.totalSlides = this.slides.length;
        this.autoSlideInterval = null;
        
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
        
        // Start auto-slide
        this.startAutoSlide();
        
        // Pause on hover
        const sliderContainer = document.getElementById('heroSlider');
        sliderContainer?.addEventListener('mouseenter', () => this.stopAutoSlide());
        sliderContainer?.addEventListener('mouseleave', () => this.startAutoSlide());
        
        // Initialize first slide
        this.updateSlider();
    }
    
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateSlider();
    }
    
    prevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.updateSlider();
    }
    
    goToSlide(index) {
        this.currentSlide = index;
        this.updateSlider();
    }
    
    updateSlider() {
        // Update slides visibility
        this.slides.forEach((slide, index) => {
            if (index === this.currentSlide) {
                slide.style.opacity = '1';
                slide.style.zIndex = '10';
            } else {
                slide.style.opacity = '0';
                slide.style.zIndex = '5';
            }
        });
        
        // Update dots
        this.dots.forEach((dot, index) => {
            if (index === this.currentSlide) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }
    
    startAutoSlide() {
        this.stopAutoSlide(); // Clear any existing interval
        this.autoSlideInterval = setInterval(() => {
            this.nextSlide();
        }, 5000); // 5 seconds
    }
    
    stopAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
}

// Initialize slider when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('heroSlider')) {
        new SimpleSlider();
    }
});

// Handle window resize
window.addEventListener('resize', function() {
    // Add any resize handling if needed
});