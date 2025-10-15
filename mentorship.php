<?php
$page_title = "Mentorship Program";
$meta_description = "Professional mentorship and coaching programs for emergency care professionals seeking career development and leadership skills.";
include 'includes/header.php';

// Configure the page header
$header_config = [
    'title' => 'Mentorship Program',
    'subtitle' => 'Personalized coaching and mentorship programs designed to accelerate professional development and leadership growth in emergency care excellence',
    'background_image' => 'assets/images/equipment/StockCake-Modern MRI Scanner_1758320709.jpg',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>',
    'badge_text' => 'Professional Mentorship',
    'gradient_from' => 'primary-teal',
    'gradient_via' => 'purple-900',
    'gradient_to' => 'indigo-900'
];
include 'includes/page-header.php';
?>

<!-- Program Overview -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="fade-in">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Empowering Emergency Care Leaders</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Our mentorship program connects emerging and established emergency care professionals with experienced leaders who provide guidance, support, and insights for career advancement and professional excellence.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-primary-teal mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="text-gray-600">One-on-one coaching sessions with experienced mentors</p>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-primary-teal mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="text-gray-600">Personalized career development planning</p>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-primary-teal mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="text-gray-600">Leadership skills development and training</p>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-primary-teal mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="text-gray-600">Professional networking opportunities</p>
                    </div>
                </div>
            </div>
            <div class="fade-in">
                <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1969&q=80" 
                     alt="Mentorship Program" 
                     class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Mentorship Tracks -->
<section class="py-16 bg-light-grey">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Mentorship Tracks</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Choose the mentorship track that aligns with your career goals and professional development needs.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Clinical Excellence -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow fade-in">
                <div class="w-12 h-12 bg-primary-teal rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Clinical Excellence</h3>
                <p class="text-gray-600 mb-4">
                    Advanced clinical skills development, case review, and evidence-based practice implementation.
                </p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Complex case consultation</li>
                    <li>• Research and publication guidance</li>
                    <li>• Quality improvement projects</li>
                    <li>• Specialty certification preparation</li>
                </ul>
            </div>
            
            <!-- Leadership Development -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow fade-in">
                <div class="w-12 h-12 bg-primary-teal rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Leadership Development</h3>
                <p class="text-gray-600 mb-4">
                    Executive coaching for current and aspiring emergency department leaders and administrators.
                </p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Strategic planning and vision development</li>
                    <li>• Team building and conflict resolution</li>
                    <li>• Financial management and budgeting</li>
                    <li>• Change management strategies</li>
                </ul>
            </div>
            
            <!-- Academic Career -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow fade-in">
                <div class="w-12 h-12 bg-primary-teal rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Academic Career</h3>
                <p class="text-gray-600 mb-4">
                    Support for professionals pursuing academic medicine and educational leadership roles.
                </p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Research methodology and grant writing</li>
                    <li>• Teaching and curriculum development</li>
                    <li>• Publication and presentation skills</li>
                    <li>• Academic promotion strategies</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Mentor Network -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Mentor Network</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Learn from experienced leaders who have excelled in various aspects of emergency care and healthcare leadership.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Dr. Sarah Johnson -->
            <div class="bg-light-grey rounded-lg p-6 text-center fade-in">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Dr. Sarah Johnson" 
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Dr. Sarah Johnson</h3>
                <p class="text-primary-teal font-medium mb-3">Emergency Medicine Director</p>
                <p class="text-gray-600 text-sm">
                    20+ years in emergency medicine leadership, specializing in department transformation and quality improvement.
                </p>
            </div>
            
            <!-- Dr. Michael Chen -->
            <div class="bg-light-grey rounded-lg p-6 text-center fade-in">
                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" 
                     alt="Dr. Michael Chen" 
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Dr. Michael Chen</h3>
                <p class="text-primary-teal font-medium mb-3">Academic Emergency Medicine</p>
                <p class="text-gray-600 text-sm">
                    Professor and researcher with expertise in simulation training and medical education innovation.
                </p>
            </div>
            
            <!-- Lisa Rodriguez, RN -->
            <div class="bg-light-grey rounded-lg p-6 text-center fade-in">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Lisa Rodriguez" 
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Lisa Rodriguez, RN</h3>
                <p class="text-primary-teal font-medium mb-3">Nursing Leadership</p>
                <p class="text-gray-600 text-sm">
                    Emergency nursing expert with focus on staff development, workflow optimization, and patient safety.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Program Benefits -->
<section class="py-16 bg-light-grey">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Program Benefits</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our mentorship program provides tangible benefits that accelerate your professional growth and career advancement.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Accelerated Growth</h3>
                <p class="text-gray-600">Fast-track your career development with personalized guidance and support.</p>
            </div>
            
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Professional Network</h3>
                <p class="text-gray-600">Build valuable connections with industry leaders and peers in your field.</p>
            </div>
            
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Skill Enhancement</h3>
                <p class="text-gray-600">Develop new competencies and refine existing skills with expert guidance.</p>
            </div>
            
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Increased Confidence</h3>
                <p class="text-gray-600">Gain confidence in your abilities and decision-making through mentor support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-primary-teal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Ready to Advance Your Career?</h2>
        <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
            Join our mentorship program and unlock your full potential in emergency care leadership.
        </p>
        <a href="contact.php" class="inline-block bg-gray-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
            Apply for Mentorship
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
