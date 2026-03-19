<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - FeedTan Community Microfinance Group | Growing Hope, Feeding Futures</title>
    <meta name="description" content="Join FeedTan Community Microfinance Group's events and activities. Participate in community outreach, fundraising events, and volunteer opportunities to make a difference.">
    
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
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 0.8s ease-out;
        }
        .stat-card {
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
    @include('components.header')

    <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <div class="bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="text-center">
                    <h1 class="text-5xl font-bold mb-6 animate-fade-in">Upcoming Events</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                        Join us for meaningful events that bring our community together and create lasting impact. Every event is an opportunity to make a difference.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="scrollToSection('upcoming')" class="bg-white text-emerald-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition transform hover:scale-105 shadow-xl">
                            📅 View Upcoming Events
                        </button>
                        <button onclick="scrollToSection('past')" class="bg-emerald-700 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-emerald-800 transition transform hover:scale-105 shadow-xl">
                            🏆 See Past Successes
                        </button>
                    </div>
                </div>
            </div>
            <!-- Wave Animation -->
            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z" fill="#F9FAFB"/>
                </svg>
            </div>
        </div>

        <!-- Event Statistics -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="stat-card">
                        <div class="text-4xl font-bold text-emerald-600 mb-2" data-target="25">0</div>
                        <div class="text-gray-600">Events This Year</div>
                    </div>
                    <div class="stat-card">
                        <div class="text-4xl font-bold text-teal-600 mb-2" data-target="1500">0</div>
                        <div class="text-gray-600">Attendees</div>
                    </div>
                    <div class="stat-card">
                        <div class="text-4xl font-bold text-cyan-600 mb-2" data-target="100">0</div>
                        <div class="text-gray-600">Volunteers</div>
                    </div>
                    <div class="stat-card">
                        <div class="text-4xl font-bold text-blue-600 mb-2" data-target="50">0</div>
                        <div class="text-gray-600">Funds Raised ($K)</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upcoming Events Section -->
        <section id="upcoming" class="py-16 bg-gradient-to-r from-emerald-50 to-teal-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Upcoming Events</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Mark your calendar and join us for these upcoming opportunities to make a difference in our community.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Event Card 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Annual Charity Gala" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute top-4 left-4 bg-white text-emerald-600 px-3 py-1 rounded-full text-sm font-semibold">
                                Featured
                            </div>
                            <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-emerald-600 px-3 py-2 rounded-lg">
                                <div class="text-xs font-semibold">MAR</div>
                                <div class="text-xl font-bold">25</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-emerald-600 font-semibold mb-2">
                                <i class="ph ph-calendar mr-1"></i>
                                March 25, 2024 • 6:00 PM
                            </div>
                            <h3 class="text-xl font-bold mb-3">Annual Charity Gala</h3>
                            <p class="text-gray-600 mb-4">Join us for an elegant evening of fundraising, dinner, and celebration as we support our community initiatives. Live auction and entertainment included.</p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <i class="ph ph-map-pin mr-1"></i>
                                Grand Hotel, City Center
                            </div>
                            <div class="flex gap-2">
                                <button onclick="registerEvent('Annual Charity Gala')" class="flex-1 bg-emerald-600 text-white py-2 rounded-lg hover:bg-emerald-700 transition">
                                    Register Now
                                </button>
                                <button onclick="eventDetails('Annual Charity Gala')" class="px-4 py-2 border border-emerald-600 text-emerald-600 rounded-lg hover:bg-emerald-50 transition">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Community Food Drive" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-blue-600 px-3 py-2 rounded-lg">
                                <div class="text-xs font-semibold">APR</div>
                                <div class="text-xl font-bold">15</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-blue-600 font-semibold mb-2">
                                <i class="ph ph-calendar mr-1"></i>
                                April 15, 2024 • 9:00 AM
                            </div>
                            <h3 class="text-xl font-bold mb-3">Community Food Drive</h3>
                            <p class="text-gray-600 mb-4">Help us collect and distribute food to families in need across our community. Bring non-perishable food items or volunteer to help sort and distribute.</p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <i class="ph ph-map-pin mr-1"></i>
                                Community Center, Main Street
                            </div>
                            <div class="flex gap-2">
                                <button onclick="registerEvent('Community Food Drive')" class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                                    Volunteer
                                </button>
                                <button onclick="eventDetails('Community Food Drive')" class="px-4 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Educational Workshop" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-purple-600 px-3 py-2 rounded-lg">
                                <div class="text-xs font-semibold">MAY</div>
                                <div class="text-xl font-bold">10</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-purple-600 font-semibold mb-2">
                                <i class="ph ph-calendar mr-1"></i>
                                May 10, 2024 • 10:00 AM
                            </div>
                            <h3 class="text-xl font-bold mb-3">Educational Workshop</h3>
                            <p class="text-gray-600 mb-4">Free educational workshops for underprivileged children in our community. Topics include math, science, and reading comprehension.</p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <i class="ph ph-map-pin mr-1"></i>
                                Learning Center, Oak Street
                            </div>
                            <div class="flex gap-2">
                                <button onclick="registerEvent('Educational Workshop')" class="flex-1 bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                                    Register
                                </button>
                                <button onclick="eventDetails('Educational Workshop')" class="px-4 py-2 border border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 4 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Summer Fun Fair" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-orange-600 px-3 py-2 rounded-lg">
                                <div class="text-xs font-semibold">JUN</div>
                                <div class="text-xl font-bold">18</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-orange-600 font-semibold mb-2">
                                <i class="ph ph-calendar mr-1"></i>
                                June 18, 2024 • 2:00 PM
                            </div>
                            <h3 class="text-xl font-bold mb-3">Summer Fun Fair</h3>
                            <p class="text-gray-600 mb-4">Family-friendly carnival with games, food, and entertainment. All proceeds support our summer meal program for children.</p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <i class="ph ph-map-pin mr-1"></i>
                                City Park, Recreation Area
                            </div>
                            <div class="flex gap-2">
                                <button onclick="registerEvent('Summer Fun Fair')" class="flex-1 bg-orange-600 text-white py-2 rounded-lg hover:bg-orange-700 transition">
                                    Get Tickets
                                </button>
                                <button onclick="eventDetails('Summer Fun Fair')" class="px-4 py-2 border border-orange-600 text-orange-600 rounded-lg hover:bg-orange-50 transition">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 5 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Community Clean-Up Day" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-green-600 px-3 py-2 rounded-lg">
                                <div class="text-xs font-semibold">JUL</div>
                                <div class="text-xl font-bold">22</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-green-600 font-semibold mb-2">
                                <i class="ph ph-calendar mr-1"></i>
                                July 22, 2024 • 8:00 AM
                            </div>
                            <h3 class="text-xl font-bold mb-3">Community Clean-Up Day</h3>
                            <p class="text-gray-600 mb-4">Join us for a community-wide clean-up initiative. Help beautify our neighborhoods and public spaces. Supplies and refreshments provided.</p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <i class="ph ph-map-pin mr-1"></i>
                                Multiple Locations
                            </div>
                            <div class="flex gap-2">
                                <button onclick="registerEvent('Community Clean-Up Day')" class="flex-1 bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                                    Join Team
                                </button>
                                <button onclick="eventDetails('Community Clean-Up Day')" class="px-4 py-2 border border-green-600 text-green-600 rounded-lg hover:bg-green-50 transition">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 6 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg" alt="Back to School Drive" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-indigo-600 px-3 py-2 rounded-lg">
                                <div class="text-xs font-semibold">AUG</div>
                                <div class="text-xl font-bold">14</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-indigo-600 font-semibold mb-2">
                                <i class="ph ph-calendar mr-1"></i>
                                August 14, 2024 • 5:00 PM
                            </div>
                            <h3 class="text-xl font-bold mb-3">Back to School Drive</h3>
                            <p class="text-gray-600 mb-4">Help us prepare children for the school year by donating school supplies or volunteering to distribute backpacks and supplies to families in need.</p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <i class="ph ph-map-pin mr-1"></i>
                                Town Square, Downtown
                            </div>
                            <div class="flex gap-2">
                                <button onclick="registerEvent('Back to School Drive')" class="flex-1 bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Donate Items
                                </button>
                                <button onclick="eventDetails('Back to School Drive')" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 transition">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Past Events Section -->
        <section id="past" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Past Events & Success Stories</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Celebrating our past achievements and the incredible impact we've made together in our community.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Success Story 1 -->
                    <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl p-8 shadow-lg">
                        <div class="flex items-start mb-4">
                            <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                ✓
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-2">Winter Charity Drive 2024</h3>
                                <div class="text-sm text-emerald-600 font-semibold mb-3">Completed: February 2024</div>
                                <p class="text-gray-700 mb-4">
                                    Successfully raised funds to provide warm clothing, blankets, and nutritious meals for over 200 families during the winter season. Our community came together with incredible generosity.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-center">
                                    <div>
                                        <div class="text-2xl font-bold text-emerald-600">200+</div>
                                        <div class="text-sm text-gray-600">Families Helped</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-emerald-600">$15K</div>
                                        <div class="text-sm text-gray-600">Raised</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-emerald-600">50</div>
                                        <div class="text-sm text-gray-600">Volunteers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Success Story 2 -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-8 shadow-lg">
                        <div class="flex items-start mb-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                ✓
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-2">Back to School Campaign</h3>
                                <div class="text-sm text-blue-600 font-semibold mb-3">Completed: January 2024</div>
                                <p class="text-gray-700 mb-4">
                                    Distributed school supplies, backpacks, and educational materials to over 500 children from low-income families, ensuring they start the school year prepared and confident.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-center">
                                    <div>
                                        <div class="text-2xl font-bold text-blue-600">500+</div>
                                        <div class="text-sm text-gray-600">Children Helped</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-blue-600">$8K</div>
                                        <div class="text-sm text-gray-600">Supplies Value</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-blue-600">30</div>
                                        <div class="text-sm text-gray-600">Partner Schools</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Event Highlights Gallery -->
                <div class="bg-gradient-to-br from-slate-50 to-emerald-50 rounded-2xl p-8 shadow-xl">
                    <h3 class="text-3xl font-bold mb-8 text-center text-gray-900">Event Highlights</h3>
                    
                    <!-- Featured Highlight -->
                    <div class="mb-8">
                        <div class="relative rounded-xl overflow-hidden shadow-lg group cursor-pointer" onclick="openEventGallery('charity-gala')">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Charity Gala Highlight" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-2xl font-bold text-white mb-2">Annual Charity Gala 2024</h4>
                                        <p class="text-white/90">Record-breaking fundraising event with 500+ attendees</p>
                                    </div>
                                    <div class="bg-emerald-600 text-white px-4 py-2 rounded-full font-semibold">
                                        <i class="ph ph-play mr-1"></i> View Gallery
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                        <div class="relative group cursor-pointer" onclick="openEventGallery('food-drive')">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Food Drive" class="w-full h-32 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/40 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <i class="ph ph-images text-2xl mb-1"></i>
                                    <p class="text-xs font-semibold">Food Drive</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative group cursor-pointer" onclick="openEventGallery('workshop')">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Educational Workshop" class="w-full h-32 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/40 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <i class="ph ph-images text-2xl mb-1"></i>
                                    <p class="text-xs font-semibold">Workshop</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative group cursor-pointer" onclick="openEventGallery('fun-fair')">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Summer Fun Fair" class="w-full h-32 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/40 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <i class="ph ph-images text-2xl mb-1"></i>
                                    <p class="text-xs font-semibold">Fun Fair</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative group cursor-pointer" onclick="openEventGallery('cleanup')">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Community Clean-Up" class="w-full h-32 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/40 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <i class="ph ph-images text-2xl mb-1"></i>
                                    <p class="text-xs font-semibold">Clean-Up</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                        <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                            <div class="text-2xl font-bold text-emerald-600 mb-1">500+</div>
                            <div class="text-sm text-gray-600">Photos Captured</div>
                        </div>
                        <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                            <div class="text-2xl font-bold text-blue-600 mb-1">25+</div>
                            <div class="text-sm text-gray-600">Events Covered</div>
                        </div>
                        <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                            <div class="text-2xl font-bold text-purple-600 mb-1">10K+</div>
                            <div class="text-sm text-gray-600">Smiles Shared</div>
                        </div>
                        <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                            <div class="text-2xl font-bold text-orange-600 mb-1">100%</div>
                            <div class="text-sm text-gray-600">Memorable Moments</div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center">
                        <button onclick="openFullGallery()" class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-emerald-700 hover:to-teal-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <i class="ph ph-images mr-2"></i> View Complete Gallery
                        </button>
                        <p class="text-sm text-gray-600 mt-2">Explore memories from our past events and community celebrations</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-16 bg-gray-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Stay Updated on Events</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Get the latest event announcements and updates delivered to your inbox.
                </p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                    <button type="submit" class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-700 transition">
                        Subscribe
                    </button>
                </form>
            </div>
        </section>
    </main>

    @include('components.footer')

    <!-- Event Registration Modal -->
    <div id="eventModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white p-6 rounded-t-xl">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Event Registration</h3>
                        <p class="text-emerald-100" id="eventModalTitle">FeedTan Charity Events</p>
                    </div>
                    <button onclick="closeEventForm()" class="text-white hover:text-emerald-200 transition">
                        <i class="ph ph-x text-3xl"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="p-8">
                <form class="space-y-6">
                    <input type="hidden" id="eventName">
                    
                    <!-- Registration Type Display -->
                    <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <i class="ph ph-calendar-star text-emerald-600 text-2xl"></i>
                                <div>
                                    <span class="font-semibold text-emerald-900">Event:</span>
                                    <span id="eventNameDisplay" class="ml-2 text-emerald-700 font-bold">Annual Charity Gala</span>
                                </div>
                            </div>
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

                    <!-- Additional Attendees -->
                    <div id="additionalAttendeesSection" class="border-b border-gray-200 pb-6 hidden">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="ph ph-users text-emerald-600"></i>
                            Additional Attendees
                        </h4>
                        
                        <div class="space-y-4" id="attendeesList">
                            <!-- Attendee fields will be dynamically added here -->
                        </div>
                        
                        <button type="button" onclick="addEventAttendee()" class="mt-4 text-emerald-600 hover:text-emerald-700 font-semibold text-sm flex items-center gap-2">
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
                                <label class="block text-sm font-medium text-gray-700 mb-1">Number of Attendees</label>
                                <select id="attendeeCount" onchange="updateAttendeeFields()" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                                    <option value="1">1 Person</option>
                                    <option value="2">2 People</option>
                                    <option value="3">3 People</option>
                                    <option value="4">4 People</option>
                                    <option value="5">5+ People</option>
                                </select>
                            </div>
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
                            <button type="button" onclick="closeEventForm()" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition">
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

    <!-- Lightbox Gallery Modal -->
    <div id="lightboxModal" class="fixed inset-0 bg-black bg-opacity-95 z-50 hidden flex items-center justify-center">
        <div class="relative w-full h-full flex flex-col">
            <!-- Gallery Header -->
            <div class="flex justify-between items-center p-6 text-white">
                <h3 id="galleryTitle" class="text-2xl font-bold">Event Gallery</h3>
                <button onclick="closeLightbox()" class="text-white hover:text-gray-300 transition">
                    <i class="ph ph-x text-3xl"></i>
                </button>
            </div>
            
            <!-- Main Image Display -->
            <div class="flex-1 flex items-center justify-center p-4">
                <div class="relative max-w-6xl w-full">
                    <img id="lightboxImage" src="" alt="" class="w-full h-auto max-h-[70vh] object-contain rounded-lg">
                    
                    <!-- Navigation Arrows -->
                    <button onclick="previousImage()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white/30 transition">
                        <i class="ph ph-caret-left text-2xl"></i>
                    </button>
                    <button onclick="nextImage()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white/30 transition">
                        <i class="ph ph-caret-right text-2xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Thumbnail Strip -->
            <div class="p-6">
                <div id="thumbnailStrip" class="flex gap-2 overflow-x-auto justify-center">
                    <!-- Thumbnails will be dynamically inserted here -->
                </div>
            </div>
            
            <!-- Image Counter -->
            <div class="text-center pb-4">
                <span id="imageCounter" class="text-white/70 text-sm">1 / 1</span>
            </div>
        </div>
    </div>

    <script>
        // Smooth scroll to section
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }

        // Event registration functions
        function registerEvent(eventName) {
            document.getElementById('eventName').value = eventName;
            document.getElementById('eventNameDisplay').textContent = eventName;
            document.getElementById('eventModalTitle').textContent = eventName + ' - Registration';
            document.getElementById('eventModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeEventForm() {
            document.getElementById('eventModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function updateAttendeeFields() {
            const count = document.getElementById('attendeeCount').value;
            const additionalSection = document.getElementById('additionalAttendeesSection');
            const attendeesList = document.getElementById('attendeesList');
            
            // Clear existing additional attendees
            attendeesList.innerHTML = '';
            
            if (count > 1) {
                additionalSection.classList.remove('hidden');
                // Add additional attendee fields
                for (let i = 2; i <= count; i++) {
                    addEventAttendeeField(i);
                }
            } else {
                additionalSection.classList.add('hidden');
            }
        }

        function addEventAttendee() {
            const attendeesList = document.getElementById('attendeesList');
            const currentCount = attendeesList.children.length + 2; // +2 for main registrant
            addEventAttendeeField(currentCount);
        }

        function addEventAttendeeField(attendeeNumber) {
            const attendeesList = document.getElementById('attendeesList');
            const attendeeDiv = document.createElement('div');
            attendeeDiv.className = 'bg-gray-50 rounded-lg p-4 border border-gray-200';
            attendeeDiv.innerHTML = `
                <div class="flex justify-between items-center mb-3">
                    <h5 class="font-semibold text-gray-900">Attendee ${attendeeNumber}</h5>
                    <button type="button" onclick="this.closest('.bg-gray-50').remove()" class="text-red-500 hover:text-red-700">
                        <i class="ph ph-trash"></i> Remove
                    </button>
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

        function eventDetails(eventName) {
            // Convert event name to URL-friendly slug
            const slug = eventName.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
            window.location.href = `/events/${slug}`;
        }

        // Gallery functions
        let currentGallery = [];
        let currentImageIndex = 0;

        function openEventGallery(eventType) {
            const galleries = {
                'charity-gala': {
                    title: 'Annual Charity Gala 2024',
                    images: [
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg'
                    ]
                },
                'food-drive': {
                    title: 'Community Food Drive',
                    images: [
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg'
                    ]
                },
                'workshop': {
                    title: 'Educational Workshop',
                    images: [
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg'
                    ]
                },
                'fun-fair': {
                    title: 'Summer Fun Fair',
                    images: [
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg'
                    ]
                },
                'cleanup': {
                    title: 'Community Clean-Up Day',
                    images: [
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg',
                        'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg'
                    ]
                }
            };

            const gallery = galleries[eventType];
            if (gallery) {
                currentGallery = gallery.images;
                currentImageIndex = 0;
                openLightbox(gallery.title);
            }
        }

        function openFullGallery() {
            // Combine all Cloudinary images for full gallery view
            const allImages = [
                'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg',
                'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg',
                'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg',
                'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg',
                'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg',
                'https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613871/african-kid-marketplace-_6_a5ykq5.jpg'
            ];
            
            currentGallery = allImages;
            currentImageIndex = 0;
            openLightbox('Complete Event Gallery');
        }

        function openLightbox(title) {
            document.getElementById('galleryTitle').textContent = title;
            document.getElementById('lightboxModal').classList.remove('hidden');
            updateLightboxImage();
            createThumbnails();
            
            // Prevent body scroll when lightbox is open
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightboxModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function updateLightboxImage() {
            const image = document.getElementById('lightboxImage');
            image.src = currentGallery[currentImageIndex];
            image.alt = `Event photo ${currentImageIndex + 1}`;
            
            // Update counter
            document.getElementById('imageCounter').textContent = 
                `${currentImageIndex + 1} / ${currentGallery.length}`;
            
            // Update thumbnail selection
            updateThumbnailSelection();
        }

        function createThumbnails() {
            const thumbnailStrip = document.getElementById('thumbnailStrip');
            thumbnailStrip.innerHTML = '';
            
            currentGallery.forEach((imageUrl, index) => {
                const thumbnail = document.createElement('img');
                thumbnail.src = imageUrl;
                thumbnail.alt = `Thumbnail ${index + 1}`;
                thumbnail.className = `w-20 h-20 object-cover rounded cursor-pointer transition-all ${
                    index === currentImageIndex ? 'ring-2 ring-white scale-110' : 'opacity-70 hover:opacity-100'
                }`;
                thumbnail.onclick = () => {
                    currentImageIndex = index;
                    updateLightboxImage();
                };
                thumbnailStrip.appendChild(thumbnail);
            });
        }

        function updateThumbnailSelection() {
            const thumbnails = document.querySelectorAll('#thumbnailStrip img');
            thumbnails.forEach((thumb, index) => {
                if (index === currentImageIndex) {
                    thumb.className = 'w-20 h-20 object-cover rounded cursor-pointer transition-all ring-2 ring-white scale-110';
                } else {
                    thumb.className = 'w-20 h-20 object-cover rounded cursor-pointer transition-all opacity-70 hover:opacity-100';
                }
            });
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + currentGallery.length) % currentGallery.length;
            updateLightboxImage();
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % currentGallery.length;
            updateLightboxImage();
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const lightboxModal = document.getElementById('lightboxModal');
            if (!lightboxModal.classList.contains('hidden')) {
                if (e.key === 'ArrowLeft') previousImage();
                if (e.key === 'ArrowRight') nextImage();
                if (e.key === 'Escape') closeLightbox();
            }
        });

        // Animated statistics
        function animateStats() {
            const stats = document.querySelectorAll('.stat-card [data-target]');
            stats.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-target'));
                const increment = target / 100;
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current).toLocaleString();
                }, 20);
            });
        }

        // Initialize animations when page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Start stats animation when page loads
            setTimeout(animateStats, 500);
            
            // Handle event registration form submission
            document.querySelector('#eventModal form')?.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for registering! You will receive a confirmation email shortly.');
                closeEventForm();
            });
        });
    </script>
</body>
</html>
