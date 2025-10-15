<?php
$page_title = "About RABEC";
$meta_description = "Learn about RABEC's founding story, leadership, and commitment to transforming emergency care through technology, training, and workforce development.";
include 'includes/header.php';

// Configure the page header
$header_config = [
    'title' => 'About RABEC',
    'subtitle' => 'Transforming Emergency Care Through Innovation, Technology, and Human-Centered Solutions. Discover our mission, values, and commitment to revolutionizing healthcare worldwide',
    'background_image' => 'assets/images/util/favicon.png',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>',
    'badge_text' => 'Our Story',
    'gradient_from' => 'primary-teal',
    'gradient_via' => 'blue-900',
    // Make the favicon watermark more visible on this page header
    'background_opacity' => 0.5,
    // Use contain so the favicon image is clearly visible rather than tiled/covered
    'background_size' => '50vw',
    'background_repeat' => 'no-repeat',
    'gradient_to' => 'purple-900'
];
include 'includes/page-header.php';
?>
<!-- About Intro -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-watermark">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">About Us</h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    At Rabec, we are redefining the future of emergency care in Africa. Founded on a passion for saving lives and improving health outcomes, we provide innovative, reliable, and sustainable solutions for hospitals and emergency service providers.
                </p>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    Our work spans emergency care information systems, 
                    hospital equipment procurement, consultancy, training, 
                    and mentorship. We bring together healthcare professionals, 
                    technology experts, and strategic thinkers to bridge gaps
                     in emergency medicine, ensuring teams are empowered with the 
                     right tools, knowledge, and support to deliver life‑saving interventions.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    With a strong commitment to excellence, integrity, and innovation, Rabec is more than a solutions provider; we are a partner in building resilient healthcare systems. We combine global best practices with local expertise to create solutions that are culturally responsive, technologically sound, and financially sustainable.
                </p>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg">
                <img src="assets/images/equipment/StockCake-Hospital Room Interior_1758320687.jpg" alt="Hospital interior" class="w-full h-72 object-cover sm:h-96">
            </div>
        </div>
    </div>
</section>

