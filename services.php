<?php
$page_title = "Our Services";
$meta_description = "RABEC offers comprehensive emergency care services including EDIS technology, medical equipment procurement, training programs, policy implementation, mentorship, and workforce development.";
include 'includes/header.php';

// Configure the page header
$header_config = [
    'title' => 'Our Services',
    'subtitle' => 'Comprehensive emergency care solutions designed to transform healthcare delivery and save lives through innovation, technology, and expertise',
    'background_image' => 'assets/images/equipment/StockCake-Advanced Medical Equipment_1758320664.jpg',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
    'badge_text' => 'Professional Services',
    'gradient_from' => 'primary-teal',
    'gradient_via' => 'indigo-900',
    'gradient_to' => 'purple-900'
];
include 'includes/page-header.php';
?>

<!-- Services Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Transforming Emergency Care</h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                RABEC is dedicated to strengthening emergency care through practical solutions that combine technology, training, and workforce development. Our core services are designed to create sustainable impact in healthcare systems.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
            <!-- Service 1: EDIS -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Emergency Department Information System (EDIS)</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    A modern, technology-driven solution designed to improve the delivery of emergency care through comprehensive digital platforms that streamline patient flow, reduce delays, and improve outcomes.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Real-time patient tracking</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Digital triage management</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Clinical documentation</span>
                    </div>
                </div>
                <a href="edis.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    Learn More About EDIS
                </a>
            </div>

            <!-- Service 2: Medical Equipment -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Procurement & Supply of Medical Equipment</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Comprehensive solution for equipping hospitals with modern medical equipment through strategic partnerships with leading manufacturers, offering both purchase and rental options.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">ECG & Ultrasound Machines</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Vital Sign Monitors</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Hamilton Ventilators</span>
                    </div>
                </div>
                <a href="equipment.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    View Equipment Catalog
                </a>
            </div>

            <!-- Service 3: Medication Support System (new) -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6M7 10l5 5 5-5M12 15V3"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Medication Support System</h3>
                <p class="text-primary-teal font-semibold mb-4">Because no life should be lost waiting for medicine</p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Across Sub-Saharan Africa, essential emergency medicines are often out of stock, expired, or delayed. RABEC's Medication Support System fixes that by making pharmacies and emergency departments predictable and responsive.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3-9a1 1 0 10-2 0v1H9a1 1 0 100 2h2v1a1 1 0 102 0v-1h2a1 1 0 100-2h-2V9z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Real-time tracking of essential emergency drugs</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9a1 1 0 012 0v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1H8a1 1 0 110-2h1V9z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Standardized emergency medication kits for immediate readiness</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Rapid restocking protocols powered by data and partnerships</span>
                    </div>
                </div>
                <a href="medication-support.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    Learn About Medication Support
                </a>
            </div>

            <!-- Service 4: Training & Education -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Emergency Care Education & Training</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Specialized training programs designed to strengthen the knowledge, skills, and preparedness of doctors, nurses, and first responders through practical, simulation-based learning.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">In-service training & workshops</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Simulation-based training</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Conferences & knowledge sharing</span>
                    </div>
                </div>
                <a href="training.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    Explore Training Programs
                </a>
            </div>

            <!-- Service 4: Policy & Procedures -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Policy & Procedure Review & Implementation</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Supporting healthcare facilities in developing, reviewing, and implementing emergency care policies and protocols that align with international best practices and local realities.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Clinical pathways development</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Standards & guidelines</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Compliance & quality assurance</span>
                    </div>
                </div>
                <a href="policy.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    Policy Implementation Guide
                </a>
            </div>

            <!-- Service 5: Mentorship & Coaching -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Mentorship & Coaching in Emergency Care</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Continuous professional growth support through personalized mentorship and coaching programs that provide practical guidance and long-term career development.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">One-on-one coaching</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Peer-to-peer mentorship</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Leadership development</span>
                    </div>
                </div>
                <a href="mentorship.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    Join Mentorship Program
                </a>
            </div>

            <!-- Service 6: Student Support -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Support for Emergency Care Students</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Nurturing the next generation of emergency care professionals by connecting students with global opportunities and providing guidance for career advancement.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Scholarship linkages</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Application & placement support</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Career guidance & mentorship</span>
                    </div>
                </div>
                <a href="students.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    Student Opportunities
                </a>
            </div>

            <!-- Service 7: Workforce Development -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 card-hover fade-in lg:col-span-2 xl:col-span-1">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 6V9a2 2 0 00-2-2H10a2 2 0 00-2 2v3m8 0a2 2 0 002 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4a2 2 0 012-2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Recruitment & Workforce Development</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Connecting healthcare facilities with qualified personnel while supporting continuous growth through training, overseas secondments, and retention strategies.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Medical personnel recruitment</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Overseas medical secondment</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-primary-teal mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-600">Retention & support strategies</span>
                    </div>
                </div>
                <a href="workforce.php" class="inline-block bg-primary-teal text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                    Workforce Solutions
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-light-grey">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Ready to Transform Your Emergency Care?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Partner with RABEC to strengthen your emergency care capabilities and save more lives through our comprehensive solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="bg-primary-teal text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300 hover:transform hover:-translate-y-1">
                    Get Started Today
                </a>
                <a href="about.php" class="bg-gray-900 text-white px-8 py-4 rounded-lg font-semibold hover:bg-gray-800 transition duration-300 hover:transform hover:-translate-y-1">
                    Learn More About RABEC
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
