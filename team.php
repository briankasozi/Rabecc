<?php
$page_title = "Our Team";
$meta_description = "Meet the expert team at RABEC Emergency Care Consultancy - dedicated professionals transforming emergency care through innovation, technology, and excellence.";
include 'includes/header.php';

// Configure the page header
$header_config = [
    'title' => 'Our Team',
    'subtitle' => 'Meet the dedicated professionals driving innovation in emergency care, combining expertise in healthcare, technology, and leadership to transform lives worldwide',
    'background_image' => 'assets/images/equipment/StockCake-Medical Professional Care_1758320631.jpg',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 515.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 616 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>',
    'badge_text' => 'Expert Team',
    'gradient_from' => 'purple-900',
    'gradient_via' => 'indigo-900',
    'gradient_to' => 'blue-900'
];
include 'includes/page-header.php';
?>

<!-- Team Introduction -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Collapsible styles -->
        <style>
            /* Simple collapsible for team cards */
            .collapsible { max-height: 6.5rem; overflow: hidden; transition: max-height 0.4s ease; }
            .collapsible.expanded { max-height: 1000px; }
            .read-more-btn { cursor: pointer; }
        </style>
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <div class="inline-flex items-center px-4 py-2 bg-primary-teal/10 rounded-full text-primary-teal font-semibold mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707"></path>
                </svg>
                Excellence in Healthcare Leadership
            </div>
            <h2 class="text-5xl font-bold text-gray-900 mb-6">The People Behind Our Mission</h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Our team combines decades of experience in emergency medicine, healthcare technology, and organizational leadership. Each member brings unique expertise that strengthens our mission to transform emergency care worldwide.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
            
            <!-- President - Featured Card -->
            <div class="lg:col-span-2 xl:col-span-1 xl:row-span-2 fade-in">
                <div class="equipment-card bg-white p-8 rounded-3xl shadow-xl border border-gray-100 relative overflow-hidden h-full">
                    <!-- Background Equipment -->
                    <div class="featured-equipment-image absolute -top-10 -right-10 w-80 h-80 opacity-5">
                        <img src="assets/images/equipment/StockCake-Emergency Room Scene_1758320646.jpg" alt="Emergency Room" class="w-full h-full object-cover rounded-xl">
                    </div>
                    
                    <div class="relative z-10">
                        <!-- Leadership Badge -->
                        <div class="inline-flex items-center px-3 py-1 bg-gradient-to-r from-primary-teal to-teal-400 text-white text-xs font-semibold rounded-full mb-6">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            President, RABEC Emergency Care Consultancy
                        </div>
                        
                        <!-- Profile Photo -->
                        <div class="w-56 h-56 rounded-2xl overflow-hidden mb-6 mx-auto">
                            <img src="assets/images/team/queen.jpg" alt="Queen Esther" class="w-full h-full object-cover rounded-full border-4 border-white shadow-md">
                        </div>
                        
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Queen Esther</h3>
                            <p class="text-primary-teal font-semibold mb-2">President, RABEC Emergency Care Consultancy</p>
                            <div class="space-y-1 text-sm text-gray-600 mb-4">
                                <p>BN, Australian Catholic University</p>
                                <p>BIT, Makerere University (MUK)</p>
                                <p>RC, Authentic Education</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4 mb-6">
                            <div id="collapsible-president" class="collapsible text-gray-700 text-center leading-relaxed mx-auto max-w-3xl">
                                <p>
                                    Queen Esther is the President of RABEC Emergency
                                    Care Consultancy, transforming emergency care across
                                    nations through her leadership and the RABEC APP, a
                                    proprietary system that enhances patient triage and
                                    real-time decision-making. With extensive experience
                                    as a Hospital Director of Nursing, Clinical Nurse,
                                    Registered Nurse, Executive and Leadership Coach,
                                    and Emergency Care Coach, she brings world-class
                                    expertise in emergency management and clinician education.
                                    Passionate about reducing mortality and building resilient
                                    systems, Queen Esther empowers clinicians and mentors the
                                    next generation of healthcare leaders.
                                </p>
                            </div>

                            <div class="text-center">
                                <button class="read-more-btn inline-flex items-center px-4 py-2 text-primary-teal font-semibold rounded-full hover:bg-primary-teal/5 transition" data-target="collapsible-president">Read more</button>
                            </div>
                            
                            <!-- Key Achievements (kept commented)
                            <div class="space-y-2">
                                ...
                            </div>-->
                        </div>
                        
                        <div class="text-center">
                            <a href="president.php" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-teal to-teal-400 text-white font-semibold rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                View Full Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <!-- Team Member 3 - Hayley Hampton -->
            <div class="fade-in">
                <div class="equipment-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative overflow-hidden h-full">
                    <div class="featured-equipment-image absolute -top-6 -right-6 w-64 h-64 opacity-5">
                        <img src="assets/images/equipment/ultra-sound.png" alt="Clinical Training" class="w-full h-full object-cover rounded-xl">
                    </div>
                    
                    <div class="relative z-10">
                        <div class="inline-flex items-center px-3 py-1 bg-gradient-to-r from-primary-teal to-teal-400 text-white text-xs font-semibold rounded-full mb-4">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253"></path>
                            </svg>
                            Director, Emergency Care Academy
                        </div>
                        
                        <div class="w-32 h-32 bg-gradient-to-br from-primary-teal to-teal-400 rounded-xl flex items-center justify-center mb-4">
                            <img src="assets/images/team/hayley.jpg" alt="Hayley Hampton" class="w-24 h-24 rounded-full object-cover">
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Hayley Hampton, RN, BN</h3>
                        <p class="text-primary-teal font-semibold mb-2">Flagship Leader & Visionary, National Emergency Care Academy</p>
                        <p class="text-sm text-gray-600 mb-4">Distinguished Registered Nurse, educator, and strategic leader with 20+ years' experience across New Zealand and Australia.</p>
                        
                        <div id="collapsible-hayley" class="collapsible text-gray-700 text-sm leading-relaxed mb-4">
                            <p>
                                Hayley Hampton is celebrated for her calm, solutions-driven approach and is a recognized authority in designing and delivering world-class emergency healthcare. She leads the Academy's strategy, curriculum, and nationwide programs, mentoring clinicians and driving evidence-based, culturally safe care models that improve outcomes for rural and Indigenous communities.
                            </p>
                        </div>
                        <div class="text-center mb-4">
                            <button class="read-more-btn inline-flex items-center px-3 py-2 text-primary-teal text-sm font-semibold rounded-full hover:bg-primary-teal/5 transition" data-target="collapsible-hayley">Read more</button>
                        </div>
                        
                        <div class="space-y-2 mb-4 text-sm text-gray-700">
                            <strong>Key Focus Areas:</strong>
                            <ul class="list-disc list-inside mt-2">
                                <li>Curriculum development and national program leadership.</li>
                                <li>Workforce capacity building and mentorship.</li>
                                <li>Evidence-based frameworks for emergency care.</li>
                                <li>Culturally safe and equitable care for rural and Indigenous populations.</li>
                            </ul>
                        </div>
                        
                        <div class="text-center">
                            <a href="contact.php" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-teal to-teal-400 text-white text-sm font-semibold rounded-full hover:shadow-lg transition-all duration-300">
                                Contact Hayley
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 4 - Dr. Farid Razzaghi -->
            <div class="fade-in">
                <div class="equipment-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative overflow-hidden h-full">
                    <div class="featured-equipment-image absolute -top-6 -right-6 w-64 h-64 opacity-5">
                        <img src="assets/images/equipment/StockCake-Advanced Medical Equipment_1758320664.jpg" alt="Medical Equipment" class="w-full h-full object-cover rounded-xl">
                    </div>
                    
                    <div class="relative z-10">
                        <div class="inline-flex items-center px-3 py-1 bg-gradient-to-r from-primary-teal to-teal-400 text-white text-xs font-semibold rounded-full mb-4">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707"></path>
                            </svg>
                            Chief Medical Officer
                        </div>
                        
                        <div class="w-32 h-32 bg-gradient-to-br from-primary-teal to-teal-400 rounded-xl flex items-center justify-center mb-4">
                            <img src="assets/images/team/Dr.Razagghi.jpg" alt="Dr. Farid Razzaghi" class="w-24 h-24 rounded-full object-cover">
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Farid Razzaghi</h3>
                        <p class="text-primary-teal font-semibold mb-2">MD, FRACGP — Chief Medical Officer</p>
                        <p class="text-sm text-gray-600 mb-4">Dr. Farid Razzaghi brings over 15 years of experience in emergency medicine and clinical leadership.</p>
                        
                        <div id="collapsible-farid" class="collapsible text-gray-700 text-sm leading-relaxed mb-4">
                            <p>
                                He has led multidisciplinary teams across metropolitan and regional healthcare settings, driving innovation, patient-centred care, and operational excellence in emergency and trauma services. As RABEC’s Chief Medical Officer, Dr. Razzaghi provides strategic clinical oversight, ensuring all consultancy programs meet the highest standards of safety, quality, and effectiveness.
                            </p>
                        </div>
                        <div class="text-center mb-4">
                            <button class="read-more-btn inline-flex items-center px-3 py-2 text-primary-teal text-sm font-semibold rounded-full hover:bg-primary-teal/5 transition" data-target="collapsible-farid">Read more</button>
                        </div>
                        
                        <div class="space-y-2 mb-4 text-sm text-gray-700">
                            <strong>Why He Matters to RABEC:</strong>
                            <ul class="list-disc list-inside mt-2">
                                <li>Brings unmatched expertise in emergency and trauma care.</li>
                                <li>Guides evidence-based, innovative clinical strategies.</li>
                                <li>Strengthens health systems through governance, quality, and workforce development.</li>
                                <li>Champions compassionate, patient-centered care across diverse settings.</li>
                            </ul>
                        </div>
                        
                        <div class="text-center">
                            <a href="contact.php" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-teal to-teal-400 text-white text-sm font-semibold rounded-full hover:shadow-lg transition-all duration-300">
                                Contact Dr. Razzaghi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Impact Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="featured-equipment-image absolute inset-0" style="background-image: url('assets/images/equipment/StockCake-Medical Equipment Stand_1758320616.jpg'); background-size: cover; background-position: center; opacity: 0.2;"></div>
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="h-full w-full" style="background-image: linear-gradient(rgba(168, 230, 161, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(168, 230, 161, 0.3) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <div class="inline-flex items-center px-4 py-2 bg-primary-teal/20 backdrop-blur-sm border border-primary-teal/30 rounded-full text-primary-teal font-semibold mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Team Impact
            </div>
            <h2 class="text-5xl font-bold text-white mb-6">Collective Excellence</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Our team's combined expertise drives measurable impact in emergency care transformation
            </p>
        </div>

        <!-- Impact Stats Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-16 fade-in">
            <div class="equipment-card bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 text-center">
                <div class="text-4xl font-bold text-primary-teal mb-2">50+</div>
                <div class="text-white text-sm">Years Combined Experience</div>
            </div>
            <div class="equipment-card bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 text-center">
                <div class="text-4xl font-bold text-blue-400 mb-2">500+</div>
                <div class="text-white text-sm">Healthcare Workers Trained</div>
            </div>
            <div class="equipment-card bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 text-center">
                <div class="text-4xl font-bold text-purple-400 mb-2">50+</div>
                <div class="text-white text-sm">Facilities Equipped</div>
            </div>
            <div class="equipment-card bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 text-center">
                <div class="text-4xl font-bold text-yellow-400 mb-2">10+</div>
                <div class="text-white text-sm">Districts Served</div>
            </div>
        </div>

        <!-- Team Values -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 fade-in">
            <div class="equipment-card bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 text-center">
                <div class="w-16 h-16 bg-primary-teal/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 515.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 919.288 0M15 7a3 3 0 11-6 0 3 3 0 616 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Collaborative Leadership</h3>
                <p class="text-gray-300">
                    Each team member brings unique expertise while working together toward our shared mission of transforming emergency care.
                </p>
            </div>

            <div class="equipment-card bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 text-center">
                <div class="w-16 h-16 bg-blue-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Innovation Focus</h3>
                <p class="text-gray-300">
                    Our diverse backgrounds enable us to approach challenges from multiple perspectives, driving breakthrough solutions in emergency care.
                </p>
            </div>

            <div class="equipment-card bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 text-center">
                <div class="w-16 h-16 bg-purple-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Proven Results</h3>
                <p class="text-gray-300">
                    Together, we've successfully implemented solutions that have directly improved patient outcomes and strengthened healthcare systems.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Join Our Team CTA -->
