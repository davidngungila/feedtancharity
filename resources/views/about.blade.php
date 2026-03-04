<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - FeedTan Charity | Growing Hope, Feeding Futures</title>
    <meta name="description" content="Learn about FeedTan Charity's mission to cultivate sustainable communities and provide nutritious meals to families in need since 2009.">
    
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
        
        .terms-section {
            scroll-margin-top: 100px;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-32 bg-gradient-to-br from-emerald-50 to-white overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23059669\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="fade-in">
                        <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Our Story</span>
                        <h1 class="text-5xl md:text-6xl font-serif text-slate-900 mb-8 font-bold leading-tight">
                            Cultivating <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-emerald-400">Hope</span> Since 2009
                        </h1>
                        <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                            For over 15 years, FeedTan Charity has been dedicated to fighting hunger and growing sustainable communities through innovative food security initiatives and compassionate action.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-emerald-100">
                                <div class="text-3xl font-black text-emerald-600 mb-2">15+</div>
                                <div class="text-sm font-semibold text-slate-700">Years of Service</div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-emerald-100">
                                <div class="text-3xl font-black text-emerald-600 mb-2">50+</div>
                                <div class="text-sm font-semibold text-slate-700">Communities</div>
                            </div>
                        </div>
                        
                        <a href="/donate" class="inline-flex items-center gap-3 bg-emerald-600 text-white px-8 py-4 rounded-full font-bold text-lg shadow-xl shadow-emerald-600/30 hover:bg-emerald-700 transition-all">
                            <span>Support Our Mission</span>
                            <i class="ph ph-arrow-right text-xl"></i>
                        </a>
                    </div>
                    
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=800&q=80" alt="About FeedTan Charity" class="rounded-3xl shadow-2xl">
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-6 shadow-xl border border-emerald-100">
                            <div class="flex items-center gap-4">
                                <div class="bg-emerald-100 rounded-full p-3">
                                    <i class="ph-bold ph-seedling text-emerald-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">501(c)(3) Certified</div>
                                    <div class="text-sm text-slate-600">Tax Deductible</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Our Mission</span>
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Growing Hope, Feeding Futures</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        We believe that no one should go hungry. Our mission is to create sustainable food security solutions that empower communities to thrive for generations to come.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-12">
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-target text-emerald-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Vision</h3>
                        <p class="text-slate-600 leading-relaxed">A world where every community has access to nutritious food and the knowledge to sustain it for future generations.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-blue-100 to-blue-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-heart text-blue-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Values</h3>
                        <p class="text-slate-600 leading-relaxed">Compassion, sustainability, and community empowerment guide everything we do, ensuring lasting positive impact.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-purple-100 to-purple-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-rocket text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Impact</h3>
                        <p class="text-slate-600 leading-relaxed">Through sustainable programs and community partnerships, we're creating lasting change in food security.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-32 bg-gradient-to-br from-slate-50 to-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Leadership Team</span>
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Passionate Leaders</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Meet the dedicated individuals driving our mission forward with expertise, compassion, and unwavering commitment.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-261a263d2c9a?auto=format&fit=crop&w=200&q=80" alt="Sarah Johnson" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Sarah Johnson</h3>
                        <p class="text-emerald-600 font-semibold mb-4">Executive Director</p>
                        <p class="text-slate-600 text-sm leading-relaxed">15+ years in nonprofit management and sustainable development.</p>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80" alt="Michael Chen" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Michael Chen</h3>
                        <p class="text-emerald-600 font-semibold mb-4">Program Director</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Expert in community outreach and sustainable agriculture programs.</p>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c3c6d39f965?auto=format&fit=crop&w=200&q=80" alt="Emily Rodriguez" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Emily Rodriguez</h3>
                        <p class="text-emerald-600 font-semibold mb-4">Operations Manager</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Specializing in logistics and food distribution systems.</p>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center">
                        <img src="https://images.unsplash.com/photo-1472099645215-5a1b5a9c1a9a?auto=format&fit=crop&w=200&q=80" alt="David Kim" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">David Kim</h3>
                        <p class="text-emerald-600 font-semibold mb-4">Development Director</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Focus on partnerships and sustainable growth strategies.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Timeline -->
        <section class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Our Journey</span>
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">15 Years of Impact</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        From a small community initiative to a nationwide movement, our journey has been marked by growth, learning, and countless lives touched.
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-emerald-200 to-emerald-600"></div>
                    
                    <div class="space-y-16">
                        <div class="flex items-center gap-8">
                            <div class="w-1/2 text-right pr-8">
                                <div class="text-3xl font-black text-emerald-600 mb-2">2009</div>
                                <h3 class="text-xl font-bold text-slate-900 mb-2">Founded</h3>
                                <p class="text-slate-600">Started as a small community garden initiative with just 5 volunteers.</p>
                            </div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-emerald-100 rounded-2xl p-6">
                                    <p class="text-emerald-700 font-semibold">First community garden established, serving 50 families monthly.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-8">
                            <div class="w-1/2 text-right pr-8">
                                <div class="text-3xl font-black text-emerald-600 mb-2">2015</div>
                                <h3 class="text-xl font-bold text-slate-900 mb-2">Expansion</h3>
                                <p class="text-slate-600">Expanded to 10 communities and launched school nutrition programs.</p>
                            </div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-blue-100 rounded-2xl p-6">
                                    <p class="text-blue-700 font-semibold">Reached 1,000+ children with daily nutrition programs.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-8">
                            <div class="w-1/2 text-right pr-8">
                                <div class="text-3xl font-black text-emerald-600 mb-2">2020</div>
                                <h3 class="text-xl font-bold text-slate-900 mb-2">Innovation</h3>
                                <p class="text-slate-600">Launched sustainable agriculture training and mobile food units.</p>
                            </div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-purple-100 rounded-2xl p-6">
                                    <p class="text-purple-700 font-semibold">Introduced tech-driven solutions for food distribution.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-8">
                            <div class="w-1/2 text-right pr-8">
                                <div class="text-3xl font-black text-emerald-600 mb-2">2024</div>
                                <h3 class="text-xl font-bold text-slate-900 mb-2">Today</h3>
                                <p class="text-slate-600">Serving 50+ communities with 1,200+ volunteers nationwide.</p>
                            </div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-orange-100 rounded-2xl p-6">
                                    <p class="text-orange-700 font-semibold">125,000+ meals served and growing every day.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
