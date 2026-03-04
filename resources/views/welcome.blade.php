<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>FeedTan Community Microfinance Group — Growing Hope, Feeding Futures</title>

        <link rel="icon" href="/favicon.ico">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
        </style>
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        @include('components.header')
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
                                        <a href="/campaigns" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all text-center">Donate Now</a>
                                        <a href="/get-involved" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Join Our Team</a>
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
                                        <a href="{{ getSiteUrl('campaigns') }}" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all text-center">Support Gardens</a>
                                        <a href="{{ getSiteUrl('get-involved') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Community Gardens" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-emerald-600/20 text-emerald-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-emerald-600/30">School Nutrition</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Nourishing <span class="text-emerald-400">young minds</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Providing daily nutritious meals to ensure children can focus on learning and growing.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="{{ getSiteUrl('campaigns') }}" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all text-center">Feed a Child</a>
                                        <a href="{{ getSiteUrl('about') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">About Us</a>
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
                                        <a href="{{ getSiteUrl('campaigns') }}" class="rounded-2xl border border-slate-200 bg-white px-6 py-4 text-center text-sm font-bold text-slate-900 hover:bg-slate-50">Support Campaigns</a>
                                        <a href="{{ getSiteUrl('get-involved') }}" class="rounded-2xl bg-emerald-600 px-6 py-4 text-center text-sm font-bold text-white hover:bg-emerald-700">Volunteer With Us</a>
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
                        <a href="{{ getSiteUrl('campaigns') }}" class="text-emerald-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">View All Campaigns <i class="ph ph-arrow-right"></i></a>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="School Nutrition" class="w-full h-56 object-cover">
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
                                
                                <a href="{{ getSiteUrl('campaigns') }}" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-emerald-700 transition-all text-center">
                                    <i class="ph ph-hand-heart mr-2"></i> Support This Campaign
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Emergency Relief" class="w-full h-56 object-cover">
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
                                
                                <a href="{{ getSiteUrl('campaigns') }}" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-emerald-700 transition-all text-center">
                                    <i class="ph ph-hand-heart mr-2"></i> Support This Campaign
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Community Gardens" class="w-full h-56 object-cover">
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
                                
                                <a href="{{ getSiteUrl('campaigns') }}" class="w-full bg-emerald-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-emerald-700 transition-all text-center">
                                    <i class="ph ph-hand-heart mr-2"></i> Support This Campaign
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 10 Year Anniversary Celebration -->
            <section class="py-24 bg-gradient-to-br from-amber-50 via-orange-50 to-emerald-50 relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23f59e0b\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>

                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center mb-16">
                        <span class="inline-block px-4 py-2 bg-amber-100 text-amber-700 rounded-full text-sm font-bold tracking-widest uppercase mb-6">10 Year Milestone</span>
                        <h2 class="text-4xl md:text-6xl font-serif text-slate-900 mb-8 font-bold">Celebrating a Decade of <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-emerald-600">Growing Hope</span></h2>
                        <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed mb-12">
                            For 10 years, FeedTan Community Microfinance Group has been transforming lives and building sustainable communities. Join us as we celebrate this incredible milestone and look forward to the next decade of impact.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8 mb-16">
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto mb-6 bg-white rounded-full flex items-center justify-center shadow-xl">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772610231/ANIVERSERY-removebg-preview_wixulu.png" alt="10 Years" class="w-24 h-24 object-contain">
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">10 Years of Service</h3>
                            <p class="text-slate-600">A decade of commitment to community development and sustainable growth</p>
                        </div>

                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-full flex items-center justify-center">
                                <i class="ph-bold ph-users-three text-emerald-600 text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Thousands of Lives</h3>
                            <p class="text-slate-600">Touching communities and transforming futures through microfinance</p>
                        </div>

                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center">
                                <i class="ph-bold ph-plant text-blue-600 text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Sustainable Growth</h3>
                            <p class="text-slate-600">Building lasting foundations for community prosperity</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="inline-flex items-center gap-4 px-8 py-4 bg-gradient-to-r from-amber-500 to-emerald-600 rounded-full shadow-2xl">
                            <i class="ph-bold ph-confetti text-white text-2xl"></i>
                            <span class="text-white font-bold text-lg">Join Our 10 Year Celebration</span>
                            <i class="ph-bold ph-confetti text-white text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Floating Celebration Elements -->
                <div class="absolute top-10 left-10 text-4xl animate-bounce">🎉</div>
                <div class="absolute top-20 right-20 text-3xl animate-pulse">🎊</div>
                <div class="absolute bottom-10 left-1/4 text-3xl animate-bounce" style="animation-delay: 0.5s;">🎈</div>
                <div class="absolute bottom-20 right-1/4 text-4xl animate-pulse" style="animation-delay: 1s;">🎉</div>
            </section>

            
            <section class="py-24 bg-emerald-600">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Ready to grow hope with us?</h2>
                    <p class="text-emerald-100 text-xl max-w-2xl mx-auto mb-12">Join our mission today and help us plant seeds of change that will flourish for generations.</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ getSiteUrl('campaigns') }}" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Donate Now</a>
                        <a href="{{ getSiteUrl('about') }}" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-arrow-right text-3xl"></i> Learn More
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-slate-900 text-white pt-20 pb-10">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <div class="col-span-1 md:col-span-1 lg:col-span-1">
                    <a href="{{ getSiteUrl() }}" class="flex items-center gap-3 mb-6">
                        <div class="h-16 w-16 rounded-2xl object-contain bg-white p-3 shadow-lg">
                            <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772610231/ANIVERSERY-removebg-preview_wixulu.png" alt="FeedTan Logo" class="w-full h-full object-contain">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-lg font-black tracking-tighter text-white leading-none">FeedTan</span>
                            <span class="text-xs font-bold text-slate-400 leading-none mt-1">Community Microfinance Group</span>
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
