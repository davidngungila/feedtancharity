<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false, donationType: 'one-time', amount: 50, customAmount: '' }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - FeedTan Charity | Make a Difference Today</title>
    <meta name="description" content="Support FeedTan Charity's mission with a secure donation. Help provide nutritious meals and sustainable food solutions to communities in need.">
    
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
        
        .amount-button {
            transition: all 0.3s ease;
        }
        
        .amount-button:hover {
            border-color: #10b981;
            color: #10b981;
            transform: translateY(-2px);
        }
        
        .amount-button.active {
            background: #10b981;
            color: white;
            border-color: #10b981;
        }
        
        .donation-type {
            transition: all 0.3s ease;
        }
        
        .donation-type:hover {
            border-color: #10b981;
        }
        
        .donation-type.active {
            background: #10b981;
            color: white;
            border-color: #10b981;
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
                <a href="/impact" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Impact</a>
                <a href="/get-involved" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Get Involved</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="/donate" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-white bg-emerald-600 px-5 py-2.5 rounded-full hover:bg-emerald-700 shadow-lg shadow-emerald-600/20 transition-all">Donate</a>
                <a href="/get-involved" class="hidden md:inline-flex items-center gap-2 text-sm font-semibold text-slate-700 bg-white border border-slate-200 px-6 py-2.5 rounded-full hover:bg-slate-50 transition-all">Join Us</a>

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
            
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="fade-in">
                        <span class="text-emerald-100 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Make a Difference</span>
                        <h1 class="text-4xl md:text-6xl font-serif text-white mb-8 font-bold leading-tight">
                            Your <span class="text-emerald-200">Generosity</span> Changes Lives
                        </h1>
                        <p class="text-xl text-emerald-100 mb-8 leading-relaxed">
                            Every donation helps us provide nutritious meals, sustainable agriculture, and hope to communities in need.
                        </p>
                        
                        <div class="flex items-center gap-4 mb-8">
                            <div class="flex items-center gap-2">
                                <i class="ph-bold ph-shield-check text-emerald-200 text-xl"></i>
                                <span class="text-emerald-100 font-semibold">Secure & Tax Deductible</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="ph-bold ph-heart text-emerald-200 text-xl"></i>
                                <span class="text-emerald-100 font-semibold">501(c)(3) Certified</span>
                            </div>
                        </div>
                        
                        <a href="#donate-form" class="inline-flex items-center gap-3 bg-white text-emerald-600 px-8 py-4 rounded-full font-bold text-lg shadow-xl hover:scale-105 transition-all">
                            <span>Donate Now</span>
                            <i class="ph ph-arrow-right text-xl"></i>
                        </a>
                    </div>
                    
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1559027984-fd8e4497b0d?auto=format&fit=crop&w=800&q=80" alt="Donate to FeedTan Charity" class="rounded-3xl shadow-2xl">
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-6 shadow-xl border border-emerald-100">
                            <div class="flex items-center gap-4">
                                <div class="bg-emerald-100 rounded-full p-3">
                                    <i class="ph-bold ph-hand-heart text-emerald-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">Impact Calculator</div>
                                    <div class="text-sm text-slate-600">$50 feeds 10 children for a week</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Stats -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">Your Impact at a Glance</h2>
                    <p class="text-slate-600">See how your generosity creates real change</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-3xl p-8">
                        <div class="text-4xl font-black text-emerald-600 mb-2">$25</div>
                        <div class="text-sm font-semibold text-slate-700">Provides 50 Meals</div>
                    </div>
                    <div class="text-center bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-8">
                        <div class="text-4xl font-black text-blue-600 mb-2">$50</div>
                        <div class="text-sm font-semibold text-slate-700">Seeds a Garden</div>
                    </div>
                    <div class="text-center bg-gradient-to-br from-purple-50 to-purple-100 rounded-3xl p-8">
                        <div class="text-4xl font-black text-purple-600 mb-2">$100</div>
                        <div class="text-sm font-semibold text-slate-700">Clean Water for 1 Family</div>
                    </div>
                    <div class="text-center bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-8">
                        <div class="text-4xl font-black text-orange-600 mb-2">$500</div>
                        <div class="text-sm font-semibold text-slate-700">Emergency Relief Kit</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donation Form -->
        <section id="donate-form" class="py-32 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6">
                <div class="bg-white rounded-3xl shadow-2xl p-12">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">Choose Your Donation</h2>
                        <p class="text-slate-600">Every contribution makes a meaningful difference</p>
                    </div>

                    <!-- Donation Type -->
                    <div class="mb-12">
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Donation Type</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <button @click="donationType = 'one-time'" :class="donationType === 'one-time' ? 'bg-emerald-600 text-white' : 'bg-white text-slate-700 border border-slate-200'" class="p-6 rounded-2xl font-semibold transition-all">
                                <i class="ph-bold ph-hand-heart text-2xl mb-3"></i>
                                <div class="text-lg font-bold">One-Time Donation</div>
                                <div class="text-sm opacity-75">Make a single gift today</div>
                            </button>
                            <button @click="donationType = 'monthly'" :class="donationType === 'monthly' ? 'bg-emerald-600 text-white' : 'bg-white text-slate-700 border border-slate-200'" class="p-6 rounded-2xl font-semibold transition-all">
                                <i class="ph-bold ph-calendar-check text-2xl mb-3"></i>
                                <div class="text-lg font-bold">Monthly Giving</div>
                                <div class="text-sm opacity-75">Provide sustained support</div>
                            </button>
                        </div>
                    </div>

                    <!-- Amount Selection -->
                    <div class="mb-12">
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Select Amount</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                            <button @click="amount = 25" :class="amount === 25 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                $25
                            </button>
                            <button @click="amount = 50" :class="amount === 50 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                $50
                            </button>
                            <button @click="amount = 100" :class="amount === 100 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                $100
                            </button>
                            <button @click="amount = 250" :class="amount === 250 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                $250
                            </button>
                        </div>
                        
                        <div class="relative">
                            <input x-model="customAmount" type="number" placeholder="Enter custom amount" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl text-lg font-semibold focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all">
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                                <i class="ph-bold ph-currency-dollar text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Donation Options -->
                    <div class="mb-12">
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Designate Your Gift</h3>
                        <div class="space-y-4">
                            <label class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl cursor-pointer hover:bg-emerald-50 transition-colors">
                                <input type="radio" name="designation" value="general" class="text-emerald-600" checked>
                                <div>
                                    <div class="font-semibold text-slate-900">General Fund</div>
                                    <div class="text-sm text-slate-600">Where needed most</div>
                                </div>
                            </label>
                            <label class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl cursor-pointer hover:bg-emerald-50 transition-colors">
                                <input type="radio" name="designation" value="nutrition" class="text-emerald-600">
                                <div>
                                    <div class="font-semibold text-slate-900">School Nutrition</div>
                                    <div class="text-sm text-slate-600">Feed hungry children</div>
                                </div>
                            </label>
                            <label class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl cursor-pointer hover:bg-emerald-50 transition-colors">
                                <input type="radio" name="designation" value="agriculture" class="text-emerald-600">
                                <div>
                                    <div class="font-semibold text-slate-900">Community Gardens</div>
                                    <div class="text-sm text-slate-600">Sustainable food sources</div>
                                </div>
                            </label>
                            <label class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl cursor-pointer hover:bg-emerald-50 transition-colors">
                                <input type="radio" name="designation" value="emergency" class="text-emerald-600">
                                <div>
                                    <div class="font-semibold text-slate-900">Emergency Relief</div>
                                    <div class="text-sm text-slate-600">Crisis response fund</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="mb-12">
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Your Information</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Full Name *</label>
                                <input type="text" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Email Address *</label>
                                <input type="email" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Phone Number</label>
                                <input type="tel" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="+1 (555) 123-4567">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Address (Optional)</label>
                                <input type="text" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="123 Main St, City, State 12345">
                            </div>
                        </div>
                    </div>

                    <!-- Monthly Options (only show for monthly donations) -->
                    <div x-show="donationType === 'monthly'" x-transition class="mb-12">
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Monthly Giving Options</h3>
                        <div class="bg-emerald-50 rounded-xl p-6">
                            <label class="flex items-center gap-4 mb-4">
                                <input type="checkbox" class="text-emerald-600" checked>
                                <div>
                                    <div class="font-semibold text-slate-900">Automated Monthly Giving</div>
                                    <div class="text-sm text-slate-600">Continue your support automatically each month</div>
                                </div>
                            </label>
                            <label class="flex items-center gap-4">
                                <select class="px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all bg-white">
                                    <option>Process donation on 1st of each month</option>
                                    <option>Process donation on 15th of each month</option>
                                    <option>Process donation on last day of month</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="px-12 py-5 bg-gradient-to-r from-emerald-600 to-emerald-500 text-white font-bold rounded-full shadow-2xl hover:shadow-emerald-600/50 transition-all hover:scale-105 text-lg">
                            <i class="ph-bold ph-heart text-xl mr-3"></i>
                            Complete Your Donation
                        </button>
                        <p class="mt-6 text-sm text-slate-500">
                            <i class="ph ph-lock text-emerald-500"></i>
                            Your payment information is secure and encrypted. FeedTan Charity is a 501(c)(3) tax-exempt organization.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Other Ways to Give -->
        <section class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Other Ways to Give</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Explore additional ways to support our mission and make a lasting impact.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-bank text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Bank Transfer</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Direct bank transfers for larger donations</p>
                        <a href="/contact" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700">Learn More <i class="ph ph-arrow-right"></i></a>
                    </div>
                    
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-briefcase text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Corporate Matching</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Double your impact through employer programs</p>
                        <a href="/partners" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700">Learn More <i class="ph ph-arrow-right"></i></a>
                    </div>
                    
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-gift text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Stock & Securities</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Donate appreciated securities for tax benefits</p>
                        <a href="/contact" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700">Learn More <i class="ph ph-arrow-right"></i></a>
                    </div>
                    
                    <div class="text-center bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-calendar text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Planned Giving</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Include FeedTan in your estate planning</p>
                        <a href="/contact" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700">Learn More <i class="ph ph-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust Section -->
        <section class="py-24 bg-gradient-to-br from-emerald-50 to-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-serif font-bold text-slate-900 mb-8">Your Trust, Our Commitment</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        We're committed to transparency and responsible stewardship of every donation.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-12">
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-shield-check text-emerald-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Secure & Protected</h3>
                        <p class="text-slate-600 leading-relaxed">SSL encryption and PCI compliance protect your data</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-blue-100 to-blue-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-chart-line text-blue-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Full Transparency</h3>
                        <p class="text-slate-600 leading-relaxed">Annual reports and financial statements available</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-8 bg-gradient-to-br from-purple-100 to-purple-200 rounded-3xl flex items-center justify-center">
                            <i class="ph-bold ph-medal text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Top Rated</h3>
                        <p class="text-slate-600 leading-relaxed">4-star rating from Charity Navigator</p>
                    </div>
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
