<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false, activeTab: 'volunteer' }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Involved - FeedTan Charity | Join Our Mission</title>
    <meta name="description" content="Discover multiple ways to get involved with FeedTan Charity. Volunteer, donate, partner, or participate in events to help grow hope and feed futures.">
    
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
        
        .tab-button {
            transition: all 0.3s ease;
        }
        
        .tab-button:hover {
            border-color: #10b981;
            color: #10b981;
            transform: translateY(-2px);
        }
        
        .tab-button.active {
            background: #10b981;
            color: white;
            border-color: #10b981;
        }
        
        .opportunity-card {
            transition: all 0.3s ease;
        }
        
        .opportunity-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
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
                <a href="/impact" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Impact</a>
                <a href="/get-involved" class="nav-link font-bold text-emerald-600 transition-colors py-8">Get Involved</a>
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
                    <span class="text-emerald-100 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Get Involved</span>
                    <h1 class="text-4xl md:text-6xl font-serif text-white mb-8 font-bold leading-tight">
                        Be the <span class="text-emerald-200">Change</span> We Need
                    </h1>
                    <p class="text-xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
                        There are many ways to join our mission. Whether you have time to volunteer, resources to donate, or skills to share, your involvement makes a real difference.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="#opportunities" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Explore Opportunities</a>
                        <a href="/donate" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-heart text-3xl"></i> Quick Donate
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tab Navigation -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
                    <div>
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">Ways to Get Involved</h2>
                        <p class="text-slate-600">Choose how you want to make an impact</p>
                    </div>
                    
                    <div class="flex flex-wrap gap-3">
                        <button @click="activeTab = 'volunteer'" :class="activeTab === 'volunteer' ? 'active' : ''" class="tab-button px-6 py-3 bg-white border-2 border-slate-200 rounded-xl font-semibold text-slate-700">
                            <i class="ph-bold ph-users-three text-xl mb-2"></i>
                            <div>Volunteer</div>
                        </button>
                        <button @click="activeTab = 'donate'" :class="activeTab === 'donate' ? 'active' : ''" class="tab-button px-6 py-3 bg-white border-2 border-slate-200 rounded-xl font-semibold text-slate-700">
                            <i class="ph-bold ph-hand-heart text-xl mb-2"></i>
                            <div>Donate</div>
                        </button>
                        <button @click="activeTab = 'partner'" :class="activeTab === 'partner' ? 'active' : ''" class="tab-button px-6 py-3 bg-white border-2 border-slate-200 rounded-xl font-semibold text-slate-700">
                            <i class="ph-bold ph-handshake text-xl mb-2"></i>
                            <div>Partner</div>
                        </button>
                        <button @click="activeTab = 'events'" :class="activeTab === 'events' ? 'active' : ''" class="tab-button px-6 py-3 bg-white border-2 border-slate-200 rounded-xl font-semibold text-slate-700">
                            <i class="ph-bold ph-calendar text-xl mb-2"></i>
                            <div>Events</div>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Volunteer Section -->
        <section x-show="activeTab === 'volunteer'" class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Volunteer With Us</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Join our growing community of dedicated volunteers and help us cultivate lasting change through your time and skills.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-clock text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Flexible Scheduling</h3>
                        <p class="text-slate-600 leading-relaxed">Choose hours that work perfectly with your lifestyle and commitments.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                2-20 hours per week
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-heart text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Meaningful Impact</h3>
                        <p class="text-slate-600 leading-relaxed">Make a real, tangible difference in people's lives every day.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Direct community service
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-users text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Community Building</h3>
                        <p class="text-slate-600 leading-relaxed">Connect with passionate, like-minded individuals.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Team-based activities
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-graduation-cap text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Learn & Grow</h3>
                        <p class="text-slate-600 leading-relaxed">Develop new skills while making a positive impact.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Training provided
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-globe text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Remote Opportunities</h3>
                        <p class="text-slate-600 leading-relaxed">Virtual volunteering options for global contributors.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-green-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Online tasks available
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-red-100 to-red-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-star text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Recognition</h3>
                        <p class="text-slate-600 leading-relaxed">Certificates and appreciation for your service.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-red-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Service awards
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Volunteer Application -->
                <div class="max-w-4xl mx-auto">
                    <div class="bg-gradient-to-br from-emerald-50 to-white rounded-3xl shadow-2xl p-12">
                        <h3 class="text-2xl font-serif font-bold text-slate-900 mb-8 text-center">Ready to Start?</h3>
                        <form class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Full Name *</label>
                                    <input type="text" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="John Doe">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Email Address *</label>
                                    <input type="email" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="john@example.com">
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Phone Number</label>
                                    <input type="tel" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="+1 (555) 123-4567">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Areas of Interest</label>
                                    <select class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all">
                                        <option>Sustainable Agriculture</option>
                                        <option>Food Preparation & Distribution</option>
                                        <option>Community Outreach</option>
                                        <option>Education & Training</option>
                                        <option>Administrative Support</option>
                                        <option>Event Planning</option>
                                        <option>Fundraising</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Tell us about yourself</label>
                                <textarea rows="4" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="Share your skills, experience, and motivation..."></textarea>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="px-12 py-5 bg-gradient-to-r from-emerald-600 to-emerald-500 text-white font-bold rounded-full shadow-2xl hover:shadow-emerald-600/50 transition-all hover:scale-105 text-lg">
                                    <i class="ph-bold ph-paper-plane-right mr-3"></i>
                                    Submit Application
                                </button>
                                <p class="mt-6 text-sm text-slate-500">
                                    <i class="ph ph-lock text-emerald-500"></i>
                                    Your information is secure and will never be shared
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donate Section -->
        <section x-show="activeTab === 'donate'" class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Make a Donation</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Your generosity provides nutritious meals, sustainable agriculture, and hope to communities in need.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-hand-heart text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">One-Time Gift</h3>
                        <p class="text-slate-600 leading-relaxed">Make a single donation to support our current campaigns.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Tax deductible
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-calendar-check text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Monthly Giving</h3>
                        <p class="text-slate-600 leading-relaxed">Provide sustained support through recurring monthly donations.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Consistent impact
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-gift text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Tribute Gifts</h3>
                        <p class="text-slate-600 leading-relaxed">Honor someone special with a memorial or honorary donation.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Meaningful recognition
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-bank text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Stock & Securities</h3>
                        <p class="text-slate-600 leading-relaxed">Donate appreciated securities for maximum tax benefits.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Smart giving
                            </span>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-16">
                    <a href="/donate" class="px-12 py-5 bg-emerald-600 text-white font-bold rounded-full shadow-2xl hover:bg-emerald-700 transition-all hover:scale-105 text-lg">
                        <i class="ph-bold ph-heart mr-3"></i>
                        Donate Now
                    </a>
                </div>
            </div>
        </section>

        <!-- Partner Section -->
        <section x-show="activeTab === 'partner'" class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Partner With Us</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Join businesses and organizations in creating sustainable food security solutions for communities in need.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-buildings text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Corporate Partnerships</h3>
                        <p class="text-slate-600 leading-relaxed">Employee giving programs and corporate matching gifts.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Double your impact
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-storefront text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Retail Partnerships</h3>
                        <p class="text-slate-600 leading-relaxed">Point-of-sale donation programs and customer round-up campaigns.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Community engagement
                            </span>
                        </div>
                    </div>
                    
                    <div class="opportunity-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-graduation-cap text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Educational Institutions</h3>
                        <p class="text-slate-600 leading-relaxed">School partnerships and service learning opportunities.</p>
                        <div class="mt-6">
                            <span class="inline-flex items-center gap-2 text-purple-600 font-semibold text-sm">
                                <i class="ph ph-check-circle-fill"></i>
                                Learn & serve
                            </span>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-16">
                    <a href="/contact" class="px-12 py-5 bg-emerald-600 text-white font-bold rounded-full shadow-2xl hover:bg-emerald-700 transition-all hover:scale-105 text-lg">
                        <i class="ph-bold ph-handshake mr-3"></i>
                        Become a Partner
                    </a>
                </div>
            </div>
        </section>

        <!-- Events Section -->
        <section x-show="activeTab === 'events'" class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Upcoming Events</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Join our fundraising events and community gatherings to support our mission while connecting with like-minded supporters.
                    </p>
                </div>

                <div class="space-y-8 mb-20">
                    <!-- Event 1 -->
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3">
                                <img src="https://images.unsplash.com/photo-1542676887-07e45a1a1d2b?auto=format&fit=crop&w=400&q=80" alt="Gala Dinner" class="w-full h-64 object-cover">
                            </div>
                            <div class="md:w-2/3 p-8">
                                <div class="flex items-center gap-4 mb-4">
                                    <span class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1 rounded-full font-semibold">Fundraising</span>
                                    <span class="bg-orange-100 text-orange-700 text-xs px-3 py-1 rounded-full font-semibold">Gala</span>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Annual Hope Gala</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Join us for an elegant evening of celebration and giving. Features dinner, auction, and inspiring stories from families we've helped.</p>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-calendar text-emerald-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">March 15, 2024</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">Grand Hotel Downtown</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-clock text-emerald-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">6:00 PM - 10:00 PM</span>
                                    </div>
                                </div>
                                <a href="/events" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700">
                                    Register Now <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3">
                                <img src="https://images.unsplash.com/photo-1469474969-9ac537842f29?auto=format&fit=crop&w=400&q=80" alt="Community Garden Day" class="w-full h-64 object-cover">
                            </div>
                            <div class="md:w-2/3 p-8">
                                <div class="flex items-center gap-4 mb-4">
                                    <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">Community</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-semibold">Outdoor</span>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Community Garden Day</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Spend a day working in our community gardens, learning sustainable agriculture and helping plant seeds for the future.</p>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-calendar text-green-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">April 22, 2024</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-map-pin text-green-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">Community Garden Center</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-clock text-green-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">9:00 AM - 4:00 PM</span>
                                    </div>
                                </div>
                                <a href="/events" class="inline-flex items-center gap-2 text-green-600 font-semibold hover:text-green-700">
                                    Sign Up <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3">
                                <img src="https://images.unsplash.com/photo-1511632769642-1d9b6552c6f?auto=format&fit=crop&w=400&q=80" alt="Food Drive" class="w-full h-64 object-cover">
                            </div>
                            <div class="md:w-2/3 p-8">
                                <div class="flex items-center gap-4 mb-4">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-3 py-1 rounded-full font-semibold">Volunteer</span>
                                    <span class="bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full font-semibold">Collection</span>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Food Drive Collection</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Help us collect and distribute food donations to local families in need. Every can and box makes a difference.</p>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-calendar text-orange-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">Every Saturday</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-map-pin text-orange-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">Multiple Locations</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="ph-bold ph-clock text-orange-600"></i>
                                        <span class="text-sm font-semibold text-slate-700">10:00 AM - 2:00 PM</span>
                                    </div>
                                </div>
                                <a href="/events" class="inline-flex items-center gap-2 text-orange-600 font-semibold hover:text-orange-700">
                                    Find Location <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-16">
                    <a href="/events" class="px-12 py-5 bg-emerald-600 text-white font-bold rounded-full shadow-2xl hover:bg-emerald-700 transition-all hover:scale-105 text-lg">
                        <i class="ph-bold ph-calendar-plus mr-3"></i>
                        View All Events
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-emerald-600">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Ready to Make a Difference?</h2>
                <p class="text-emerald-100 text-xl max-w-2xl mx-auto mb-12">Every contribution, whether time or resources, helps us grow hope and feed futures.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="/donate" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Donate Now</a>
                    <a href="/contact" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                        <i class="ph-bold ph-users-three text-3xl"></i> Get Involved
                    </a>
                </div>
            </div>
        </section>
    </main>
    @include('components.footer')

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
