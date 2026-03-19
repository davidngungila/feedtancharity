<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Support - FeedTan Community Microfinance Group | Rapid Response, Lasting Hope</title>
    <meta name="description" content="FeedTan's emergency support programs provide rapid response to disasters, crises, and urgent community needs. Help us deliver immediate relief and long-term recovery support.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Manrope', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .glass { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(15px); }
        [x-cloak] { display: none !important; }
        .nav-link { font-size: 1.05rem; position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 1.5rem;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #064e3b 0%, #10b981 100%);
            transition: width 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .nav-link:hover::after {
            width: 100%;
            animation: borderSlide 1s infinite linear;
            background: linear-gradient(90deg, #064e3b 25%, #10b981 25%, #10b981 50%, #064e3b 50%, #064e3b 75%, #10b981 75%);
            background-size: 200% 100%;
        }
        @keyframes borderSlide {
            0% { background-position: 100% 0; }
            100% { background-position: -100% 0; }
        }
        .group:hover .mega-menu { opacity: 1; visibility: visible; transform: translateY(0); }
        .mega-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #60a5fa 100%);
        }
        .program-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .program-card:hover {
            transform: translateY(-5px);
            border-color: #3b82f6;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        .swiper {
            width: 100%;
            height: 400px;
        }
        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .alert-pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
    @include('components.header')

    <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-20 hero-gradient text-white overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Emergency Support" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-600/80"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center animate-fade-in">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6 alert-pulse">
                        <i class="ph ph-first-aid-kit mr-2"></i>
                        <span class="text-sm font-semibold">24/7 Emergency Response</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 font-serif">Emergency Support</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                        Rapid response to disasters, crises, and urgent community needs. Providing immediate relief and long-term recovery support when it matters most.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="scrollToSection('programs')" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                            Emergency Services
                        </button>
                        <button onclick="scrollToSection('contribute')" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                            Emergency Hotline: +255 712 345 678
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Emergency Alert -->
        <section class="py-8 bg-red-50 border-b border-red-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center alert-pulse">
                            <i class="ph ph-warning text-red-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-red-900">Emergency Response Active</h3>
                            <p class="text-red-700 text-sm">Currently responding to flood relief efforts in coastal regions</p>
                        </div>
                    </div>
                    <button onclick="scrollToSection('contribute')" class="bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                        Support Relief Efforts
                    </button>
                </div>
            </div>
        </section>

        <!-- Impact Statistics -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                        <div class="text-gray-600">Emergency Hotline</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-red-600 mb-2">2,500+</div>
                        <div class="text-gray-600">Families Helped Monthly</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-orange-600 mb-2">15min</div>
                        <div class="text-gray-600">Average Response Time</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-purple-600 mb-2">50+</div>
                        <div class="text-gray-600">Emergency Volunteers</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Emergency Programs -->
        <section id="programs" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Emergency Services</h2>
                    <p class="text-xl text-gray-600">Comprehensive emergency response and relief programs</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Disaster Response -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-warning-circle text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Disaster Response</h3>
                        <p class="text-gray-600 mb-6">Immediate response to natural disasters including floods, droughts, and storms with emergency supplies and shelter.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-red-600 mr-2"></i>
                                Emergency shelter setup
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-red-600 mr-2"></i>
                                Rapid assessment teams
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-red-600 mr-2"></i>
                                24-hour deployment
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('disaster-response')" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                            Support Disaster Relief
                        </button>
                    </div>

                    <!-- Food Distribution -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-package text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Food Distribution</h3>
                        <p class="text-gray-600 mb-6">Emergency food distribution to families affected by crises, ensuring no one goes hungry during difficult times.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-orange-600 mr-2"></i>
                                Emergency food packages
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-orange-600 mr-2"></i>
                                Mobile distribution units
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-orange-600 mr-2"></i>
                                Special dietary needs
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('food-distribution')" class="w-full bg-orange-600 text-white py-2 rounded-lg font-semibold hover:bg-orange-700 transition">
                            Support Food Aid
                        </button>
                    </div>

                    <!-- Emergency Supplies -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-first-aid-kit text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Emergency Supplies</h3>
                        <p class="text-gray-600 mb-6">Essential supplies including medical kits, hygiene products, and basic necessities for crisis-affected communities.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Medical first aid kits
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Hygiene & sanitation
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Temporary shelter items
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('emergency-supplies')" class="w-full bg-purple-600 text-white py-2 rounded-lg font-semibold hover:bg-purple-700 transition">
                            Support Supplies
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Current Emergencies -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Active Emergency Responses</h2>
                    <p class="text-xl text-gray-600">Current crises we're responding to</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="ph ph-warning text-red-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold mb-2">Coastal Flood Relief</h3>
                                <p class="text-gray-600 mb-4">Responding to severe flooding affecting 500+ families in coastal regions. Providing shelter, food, and medical assistance.</p>
                                <div class="flex items-center gap-4 text-sm">
                                    <span class="text-gray-500"><i class="ph ph-calendar mr-1"></i> Started 3 days ago</span>
                                    <span class="text-gray-500"><i class="ph ph-users mr-1"></i> 500+ affected</span>
                                    <span class="text-red-600 font-semibold"><i class="ph ph-arrow-circle-up mr-1"></i> Urgent</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-orange-500">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="ph ph-fire text-orange-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold mb-2">Drought Food Security</h3>
                                <p class="text-gray-600 mb-4">Providing emergency food assistance to communities affected by prolonged drought conditions in northern regions.</p>
                                <div class="flex items-center gap-4 text-sm">
                                    <span class="text-gray-500"><i class="ph ph-calendar mr-1"></i> Ongoing 2 weeks</span>
                                    <span class="text-gray-500"><i class="ph ph-users mr-1"></i> 1,200+ affected</span>
                                    <span class="text-orange-600 font-semibold"><i class="ph ph-arrow-circle-up mr-1"></i> High Priority</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Emergency Response Success Stories</h2>
                    <p class="text-xl text-gray-600">Lives saved and communities restored through rapid intervention</p>
                </div>
                
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Emergency Response" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "When the floods came, FeedTan was there within hours. They provided food, shelter, and hope when we had nothing left."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">Amina J.</div>
                                        <div class="text-gray-600">Flood Survivor, Coastal Region</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Emergency Response" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "The emergency food distribution saved our family during the drought. We wouldn't have made it without their help."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">Joseph M.</div>
                                        <div class="text-gray-600">Farmer, Northern Region</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Emergency Response" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "Their rapid response team provided medical supplies that saved lives in our village after the storm."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">Village Elder</div>
                                        <div class="text-gray-600">Rural Community</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- How to Help -->
        <section id="contribute" class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Emergency Response: How You Can Help</h2>
                    <p class="text-xl text-gray-600">Your support saves lives during critical moments</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-hand-heart text-red-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Emergency Fund</h3>
                        <p class="text-gray-600 mb-4">Your donation provides immediate relief for disaster victims and emergency response operations.</p>
                        <button onclick="openDonationModal('emergency-fund')" class="bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                            Donate Now
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-package text-orange-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Supply Donations</h3>
                        <p class="text-gray-600 mb-4">Essential supplies including food, water, medical kits, and hygiene products for emergency distribution.</p>
                        <button onclick="openDonationModal('supplies')" class="bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-orange-700 transition">
                            Donate Supplies
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-users text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Emergency Volunteer</h3>
                        <p class="text-gray-600 mb-4">Join our emergency response team for rapid deployment during crises and disasters.</p>
                        <button onclick="openDonationModal('volunteer')" class="bg-purple-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-purple-700 transition">
                            Volunteer
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Emergency Contact -->
        <section class="py-16 bg-blue-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-bold mb-4 font-serif">Emergency Hotline</h2>
                <p class="text-xl mb-8 opacity-90">Available 24/7 for immediate emergency assistance</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="tel:+255712345678" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-xl hover:bg-gray-100 transition flex items-center gap-3">
                        <i class="ph ph-phone"></i>
                        +255 712 345 678
                    </a>
                    <a href="mailto:emergency@feedtancmg.org" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-blue-600 transition flex items-center gap-3">
                        <i class="ph ph-envelope"></i>
                        emergency@feedtancmg.org
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <!-- Contribution Modal -->
    <div id="contributionModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Emergency Support Contribution</h3>
                <button onclick="closeContributionModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="ph ph-x text-2xl"></i>
                </button>
            </div>
            <form class="space-y-4">
                <input type="hidden" id="contributionType">
                <input type="hidden" id="contributionProgram">
                
                <div id="emergency-fund" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Emergency Fund Amount</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option value="50">$50 - Emergency food for 5 families</option>
                            <option value="100">$100 - Shelter for 10 people</option>
                            <option value="250">$250 - Medical supplies for 25 people</option>
                            <option value="500">$500 - Complete relief package</option>
                            <option value="custom">Custom Amount</option>
                        </select>
                    </div>
                </div>
                
                <div id="supplies" class="space-y-4 hidden">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Emergency Supplies</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Emergency Food Packages</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Medical First Aid Kits</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Water & Sanitation Supplies</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div id="volunteer" class="space-y-4 hidden">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Emergency Volunteer Role</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option value="response">Emergency Response Team</option>
                            <option value="medical">Medical Support</option>
                            <option value="logistics">Logistics & Distribution</option>
                            <option value="assessment">Rapid Assessment</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                    <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                    <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                    <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Submit Emergency Support
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
            },
        });

        // Smooth scroll to section
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }

        // Contribution functions
        function contributeToProgram(program) {
            document.getElementById('contributionProgram').value = program;
            document.getElementById('contributionType').value = 'emergency-fund';
            updateContributionForm('emergency-fund');
            document.getElementById('contributionModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function openDonationModal(type) {
            document.getElementById('contributionType').value = type;
            updateContributionForm(type);
            document.getElementById('contributionModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function updateContributionForm(type) {
            // Hide all contribution sections
            document.getElementById('emergency-fund').classList.add('hidden');
            document.getElementById('supplies').classList.add('hidden');
            document.getElementById('volunteer').classList.add('hidden');
            
            // Show relevant section
            document.getElementById(type).classList.remove('hidden');
        }

        function closeContributionModal() {
            document.getElementById('contributionModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('contributionModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeContributionModal();
            }
        });

        // Form submission
        document.querySelector('#contributionModal form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your emergency support! Our team will contact you immediately with next steps.');
            closeContributionModal();
        });

        // Add animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
