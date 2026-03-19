<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Charity Gala 2024 - FeedTan Hope Foundation | Growing Hope, Feeding Futures</title>
    <meta name="description" content="Join us for an elegant evening of fundraising, dinner, and celebration at the Annual Charity Gala 2024. Live auction, entertainment, and networking for a great cause.">
    
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
            background: linear-gradient(135deg, #064e3b 0%, #10b981 50%, #34d399 100%);
        }
        .schedule-item {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        .schedule-item:hover {
            border-left-color: #10b981;
            transform: translateX(5px);
        }
        .speaker-card {
            transition: all 0.3s ease;
        }
        .speaker-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .ticket-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .ticket-card:hover {
            border-color: #10b981;
            transform: scale(1.02);
        }
        .ticket-card.featured {
            border-color: #10b981;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
    @include('components.header')

    <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-20 hero-gradient text-white overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center animate-fade-in">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <i class="ph ph-calendar-star mr-2"></i>
                        <span class="text-sm font-semibold">Featured Event</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 font-serif">Annual Charity Gala 2024</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                        An elegant evening of fundraising, fine dining, and celebration as we come together to support our community initiatives and create lasting change.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                            <i class="ph ph-calendar"></i>
                            <span class="font-semibold">March 25, 2024</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                            <i class="ph ph-clock"></i>
                            <span class="font-semibold">6:00 PM - 11:00 PM</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                            <i class="ph ph-map-pin"></i>
                            <span class="font-semibold">Grand Hotel, City Center</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Overview -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold mb-6 font-serif">About the Gala</h2>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Join us for our most prestigious event of the year - the Annual Charity Gala 2024. This elegant evening brings together community leaders, philanthropists, and supporters for an unforgettable night of purpose and celebration.
                        </p>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Your participation directly supports our School Nutrition Program, Emergency Relief Fund, and Community Garden Initiatives. Together, we can continue providing nutritious meals, sustainable food sources, and essential support to families across our community.
                        </p>
                        <div class="grid grid-cols-3 gap-6 mb-8">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-emerald-600 mb-2">500+</div>
                                <div class="text-sm text-gray-600">Expected Attendees</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-emerald-600 mb-2">$50K</div>
                                <div class="text-sm text-gray-600">Fundraising Goal</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-emerald-600 mb-2">15</div>
                                <div class="text-sm text-gray-600">Years Running</div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <button onclick="scrollToSection('registration')" class="bg-emerald-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-emerald-700 transition">
                                Register Now
                            </button>
                            <button onclick="scrollToSection('schedule')" class="border border-emerald-600 text-emerald-600 px-8 py-3 rounded-lg font-semibold hover:bg-emerald-50 transition">
                                View Schedule
                            </button>
                        </div>
                    </div>
                    <div>
                        <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Annual Charity Gala" class="rounded-2xl shadow-2xl w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Schedule -->
        <section id="schedule" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Event Schedule</h2>
                    <p class="text-xl text-gray-600">A carefully curated evening of inspiration and impact</p>
                </div>
                
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-6">
                        <div class="schedule-item bg-gray-50 rounded-lg p-6 flex items-center gap-6">
                            <div class="text-center min-w-[100px]">
                                <div class="text-2xl font-bold text-emerald-600">6:00</div>
                                <div class="text-sm text-gray-600">PM</div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-2">Welcome Reception</h3>
                                <p class="text-gray-600">Guests arrive, welcome drinks, and networking. Live jazz music and hors d'oeuvres served.</p>
                            </div>
                        </div>
                        
                        <div class="schedule-item bg-gray-50 rounded-lg p-6 flex items-center gap-6">
                            <div class="text-center min-w-[100px]">
                                <div class="text-2xl font-bold text-emerald-600">7:00</div>
                                <div class="text-sm text-gray-600">PM</div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-2">Opening Ceremony</h3>
                                <p class="text-gray-600">Welcome address by our CEO, introduction of honored guests, and overview of our impact this year.</p>
                            </div>
                        </div>
                        
                        <div class="schedule-item bg-gray-50 rounded-lg p-6 flex items-center gap-6">
                            <div class="text-center min-w-[100px]">
                                <div class="text-2xl font-bold text-emerald-600">7:30</div>
                                <div class="text-sm text-gray-600">PM</div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-2">Gourmet Dinner</h3>
                                <p class="text-gray-600">Three-course plated dinner featuring locally sourced ingredients and sustainable cuisine.</p>
                            </div>
                        </div>
                        
                        <div class="schedule-item bg-gray-50 rounded-lg p-6 flex items-center gap-6">
                            <div class="text-center min-w-[100px]">
                                <div class="text-2xl font-bold text-emerald-600">8:30</div>
                                <div class="text-sm text-gray-600">PM</div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-2">Keynote Speech</h3>
                                <p class="text-gray-600">Inspiring keynote by renowned philanthropist on community building and sustainable change.</p>
                            </div>
                        </div>
                        
                        <div class="schedule-item bg-gray-50 rounded-lg p-6 flex items-center gap-6">
                            <div class="text-center min-w-[100px]">
                                <div class="text-2xl font-bold text-emerald-600">9:00</div>
                                <div class="text-sm text-gray-600">PM</div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-2">Live Auction & Entertainment</h3>
                                <p class="text-gray-600">Exciting live auction featuring unique experiences, followed by live music and dancing.</p>
                            </div>
                        </div>
                        
                        <div class="schedule-item bg-gray-50 rounded-lg p-6 flex items-center gap-6">
                            <div class="text-center min-w-[100px]">
                                <div class="text-2xl font-bold text-emerald-600">10:30</div>
                                <div class="text-sm text-gray-600">PM</div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold mb-2">Closing Remarks & Networking</h3>
                                <p class="text-gray-600">Final announcements, thank you speech, and continued networking with dessert and coffee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Speakers -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Featured Speakers</h2>
                    <p class="text-xl text-gray-600">Inspiring leaders sharing their vision for community change</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="speaker-card bg-white rounded-xl p-6 text-center shadow-lg">
                        <img src="https://images.unsplash.com/photo-1494790108755-261a263d2c9a?auto=format&fit=crop&w=200&q=80" alt="Dr. Sarah Johnson" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-bold mb-2">Dr. Sarah Johnson</h3>
                        <p class="text-emerald-600 font-semibold mb-3">Keynote Speaker</p>
                        <p class="text-gray-600 text-sm mb-4">Renowned philanthropist and author of "Community First: Building Sustainable Change"</p>
                        <div class="flex justify-center gap-2">
                            <i class="ph ph-twitter-logo text-gray-400 hover:text-emerald-600 cursor-pointer transition"></i>
                            <i class="ph ph-linkedin-logo text-gray-400 hover:text-emerald-600 cursor-pointer transition"></i>
                        </div>
                    </div>
                    
                    <div class="speaker-card bg-white rounded-xl p-6 text-center shadow-lg">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80" alt="Michael Chen" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-bold mb-2">Michael Chen</h3>
                        <p class="text-emerald-600 font-semibold mb-3">CEO, FeedTan</p>
                        <p class="text-gray-600 text-sm mb-4">Leading our organization's mission to end hunger and build sustainable communities</p>
                        <div class="flex justify-center gap-2">
                            <i class="ph ph-twitter-logo text-gray-400 hover:text-emerald-600 cursor-pointer transition"></i>
                            <i class="ph ph-linkedin-logo text-gray-400 hover:text-emerald-600 cursor-pointer transition"></i>
                        </div>
                    </div>
                    
                    <div class="speaker-card bg-white rounded-xl p-6 text-center shadow-lg">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c3c6d39f965?auto=format&fit=crop&w=200&q=80" alt="Emily Rodriguez" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-bold mb-2">Emily Rodriguez</h3>
                        <p class="text-emerald-600 font-semibold mb-3">Program Director</p>
                        <p class="text-gray-600 text-sm mb-4">Overseeing our school nutrition and community garden programs across 25 locations</p>
                        <div class="flex justify-center gap-2">
                            <i class="ph ph-twitter-logo text-gray-400 hover:text-emerald-600 cursor-pointer transition"></i>
                            <i class="ph ph-linkedin-logo text-gray-400 hover:text-emerald-600 cursor-pointer transition"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ticket Options -->
        <section id="registration" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Registration Options</h2>
                    <p class="text-xl text-gray-600">Choose your participation level and make a difference</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="ticket-card bg-white rounded-xl p-8 shadow-lg border">
                        <h3 class="text-2xl font-bold mb-4">Individual Ticket</h3>
                        <div class="text-4xl font-bold text-emerald-600 mb-4">$150</div>
                        <p class="text-gray-600 mb-6">Perfect for individuals who want to support our cause while enjoying an elegant evening.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Welcome reception</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Three-course dinner</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Live entertainment</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Networking opportunities</span>
                            </li>
                        </ul>
                        <button onclick="registerTicket('individual')" class="w-full bg-emerald-600 text-white py-3 rounded-lg font-semibold hover:bg-emerald-700 transition">
                            Register Now
                        </button>
                    </div>
                    
                    <div class="ticket-card featured bg-white rounded-xl p-8 shadow-lg relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-emerald-600 text-white px-4 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Couple Package</h3>
                        <div class="text-4xl font-bold text-emerald-600 mb-4">$250</div>
                        <p class="text-gray-600 mb-6">Bring your partner and share an unforgettable evening while making twice the impact.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>All Individual benefits</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Reserved premium seating</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Commemorative photo</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Recognition in program</span>
                            </li>
                        </ul>
                        <button onclick="registerTicket('couple')" class="w-full bg-emerald-600 text-white py-3 rounded-lg font-semibold hover:bg-emerald-700 transition">
                            Register Now
                        </button>
                    </div>
                    
                    <div class="ticket-card bg-white rounded-xl p-8 shadow-lg border">
                        <h3 class="text-2xl font-bold mb-4">Corporate Table</h3>
                        <div class="text-4xl font-bold text-emerald-600 mb-4">$1,500</div>
                        <p class="text-gray-600 mb-6">Host a table of 8 and showcase your company's commitment to community impact.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>8 premium tickets</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Corporate branding</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Priority seating</span>
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                <span>Sponsor recognition</span>
                            </li>
                        </ul>
                        <button onclick="registerTicket('corporate')" class="w-full bg-emerald-600 text-white py-3 rounded-lg font-semibold hover:bg-emerald-700 transition">
                            Register Now
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Venue Information -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-4xl font-bold mb-6 font-serif">Venue Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <i class="ph ph-map-pin text-emerald-600 text-xl mt-1"></i>
                                <div>
                                    <h3 class="font-semibold mb-1">Grand Hotel, City Center</h3>
                                    <p class="text-gray-600">1234 Main Street, Downtown District<br>City Center, State 12345</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i class="ph ph-car text-emerald-600 text-xl mt-1"></i>
                                <div>
                                    <h3 class="font-semibold mb-1">Parking & Transportation</h3>
                                    <p class="text-gray-600">Complimentary valet parking available. Public transport: Metro Line 2 to City Center Station.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i class="ph ph-clock text-emerald-600 text-xl mt-1"></i>
                                <div>
                                    <h3 class="font-semibold mb-1">Event Timing</h3>
                                    <p class="text-gray-600">Doors open at 6:00 PM. Program begins promptly at 7:00 PM.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i class="ph ph-dress text-emerald-600 text-xl mt-1"></i>
                                <div>
                                    <h3 class="font-semibold mb-1">Dress Code</h3>
                                    <p class="text-gray-600">Black tie optional. Cocktail attire recommended.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white rounded-xl p-6 shadow-lg">
                            <h3 class="text-xl font-bold mb-4">Need Assistance?</h3>
                            <p class="text-gray-600 mb-6">Our event team is here to help with any questions or special accommodations.</p>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <i class="ph ph-phone text-emerald-600"></i>
                                    <span class="text-gray-700">+255 712 345 678</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i class="ph ph-envelope text-emerald-600"></i>
                                    <span class="text-gray-700">gala@feedtancmg.org</span>
                                </div>
                            </div>
                            <button class="w-full mt-6 border border-emerald-600 text-emerald-600 py-2 rounded-lg font-semibold hover:bg-emerald-50 transition">
                                Contact Event Team
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <!-- Registration Modal -->
    <div id="registrationModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white p-6 rounded-t-xl">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Event Registration</h3>
                        <p class="text-emerald-100">Annual Charity Gala 2024 - March 25, 2024</p>
                    </div>
                    <button onclick="closeRegistrationModal()" class="text-white hover:text-emerald-200 transition">
                        <i class="ph ph-x text-3xl"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="p-8">
                <form class="space-y-6">
                    <input type="hidden" id="ticketType">
                    
                    <!-- Registration Type Display -->
                    <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <i class="ph ph-ticket text-emerald-600 text-2xl"></i>
                                <div>
                                    <span class="font-semibold text-emerald-900">Registration Type:</span>
                                    <span id="ticketTypeDisplay" class="ml-2 text-emerald-700 font-bold">Individual Ticket</span>
                                </div>
                            </div>
                            <button type="button" onclick="scrollToSection('registration')" class="text-emerald-600 hover:text-emerald-700 text-sm font-semibold">
                                Change Package
                            </button>
                        </div>
                    </div>

                    <!-- Personal Information Section -->
                    <div class="border-b border-gray-200 pb-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="ph ph-user text-emerald-600"></i>
                            Personal Information
                        </h4>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                                <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                                <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                                <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="john.doe@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                                <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="+255 712 345 678">
                            </div>
                        </div>
                    </div>

                    <!-- Additional Attendees (for Couple/Corporate) -->
                    <div id="additionalAttendees" class="border-b border-gray-200 pb-6 hidden">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="ph ph-users text-emerald-600"></i>
                            Additional Attendees
                        </h4>
                        
                        <div class="space-y-4" id="attendeesList">
                            <!-- Attendee fields will be dynamically added here -->
                        </div>
                        
                        <button type="button" onclick="addAttendee()" class="mt-4 text-emerald-600 hover:text-emerald-700 font-semibold text-sm flex items-center gap-2">
                            <i class="ph ph-plus-circle"></i> Add Another Attendee
                        </button>
                    </div>

                    <!-- Professional Information -->
                    <div class="border-b border-gray-200 pb-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="ph ph-briefcase text-emerald-600"></i>
                            Professional Information
                        </h4>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Company/Organization</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Company Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Your Position">
                            </div>
                        </div>
                    </div>

                    <!-- Event Preferences -->
                    <div class="border-b border-gray-200 pb-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="ph ph-heart text-emerald-600"></i>
                            Event Preferences
                        </h4>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Dietary Restrictions</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                                    <option value="">No restrictions</option>
                                    <option value="vegetarian">Vegetarian</option>
                                    <option value="vegan">Vegan</option>
                                    <option value="gluten-free">Gluten-Free</option>
                                    <option value="halal">Halal</option>
                                    <option value="kosher">Kosher</option>
                                    <option value="other">Other (please specify)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Table Preference</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                                    <option value="">No preference</option>
                                    <option value="near-stage">Near Stage</option>
                                    <option value="near-exit">Near Exit</option>
                                    <option value="quiet-area">Quiet Area</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Special Requirements or Allergies</label>
                            <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" rows="3" placeholder="Please let us know about any allergies, accessibility needs, or special accommodations"></textarea>
                        </div>
                    </div>

                    <!-- Communication Preferences -->
                    <div class="border-b border-gray-200 pb-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="ph ph-envelope-simple text-emerald-600"></i>
                            Communication Preferences
                        </h4>
                        
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500" checked>
                                <span class="text-sm text-gray-700">Send me event updates and reminders via email</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500" checked>
                                <span class="text-sm text-gray-700">Send me SMS notifications for important updates</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500">
                                <span class="text-sm text-gray-700">Add me to the FeedTan newsletter for future events</span>
                            </label>
                        </div>
                    </div>

                    <!-- Payment Information -->
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="ph ph-credit-card text-emerald-600"></i>
                            Payment Information
                        </h4>
                        
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <span class="font-semibold text-gray-900">Total Amount:</span>
                                    <span id="totalAmount" class="ml-2 text-2xl font-bold text-emerald-600">$150</span>
                                </div>
                                <div class="text-sm text-gray-600">
                                    <i class="ph ph-info"></i> Payment will be processed securely
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Payment Method</label>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                                        <option value="card">Credit/Debit Card</option>
                                        <option value="mobile">Mobile Money</option>
                                        <option value="bank">Bank Transfer</option>
                                        <option value="cash">Cash at Event</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Billing Address</label>
                                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Optional">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Submit -->
                    <div class="border-t border-gray-200 pt-6">
                        <div class="mb-6">
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" required class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500 mt-1">
                                <span class="text-sm text-gray-700">
                                    I agree to the <a href="#" class="text-emerald-600 hover:text-emerald-700 font-semibold">Terms and Conditions</a> 
                                    and understand that my registration is subject to availability. I acknowledge that photos may be taken during the event for promotional purposes.
                                </span>
                            </label>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button type="button" onclick="closeRegistrationModal()" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition">
                                Cancel
                            </button>
                            <button type="submit" class="flex-1 bg-emerald-600 text-white py-3 rounded-lg font-semibold hover:bg-emerald-700 transition flex items-center justify-center gap-2">
                                <i class="ph ph-check-circle"></i>
                                Complete Registration
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Smooth scroll to section
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }

        // Registration functions
        let attendeeCount = 0;

        function registerTicket(type) {
            document.getElementById('ticketType').value = type;
            updateTicketDisplay(type);
            showAdditionalAttendees(type);
            updateTotalAmount(type);
            document.getElementById('registrationModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function updateTicketDisplay(type) {
            const displayElement = document.getElementById('ticketTypeDisplay');
            const ticketNames = {
                'individual': 'Individual Ticket - $150',
                'couple': 'Couple Package - $250',
                'corporate': 'Corporate Table - $1,500'
            };
            displayElement.textContent = ticketNames[type] || 'Individual Ticket - $150';
        }

        function showAdditionalAttendees(type) {
            const additionalSection = document.getElementById('additionalAttendees');
            const attendeesList = document.getElementById('attendeesList');
            
            // Clear existing attendees
            attendeesList.innerHTML = '';
            attendeeCount = 0;
            
            if (type === 'couple') {
                additionalSection.classList.remove('hidden');
                addAttendee(); // Add one additional attendee for couple
            } else if (type === 'corporate') {
                additionalSection.classList.remove('hidden');
                // Add 7 additional attendees for corporate table (8 total)
                for (let i = 0; i < 7; i++) {
                    addAttendee();
                }
            } else {
                additionalSection.classList.add('hidden');
            }
        }

        function addAttendee() {
            attendeeCount++;
            const attendeesList = document.getElementById('attendeesList');
            const attendeeDiv = document.createElement('div');
            attendeeDiv.className = 'bg-gray-50 rounded-lg p-4 border border-gray-200';
            attendeeDiv.innerHTML = `
                <div class="flex justify-between items-center mb-3">
                    <h5 class="font-semibold text-gray-900">Attendee ${attendeeCount + 1}</h5>
                    ${attendeeCount > 1 ? `<button type="button" onclick="removeAttendee(this)" class="text-red-500 hover:text-red-700">
                        <i class="ph ph-trash"></i> Remove
                    </button>` : ''}
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                        <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="First name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                        <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Last name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                        <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="email@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                        <input type="tel" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="+255 712 345 678">
                    </div>
                </div>
            `;
            attendeesList.appendChild(attendeeDiv);
        }

        function removeAttendee(button) {
            button.closest('.bg-gray-50').remove();
            updateAttendeeNumbers();
        }

        function updateAttendeeNumbers() {
            const attendees = document.querySelectorAll('#attendeesList > div');
            attendees.forEach((attendee, index) => {
                const title = attendee.querySelector('h5');
                if (title) {
                    title.textContent = `Attendee ${index + 2}`;
                }
            });
            attendeeCount = attendees.length - 1;
        }

        function updateTotalAmount(type) {
            const totalElement = document.getElementById('totalAmount');
            const prices = {
                'individual': '$150',
                'couple': '$250',
                'corporate': '$1,500'
            };
            totalElement.textContent = prices[type] || '$150';
        }

        function closeRegistrationModal() {
            document.getElementById('registrationModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('registrationModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeRegistrationModal();
            }
        });

        // Form submission
        document.querySelector('#registrationModal form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for registering! You will receive a confirmation email shortly with event details and payment information.');
            closeRegistrationModal();
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