<!-- Vision / Mission -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white p-8 rounded-3xl shadow-md border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Vision</h3>
                <p class="text-gray-700 leading-relaxed">
                    To be the trusted leader in emergency care 
                    solutions integrating technology, equipment,
                     training, and workforce development to save lives 
                     and strengthen healthcare systems.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-md border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Mission</h3>
                <p class="text-gray-700 leading-relaxed">
                    Our mission is to transform emergency care by 
                    integrating innovative information systems, 
                    supplying reliable equipment, and building the 
                    capacity of healthcare professionals. We partner 
                    with institutions and frontline providers to enhance
                     preparedness, improve response, and ensure high-quality,
                      compassionate care when every second counts.
                </p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="mb-8 text-center">
            <h3 class="text-3xl font-bold text-gray-900 mb-4">Core Values</h3>
            <p class="text-gray-600 max-w-2xl mx-auto">Our values guide every decision we make and define how we deliver impact.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-primary-teal rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Excellence</h4>
                <p class="text-gray-600 text-sm">We set the highest standards in consultancy, training, and technology.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-blue-500 rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Innovation</h4>
                <p class="text-gray-600 text-sm">We embrace new ideas and technology to improve emergency care.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-indigo-500 rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Integrity</h4>
                <p class="text-gray-600 text-sm">We operate with transparency, accountability, and ethical responsibility.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-orange-400 rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h8m-8 4h6"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Collaboration</h4>
                <p class="text-gray-600 text-sm">We work closely with partners at every level to create sustainable change.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-primary-teal/80 rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3-1.567 3-3.5S13.657 1 12 1 9 2.567 9 4.5 10.343 8 12 8zM12 10v10"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Compassion</h4>
                <p class="text-gray-600 text-sm">We keep humanity at the heart of our interventions.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-purple-500 rounded-xl mx-auto flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Resilience</h4>
                <p class="text-gray-600 text-sm">We build systems and capacity that remain effective in challenging circumstances.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-watermark">
        <div class="text-center mb-10">
            <h3 class="text-3xl font-bold text-gray-900">Our Story</h3>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4">The experience that sparked RABEC and the mission that drives our work across Sub-Saharan Africa.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
            <div class="prose max-w-none text-gray-800 bg-white p-8 rounded-2xl shadow-md border border-gray-100">
                <p class="text-lg text-gray-700 font-semibold mb-4">A short summary: Rabec began after a personal emergency exposed critical gaps in equipment, systems, and training—this experience shaped our mission to equip hospitals with the tools and processes that save lives.</p>
                <p>
                    Rabec was founded out of a deeply personal experience. At 4 a.m., my brother suffered what was likely his seventh stroke. We rushed him to the emergency department of a referral hospital and encountered an overwhelming reality: the ward was crowded, patients competed for attention, and although healthcare workers were knowledgeable and dedicated, they were struggling with limited equipment and resources.
                </p>

                <p>
                    After some time, we were fortunate to reach a doctor who knew us who helped stabilize my brother. Yet many others were not as fortunate. I witnessed patients who did not survive not because the medical staff lacked expertise, but because they lacked the tools and systems needed to act quickly.
                </p>

                <p>
                    One moment I will never forget was a young woman arriving with her semi-conscious grandmother. When the ultrasound machine failed, she was told to transfer her to another facility on the back of a motorcycle taxi. It was a heartbreaking reminder of how fragile our healthcare systems can be in critical moments.
                </p>

                <p>
                    As a trained emergency care nurse, that experience transformed my perspective and solidified my commitment to change. I realised that saving lives is not just about hospitals and buildings but about equipping emergency personnel with the right training, reliable equipment, and robust information systems that allow them to act decisively when every second counts.
                </p>

                <p>
                    This is not just Uganda’s story but a reality across much of Sub-Saharan Africa. Rabec was born from this vision: to strengthen emergency care across the region by empowering healthcare workers with tools, knowledge, and systems that enable them to save lives when it matters most.
                </p>
            </div>

            <figure class="rounded-3xl overflow-hidden shadow-lg bg-gray-50">
                <img src="assets/images/equipment/edis1.png" alt="Emergency Department Information System - EDIS" loading="lazy" class="w-full h-80 object-cover sm:h-full">
                <figcaption class="p-4 text-sm text-gray-600">EDIS in action — tools and systems to coordinate emergency care.</figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- Impact / Stats 
<section class="py-16 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center mb-10">
            <div>
                <div class="text-4xl font-bold text-primary-teal">50+</div>
                <div class="text-sm mt-2">Years Combined Experience</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-300">500+</div>
                <div class="text-sm mt-2">Healthcare Workers Trained</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-purple-300">50+</div>
                <div class="text-sm mt-2">Facilities Equipped</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-yellow-300">10+</div>
                <div class="text-sm mt-2">Districts Served</div>
            </div>
        </div>

        <div class="text-center">
            <p class="max-w-2xl mx-auto impact-lead">We envision a region where every patient receives timely, efficient, and compassionate emergency care. Rabec pioneers services that transform how healthcare is delivered — from digital emergency department systems to capacity-building programs nurturing the next generation of medical leaders.</p>
        </div>
    </div>-->
</section>

<!-- CTA -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-3xl font-bold text-gray-900 mb-4">Partner with Rabec</h3>
        <p class="text-gray-600 mb-8">Whether you're a healthcare facility, funder, or passionate individual, join us in strengthening emergency care systems and saving lives.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="contact.php" class="inline-flex items-center px-6 py-3 bg-primary-teal text-white font-semibold rounded-full shadow hover:shadow-lg">Get in touch</a>
            <a href="services.php" class="inline-flex items-center px-6 py-3 border-2 border-primary-teal text-primary-teal rounded-full font-semibold hover:bg-primary-teal/5">Explore services</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
