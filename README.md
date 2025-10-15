# RABEC Emergency Care Consultancy Website

A professional, responsive website for RABEC Emergency Care Consultancy, built with PHP, Tailwind CSS, and vanilla JavaScript.

## 🌟 Project Overview

RABEC Emergency Care Consultancy is a comprehensive website showcasing professional emergency care services, training programs, and consultancy expertise. The site features a modern, clean design with futuristic elements and a focus on accessibility and responsive design.

### 🎨 Design Features

- **Color Scheme**: Light green (#a8e6a1), white (#ffffff), and light grey (#f7f7f7)
- **Typography**: Inter font family with clean, readable styling
- **Animations**: Smooth fade-in, slide-up, and hover effects
- **Responsive Design**: Mobile-first approach with excellent cross-device compatibility
- **Accessibility**: WCAG 2.1 compliant with proper contrast ratios and keyboard navigation

## 🚀 Technologies Used

- **Backend**: PHP 7.4+ (templating and form processing)
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **CSS Framework**: Tailwind CSS 3.0+
- **Icons**: Heroicons (via Tailwind)
- **Fonts**: Inter (Google Fonts fallback)

## 📁 Project Structure

```
Rabecc/
├── assets/
│   ├── css/
│   │   └── custom.css          # Custom CSS styles and animations
│   └── js/
│       └── slider.js           # JavaScript functionality
├── includes/
│   ├── header.php              # HTML head and navigation inclusion
│   ├── nav.php                 # Navigation bar component
│   ├── footer.php              # Footer component
│   └── hero-slider.php         # Hero slider component
├── index.php                   # Homepage
├── about.php                   # About page
├── services.php                # Services page
├── equipment.php               # Equipment page
├── training.php                # Training page
├── policy.php                  # Policy page
├── mentorship.php              # Mentorship page
├── students.php                # Students page
├── workforce.php               # Workforce page
├── contact.php                 # Contact form page
├── form-handler.php            # Contact form processing
└── README.md                   # Project documentation
```

## 🎯 Features

### Core Functionality

1. **Responsive Navigation**
   - Mobile-friendly hamburger menu
   - Active page highlighting
   - Smooth hover animations

2. **Hero Slider**
   - Auto-advancing image carousel
   - Manual navigation controls
   - Responsive background images
   - Overlay content with call-to-action buttons

3. **Content Management**
   - PHP-based templating system
   - Reusable components
   - Dynamic page titles and meta descriptions
   - SEO-friendly structure

4. **Contact System**
   - Comprehensive contact form
   - Server-side validation
   - Email notifications
   - Success/error message handling
   - Auto-reply functionality

5. **Interactive Elements**
   - Scroll-based animations
   - Card hover effects
   - Button interactions
   - Form validation feedback

### Page-Specific Features

- **Homepage**: Hero slider, services overview, company mission
- **About**: Company story, mission/vision, team information
- **Services**: Detailed service listings with descriptions
- **Equipment**: Medical equipment procurement and specifications
- **Training**: Training programs and certifications offered
- **Policy**: Company policies and procedures
- **Mentorship**: Mentorship programs and benefits
- **Students**: Student-focused services and opportunities
- **Workforce**: Workforce development and career services
- **Contact**: Contact form, location, and communication options

## ⚙️ Setup Instructions

### Prerequisites

- Web server with PHP 7.4 or higher (Apache/Nginx)
- PHP modules: `php-mail`, `php-filter`, `php-json`
- Modern web browser for testing

### Installation Steps

1. **Clone/Download the Project**
   ```bash
   # If using Git
   git clone [repository-url] Rabecc
   
   # Or download and extract to your web server directory
   ```

2. **Server Setup**
   ```bash
   # For XAMPP (Windows)
   # Place in C:\xampp\htdocs\Rabecc\
   
   # For LAMP/LEMP (Linux)
   # Place in /var/www/html/Rabecc/
   
   # For MAMP (macOS)
   # Place in /Applications/MAMP/htdocs/Rabecc/
   ```

3. **Permissions Setup**
   ```bash
   # Ensure proper permissions for PHP file operations
   chmod 755 form-handler.php
   chmod 644 assets/css/custom.css
   chmod 644 assets/js/slider.js
   ```

4. **Email Configuration**
   - Edit `form-handler.php`
   - Update email settings on lines 89-95:
     ```php
     $to = 'your-email@rabec.com';
     $company_email = 'info@rabec.com';
     $company_name = 'RABEC Emergency Care Consultancy';
     ```

5. **Testing**
   - Start your web server
   - Navigate to `http://localhost/Rabecc/`
   - Test all pages and functionality
   - Verify contact form submission

## 🔧 Configuration

### Tailwind CSS Customization

The project uses Tailwind CSS with custom configuration in `includes/header.php`:

```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                'primary-green': '#a8e6a1',
                'light-grey': '#f7f7f7',
            }
        }
    }
}
```

### Custom CSS

Additional styling is handled in `assets/css/custom.css` including:
- Animation keyframes and classes
- Hero slider styling
- Form enhancements
- Responsive design utilities
- Accessibility improvements

### JavaScript Configuration

The slider and interactive elements are configured in `assets/js/slider.js`:
- Auto-advance timing: 5 seconds
- Animation duration: 500ms
- Responsive breakpoints
- Touch/swipe support (mobile)

## 📱 Browser Support

### Fully Supported
- Chrome 70+
- Firefox 65+
- Safari 12+
- Edge 79+

### Partially Supported (core functionality)
- Internet Explorer 11 (with Tailwind CSS degradation)
- Older mobile browsers

## 🚀 Performance Optimization

### Implemented Optimizations

1. **CSS Optimization**
   - Tailwind CSS via CDN (cached)
   - Minimal custom CSS
   - Optimized animations

2. **JavaScript Optimization**
   - Vanilla JS (no framework overhead)
   - Event delegation
   - Debounced scroll events

3. **Image Optimization**
   - Responsive image sizing
   - Lazy loading support
   - Optimized background images

4. **PHP Optimization**
   - Minimal server processing
   - Efficient templating system
   - Optimized database queries (if needed)

## 🔒 Security Features

1. **Form Security**
   - Input sanitization
   - CSRF protection
   - XSS prevention
   - Server-side validation

2. **PHP Security**
   - Filtered user inputs
   - Secure file includes
   - Error handling without information disclosure

3. **General Security**
   - Secure headers (can be added via .htaccess)
   - Content Security Policy ready
   - No sensitive data exposure

## 🎨 Customization Guide

### Changing Colors

1. **Update Tailwind Config** (in `includes/header.php`):
   ```javascript
   colors: {
       'primary-green': '#your-color',
       'light-grey': '#your-grey',
   }
   ```

2. **Update Custom CSS** (in `assets/css/custom.css`):
   - Search for `#a8e6a1` and replace
   - Search for `#f7f7f7` and replace

### Adding New Pages

1. **Create New PHP File**:
   ```php
   <?php 
   $page_title = 'Your Page Title';
   $meta_description = 'Your page description';
   include 'includes/header.php'; 
   ?>
   
   <!-- Your page content -->
   
   <?php include 'includes/footer.php'; ?>
   ```

2. **Update Navigation** (in `includes/nav.php`):
   - Add new menu item
   - Update active page detection

### Modifying the Hero Slider

1. **Update Images** (in `includes/hero-slider.php`):
   - Replace background image URLs
   - Add/remove slider indicators

2. **Adjust Timing** (in `assets/js/slider.js`):
   ```javascript
   const AUTO_ADVANCE_DELAY = 5000; // Change timing
   ```

## 🧪 Testing

### Manual Testing Checklist

- [ ] All pages load correctly
- [ ] Navigation works on all devices
- [ ] Hero slider auto-advances and responds to controls
- [ ] Contact form submits and validates properly
- [ ] Responsive design works on mobile, tablet, and desktop
- [ ] Animations and hover effects function smoothly
- [ ] All links are functional
- [ ] Forms handle errors gracefully

### Performance Testing

```bash
# Use tools like:
# - Google PageSpeed Insights
# - GTmetrix
# - WebPageTest
# - Chrome DevTools Lighthouse
```

## 🐛 Troubleshooting

### Common Issues

1. **CSS/JS Not Loading**
   - Check file paths (use absolute paths from domain root)
   - Verify web server configuration
   - Check browser console for 404 errors

2. **Contact Form Not Working**
   - Verify PHP mail configuration
   - Check server error logs
   - Ensure proper file permissions

3. **Slider Not Working**
   - Check JavaScript console for errors
   - Verify slider.js is loading
   - Ensure proper DOM structure

4. **Mobile Display Issues**
   - Verify viewport meta tag
   - Check Tailwind responsive classes
   - Test on actual devices

### Debug Mode

To enable debug mode for the contact form, edit `form-handler.php`:

```php
// Add at the top of the file for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);
```

## 📞 Support & Maintenance

### Regular Maintenance

1. **Monthly Tasks**
   - Update Tailwind CSS CDN version
   - Check for broken links
   - Review contact form submissions
   - Monitor performance metrics

2. **Security Updates**
   - Keep PHP updated
   - Review and update dependencies
   - Monitor for security vulnerabilities

3. **Content Updates**
   - Update company information
   - Refresh testimonials
   - Update service offerings

### Getting Help

For technical support or questions about this website:

1. **Documentation**: Check this README first
2. **Code Comments**: Review inline code documentation
3. **Testing**: Use browser developer tools for debugging
4. **Community**: Search for Tailwind CSS and PHP resources

## 📄 License

This project is proprietary software developed for RABEC Emergency Care Consultancy. All rights reserved.

## 👥 Credits

- **Development**: Custom built for RABEC Emergency Care Consultancy
- **Design**: Modern responsive design with accessibility focus
- **Technologies**: PHP, Tailwind CSS, Vanilla JavaScript
- **Icons**: Heroicons (included with Tailwind CSS)
- **Fonts**: Inter font family

---

**Last Updated**: December 2024
**Version**: 1.0.0
**Compatible with**: PHP 7.4+, Modern Browsers

For more information about RABEC Emergency Care Consultancy, visit our website or contact us through the contact form.