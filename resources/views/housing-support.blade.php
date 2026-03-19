<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housing Support - FeedTan Hope Foundation | Building Homes, Restoring Dignity</title>
    <meta name="description" content="FeedTan's housing support programs provide shelter, housing assistance, and community housing solutions for families in need. Help us build safe homes and sustainable communities.">
    
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
            background: linear-gradient(135deg, #059669 0%, #10b981 50%, #34d399 100%);
        }
        .program-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .program-card:hover {
            transform: translateY(-5px);
            border-color: #10b981;
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
        .progress-bar {
            transition: width 1s ease-out;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
    @include('components.header')

    <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-20 hero-gradient text-white overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Housing Support" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/90 to-emerald-600/80"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center animate-fade-in">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <i class="ph ph-house mr-2"></i>
                        <span class="text-sm font-semibold">Safe Housing Initiative</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 font-serif">Housing Support</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                        Providing safe, affordable housing solutions and shelter programs that restore dignity and build sustainable communities for families in need.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="scrollToSection('programs')" class="bg-white text-emerald-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                            Housing Programs
                        </button>
                        <button onclick="scrollToSection('contribute')" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-emerald-600 transition">
                            Build a Home
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Statistics -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">500+</div>
                        <div class="text-gray-600">Families Housed</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">1,200+</div>
                        <div class="text-gray-600">Shelter Beds</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-teal-600 mb-2">85%</div>
                        <div class="text-gray-600">Permanent Housing Rate</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-cyan-600 mb-2">24/7</div>
                        <div class="text-gray-600">Shelter Support</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Housing Programs -->
        <section id="programs" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Housing Programs</h2>
                    <p class="text-xl text-gray-600">Comprehensive housing solutions for every need</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Shelter Programs -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-shelter text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Shelter Programs</h3>
                        <p class="text-gray-600 mb-6">Emergency and transitional shelter for families experiencing homelessness, with support services to help them find permanent housing.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Emergency shelter beds
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Case management support
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Job placement assistance
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('shelter')" class="w-full bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                            Support Shelter Programs
                        </button>
                    </div>

                    <!-- Housing Assistance -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-hand-coins text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Housing Assistance</h3>
                        <p class="text-gray-600 mb-6">Financial assistance and support for families struggling with rent, utilities, and housing-related expenses to prevent homelessness.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-green-600 mr-2"></i>
                                Rent assistance programs
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-green-600 mr-2"></i>
                                Utility bill support
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-green-600 mr-2"></i>
                                Security deposit help
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('assistance')" class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                            Support Housing Assistance
                        </button>
                    </div>

                    <!-- Community Housing -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-buildings text-teal-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Community Housing</h3>
                        <p class="text-gray-600 mb-6">Building sustainable community housing developments that provide affordable, long-term housing solutions for low-income families.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-teal-600 mr-2"></i>
                                Affordable housing units
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-teal-600 mr-2"></i>
                                Community facilities
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-teal-600 mr-2"></i>
                                Sustainable construction
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('community')" class="w-full bg-teal-600 text-white py-2 rounded-lg font-semibold hover:bg-teal-700 transition">
                            Support Community Housing
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Current Projects -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Current Housing Projects</h2>
                    <p class="text-xl text-gray-600">Building homes and transforming lives</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold mb-2">Family Housing Complex - Phase 2</h3>
                                <p class="text-gray-600 mb-4">Building 20 affordable housing units for low-income families in the Dar es Salaam region.</p>
                            </div>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-semibold">In Progress</span>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between text-sm mb-2">
                                <span>Construction Progress</span>
                                <span class="font-semibold">65%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="progress-bar bg-emerald-600 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 text-sm text-gray-600">
                            <span><i class="ph ph-calendar mr-1"></i> Completion: Q2 2024</span>
                            <span><i class="ph ph-users mr-1"></i> 20 families</span>
                            <span><i class="ph ph-currency-dollar mr-1"></i> $250,000 needed</span>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold mb-2">Emergency Shelter Expansion</h3>
                                <p class="text-gray-600 mb-4">Expanding our emergency shelter capacity by 50 beds to meet growing community needs.</p>
                            </div>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Fundraising</span>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between text-sm mb-2">
                                <span>Fundraising Progress</span>
                                <span class="font-semibold">40%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="progress-bar bg-green-600 h-2 rounded-full" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 text-sm text-gray-600">
                            <span><i class="ph ph-calendar mr-1"></i> Start: Q3 2024</span>
                            <span><i class="ph ph-users mr-1"></i> 50 additional beds</span>
                            <span><i class="ph ph-currency-dollar mr-1"></i> $75,000 goal</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Housing Success Stories</h2>
                    <p class="text-xl text-gray-600">Families finding stability and hope through our housing programs</p>
                </div>
                
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Housing Success" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "After months in the shelter, FeedTan helped us find our own apartment. My children finally have a safe place to call home."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">Grace T.</div>
                                        <div class="text-gray-600">Mother of 3, Dar es Salaam</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg" alt="Housing Success" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "The housing assistance program kept our family together during difficult times. We're now stable and thriving."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">David M.</div>
                                        <div class="text-gray-600">Father of 2, Arusha</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Housing Success" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "Our new community housing unit gave us hope for the future. Safe housing changed everything for our family."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">Sarah K.</div>
                                        <div class="text-gray-600">Community Housing Resident</div>
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
                    <h2 class="text-4xl font-bold mb-4 font-serif">Build Homes, Change Lives</h2>
                    <p class="text-xl text-gray-600">Your support helps families find safe, stable housing</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-hand-heart text-emerald-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Financial Support</h3>
                        <p class="text-gray-600 mb-4">Your donation helps build homes, provide rent assistance, and maintain our shelter programs.</p>
                        <button onclick="openDonationModal('financial')" class="bg-emerald-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                            Donate Now
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-hammer text-green-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Building Materials</h3>
                        <p class="text-gray-600 mb-4">Donate construction materials, furniture, and household items for families moving into new homes.</p>
                        <button onclick="openDonationModal('materials')" class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                            Donate Materials
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-users text-teal-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Volunteer</h3>
                        <p class="text-gray-600 mb-4">Join our housing team to help build homes, renovate properties, and support families in transition.</p>
                        <button onclick="openDonationModal('volunteer')" class="bg-teal-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-teal-700 transition">
                            Volunteer
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Housing Gallery -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Our Housing Impact</h2>
                    <p class="text-xl text-gray-600">See the homes and communities we're building together</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Housing Project" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg" alt="Community Housing" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Happy Families" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Housing Success" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <!-- Contribution Modal -->
    <div id="contributionModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Housing Support Contribution</h3>
                <button onclick="closeContributionModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="ph ph-x text-2xl"></i>
                </button>
            </div>
            <form class="space-y-4">
                <input type="hidden" id="contributionType">
                <input type="hidden" id="contributionProgram">
                
                <div id="financial" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Housing Donation Amount</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                            <option value="100">$100 - Rent assistance for 1 family</option>
                            <option value="250">$250 - Housing supplies for 2 families</option>
                            <option value="500">$500 - Shelter bed for 1 month</option>
                            <option value="1000">$1000 - Home repair materials</option>
                            <option value="custom">Custom Amount</option>
                        </select>
                    </div>
                </div>
                
                <div id="materials" class="space-y-4 hidden">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Building Materials</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Construction Materials</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Furniture & Appliances</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Household Essentials</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div id="volunteer" class="space-y-4 hidden">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Housing Volunteer Role</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                            <option value="construction">Construction & Building</option>
                            <option value="renovation">Home Renovation</option>
                            <option value="moving">Moving Assistance</option>
                            <option value="support">Family Support Services</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                    <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                    <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                    <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>
                
                <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                    Submit Housing Support
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
            document.getElementById('contributionType').value = 'financial';
            updateContributionForm('financial');
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
            document.getElementById('financial').classList.add('hidden');
            document.getElementById('materials').classList.add('hidden');
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
            alert('Thank you for your housing support! Our team will contact you shortly with next steps.');
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
                    // Animate progress bars when visible
                    const progressBars = entry.target.querySelectorAll('.progress-bar');
                    progressBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0%';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });
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
