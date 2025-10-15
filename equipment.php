<?php
$page_title = "Medical Equipment";
$meta_description = "Professional medical equipment procurement and consultation services for emergency departments and healthcare facilities.";
include 'includes/header.php';

// Configure the page header
$header_config = [
    'title' => 'Medical Equipment',
    'subtitle' => 'Expert guidance in selecting, procuring, and implementing cutting-edge medical equipment for emergency departments and healthcare facilities worldwide',
    'background_image' => 'assets/images/equipment/StockCake-Medical Equipment Stand_1758320616.jpg',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707"></path>',
    'badge_text' => 'Medical Equipment Solutions',
    'gradient_from' => 'primary-teal',
    'gradient_via' => 'blue-800',
    'gradient_to' => 'purple-900'
];
include 'includes/page-header.php';
?>

<!-- Equipment Categories -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Medical Equipment Portfolio</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive range of cutting-edge medical equipment for emergency departments and healthcare facilities
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Patient Monitoring Equipment -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/monitor.png" 
                     alt="Patient Monitoring Systems" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Patient Monitoring Systems</h3>
                    <p class="text-gray-600 mb-4">
                        Advanced multi-parameter patient monitors with real-time vital sign tracking and wireless connectivity for comprehensive patient care.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Real-time vital signs monitoring</li>
                        <li>• ECG and cardiac monitoring</li>
                        <li>• Wireless telemetry systems</li>
                        <li>• Centralized monitoring stations</li>
                        <li>• Integration with EMR systems</li>
                    </ul>
                </div>
            </div>
            
            <!-- ECG Machines -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/71g1--7QUtL._SL1500_ECG.jpg" 
                     alt="ECG Machines" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">ECG & Cardiac Monitors</h3>
                    <p class="text-gray-600 mb-4">
                        Professional-grade electrocardiogram machines for accurate cardiac assessment and continuous heart rhythm monitoring.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 12-lead ECG capabilities</li>
                        <li>• Continuous cardiac monitoring</li>
                        <li>• Arrhythmia detection</li>
                        <li>• Digital report generation</li>
                        <li>• Portable and stationary models</li>
                    </ul>
                </div>
            </div>
            
            <!-- Ultrasound Systems -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/ultra-sound.png" 
                     alt="Ultrasound Systems" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Ultrasound Systems</h3>
                    <p class="text-gray-600 mb-4">
                        Portable and stationary ultrasound systems for emergency diagnostics, obstetrics, and general imaging applications.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Point-of-care ultrasound (POCUS)</li>
                        <li>• Abdominal and cardiac imaging</li>
                        <li>• Obstetric and gynecologic scans</li>
                        <li>• High-resolution imaging probes</li>
                        <li>• Digital image storage</li>
                    </ul>
                </div>
            </div>
            
            <!-- Ventilation Systems -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/hamilliton ventilation.png" 
                     alt="Ventilation Systems" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Mechanical Ventilators</h3>
                    <p class="text-gray-600 mb-4">
                        Advanced mechanical ventilators from Hamilton Medical for critical care and emergency respiratory support.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Adaptive ventilation modes</li>
                        <li>• Lung-protective strategies</li>
                        <li>• Pediatric and adult capabilities</li>
                        <li>• Advanced monitoring features</li>
                        <li>• Emergency transport ventilators</li>
                    </ul>
                </div>
            </div>
            
            <!-- Laboratory Equipment -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/i-STAT001_1024x.png" 
                     alt="Point-of-Care Testing" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Point-of-Care Testing</h3>
                    <p class="text-gray-600 mb-4">
                        Rapid diagnostic testing equipment including i-STAT analyzers for immediate laboratory results at the bedside.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Blood gas analysis</li>
                        <li>• Electrolyte testing</li>
                        <li>• Cardiac markers</li>
                        <li>• Coagulation studies</li>
                        <li>• Rapid result delivery</li>
                    </ul>
                </div>
            </div>
            
            <!-- Centrifuge Systems -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/Centrifuge-80-2B-CENTRIFUGE.jpg" 
                     alt="Laboratory Centrifuge" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Laboratory Centrifuges</h3>
                    <p class="text-gray-600 mb-4">
                        High-performance centrifuge systems for sample preparation and laboratory testing in emergency settings.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Variable speed control</li>
                        <li>• Multiple rotor options</li>
                        <li>• Safety interlock systems</li>
                        <li>• Microprocessor controls</li>
                        <li>• Compact benchtop design</li>
                    </ul>
                </div>
            </div>
            
            <!-- Emergency Trolleys -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/YFS-001-Emergency-Trolley.jpg" 
                     alt="Emergency Trolleys" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Emergency Trolleys</h3>
                    <p class="text-gray-600 mb-4">
                        Mobile emergency carts equipped with essential supplies and equipment for rapid response situations.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Multiple drawer configurations</li>
                        <li>• Locking mechanisms</li>
                        <li>• Integrated power systems</li>
                        <li>• Defibrillator platforms</li>
                        <li>• Easy maneuverability</li>
                    </ul>
                </div>
            </div>
            
            <!-- Surgical Tables -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/YFST-Y06-Hydraulic-Operating-table.jpg" 
                     alt="Hydraulic Operating Tables" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Hydraulic Operating Tables</h3>
                    <p class="text-gray-600 mb-4">
                        Advanced hydraulic operating tables with precise positioning for emergency surgical procedures.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Multi-position capabilities</li>
                        <li>• Hydraulic height adjustment</li>
                        <li>• Radiolucent table tops</li>
                        <li>• Trendelenburg positioning</li>
                        <li>• Easy cleaning surfaces</li>
                    </ul>
                </div>
            </div>
            
            <!-- Bladder Scanners -->
            <div class="bg-light-grey rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow fade-in equipment-card">
                <img src="assets/images/equipment/bladder scanner.png" 
                     alt="Bladder Scanner" 
                     class="w-full h-48 object-cover glass-image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Bladder Scanners</h3>
                    <p class="text-gray-600 mb-4">
                        Non-invasive bladder volume measurement devices for accurate urological assessments and patient care.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Non-invasive measurement</li>
                        <li>• Real-time volume calculation</li>
                        <li>• Automatic bladder detection</li>
                        <li>• Portable handheld design</li>
                        <li>• Digital display interface</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Equipment Showcase -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-light-grey">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Featured Equipment Solutions</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Specialized medical equipment for advanced emergency care capabilities
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <!-- Vital Signs Monitor -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 fade-in">
                <div class="relative">
                    <img src="assets/images/equipment/vital sign monitor.png" 
                         alt="Advanced Vital Signs Monitor" 
                         class="w-full h-64 object-cover">
                    <div class="absolute top-4 right-4 bg-primary-teal text-gray-900 px-3 py-1 rounded-full text-sm font-semibold">
                        Featured
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Advanced Vital Signs Monitor</h3>
                    <p class="text-gray-600 mb-6">
                        State-of-the-art multiparameter patient monitoring system with continuous vital signs tracking, 
                        advanced alarm management, and seamless integration with hospital information systems.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Parameters</h4>
                            <p class="text-sm text-gray-600">ECG, SpO₂, NIBP, Temperature, Respiration</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Connectivity</h4>
                            <p class="text-sm text-gray-600">Wi-Fi, Ethernet, Bluetooth</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Display</h4>
                            <p class="text-sm text-gray-600">15" High-resolution touchscreen</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Battery</h4>
                            <p class="text-sm text-gray-600">Up to 4 hours operation</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- MRI Scanner -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 fade-in">
                <div class="relative">
                    <img src="assets/images/equipment/StockCake-Modern MRI Scanner_1758320709.jpg" 
                         alt="Modern MRI Scanner" 
                         class="w-full h-64 object-cover">
                    <div class="absolute top-4 right-4 bg-primary-teal text-gray-900 px-3 py-1 rounded-full text-sm font-semibold">
                        Featured
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Modern MRI Scanner</h3>
                    <p class="text-gray-600 mb-6">
                        High-field MRI system offering exceptional image quality and patient comfort for comprehensive 
                        diagnostic imaging in emergency and critical care settings.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Field Strength</h4>
                            <p class="text-sm text-gray-600">1.5T / 3.0T Options</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Bore Size</h4>
                            <p class="text-sm text-gray-600">70cm wide bore</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Scan Time</h4>
                            <p class="text-sm text-gray-600">Rapid protocols available</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <h4 class="font-semibold text-gray-900 mb-1">Applications</h4>
                            <p class="text-sm text-gray-600">Neuro, MSK, Cardiac, Body</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional Equipment Highlights -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow fade-in">
                <img src="assets/images/equipment/urinasis.png" 
                     alt="Urinalysis Analyzer" 
                     class="w-full h-32 object-cover rounded-lg mb-4">
                <h4 class="text-lg font-semibold text-gray-900 mb-2">Urinalysis Systems</h4>
                <p class="text-gray-600 text-sm">
                    Automated urinalysis systems for rapid and accurate urine testing in emergency settings.
                </p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow fade-in">
                <img src="assets/images/equipment/droppeler.png" 
                     alt="Droppler Systems" 
                     class="w-full h-32 object-cover rounded-lg mb-4">
                <h4 class="text-lg font-semibold text-gray-900 mb-2">Doppler Systems</h4>
                <p class="text-gray-600 text-sm">
                    Portable Doppler systems for vascular assessment and blood flow monitoring.
                </p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow fade-in">
                <img src="assets/images/equipment/op4.jpg" 
                     alt="Operating Room Equipment" 
                     class="w-full h-32 object-cover rounded-lg mb-4">
                <h4 class="text-lg font-semibold text-gray-900 mb-2">OR Equipment</h4>
                <p class="text-gray-600 text-sm">
                    Comprehensive operating room equipment for emergency surgical procedures.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="py-16 bg-light-grey">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Equipment Procurement Process</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                A systematic approach to ensure you get the right equipment for your specific needs and budget.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">1</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Needs Assessment</h3>
                <p class="text-gray-600">
                    Comprehensive evaluation of your current equipment and identification of gaps and improvement opportunities.
                </p>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">2</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Vendor Evaluation</h3>
                <p class="text-gray-600">
                    Thorough analysis of available vendors, equipment specifications, and cost-benefit comparisons.
                </p>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">3</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Implementation</h3>
                <p class="text-gray-600">
                    Professional installation, integration with existing systems, and comprehensive staff training.
                </p>
            </div>
            
            <!-- Step 4 -->
            <div class="text-center fade-in">
                <div class="w-16 h-16 bg-primary-teal rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">4</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Ongoing Support</h3>
                <p class="text-gray-600">
                    Continuous maintenance support, performance monitoring, and equipment optimization services.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Key Benefits -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="fade-in">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Why Choose Our Equipment Services?</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-primary-teal rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Expert Vendor Relationships</h3>
                            <p class="text-gray-600">Strong relationships with leading medical equipment manufacturers ensure competitive pricing and priority support.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-primary-teal rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Regulatory Compliance</h3>
                            <p class="text-gray-600">Ensure all equipment meets regulatory standards and certification requirements for safe operation.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-primary-teal rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Cost Optimization</h3>
                            <p class="text-gray-600">Maximize your investment through strategic procurement planning and budget optimization strategies.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-primary-teal rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Future-Proof Solutions</h3>
                            <p class="text-gray-600">Select equipment that can adapt and scale with your facility's growing needs and technological advances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fade-in">
                <img src="assets/images/equipment/StockCake-Medical Equipment Stand_1758320616.jpg" 
                     alt="Medical Equipment Excellence" 
                     class="rounded-lg shadow-lg glass-image">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-primary-teal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Ready to Upgrade Your Medical Equipment?</h2>
        <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
            Let our experts help you select and implement the right medical equipment solutions for your emergency department.
        </p>
        <a href="contact.php" class="inline-block bg-gray-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
            Request Equipment Consultation
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
