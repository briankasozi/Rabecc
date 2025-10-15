<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>RABEC Emergency Care Consultancy</title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Professional emergency care consultancy services, training, and medical equipment procurement.'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/util/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/util/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/util/favicon.png">
    <link rel="shortcut icon" href="assets/images/util/favicon.png">
    <meta name="msapplication-TileImage" content="assets/images/util/favicon.png">
    <meta name="theme-color" content="#01c6a8">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-teal': '#01c6a8',
                        'primary-navy': '#01173e',
                        'light-grey': '#f7f7f7',
                        // Keep legacy colors for backward compatibility
                        'primary-green': '#01c6a8',
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    
    <!-- Custom JavaScript -->
    <script src="assets/js/slider.js" defer></script>
    
    <!-- Source Protection Script -->
    <script>
        // Disable right-click context menu
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });
        
        // Disable F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U, Ctrl+S
        document.addEventListener('keydown', function(e) {
            // F12 Developer Tools
            if (e.key === 'F12') {
                e.preventDefault();
                return false;
            }
            
            // Ctrl+Shift+I (Developer Tools)
            if (e.ctrlKey && e.shiftKey && e.key === 'I') {
                e.preventDefault();
                return false;
            }
            
            // Ctrl+Shift+J (Console)
            if (e.ctrlKey && e.shiftKey && e.key === 'J') {
                e.preventDefault();
                return false;
            }
            
            // Ctrl+Shift+C (Select Element)
            if (e.ctrlKey && e.shiftKey && e.key === 'C') {
                e.preventDefault();
                return false;
            }
            
            // Ctrl+U (View Source)
            if (e.ctrlKey && e.key === 'u') {
                e.preventDefault();
                return false;
            }
            
            // Ctrl+S (Save Page)
            if (e.ctrlKey && e.key === 's') {
                e.preventDefault();
                return false;
            }
            
            // Ctrl+A (Select All) - Optional, uncomment if needed
            // if (e.ctrlKey && e.key === 'a') {
            //     e.preventDefault();
            //     return false;
            // }
        });
        
        // Disable text selection (optional)
        document.addEventListener('selectstart', function(e) {
            // Allow selection in input fields and textareas
            if (e.target.tagName !== 'INPUT' && e.target.tagName !== 'TEXTAREA') {
                e.preventDefault();
                return false;
            }
        });
        
        // Disable drag and drop
        document.addEventListener('dragstart', function(e) {
            e.preventDefault();
            return false;
        });
        
        // Additional protection against developer tools
        let devtools = {open: false, orientation: null};
        const threshold = 160;
        
        setInterval(function() {
            if (window.outerHeight - window.innerHeight > threshold || 
                window.outerWidth - window.innerWidth > threshold) {
                if (!devtools.open) {
                    devtools.open = true;
                    // Redirect or show warning message
                    document.body.innerHTML = '<div style="background:#01173e;color:#fff;padding:50px;text-align:center;font-family:Arial,sans-serif;"><h1>Access Restricted</h1><p>Developer tools are not allowed on this website.</p><p>Please close developer tools and refresh the page.</p></div>';
                }
            } else {
                devtools.open = false;
            }
        }, 500);
        
        // Console warning message
        console.log('%cSTOP!', 'color: red; font-size: 50px; font-weight: bold;');
        console.log('%cThis is a browser feature intended for developers. Content on this website is protected by copyright and intellectual property laws.', 'color: red; font-size: 16px;');
        console.log('%cIf someone told you to copy-paste something here, it is a scam and will give them access to your information.', 'color: red; font-size: 16px;');
    </script>
</head>
<body class="bg-white text-gray-800">
    <?php include 'includes/nav.php'; ?>