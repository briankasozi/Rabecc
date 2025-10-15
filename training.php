<?php
$page_title = "Training & Education";
$meta_description = "Professional emergency care training programs, simulation-based workshops, and continuing education for healthcare professionals.";
include 'includes/header.php';

// Configure the page header
$header_config = [
    'title' => 'Training & Education',
    'subtitle' => 'Comprehensive training programs designed to enhance emergency care skills and improve patient outcomes through evidence-based education and hands-on learning',
    'background_image' => 'assets/images/equipment/StockCake-Emergency Room Scene_1758320646.jpg',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>',
    'badge_text' => 'Professional Training',
    'gradient_from' => 'primary-teal',
    'gradient_via' => 'indigo-800',
    'gradient_to' => 'purple-900'
];
include 'includes/page-header.php';
?>

<!-- Training Programs -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Simulation Training -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in">
                <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1931&q=80" 
                     alt="Simulation Training" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Simulation-Based Training</h3>
                    <p class="text-gray-600 mb-4">
                        High-fidelity simulation scenarios that replicate real emergency situations, allowing healthcare professionals to practice critical skills in a safe environment.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Advanced cardiac life support scenarios</li>
                        <li>• Trauma resuscitation simulations</li>
                        <li>• Pediatric emergency protocols</li>
                        <li>• Team-based communication training</li>
                    </ul>
                </div>
            </div>
            
            <!-- Professional Workshops -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                     alt="Professional Workshops" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Professional Workshops</h3>
                    <p class="text-gray-600 mb-4">
                        Intensive workshops covering specialized emergency care topics, led by expert practitioners with real-world experience.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Emergency ultrasound certification</li>
                        <li>• Airway management techniques</li>
                        <li>• Pain management protocols</li>
                        <li>• Quality improvement methodologies</li>
                    </ul>
                </div>
            </div>
            
            <!-- Continuing Education -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in">
                <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1969&q=80" 
                     alt="Continuing Education" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Continuing Education</h3>
                    <p class="text-gray-600 mb-4">
                        Ongoing education programs to maintain certifications and stay current with the latest advances in emergency medicine.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• CME/CNE accredited courses</li>
                        <li>• Online learning modules</li>
                        <li>• Annual conferences and symposiums</li>
                        <li>• Professional certification programs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Training Approach -->
<section class="py-16 bg-light-grey">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Training Approach</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Evidence-based training methodologies that combine theoretical knowledge with practical application.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Interactive Learning</h3>
                <p class="text-gray-600">Hands-on learning experiences that engage participants and promote knowledge retention.</p>
            </div>
            
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Team-Based Learning</h3>
                <p class="text-gray-600">Collaborative training that improves communication and teamwork in emergency situations.</p>
            </div>
            
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Performance Metrics</h3>
                <p class="text-gray-600">Objective assessment and feedback to track progress and identify improvement areas.</p>
            </div>
            
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Patient-Centered Focus</h3>
                <p class="text-gray-600">Training programs centered on improving patient care and safety outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-primary-teal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Enhance Your Team's Emergency Care Skills</h2>
        <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
            Invest in your staff's professional development with our comprehensive training programs.
        </p>
        <a href="contact.php" class="inline-block bg-gray-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
            Schedule Training Program
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
