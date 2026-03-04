<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false, selectedCategory: 'all' }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaigns - FeedTan Charity | Active Fundraising Initiatives</title>
    <meta name="description" content="Support FeedTan Charity's active campaigns. Help us provide nutritious meals, sustainable agriculture, and emergency relief to communities in need.">
    
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
        
        .campaign-card {
            transition: all 0.3s ease;
        }
        
        .campaign-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">`n        @include('components.header')
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group/logo">
                <div class="h-14 w-14 rounded-2xl object-contain bg-gradient-to-br from-emerald-500 to-emerald-600 p-3 transition-transform group-hover/logo:scale-105">
                    <i class="ph-bold ph-seedling text-white text-2xl"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-black tracking-tighter text-slate-900 leading-none">FeedTan</span>
                    <span class="text-xs font-bold text-slate-500 leading-none mt-1">Growing Hope, Feeding Futures</span>
                </div>
            </a>

            <div class="hidden lg:flex items-center gap-10">
                <a href="/" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Home</a>
                <a href="/about" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">About</a>
                <a href="/campaigns" class="nav-link font-bold text-emerald-600 transition-colors py-8">Campaigns</a>
                <a href="/impact" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Impact</a>
                <a href="/get-involved" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Get Involved</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="/donate" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-slate-700 bg-white border border-slate-200 px-5 py-2.5 rounded-full hover:bg-slate-50 transition-all">Donate</a>
                <a href="/get-involved" class="hidden md:inline-flex items-center gap-2 text-sm font-semibold text-white bg-emerald-600 px-6 py-2.5 rounded-full hover:bg-emerald-700 shadow-lg shadow-emerald-600/20 transition-all">Join Us</a>

                <button @click="mobileMenuOpen = true" class="lg:hidden w-12 h-12 bg-slate-50 text-slate-900 rounded-2xl flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-all" type="button">
                    <i class="ph ph-list text-2xl"></i>
                </button>
            </div>
        </div>
        <div class="nav-border-animate"></div>
    </nav>

    <!-- Mobile menu -->
    <div x-cloak x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         class="fixed inset-0 z-[100] lg:hidden">

        <div class="absolute inset-0 bg-slate-950/60 backdrop-blur-md" @click="mobileMenuOpen = false"></div>

        <div class="absolute right-0 top-0 bottom-0 w-[85%] max-w-sm bg-white shadow-2xl overflow-y-auto">
            <div class="p-8">
                <div class="flex items-center justify-between mb-12">
                    <div class="flex items-center gap-3">
                        <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-600 text-white font-black">
                            <i class="ph-bold ph-seedling"></i>
                        </div>
                        <span class="font-black text-slate-900">FEEDTAN</span>
                    </div>
                    <button @click="mobileMenuOpen = false" class="w-10 h-10 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center hover:bg-rose-50 hover:text-rose-500 transition-all" type="button">
                        <i class="ph ph-x text-2xl"></i>
                    </button>
                </div>

                <div class="space-y-6">
                    <a href="/" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Home</a>
                    <a href="/about" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">About</a>
                    <a href="/campaigns" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Campaigns</a>
                    <a href="/impact" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Impact</a>
                    <a href="/get-involved" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Get Involved</a>
                </div>

                <div class="mt-20 pt-10 border-t border-slate-100">
                    <div class="bg-emerald-950 p-8 rounded-[2.5rem] text-white">
                        <h4 class="text-lg font-serif font-black mb-2">Ready to help?</h4>
                        <p class="text-sm text-emerald-100/60 mb-8 leading-relaxed">Join our mission to grow hope and feed futures.</p>
                        <a href="/donate" class="w-full inline-block py-4 bg-emerald-500 text-white font-black text-xs uppercase tracking-widest text-center rounded-2xl shadow-xl shadow-emerald-500/20">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-32 bg-gradient-to-br from-emerald-600 to-emerald-700 overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
                <div class="fade-in">
                    <span class="text-emerald-100 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Active Campaigns</span>
                    <h1 class="text-4xl md:text-6xl font-serif text-white mb-8 font-bold leading-tight">
                        Support <span class="text-emerald-200">Life-Changing</span> Initiatives
                    </h1>
                    <p class="text-xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
                        Join our current fundraising campaigns and help us plant seeds of hope in communities that need it most.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="#featured-campaigns" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">View Campaigns</a>
                        <a href="/donate" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-heart text-3xl"></i> Quick Donate
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Campaign Stats -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-black text-emerald-600 mb-2">$125,000</div>
                        <div class="text-sm font-semibold text-slate-700">Total Raised</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-emerald-600 mb-2">8</div>
                        <div class="text-sm font-semibold text-slate-700">Active Campaigns</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-emerald-600 mb-2">2,500+</div>
                        <div class="text-sm font-semibold text-slate-700">Donors</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-emerald-600 mb-2">30</div>
                        <div class="text-sm font-semibold text-slate-700">Days Left</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
                    <div>
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">All Campaigns</h2>
                        <p class="text-slate-600">Choose a campaign that resonates with your heart</p>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <button @click="selectedCategory = 'all'" :class="selectedCategory === 'all' ? 'bg-emerald-600 text-white' : 'bg-white text-slate-700'" class="px-6 py-3 rounded-full font-semibold transition-all">
                            All Campaigns
                        </button>
                        <button @click="selectedCategory = 'nutrition'" :class="selectedCategory === 'nutrition' ? 'bg-emerald-600 text-white' : 'bg-white text-slate-700'" class="px-6 py-3 rounded-full font-semibold transition-all">
                            Nutrition
                        </button>
                        <button @click="selectedCategory = 'agriculture'" :class="selectedCategory === 'agriculture' ? 'bg-emerald-600 text-white' : 'bg-white text-slate-700'" class="px-6 py-3 rounded-full font-semibold transition-all">
                            Agriculture
                        </button>
                        <button @click="selectedCategory = 'emergency'" :class="selectedCategory === 'emergency' ? 'bg-emerald-600 text-white' : 'bg-white text-slate-700'" class="px-6 py-3 rounded-full font-semibold transition-all">
                            Emergency
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Campaigns -->
        <section id="featured-campaigns" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                    <!-- Campaign 1 -->
                    <div class="campaign-card bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=600&q=80" alt="School Nutrition Program" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 rounded-full text-sm font-semibold">75% Funded</div>
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur rounded-full px-3 py-1">
                                <span class="text-xs font-semibold text-emerald-600">Featured</span>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="bg-emerald-100 text-emerald-700 text-xs px-2 py-1 rounded-full font-semibold">Nutrition</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-semibold">Education</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-slate-900">School Nutrition Program</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Providing daily nutritious meals to underprivileged children, ensuring they can focus on learning and growing.</p>
                            
                            <div class="mb-6">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-semibold text-slate-700">Progress</span>
                                    <span class="font-bold text-emerald-600">$37,500 of $50,000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-emerald-500 to-emerald-400 h-3 rounded-full" style="width: 75%"></div>
                                </div>
                                <div class="flex justify-between text-xs mt-2 text-slate-500">
                                    <span>75% Complete</span>
                                    <span>15 days left</span>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <a href="/campaigns/school-nutrition" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-700 transition-all text-center">Support Campaign</a>
                                <a href="/donate" class="w-full border border-emerald-600 text-emerald-600 px-6 py-3 rounded-xl font-semibold hover:bg-emerald-50 transition-all text-center">Quick Donate</a>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign 2 -->
                    <div class="campaign-card bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1556761175-129418cb2dfe?auto=format&fit=crop&w=600&q=80" alt="Emergency Relief Fund" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">45% Funded</div>
                            <div class="absolute top-4 right-4 bg-red-100 backdrop-blur rounded-full px-3 py-1">
                                <span class="text-xs font-semibold text-red-700">Urgent</span>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-semibold">Emergency</span>
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-semibold">Relief</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-slate-900">Emergency Relief Fund</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Rapid response for families facing unexpected crises and natural disasters.</p>
                            
                            <div class="mb-6">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-semibold text-slate-700">Progress</span>
                                    <span class="font-bold text-yellow-600">$22,500 of $50,000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-yellow-500 to-yellow-400 h-3 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-between text-xs mt-2 text-slate-500">
                                    <span>45% Complete</span>
                                    <span>7 days left</span>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <a href="/campaigns/emergency-relief" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-700 transition-all text-center">Support Campaign</a>
                                <a href="/donate" class="w-full border border-emerald-600 text-emerald-600 px-6 py-3 rounded-xl font-semibold hover:bg-emerald-50 transition-all text-center">Quick Donate</a>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign 3 -->
                    <div class="campaign-card bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?auto=format&fit=crop&w=600&q=80" alt="Community Gardens" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 rounded-full text-sm font-semibold">90% Funded</div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">Agriculture</span>
                                <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-semibold">Sustainability</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-slate-900">Community Gardens</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Creating sustainable food sources and teaching communities to grow their own nutritious food.</p>
                            
                            <div class="mb-6">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-semibold text-slate-700">Progress</span>
                                    <span class="font-bold text-emerald-600">$45,000 of $50,000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-emerald-500 to-emerald-400 h-3 rounded-full" style="width: 90%"></div>
                                </div>
                                <div class="flex justify-between text-xs mt-2 text-slate-500">
                                    <span>90% Complete</span>
                                    <span>3 days left</span>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <a href="/campaigns/community-gardens" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-700 transition-all text-center">Support Campaign</a>
                                <a href="/donate" class="w-full border border-emerald-600 text-emerald-600 px-6 py-3 rounded-xl font-semibold hover:bg-emerald-50 transition-all text-center">Quick Donate</a>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign 4 -->
                    <div class="campaign-card bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1542831371-75b59836b5e6?auto=format&fit=crop&w=600&q=80" alt="Clean Water Initiative" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">60% Funded</div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-semibold">Water</span>
                                <span class="bg-cyan-100 text-cyan-700 text-xs px-2 py-1 rounded-full font-semibold">Health</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-slate-900">Clean Water Initiative</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Providing clean drinking water and sanitation facilities to rural communities.</p>
                            
                            <div class="mb-6">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-semibold text-slate-700">Progress</span>
                                    <span class="font-bold text-blue-600">$30,000 of $50,000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-blue-400 h-3 rounded-full" style="width: 60%"></div>
                                </div>
                                <div class="flex justify-between text-xs mt-2 text-slate-500">
                                    <span>60% Complete</span>
                                    <span>20 days left</span>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <a href="/campaigns/clean-water" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-700 transition-all text-center">Support Campaign</a>
                                <a href="/donate" class="w-full border border-emerald-600 text-emerald-600 px-6 py-3 rounded-xl font-semibold hover:bg-emerald-50 transition-all text-center">Quick Donate</a>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign 5 -->
                    <div class="campaign-card bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f5b07507?auto=format&fit=crop&w=600&q=80" alt="Medical Supplies" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">30% Funded</div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-semibold">Medical</span>
                                <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded-full font-semibold">Healthcare</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-slate-900">Medical Supplies</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Essential medical equipment and supplies for community health centers.</p>
                            
                            <div class="mb-6">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-semibold text-slate-700">Progress</span>
                                    <span class="font-bold text-purple-600">$15,000 of $50,000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-purple-500 to-purple-400 h-3 rounded-full" style="width: 30%"></div>
                                </div>
                                <div class="flex justify-between text-xs mt-2 text-slate-500">
                                    <span>30% Complete</span>
                                    <span>45 days left</span>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <a href="/campaigns/medical-supplies" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-700 transition-all text-center">Support Campaign</a>
                                <a href="/donate" class="w-full border border-emerald-600 text-emerald-600 px-6 py-3 rounded-xl font-semibold hover:bg-emerald-50 transition-all text-center">Quick Donate</a>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign 6 -->
                    <div class="campaign-card bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1581092783058-6055486aaff14?auto=format&fit=crop&w=600&q=80" alt="Education Fund" class="w-full h-56 object-cover">
                            <div class="absolute top-4 left-4 bg-orange-600 text-white px-3 py-1 rounded-full text-sm font-semibold">85% Funded</div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-semibold">Education</span>
                                <span class="bg-amber-100 text-amber-700 text-xs px-2 py-1 rounded-full font-semibold">Learning</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-slate-900">Education Fund</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">School supplies, books, and learning resources for underserved communities.</p>
                            
                            <div class="mb-6">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="font-semibold text-slate-700">Progress</span>
                                    <span class="font-bold text-orange-600">$42,500 of $50,000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-orange-500 to-orange-400 h-3 rounded-full" style="width: 85%"></div>
                                </div>
                                <div class="flex justify-between text-xs mt-2 text-slate-500">
                                    <span>85% Complete</span>
                                    <span>5 days left</span>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <a href="/campaigns/education-fund" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-700 transition-all text-center">Support Campaign</a>
                                <a href="/donate" class="w-full border border-emerald-600 text-emerald-600 px-6 py-3 rounded-xl font-semibold hover:bg-emerald-50 transition-all text-center">Quick Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-16">
                    <button class="px-12 py-4 bg-emerald-600 text-white font-bold rounded-full shadow-xl hover:bg-emerald-700 transition-all">
                        Load More Campaigns
                    </button>
                </div>
            </div>
        </section>

        <!-- How It Works -->
        <section class="py-32 bg-slate-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">How It Works</span>
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Make an Impact in 3 Simple Steps</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Supporting our campaigns is easy and secure. Every contribution makes a real difference.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-12">
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-magnifying-glass text-emerald-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">1. Choose Campaign</h3>
                        <p class="text-slate-600 leading-relaxed">Browse our active campaigns and select one that aligns with your values and interests.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-blue-100 to-blue-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-hand-heart text-blue-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">2. Donate Securely</h3>
                        <p class="text-slate-600 leading-relaxed">Make a secure donation using our trusted payment system. Every amount helps.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-purple-100 to-purple-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-bell text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">3. Track Impact</h3>
                        <p class="text-slate-600 leading-relaxed">Receive updates on campaign progress and see the real impact of your contribution.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-emerald-600">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Ready to Make a Difference?</h2>
                <p class="text-emerald-100 text-xl max-w-2xl mx-auto mb-12">Join thousands of supporters who are already changing lives through our campaigns.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="/donate" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Donate Now</a>
                    <a href="/get-involved" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                        <i class="ph-bold ph-users-three text-3xl"></i> Start a Campaign
                    </a>
                </div>
            </div>
        </section>
    </main>`n`n        @include('components.footer')

    <!-- Footer -->
    <footer class="bg-slate-900 text-white pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
            <div class="col-span-1 md:col-span-1 lg:col-span-1">
                <a href="/" class="flex items-center gap-3 mb-6">
                    <div class="h-10 w-10 rounded-xl object-contain bg-gradient-to-br from-emerald-500 to-emerald-600 p-2">
                        <i class="ph-bold ph-seedling text-white"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-black tracking-tighter text-white leading-none">FeedTan</span>
                        <span class="text-xs font-bold text-slate-400 leading-none mt-1">Growing Hope, Feeding Futures</span>
                    </div>
                </a>
                <p class="text-slate-400 leading-relaxed text-sm mb-6">
                    Cultivating sustainable communities and growing hope through innovative food security solutions since 2009.
                </p>
                <div class="flex items-center gap-4">
                    <span class="text-xs font-bold text-emerald-400">501(c)(3)</span>
                    <span class="text-xs text-slate-500">|</span>
                    <span class="text-xs font-bold text-emerald-400">15+ Years</span>
                    <span class="text-xs text-slate-500">|</span>
                    <span class="text-xs font-bold text-emerald-400">Global Impact</span>
                </div>
                <div class="flex gap-3 mt-6">
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center hover:bg-emerald-600 transition-colors" aria-label="Facebook">
                        <i class="ph ph-facebook-logo text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center hover:bg-emerald-600 transition-colors" aria-label="Twitter">
                        <i class="ph ph-twitter-logo text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center hover:bg-emerald-600 transition-colors" aria-label="Instagram">
                        <i class="ph ph-instagram-logo text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center hover:bg-emerald-600 transition-colors" aria-label="LinkedIn">
                        <i class="ph ph-linkedin-logo text-white"></i>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-bold mb-6 text-emerald-500">Quick Links</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="/campaigns" class="hover:text-white transition-colors">Campaigns</a></li>
                    <li><a href="/impact" class="hover:text-white transition-colors">Our Impact</a></li>
                    <li><a href="/get-involved" class="hover:text-white transition-colors">Get Involved</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-6 text-emerald-500">Get Involved</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li><a href="/donate" class="hover:text-white transition-colors">Donate Monthly</a></li>
                    <li><a href="/partners" class="hover:text-white transition-colors">Corporate Partnerships</a></li>
                    <li><a href="/events" class="hover:text-white transition-colors">Fundraising Events</a></li>
                    <li><a href="/get-involved" class="hover:text-white transition-colors">Volunteer Programs</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-6 text-emerald-500">Contact Info</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li class="flex items-start gap-3">
                        <i class="ph ph-map-pin text-emerald-500 mt-0.5"></i>
                        <span>
                            FeedTan Charity Headquarters<br>
                            123 Green Way, Hope City<br>
                            United States
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-phone text-emerald-500"></i> (555) 123-4567
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-envelope text-emerald-500"></i> info@feedtan.org
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 pt-10 border-t border-slate-800">
            <div class="flex flex-col items-center text-center gap-8">
                <div class="flex flex-wrap items-center justify-center gap-y-2 gap-x-6 text-[11px] font-bold uppercase tracking-wider text-slate-500">
                    <a href="/terms" class="hover:text-emerald-500 transition-colors">Terms & Conditions</a>
                    <a href="/privacy" class="hover:text-emerald-500 transition-colors">Privacy Policy</a>
                    <a href="/faq" class="hover:text-emerald-500 transition-colors">FAQ</a>
                </div>
                <p class="text-sm text-slate-500">© 2024 FeedTan Charity. All rights reserved. | 501(c)(3) Non-Profit Organization</p>
            </div>
        </div>
    </footer>

    <script>
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