<section class="py-20 bg-gradient-to-r from-primary-teal to-teal-400 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="featured-equipment-image absolute inset-0" style="background-image: url('assets/images/equipment/StockCake-Hospital Room Interior_1758320687.jpg'); background-size: cover; background-position: center; opacity: 0.2;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="backdrop-blur-sm bg-white/10 rounded-3xl border border-white/20 p-12 shadow-2xl max-w-4xl mx-auto">
            <h2 class="text-5xl font-bold text-white mb-8 fade-in">Join Our Mission</h2>
            <p class="text-xl text-white mb-10 leading-relaxed fade-in max-w-3xl mx-auto">
                Are you passionate about transforming emergency care? We're always looking for dedicated professionals who share our vision of saving lives through innovation and excellence.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center fade-in">
                <a href="contact.php" class="inline-flex items-center px-8 py-4 bg-white text-primary-teal font-semibold rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v16a2 2 0 002 2z"></path>
                    </svg>
                    Contact Us
                </a>
                <a href="services.php" class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-primary-teal transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Our Services
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
    // Read more toggles for team cards
    (function(){
        function toggle(targetId, btn){
            var el = document.getElementById(targetId);
            if(!el) return;
            var expanded = el.classList.toggle('expanded');
            btn.textContent = expanded ? 'Read less' : 'Read more';
            btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        }

        document.addEventListener('click', function(e){
            var btn = e.target.closest('.read-more-btn');
            if(!btn) return;
            var target = btn.getAttribute('data-target');
            toggle(target, btn);
        });
    })();
</script>
