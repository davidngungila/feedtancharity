<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>FeedTan Charity — Growing Hope, Feeding Futures</title>

        <link rel="icon" href="http://127.0.0.1:8000/favicon.ico">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <link rel="preload" as="style" href="http://127.0.0.1:8000/build/assets/app-Otcsf6Qp.css" /><link rel="modulepreload" as="script" href="http://127.0.0.1:8000/build/assets/app-BuG9aa18.js" /><link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/app-Otcsf6Qp.css" /><script type="module" src="http://127.0.0.1:8000/build/assets/app-BuG9aa18.js"></script>
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
        </style>
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        <nav class="fixed top-0 w-full z-50 glass border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
                <a href="http://127.0.0.1:8000" class="flex items-center gap-3 group/logo">
                    <div class="h-14 w-14 rounded-2xl object-contain bg-gradient-to-br from-emerald-500 to-emerald-600 p-3 transition-transform group-hover/logo:scale-105">
                        <i class="ph-bold ph-seedling text-white text-2xl"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-black tracking-tighter text-slate-900 leading-none">FeedTan</span>
                        <span class="text-xs font-bold text-slate-500 leading-none mt-1">Growing Hope, Feeding Futures</span>
                    </div>
                </a>

                <div class="hidden lg:flex items-center gap-10">
                    <a href="#home" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Home</a>

                    <div class="relative group py-8">
                        <a href="#campaigns" class="nav-link font-bold hover:text-emerald-600 transition-colors flex items-center gap-1">
                            Campaigns <i class="ph ph-caret-down text-xs transition-transform group-hover:rotate-180"></i>
                        </a>
                        <div class="mega-menu absolute top-full left-0 w-[600px] bg-white rounded-[2rem] shadow-2xl border border-slate-100 p-8 z-50">
                            <div class="grid grid-cols-2 gap-8">
                                <div>
                                    <h4 class="text-xs font-black uppercase tracking-widest text-emerald-600 mb-6">Active Campaigns</h4>
                                    <div class="space-y-4">
                                        <a href="#campaigns" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-emerald-50 transition-all">
                                            <div class="w-12 h-12 rounded-xl overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover" alt="School Nutrition">
                                            </div>
                                            <div>
                                                <p class="font-bold text-slate-900 group-hover/item:text-emerald-700">School Nutrition</p>
                                                <p class="text-xs text-slate-500">Daily meals for children</p>
                                            </div>
                                        </a>
                                        <a href="#campaigns" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-emerald-50 transition-all">
                                            <div class="w-12 h-12 rounded-xl overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1556761175-129418cb2dfe?auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover" alt="Emergency Relief">
                                            </div>
                                            <div>
                                                <p class="font-bold text-slate-900 group-hover/item:text-emerald-700">Emergency Relief</p>
                                                <p class="text-xs text-slate-500">Crisis response fund</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xs font-black uppercase tracking-widest text-emerald-600 mb-6">Get Involved</h4>
                                    <div class="space-y-4">
                                        <a href="#volunteer" class="flex items-center gap-3 text-slate-700 hover:text-emerald-600 font-bold group/sub transition-colors">
                                            <i class="ph ph-users text-xl opacity-50 group-hover/sub:opacity-100"></i> Volunteer
                                        </a>
                                        <a href="#campaigns" class="flex items-center gap-3 text-slate-700 hover:text-emerald-600 font-bold group/sub transition-colors">
                                            <i class="ph ph-hand-heart text-xl opacity-50 group-hover/sub:opacity-100"></i> Donate
                                        </a>
                                        <a href="#about" class="flex items-center gap-3 text-emerald-600 hover:text-emerald-700 font-bold group/sub transition-colors">
                                            <i class="ph-bold ph-calendar-plus text-xl"></i> Learn More
                                        </a>
                                    </div>
                                    <div class="mt-8 pt-6 border-t border-slate-50">
                                        <a href="#campaigns" class="text-sm font-black text-emerald-600 flex items-center gap-2 hover:gap-3 transition-all">
                                            Explore All Campaigns <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#about" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">About</a>
                    <a href="#impact" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Impact</a>
                    <a href="#volunteer" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Volunteer</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="#campaigns" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-slate-700 bg-white border border-slate-200 px-5 py-2.5 rounded-full hover:bg-slate-50 transition-all">Donate</a>
                    <a href="#volunteer" class="hidden md:inline-flex items-center gap-2 text-sm font-semibold text-white bg-emerald-600 px-6 py-2.5 rounded-full hover:bg-emerald-700 shadow-lg shadow-emerald-600/20 transition-all">Join Us</a>

                    <button @click="mobileMenuOpen = true" class="lg:hidden w-12 h-12 bg-slate-50 text-slate-900 rounded-2xl flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-all" type="button">
                        <i class="ph ph-list text-2xl"></i>
                    </button>
                </div>
            </div>
            <div class="nav-border-animate"></div>
        </nav>

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
                        <a href="#home" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Home</a>

                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-2xl font-serif font-black text-slate-900" type="button">
                                Campaigns <i class="ph ph-caret-down text-lg transition-transform" :class="open ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="open" x-transition class="pl-4 mt-4 space-y-4">
                                <a href="#campaigns" class="block text-sm font-bold text-slate-500 hover:text-emerald-600">School Nutrition</a>
                                <a href="#campaigns" class="block text-sm font-bold text-slate-500 hover:text-emerald-600">Emergency Relief</a>
                                <a href="#campaigns" class="block text-sm font-bold text-slate-500 hover:text-emerald-600">Community Gardens</a>
                            </div>
                        </div>

                        <a href="#about" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">About</a>
                        <a href="#impact" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Impact</a>
                        <a href="#volunteer" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Volunteer</a>
                    </div>

                    <div class="mt-20 pt-10 border-t border-slate-100">
                        <div class="bg-emerald-950 p-8 rounded-[2.5rem] text-white">
                            <h4 class="text-lg font-serif font-black mb-2">Ready to help?</h4>
                            <p class="text-sm text-emerald-100/60 mb-8 leading-relaxed">Join our mission to grow hope and feed futures.</p>
                            <a href="#campaigns" class="w-full inline-block py-4 bg-emerald-500 text-white font-black text-xs uppercase tracking-widest text-center rounded-2xl shadow-xl shadow-emerald-500/20">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="pt-24 lg:pt-28">

    <section class="relative h-[calc(100vh-6rem)] min-h-[620px] overflow-hidden rounded-none">
                <div class="swiper heroSwiper h-full w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=2200&q=80" alt="Growing Hope" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-emerald-600/20 text-emerald-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-emerald-600/30">FeedTan Charity</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Grow hope with <span class="text-emerald-400">sustainable solutions</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Nourishing communities, cultivating futures, and planting seeds of change through sustainable food security initiatives.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="#campaigns" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all text-center">Donate Now</a>
                                        <a href="#volunteer" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Join Our Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://images.unsplash.com/photo-1556761175-129418cb2dfe?auto=format&fit=crop&w=2200&q=80" alt="Community Gardens" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-emerald-600/20 text-emerald-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-emerald-600/30">Community Gardens</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Cultivating <span class="text-emerald-400">food security</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Teaching sustainable agriculture and creating local food sources for lasting community impact.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="#campaigns" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all text-center">Support Gardens</a>
                                        <a href="#volunteer" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?auto=format&fit=crop&w=2200&q=80" alt="School Nutrition" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-emerald-600/20 text-emerald-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-emerald-600/30">School Nutrition</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Nourishing <span class="text-emerald-400">young minds</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Providing daily nutritious meals to ensure children can focus on learning and growing.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="#campaigns" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all text-center">Feed a Child</a>
                                        <a href="#about" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-10 right-10 z-20 hidden sm:flex gap-4">
                        <button class="swiper-prev w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-emerald-600 hover:border-emerald-600 transition-all backdrop-blur-md" type="button" aria-label="Previous">
                            <i class="ph ph-caret-left text-2xl"></i>
                        </button>
                        <button class="swiper-next w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-emerald-600 hover:border-emerald-600 transition-all backdrop-blur-md" type="button" aria-label="Next">
                            <i class="ph ph-caret-right text-2xl"></i>
                        </button>
                    </div>

                    <div class="swiper-pagination !bottom-10 !left-6 !text-left !w-auto"></div>
                </div>
            </section>

            <style>
                .swiper-pagination-bullet { width: 12px; height: 12px; background: rgba(255,255,255,0.3); opacity: 1; }
                .swiper-pagination-bullet-active { background: #10b981; width: 30px; border-radius: 6px; }
                .swiper-slide-active .slide-content { transform: translateY(0); opacity: 1; }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const el = document.querySelector('.heroSwiper');
                    if (!el || typeof Swiper === 'undefined') return;

                    new Swiper(el, {
                        loop: true,
                        speed: 1000,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-next',
                            prevEl: '.swiper-prev',
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: true
                        }
                    });
                });
            </script>

            <section class="relative z-20 -mt-10 max-w-5xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 bg-white rounded-2xl shadow-2xl p-8 border border-slate-100 divide-x divide-slate-100">
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">2009</h3>
                        <p class="text-sm text-slate-500 mt-2">Founded</p>
                    </div>
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">125K+</h3>
                        <p class="text-sm text-slate-500 mt-2">Meals Served</p>
                    </div>
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">3.5K+</h3>
                        <p class="text-sm text-slate-500 mt-2">Families Helped</p>
                    </div>
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">1.2K+</h3>
                        <p class="text-sm text-slate-500 mt-2">Volunteers</p>
                    </div>
                </div>
            </section>

    <section class="py-32 bg-white" id="about">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid gap-12 lg:grid-cols-12 lg:items-start">
                        <div class="lg:col-span-5">
                            <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Our Mission</span>
                            <h2 class="text-4xl font-serif text-slate-900 font-bold">Cultivating sustainable change</h2>
                            <p class="mt-6 text-slate-500 leading-relaxed">For over 15 years, we've been dedicated to fighting hunger and growing hope through sustainable community initiatives. Our approach combines immediate relief with long-term solutions.</p>

                            <div class="mt-10 rounded-[2.5rem] border border-slate-100 bg-slate-50 p-10">
                                <div class="text-sm font-bold text-slate-900">Our Impact</div>
                                <div class="mt-6 grid gap-3 text-sm text-slate-700">
                                    <div class="flex items-center justify-between rounded-2xl bg-white px-5 py-4"><span class="text-slate-500">Communities Reached</span><span class="font-black text-slate-900">50+</span></div>
                                    <div class="flex items-center justify-between rounded-2xl bg-white px-5 py-4"><span class="text-slate-500">School Programs</span><span class="font-black text-slate-900">25</span></div>
                                    <div class="flex items-center justify-between rounded-2xl bg-white px-5 py-4"><span class="text-slate-500">Gardens Established</span><span class="font-black text-emerald-700">100+</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-7">
                            <div class="rounded-[2.5rem] border border-slate-100 bg-white shadow-sm overflow-hidden">
                                <div class="p-10">
                                    <div class="text-xs font-black uppercase tracking-widest text-emerald-600">Our Approach</div>
                                    <h3 class="mt-4 text-3xl font-serif font-bold text-slate-900">Sustainable solutions for lasting impact</h3>

                                    <div class="mt-10 grid gap-8">
                                        <div class="flex gap-6">
                                            <div class="w-16 h-16 rounded-2xl bg-emerald-600/15 text-emerald-600 flex-shrink-0 flex items-center justify-center text-2xl">
                                                <i class="ph-bold ph-seedling"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-bold text-slate-900 mb-2">Sustainable Agriculture</h4>
                                                <p class="text-slate-600 leading-relaxed">We promote sustainable farming practices and community gardens to ensure long-term food security.</p>
                                            </div>
                                        </div>

                                        <div class="flex gap-6">
                                            <div class="w-16 h-16 rounded-2xl bg-emerald-600/15 text-emerald-600 flex-shrink-0 flex items-center justify-center text-2xl">
                                                <i class="ph-bold ph-graduation-cap"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-bold text-slate-900 mb-2">Education & Training</h4>
                                                <p class="text-slate-600 leading-relaxed">Teaching sustainable practices and nutrition education for lasting community impact.</p>
                                            </div>
                                        </div>

                                        <div class="flex gap-6">
                                            <div class="w-16 h-16 rounded-2xl bg-emerald-600/15 text-emerald-600 flex-shrink-0 flex items-center justify-center text-2xl">
                                                <i class="ph-bold ph-users-three"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-bold text-slate-900 mb-2">Community Empowerment</h4>
                                                <p class="text-slate-600 leading-relaxed">Building strong, self-sufficient communities through education and mutual support.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10 grid gap-3 sm:grid-cols-2">
                                        <a href="#campaigns" class="rounded-2xl border border-slate-200 bg-white px-6 py-4 text-center text-sm font-bold text-slate-900 hover:bg-slate-50">Support Campaigns</a>
                                        <a href="#volunteer" class="rounded-2xl bg-emerald-600 px-6 py-4 text-center text-sm font-bold text-white hover:bg-emerald-700">Volunteer With Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <section class="py-32 bg-slate-50" id="campaigns">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
                        <div class="max-w-2xl">
                            <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Active Campaigns</span>
                            <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Growing impact together</h2>
                            <p class="text-slate-500">Join our current initiatives and help us plant seeds of hope in communities that need it most.</p>
                        </div>
                        <a href="#campaigns" class="text-emerald-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">View All Campaigns <i class="ph ph-arrow-right"></i></a>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=600&q=80" alt="School Nutrition" class="w-full h-56 object-cover">
                                <div class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 rounded-full text-sm font-semibold">75% Funded</div>
                            </div>
                            <div class="p-8">
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
                                </div>
                                
                                <a href="#campaigns" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-emerald-700 transition-all text-center">
                                    <i class="ph ph-hand-heart mr-2"></i> Support This Campaign
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1556761175-129418cb2dfe?auto=format&fit=crop&w=600&q=80" alt="Emergency Relief" class="w-full h-56 object-cover">
                                <div class="absolute top-4 left-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">45% Funded</div>
                            </div>
                            <div class="p-8">
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
                                </div>
                                
                                <a href="#campaigns" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-emerald-700 transition-all text-center">
                                    <i class="ph ph-hand-heart mr-2"></i> Support This Campaign
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?auto=format&fit=crop&w=600&q=80" alt="Community Gardens" class="w-full h-56 object-cover">
                                <div class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 rounded-full text-sm font-semibold">90% Funded</div>
                            </div>
                            <div class="p-8">
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
                                </div>
                                
                                <a href="#campaigns" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-emerald-700 transition-all text-center">
                                    <i class="ph ph-hand-heart mr-2"></i> Support This Campaign
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <section class="py-32 bg-gradient-to-br from-emerald-600 to-emerald-700 text-white" id="impact">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <div class="inline-block bg-white/20 backdrop-blur rounded-full px-4 py-2 mb-4">
                            <span class="text-emerald-100 font-semibold">Our Impact</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            Seeds of <span class="text-emerald-200">Change</span>
                        </h2>
                        <p class="text-xl text-emerald-50 max-w-3xl mx-auto">
                            Every number represents a life touched, a family fed, and a community strengthened.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 mb-4">
                                <div class="text-4xl font-bold text-white mb-2">125,000</div>
                            </div>
                            <div class="text-emerald-100 font-medium">Meals Served</div>
                        </div>
                        <div class="text-center">
                            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 mb-4">
                                <div class="text-4xl font-bold text-white mb-2">3,500</div>
                            </div>
                            <div class="text-emerald-100 font-medium">Families Helped</div>
                        </div>
                        <div class="text-center">
                            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 mb-4">
                                <div class="text-4xl font-bold text-white mb-2">1,200</div>
                            </div>
                            <div class="text-emerald-100 font-medium">Volunteers</div>
                        </div>
                        <div class="text-center">
                            <div class="bg-white/10 backdrop-blur rounded-2xl p-6 mb-4">
                                <div class="text-4xl font-bold text-white mb-2">15</div>
                            </div>
                            <div class="text-emerald-100 font-medium">Active Campaigns</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-32 bg-white" id="volunteer">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
                        <div class="max-w-2xl">
                            <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Join Our Team</span>
                            <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Become a volunteer</h2>
                            <p class="text-slate-500">Join our growing community of dedicated volunteers and help us cultivate lasting change.</p>
                        </div>
                        <a href="#volunteer" class="text-emerald-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">Sign Up Today <i class="ph ph-arrow-right"></i></a>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-600/15 text-emerald-600 flex items-center justify-center text-2xl mb-6">
                                <i class="ph ph-clock"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Flexible Scheduling</h3>
                            <p class="text-slate-600 leading-relaxed">Choose hours that work perfectly with your lifestyle and commitments.</p>
                        </div>
                        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-600/15 text-emerald-600 flex items-center justify-center text-2xl mb-6">
                                <i class="ph ph-heart"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Meaningful Impact</h3>
                            <p class="text-slate-600 leading-relaxed">Make a real, tangible difference in people's lives every day.</p>
                        </div>
                        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-600/15 text-emerald-600 flex items-center justify-center text-2xl mb-6">
                                <i class="ph ph-users"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Community Building</h3>
                            <p class="text-slate-600 leading-relaxed">Connect with passionate, like-minded individuals.</p>
                        </div>
                        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-600/15 text-emerald-600 flex items-center justify-center text-2xl mb-6">
                                <i class="ph ph-graduation-cap"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-3">Learn & Grow</h3>
                            <p class="text-slate-600 leading-relaxed">Develop new skills while making a positive impact.</p>
                        </div>
                    </div>

                    <div class="mt-16 grid gap-12 lg:grid-cols-12 lg:items-start">
                        <div class="lg:col-span-5">
                            <div class="rounded-[2.5rem] border border-slate-100 bg-gradient-to-br from-emerald-50 to-white p-10">
                                <h3 class="text-2xl font-bold mb-6 text-slate-900">Volunteer Application</h3>
                                <form class="space-y-5">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                                        <input type="text" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                                        <input type="email" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                                        <input type="tel" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Areas of Interest</label>
                                        <select class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition">
                                            <option>Sustainable Agriculture</option>
                                            <option>Food Preparation & Distribution</option>
                                            <option>Community Outreach</option>
                                            <option>Education & Training</option>
                                            <option>Administrative Support</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="w-full bg-emerald-600 text-white px-6 py-4 rounded-xl font-semibold text-lg hover:bg-emerald-700 transition-all">
                                        <i class="ph ph-paper-plane-right mr-2"></i> Submit Application
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="lg:col-span-7">
                            <div class="space-y-8">
                                <div class="flex gap-6">
                                    <div class="w-16 h-16 rounded-2xl bg-emerald-600/20 text-emerald-500 flex-shrink-0 flex items-center justify-center text-3xl">
                                        <i class="ph-bold ph-shield-check"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-4">Safe & Supportive Environment</h4>
                                        <p class="text-slate-600 leading-relaxed">We provide proper training, safety guidelines, and a supportive community for all our volunteers.</p>
                                    </div>
                                </div>

                                <div class="flex gap-6">
                                    <div class="w-16 h-16 rounded-2xl bg-emerald-600/20 text-emerald-500 flex-shrink-0 flex items-center justify-center text-3xl">
                                        <i class="ph-bold ph-globe-hemisphere-west"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-4">Global Impact</h4>
                                        <p class="text-slate-600 leading-relaxed">Join a movement that's making a difference in communities around the world.</p>
                                    </div>
                                </div>

                                <div class="flex gap-6">
                                    <div class="w-16 h-16 rounded-2xl bg-emerald-600/20 text-emerald-500 flex-shrink-0 flex items-center justify-center text-3xl">
                                        <i class="ph-bold ph-award"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-4">Recognition & Growth</h4>
                                        <p class="text-slate-600 leading-relaxed">Receive certificates, develop new skills, and build your resume while helping others.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-24 bg-emerald-600">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Ready to grow hope with us?</h2>
                    <p class="text-emerald-100 text-xl max-w-2xl mx-auto mb-12">Join our mission today and help us plant seeds of change that will flourish for generations.</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="#campaigns" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Donate Now</a>
                        <a href="#volunteer" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-arrow-right text-3xl"></i> Volunteer With Us
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-slate-900 text-white pt-20 pb-10">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <div class="col-span-1 md:col-span-1 lg:col-span-1">
                    <a href="#home" class="flex items-center gap-3 mb-6">
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
                        <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#campaigns" class="hover:text-white transition-colors">Campaigns</a></li>
                        <li><a href="#impact" class="hover:text-white transition-colors">Our Impact</a></li>
                        <li><a href="#volunteer" class="hover:text-white transition-colors">Volunteer</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-6 text-emerald-500">Get Involved</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="#campaigns" class="hover:text-white transition-colors">Donate Monthly</a></li>
                        <li><a href="#campaigns" class="hover:text-white transition-colors">Corporate Partnerships</a></li>
                        <li><a href="#campaigns" class="hover:text-white transition-colors">Fundraising Events</a></li>
                        <li><a href="#volunteer" class="hover:text-white transition-colors">Volunteer Programs</a></li>
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
                        <a href="#" class="hover:text-emerald-500 transition-colors">Terms & Conditions</a>
                        <a href="#" class="hover:text-emerald-500 transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-emerald-500 transition-colors">Cookies Policy</a>
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
