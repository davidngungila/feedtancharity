<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Impact - FeedTan Hope Foundation | Growing Hope, Feeding Futures</title>
    <meta name="description" content="Discover FeedTan Hope Foundation's impact since 2009. See how we've served 125,000+ meals, helped 3,500+ families, and built sustainable communities.">
    <link rel="icon" href="{{ asset('charity_logo_icon.png') }}" type="image/png">
    
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
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        .nav-border-animate {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #064e3b 25%, #10b981 25%, #10b981 50%, #064e3b 50%, #064e3b 75%, #10b981 75%);
            background-size: 200% 100%;
            animation: borderSlide 3s infinite linear;
        }
        
        .impact-card {
            transition: all 0.3s ease;
        }
        
        .impact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .stat-number {
            animation: countUp 2s ease-out;
        }
        
        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">
            <!-- Hero Section -->
            <section class="relative py-32 bg-gradient-to-br from-emerald-600 to-emerald-700 overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23059669\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
                    <div class="fade-in">
                        <span class="text-emerald-100 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Our Impact</span>
                        <h1 class="text-4xl md:text-6xl font-serif text-white mb-8 font-bold leading-tight">
                            <span class="text-emerald-200">15 Years</span> of Growing Hope
                        </h1>
                        <p class="text-xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
                            Since 2009, we've been cultivating sustainable communities and providing nutritious meals to families in need. See the real impact we've made together.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Upcoming Events -->
            <section class="py-32 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-20">
                        <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Events</span>
                        <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Upcoming Events</h2>
                        <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                            Join our fundraising events and community gatherings to support our mission while connecting with like-minded supporters.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Event 1: Annual Gala -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=800&q=80" alt="Annual Gala Dinner" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full">Featured</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="text-white">
                                        <div class="text-sm font-semibold mb-1">March 25, 2024</div>
                                        <div class="text-xs opacity-90">6:00 PM - 10:00 PM</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Annual Gala Dinner</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Join us for an elegant evening of dining, entertainment, and celebration as we honor our supporters and showcase our impact.</p>
                                <div class="flex items-center gap-4 mb-6 text-sm text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                        <span>Grand Hotel</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-users text-emerald-600"></i>
                                        <span>200 Guests</span>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <button class="flex-1 px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">Register Now</button>
                                    <button class="px-6 py-3 border-2 border-emerald-600 text-emerald-600 font-bold rounded-full hover:bg-emerald-50 transition-all">Learn More</button>
                                </div>
                            </div>
                        </div>

                        <!-- Event 2: Community Garden Day -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?auto=format&fit=crop&w=800&q=80" alt="Community Garden Day" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">Family Friendly</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="text-white">
                                        <div class="text-sm font-semibold mb-1">April 2, 2024</div>
                                        <div class="text-xs opacity-90">9:00 AM - 2:00 PM</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Community Garden Day</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Get your hands dirty and help us plant seeds for the future. Perfect for families and volunteers of all ages.</p>
                                <div class="flex items-center gap-4 mb-6 text-sm text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                        <span>Community Garden</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-users text-emerald-600"></i>
                                        <span>All Ages</span>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <button class="flex-1 px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">Sign Up</button>
                                    <button class="px-6 py-3 border-2 border-emerald-600 text-emerald-600 font-bold rounded-full hover:bg-emerald-50 transition-all">Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Event 3: Food Drive Marathon -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=800&q=80" alt="Food Drive Marathon" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-orange-600 text-white text-xs font-bold px-3 py-1 rounded-full">Active</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="text-white">
                                        <div class="text-sm font-semibold mb-1">April 15-16, 2024</div>
                                        <div class="text-xs opacity-90">All Day Event</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Food Drive Marathon</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Join our 48-hour food collection marathon. Help us gather non-perishable items for families in need across our community.</p>
                                <div class="flex items-center gap-4 mb-6 text-sm text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                        <span>Multiple Locations</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-users text-emerald-600"></i>
                                        <span>500+ Volunteers</span>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <button class="flex-1 px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">Volunteer</button>
                                    <button class="px-6 py-3 border-2 border-emerald-600 text-emerald-600 font-bold rounded-full hover:bg-emerald-50 transition-all">Donate Items</button>
                                </div>
                            </div>
                        </div>

                        <!-- Event 4: Youth Leadership Workshop -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Youth Leadership Workshop" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full">Education</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="text-white">
                                        <div class="text-sm font-semibold mb-1">April 8, 2024</div>
                                        <div class="text-xs opacity-90">10:00 AM - 4:00 PM</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Youth Leadership Workshop</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Empowering the next generation of community leaders through interactive workshops and service learning activities.</p>
                                <div class="flex items-center gap-4 mb-6 text-sm text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                        <span>Community Center</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-users text-emerald-600"></i>
                                        <span>Ages 14-18</span>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <button class="flex-1 px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">Register</button>
                                    <button class="px-6 py-3 border-2 border-emerald-600 text-emerald-600 font-bold rounded-full hover:bg-emerald-50 transition-all">Info</button>
                                </div>
                            </div>
                        </div>

                        <!-- Event 5: Harvest Festival -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?auto=format&fit=crop&w=800&q=80" alt="Harvest Festival" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full">Celebration</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="text-white">
                                        <div class="text-sm font-semibold mb-1">May 20, 2024</div>
                                        <div class="text-xs opacity-90">11:00 AM - 6:00 PM</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Harvest Festival</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Celebrate the bounty of our community gardens with fresh produce, live music, cooking demonstrations, and family activities.</p>
                                <div class="flex items-center gap-4 mb-6 text-sm text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                        <span>Urban Farm</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-users text-emerald-600"></i>
                                        <span>Free Entry</span>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <button class="flex-1 px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">Attend</button>
                                    <button class="px-6 py-3 border-2 border-emerald-600 text-emerald-600 font-bold rounded-full hover:bg-emerald-50 transition-all">Schedule</button>
                                </div>
                            </div>
                        </div>

                        <!-- Event 6: Corporate Partnership Summit -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1497366214047-405e70d91621?auto=format&fit=crop&w=800&q=80" alt="Corporate Partnership Summit" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-slate-600 text-white text-xs font-bold px-3 py-1 rounded-full">Business</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="text-white">
                                        <div class="text-sm font-semibold mb-1">May 10, 2024</div>
                                        <div class="text-xs opacity-90">8:00 AM - 5:00 PM</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Corporate Partnership Summit</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Connect with business leaders and explore partnership opportunities to maximize our collective impact on food security.</p>
                                <div class="flex items-center gap-4 mb-6 text-sm text-slate-600">
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                        <span>Business Center</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph-bold ph-users text-emerald-600"></i>
                                        <span>B2B Event</span>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <button class="flex-1 px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">RSVP</button>
                                    <button class="px-6 py-3 border-2 border-emerald-600 text-emerald-600 font-bold rounded-full hover:bg-emerald-50 transition-all">Sponsor</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center mt-16">
                        <div class="bg-gradient-to-r from-emerald-600 to-emerald-700 rounded-3xl p-12 text-white">
                            <h3 class="text-3xl font-serif font-bold mb-6">Host Your Own Event</h3>
                            <p class="text-emerald-100 mb-8 max-w-2xl mx-auto">
                                Want to organize a fundraising event for FeedTan? We'll provide the support, resources, and guidance to make your event a success.
                            </p>
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                                <button class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all text-lg">
                                    <i class="ph-bold ph-calendar-plus mr-3"></i>
                                    Plan an Event
                                </button>
                                <button class="px-12 py-5 border-2 border-white text-white font-bold rounded-full hover:bg-white/10 transition-all text-lg">
                                    <i class="ph-bold ph-envelope mr-3"></i>
                                    Contact Events Team
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Key Stats -->
        <section id="impact-stats" class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Impact by the Numbers</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Every number represents a life touched, a family fed, and a community strengthened.
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-20">
                    <div class="impact-card bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-3xl p-8 text-center border border-emerald-100">
                        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-emerald-200 to-emerald-300 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-bowl-food text-emerald-600 text-3xl"></i>
                        </div>
                        <div class="stat-number text-5xl font-black text-emerald-600 mb-2">125,000+</div>
                        <div class="text-lg font-bold text-slate-900">Meals Served</div>
                        <p class="text-sm text-slate-600 mt-2">Nutritious meals provided to families in need</p>
                    </div>
                    
                    <div class="impact-card bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-8 text-center border border-blue-100">
                        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-200 to-blue-300 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-users-three text-blue-600 text-3xl"></i>
                        </div>
                        <div class="stat-number text-5xl font-black text-blue-600 mb-2">3,500</div>
                        <div class="text-lg font-bold text-slate-900">Families Helped</div>
                        <p class="text-sm text-slate-600 mt-2">Families receiving regular food assistance</p>
                    </div>
                    
                    <div class="impact-card bg-gradient-to-br from-purple-50 to-purple-100 rounded-3xl p-8 text-center border border-purple-100">
                        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-purple-200 to-purple-300 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-hand-heart text-purple-600 text-3xl"></i>
                        </div>
                        <div class="stat-number text-5xl font-black text-purple-600 mb-2">1,200</div>
                        <div class="text-lg font-bold text-slate-900">Volunteers</div>
                        <p class="text-sm text-slate-600 mt-2">Dedicated volunteers making a difference</p>
                    </div>
                    
                    <div class="impact-card bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-8 text-center border border-orange-100">
                        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-orange-200 to-orange-300 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-map-pin text-orange-600 text-3xl"></i>
                        </div>
                        <div class="stat-number text-5xl font-black text-orange-600 mb-2">50+</div>
                        <div class="text-lg font-bold text-slate-900">Communities</div>
                        <p class="text-sm text-slate-600 mt-2">Communities served across the country</p>
                    </div>
                </div>
            </section>

            <!-- Success Stories -->
            <section class="py-32 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-20">
                        <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Success Stories</span>
                        <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Transforming Lives</h2>
                        <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                            Real stories of hope, resilience, and community transformation made possible through your support.
                        </p>
                    </div>

                    <div class="swiper storiesSwiper mb-12">
                        <div class="swiper-wrapper">
                            <!-- Story 1 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">
                                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Maria's Story" class="w-full h-64 object-cover">
                                    <div class="p-8">
                                        <div class="flex items-center gap-4 mb-4">
                                            <span class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1 rounded-full font-semibold">Education</span>
                                            <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-semibold">Success</span>
                                        </div>
                                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Maria's Journey</h3>
                                        <p class="text-slate-600 mb-6 leading-relaxed">From struggling single mother to community garden leader, Maria transformed her family's future through our sustainable agriculture program.</p>
                                        <div class="flex items-center gap-4">
                                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Maria" class="w-12 h-12 rounded-full object-cover">
                                            <div>
                                                <div class="font-semibold text-slate-900">Maria Rodriguez</div>
                                                <div class="text-sm text-slate-600">Community Garden Leader</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Story 2 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">
                                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="James's Story" class="w-full h-64 object-cover">
                                    <div class="p-8">
                                        <div class="flex items-center gap-4 mb-4">
                                            <span class="bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full font-semibold">Nutrition</span>
                                            <span class="bg-orange-100 text-orange-700 text-xs px-3 py-1 rounded-full font-semibold">Health</span>
                                        </div>
                                        <h3 class="text-2xl font-bold text-slate-900 mb-4">James's Recovery</h3>
                                        <p class="text-slate-600 mb-6 leading-relaxed">After losing his job, James found hope through our emergency relief program and now volunteers to help others in need.</p>
                                        <div class="flex items-center gap-4">
                                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613872/african-kid-marketplace-_10_dzptzo.jpg" alt="James" class="w-12 h-12 rounded-full object-cover">
                                            <div>
                                                <div class="font-semibold text-slate-900">James Thompson</div>
                                                <div class="text-sm text-slate-600">Volunteer Coordinator</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Story 3 -->
                            <div class="swiper-slide">
                                <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">
                                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_9_gswfmp.jpg" alt="Sarah's Story" class="w-full h-64 object-cover">
                                    <div class="p-8">
                                        <div class="flex items-center gap-4 mb-4">
                                            <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">Children</span>
                                            <span class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1 rounded-full font-semibold">Education</span>
                                        </div>
                                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Sarah's Dreams</h3>
                                        <p class="text-slate-600 mb-6 leading-relaxed">Thanks to our school nutrition program, Sarah went from hungry student to top of her class, now pursuing her dream of becoming a doctor.</p>
                                        <div class="flex items-center gap-4">
                                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613872/african-kid-marketplace_tga6k6.jpg" alt="Sarah" class="w-12 h-12 rounded-full object-cover">
                                            <div>
                                                <div class="font-semibold text-slate-900">Sarah Johnson</div>
                                                <div class="text-sm text-slate-600">Honor Student</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation -->
                        <div class="swiper-pagination !bottom-4"></div>
                        <div class="swiper-button-next !right-4 w-12 h-12 bg-emerald-600 text-white rounded-full flex items-center justify-center">
                            <i class="ph ph-caret-right"></i>
                        </div>
                        <div class="swiper-button-prev !left-4 w-12 h-12 bg-emerald-600 text-white rounded-full flex items-center justify-center">
                            <i class="ph ph-caret-left"></i>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const storiesSwiper = new Swiper('.storiesSwiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                spaceBetween: 30,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
