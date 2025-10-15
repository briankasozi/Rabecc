<?php
// Get current page for active navigation
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<nav class="bg-white shadow-lg sticky top-0 z-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-3">
            <!-- Logo Section with Enhanced Background -->
            <div class="flex-shrink-0">
                <a href="index.php" class="flex items-center group">
                    <div class="bg-primary-teal/10 p-4 rounded-xl shadow-md group-hover:shadow-lg transition-all duration-300 border border-primary-teal/20 backdrop-blur-sm">
                        <img src="assets/images/util/logo_new.png" alt="RABEC Emergency Care Consultancy" class="w-20 h-18 object-contain group-hover:scale-105 transition-transform duration-300">
                    </div>
                </a>
            </div>
            
            <!-- Desktop Navigation with Enhanced Styling -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-1">
                    <a href="index.php" class="nav-link <?php echo ($current_page == 'index') ? 'bg-primary-teal text-white shadow-md' : 'text-gray-700 hover:bg-primary-teal hover:text-white'; ?> px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Home
                        </span>
                    </a>
                    <a href="about.php" class="nav-link <?php echo ($current_page == 'about') ? 'bg-primary-teal text-white shadow-md' : 'text-gray-700'; ?> px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-teal hover:text-white hover:shadow-md">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            About
                        </span>
                    </a>
                    <a href="team.php" class="nav-link <?php echo ($current_page == 'team') ? 'bg-primary-teal text-white shadow-md' : 'text-gray-700'; ?> px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-teal hover:text-white hover:shadow-md">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                            </svg>
                            Team
                        </span>
                    </a>
                    <a href="services.php" class="nav-link <?php echo ($current_page == 'services') ? 'bg-primary-teal text-white shadow-md' : 'text-gray-700'; ?> px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-teal hover:text-white hover:shadow-md">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            Services
                        </span>
                    </a>
                    <a href="why-choose-us.php" class="nav-link <?php echo ($current_page == 'why-choose-us') ? 'bg-primary-teal text-white shadow-md' : 'text-gray-700'; ?> px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-teal hover:text-white hover:shadow-md">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                            Why Choose Us
                        </span>
                    </a>
                    <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact') ? 'bg-primary-teal text-white shadow-md' : 'text-gray-700'; ?> px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-teal hover:text-white hover:shadow-md">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contact
                        </span>
                    </a>
                </div>
            </div>
            
            <!-- Enhanced Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="mobile-menu-button bg-gradient-to-r from-primary-teal to-teal-400 inline-flex items-center justify-center p-3 rounded-lg text-white hover:from-teal-400 hover:to-primary-teal focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white shadow-md transition-all duration-300 transform hover:scale-105" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Enhanced Mobile menu -->
    <div class="mobile-menu hidden md:hidden" id="mobile-menu">
                <div class="px-4 pt-2 pb-3 space-y-2 bg-white border-t border-gray-200 shadow-inner">
            <a href="index.php" class="<?php echo ($current_page == 'index') ? 'bg-primary-green text-white shadow-md' : 'text-gray-700'; ?> flex items-center px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-green hover:text-white hover:shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Home
            </a>
            <a href="about.php" class="<?php echo ($current_page == 'about') ? 'bg-primary-green text-white shadow-md' : 'text-gray-700'; ?> flex items-center px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-green hover:text-white hover:shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                About
            </a>
            <a href="team.php" class="<?php echo ($current_page == 'team') ? 'bg-primary-green text-white shadow-md' : 'text-gray-700'; ?> flex items-center px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-green hover:text-white hover:shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                </svg>
                Team
            </a>
            <a href="services.php" class="<?php echo ($current_page == 'services') ? 'bg-primary-green text-white shadow-md' : 'text-gray-700'; ?> flex items-center px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-green hover:text-white hover:shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
                Services
            </a>
            <a href="why-choose-us.php" class="<?php echo ($current_page == 'why-choose-us') ? 'bg-primary-green text-white shadow-md' : 'text-gray-700'; ?> flex items-center px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-green hover:text-white hover:shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                </svg>
                Why Choose Us
            </a>
            <a href="contact.php" class="<?php echo ($current_page == 'contact') ? 'bg-primary-green text-white shadow-md' : 'text-gray-700'; ?> flex items-center px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 transform hover:scale-105 hover:bg-primary-green hover:text-white hover:shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Contact
            </a>
        </div>
    </div>
</nav>