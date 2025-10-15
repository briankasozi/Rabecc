RABEC Emergency Care Consultancy Website
=======================================

This repository contains the website for RABEC.

Recent fix (2025-10-15)
----------------------

- Narrowed an overly-broad CSS rule in `assets/css/custom.css` that was stripping gradients and hiding hero slider visuals. This preserves intended text and hero gradients while keeping other gradient utilities disabled.
- Added `assets/js/split-slider.js` include in `includes/header.php` so the split-screen slider initializes properly on pages that include the hero (for example `index.php`).

If you still see issues with the hero slider images or content, clear your browser cache or restart the local server. Open `index.php` in a browser to view the hero slider.
