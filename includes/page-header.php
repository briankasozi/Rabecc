<?php
/**
 * Universal Futuristic Page Header Component
 * 
 * Usage: 
 * <?php 
 * $header_config = [
 *     'title' => 'Page Title',
 *     'subtitle' => 'Page subtitle or description',
 *     'background_image' => 'assets/images/equipment/image.jpg',
 *     'icon' => 'svg_icon_path', // optional
 *     'badge_text' => 'Badge Text', // optional
 *     'gradient_from' => 'gray-900', // optional, default
 *     'gradient_to' => 'blue-900' // optional, default
 * ];
 * include 'includes/page-header.php'; 
 * ?>
 */

// Default values
$title = $header_config['title'] ?? 'Page Title';
$subtitle = $header_config['subtitle'] ?? 'Page description goes here';
$background_image = $header_config['background_image'] ?? 'assets/images/equipment/StockCake-Hospital Room Interior_1758320687.jpg';
$icon = $header_config['icon'] ?? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>';
$badge_text = $header_config['badge_text'] ?? 'RABEC Solutions';
$gradient_from = $header_config['gradient_from'] ?? 'gray-900';
$gradient_to = $header_config['gradient_to'] ?? 'blue-900';
$gradient_via = $header_config['gradient_via'] ?? 'purple-900';
?>

<!-- Futuristic Page Header -->
<section class="relative py-32 bg-primary-teal overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="absolute inset-0" style="background-image: url('<?php echo $background_image; ?>'); background-size: cover; background-position: center; opacity: 0.3;"></div>
        <!-- Floating Particles -->
        <div class="absolute inset-0">
            <div class="particle absolute w-2 h-2 bg-primary-teal rounded-full opacity-60 animate-pulse" style="top: 20%; left: 15%; animation-delay: 0s;"></div>
            <div class="particle absolute w-1 h-1 bg-blue-400 rounded-full opacity-40 animate-pulse" style="top: 40%; right: 20%; animation-delay: 2s;"></div>
            <div class="particle absolute w-3 h-3 bg-primary-teal rounded-full opacity-30 animate-pulse" style="bottom: 30%; left: 25%; animation-delay: 4s;"></div>
            <div class="particle absolute w-1 h-1 bg-primary-teal rounded-full opacity-70 animate-pulse" style="bottom: 60%; right: 30%; animation-delay: 1s;"></div>
            <div class="particle absolute w-2 h-2 bg-yellow-400 rounded-full opacity-50 animate-pulse" style="top: 70%; left: 60%; animation-delay: 3s;"></div>
        </div>
        <!-- Grid Pattern (simplified solid overlay) -->
        <div class="absolute inset-0 opacity-08">
            <div class="h-full w-full" style="background-color: rgba(255,255,255,0.02);"></div>
        </div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="backdrop-blur-sm bg-white/10 rounded-3xl border border-white/20 p-12 shadow-2xl">
            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 bg-primary-teal/20 backdrop-blur-sm border border-primary-teal/30 rounded-full text-primary-teal font-semibold mb-6 fade-in">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <?php echo $icon; ?>
                </svg>
                <?php echo $badge_text; ?>
            </div>
            
            <!-- Title -->
            <h1 class="text-6xl md:text-7xl font-bold text-white mb-8 fade-in">
                <span class="text-white"><?php echo $title; ?></span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-2xl text-gray-100 max-w-4xl mx-auto fade-in leading-relaxed mb-8">
                <?php echo $subtitle; ?>
            </p>
            
            <!-- Additional Badge/CTA if provided -->
            <?php if (isset($header_config['cta_text']) && isset($header_config['cta_link'])): ?>
            <div class="fade-in">
                <a href="<?php echo $header_config['cta_link']; ?>" class="inline-flex items-center px-6 py-3 bg-primary-teal/20 backdrop-blur-sm border border-primary-teal/30 rounded-full text-white hover:bg-primary-teal/30 transition-all duration-300">
                    <?php if (isset($header_config['cta_icon'])): ?>
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <?php echo $header_config['cta_icon']; ?>
                    </svg>
                    <?php endif; ?>
                    <?php echo $header_config['cta_text']; ?>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>