<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Impact - FeedTan Charity | Growing Hope, Feeding Futures</title>
    <meta name="description" content="Discover FeedTan Charity's impact since 2009. See how we've served 125,000+ meals, helped 3,500+ families, and built sustainable communities.">
    
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
                <a href="/campaigns" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Campaigns</a>
                <a href="/impact" class="nav-link font-bold text-emerald-600 transition-colors py-8">Impact</a>
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
                    <span class="text-emerald-100 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Our Impact</span>
                    <h1 class="text-4xl md:text-6xl font-serif text-white mb-8 font-bold leading-tight">
                        <span class="text-emerald-200">15 Years</span> of Growing Hope
                    </h1>
                    <p class="text-xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
                        Since 2009, we've been cultivating sustainable communities and providing nutritious meals to families in need. See the real impact we've made together.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="#impact-stats" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">View Our Impact</a>
                        <a href="/donate" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-heart text-3xl"></i> Support Our Work
                        </a>
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
                                <img src="https://images.unsplash.com/photo-1544003696-b91c5435a2a?auto=format&fit=crop&w=800&q=80" alt="Maria's Story" class="w-full h-64 object-cover">
                                <div class="p-8">
                                    <div class="flex items-center gap-4 mb-4">
                                        <span class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1 rounded-full font-semibold">Education</span>
                                        <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-semibold">Success</span>
                                    </div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Maria's Journey</h3>
                                    <p class="text-slate-600 mb-6 leading-relaxed">From struggling single mother to community garden leader, Maria transformed her family's future through our sustainable agriculture program.</p>
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1494790108755-261a263d2c9a?auto=format&fit=crop&w=60&q=80" alt="Maria" class="w-12 h-12 rounded-full object-cover">
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
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" alt="James's Story" class="w-full h-64 object-cover">
                                <div class="p-8">
                                    <div class="flex items-center gap-4 mb-4">
                                        <span class="bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full font-semibold">Nutrition</span>
                                        <span class="bg-orange-100 text-orange-700 text-xs px-3 py-1 rounded-full font-semibold">Health</span>
                                    </div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-4">James's Recovery</h3>
                                    <p class="text-slate-600 mb-6 leading-relaxed">After losing his job, James found hope through our emergency relief program and now volunteers to help others in need.</p>
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1472099645215-5a1b5a9c1a9a?auto=format&fit=crop&w=60&q=80" alt="James" class="w-12 h-12 rounded-full object-cover">
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
                                <img src="https://images.unsplash.com/photo-1573497019940-1c3c6d39f965?auto=format&fit=crop&w=800&q=80" alt="Sarah's Story" class="w-full h-64 object-cover">
                                <div class="p-8">
                                    <div class="flex items-center gap-4 mb-4">
                                        <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">Children</span>
                                        <span class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1 rounded-full font-semibold">Education</span>
                                    </div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Sarah's Dreams</h3>
                                    <p class="text-slate-600 mb-6 leading-relaxed">Thanks to our school nutrition program, Sarah went from hungry student to top of her class, now pursuing her dream of becoming a doctor.</p>
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1438761681033-6c21bce5ec6c?auto=format&fit=crop&w=60&q=80" alt="Sarah" class="w-12 h-12 rounded-full object-cover">
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

        <!-- Annual Report -->
        <section class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Transparency</span>
                        <h2 class="text-4xl font-serif text-slate-900 mb-8 font-bold">Annual Impact Report</h2>
                        <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                            We believe in complete transparency. Download our latest annual report to see exactly how your donations are making a difference.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                    <i class="ph-bold ph-file-text text-emerald-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">2023 Annual Report</div>
                                    <div class="text-sm text-slate-600">Complete financial and impact summary</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                    <i class="ph-bold ph-chart-line text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">Impact Dashboard</div>
                                    <div class="text-sm text-slate-600">Real-time metrics and progress</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                    <i class="ph-bold ph-certificate text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">Tax Documentation</div>
                                    <div class="text-sm text-slate-600">501(c)(3) compliance</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="px-8 py-4 bg-emerald-600 text-white font-bold rounded-xl hover:bg-emerald-700 transition-all">
                                <i class="ph-bold ph-download mr-3"></i> Download Report
                            </button>
                            <a href="/contact" class="px-8 py-4 border-2 border-emerald-600 text-emerald-600 font-bold rounded-xl hover:bg-emerald-50 transition-all">
                                <i class="ph-bold ph-envelope mr-3"></i> Request Copy
                            </a>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600868483942-ae69d4a5b4b?auto=format&fit=crop&w=600&q=80" alt="Annual Report" class="rounded-3xl shadow-2xl">
                        <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl border border-emerald-100">
                            <div class="flex items-center gap-4">
                                <div class="bg-emerald-100 rounded-full p-3">
                                    <i class="ph-bold ph-chart-line text-emerald-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">98% Impact Rate</div>
                                    <div class="text-sm text-slate-600">Of donations go directly to programs</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Future Goals -->
        <section class="py-32 bg-gradient-to-br from-emerald-50 to-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Future Goals</span>
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Growing Together</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Our vision for the next 15 years and how we plan to expand our impact to reach even more communities.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-target text-emerald-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">500,000 Meals</h3>
                        <p class="text-slate-600 leading-relaxed">Annual meal serving goal by 2025</p>
                    </div>
                    
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-globe-hemisphere-west text-blue-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">100 Communities</h3>
                        <p class="text-slate-600 leading-relaxed">Expand to 100 communities by 2030</p>
                    </div>
                    
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-100 to-purple-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-plant text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">200 Gardens</h3>
                        <p class="text-slate-600 leading-relaxed">Establish sustainable food sources</p>
                    </div>
                    
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-100 to-orange-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-rocket text-orange-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Tech Innovation</h3>
                        <p class="text-slate-600 leading-relaxed">Digital solutions for food security</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-emerald-600">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Be Part of Our Impact</h2>
                <p class="text-emerald-100 text-xl max-w-2xl mx-auto mb-12">Join thousands of supporters who are making a real difference in communities across the country.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="/donate" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Donate Now</a>
                    <a href="/get-involved" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                        <i class="ph-bold ph-users-three text-3xl"></i> Get Involved
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
