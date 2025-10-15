<?php
$page_title = "Medication Support System";
$meta_description = "RABEC's Medication Support System: real-time drug tracking, standardized kits, and rapid restocking to ensure emergency departments never run out of life-saving medicines.";
include 'includes/header.php';

// Configure the page header
$header_config = [
    'title' => 'Medication Support System',
    'subtitle' => 'Because no life should be lost waiting for medicine',
    'background_image' => 'assets/images/equipment/StockCake-Medical Equipment Stand_1758320616.jpg',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6M7 10l5 5 5-5M12 15V3"/>',
    'badge_text' => 'Medication Support',
    'gradient_from' => 'primary-teal',
    'gradient_via' => 'blue-900',
    'gradient_to' => 'purple-900'
];
include 'includes/page-header.php';
?>

<!-- Overview -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Medication Support System</h2>
                <p class="text-lg text-primary-teal font-semibold mb-4">Because No Life Should Be Lost Waiting for Medicine</p>

                <p class="text-gray-700 mb-4 leading-relaxed">
                    Across Sub-Saharan Africa, countless patients arrive at Emergency Departments only to face the unthinkable ,
                     life-saving drugs are missing. Adrenaline, antibiotics, IV fluids , the essentials that decide life or death , are too often out of stock, expired, or delayed.
                </p>

                <p class="text-gray-700 mb-4 leading-relaxed">
                    This is not a medical failure. It’s a systems failure and RABEC Consultancy is fixing it.
                </p>

                <p class="text-gray-700 mb-4 leading-relaxed">
                    Our Medication Support System ensures every Emergency Department is ready, stocked, and responsive
                </p>

                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>Real-time tracking of essential emergency drugs to prevent shortages</li>
                    <li>Standardized emergency kits to guarantee readiness at all times</li>
                    <li>Rapid restocking protocols powered by data and partnerships</li>
                </ul>

                <p class="text-gray-700 mb-4 font-semibold">With RABEC, health workers never have to say, “We don’t have the medicine.”</p>

                <p class="text-gray-700">We are building a future where every second counts — and every medicine is there.</p>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg">
                <img src="assets/images/equipment/StockCake-Medical Equipment Stand_1758320616.jpg" alt="Medical supplies" class="w-full h-80 object-cover sm:h-96">
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-gray-900">How it works</h3>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4">Real-world, practical features designed to keep medicines on the shelf when they are needed most.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-primary-teal rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M9 3v4M15 3v4M4 11h16v8a1 1 0 01-1 1H5a1 1 0 01-1-1v-8z"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Real-time Tracking</h4>
                <p class="text-gray-600 text-sm">Track stock levels, expiries and usage in real time to prevent shortages before they happen.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-blue-500 rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M12 11v10M7 7v4M17 7v4"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Standardized Kits</h4>
                <p class="text-gray-600 text-sm">Pre-packed emergency medication kits that ensure readiness at all times—designed for easy use in high-pressure settings.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-indigo-500 rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Rapid Restocking</h4>
                <p class="text-gray-600 text-sm">Data-driven restocking protocols with partner supply chains to refill critical items quickly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kits & Workflow -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Standardized Emergency Medication Kits</h3>
                <p class="text-gray-700 mb-4">Each kit contains essential medicines and consumables tailored to local protocols and common emergency presentations. Kits are labelled, sealed, and tracked to ensure integrity and expiry control.</p>

                <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                    <li>Adrenaline (epinephrine) ampoules</li>
                    <li>Broad-spectrum antibiotics</li>
                    <li>IV fluids (crystalloids)</li>
                    <li>Analgesics and anticonvulsants</li>
                    <li>Airway and resuscitation consumables</li>
                </ul>

                <h4 class="font-semibold text-gray-900 mb-2">Simple Workflow</h4>
                <p class="text-gray-700">Kits are checked daily, scanned into the Medication Support dashboard, and automatically flagged for restock when thresholds are reached. For urgent shortages, our rapid response partners deliver prioritized restocks within agreed SLAs.</p>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg">
                <img src="assets/images/equipment/StockCake-Medical Equipment Stand_1758320616.jpg" alt="Medication kit" class="w-full h-80 object-cover sm:h-full">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-gradient-to-r from-primary-teal to-teal-400 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-3xl font-bold mb-4">Start protecting lives today</h3>
        <p class="mb-6 text-white/90">Partner with RABEC to implement the Medication Support System at your facility and ensure essential medicines are available when seconds count.</p>
        <a href="contact.php" class="inline-flex items-center px-6 py-3 bg-white text-primary-teal font-semibold rounded-full shadow hover:shadow-lg">Contact Us</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
