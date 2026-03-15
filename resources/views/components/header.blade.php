<!-- Navigation Header -->
<nav class="fixed top-0 w-full z-50 glass border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
        <a href="{{ getSiteUrl() }}" class="flex items-center gap-3 group/logo">
            <div class="h-20 w-20 rounded-2xl object-contain bg-white p-3 transition-transform group-hover/logo:scale-105 overflow-hidden shadow-lg">
                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772609946/4_lqe3dl.png" alt="FeedTan Logo" class="w-full h-full object-contain">
            </div>
            <div class="flex flex-col">
                <span class="text-2xl font-black tracking-tighter text-slate-900 leading-none">FeedTan</span>
                <span class="text-xs font-bold text-slate-500 leading-none mt-1">Community Microfinance Group</span>
            </div>
        </a>

        <div class="hidden lg:flex items-center gap-10">
            <a href="{{ getSiteUrl() }}" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Home</a>

            <div class="relative group py-8">
                <a href="{{ getSiteUrl('campaigns') }}" class="nav-link font-bold hover:text-emerald-600 transition-colors flex items-center gap-1">
                    Campaigns <i class="ph ph-caret-down text-xs transition-transform group-hover:rotate-180"></i>
                </a>
                
                <!-- Mega Menu -->
                <div class="mega-menu absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-4xl bg-white rounded-2xl shadow-2xl border border-slate-100 mt-2 p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="font-black text-slate-900 mb-4 flex items-center gap-2">
                                <i class="ph ph-bowl-food text-emerald-600"></i> School Nutrition
                            </h3>
                            <ul class="space-y-3">
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Daily Meal Programs</a></li>
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Weekend Backpacks</a></li>
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Summer Feeding</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-black text-slate-900 mb-4 flex items-center gap-2">
                                <i class="ph ph-first-aid-kit text-blue-600"></i> Emergency Relief
                            </h3>
                            <ul class="space-y-3">
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Disaster Response</a></li>
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Food Distribution</a></li>
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Emergency Supplies</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-black text-slate-900 mb-4 flex items-center gap-2">
                                <i class="ph ph-plant text-green-600"></i> Community Gardens
                            </h3>
                            <ul class="space-y-3">
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Urban Gardens</a></li>
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">School Gardens</a></li>
                                <li><a href="{{ getSiteUrl('campaigns') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Community Workshops</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-8 border-t border-slate-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-slate-900 mb-2">Support Our Mission</h4>
                                <p class="text-slate-600 text-sm">Help us continue providing nutritious meals to families in need.</p>
                            </div>
                            <a href="{{ getSiteUrl('campaigns') }}" class="px-6 py-3 bg-emerald-600 text-white rounded-full font-semibold hover:bg-emerald-700 transition-colors">
                                <i class="ph ph-heart mr-2"></i> Donate Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ getSiteUrl('about') }}" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">About</a>
            <a href="{{ getSiteUrl('impact') }}" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Impact</a>
            <a href="{{ getSiteUrl('get-involved') }}" class="nav-link font-bold hover:text-emerald-600 transition-colors py-8">Get Involved</a>
        </div>

        <div class="flex items-center gap-4">
            <a href="{{ getSiteUrl('donate') }}" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-slate-700 bg-white border border-slate-200 px-5 py-2.5 rounded-full hover:bg-slate-50 transition-all">Donate</a>
            <a href="{{ getSiteUrl('get-involved') }}" class="hidden md:inline-flex items-center gap-2 text-sm font-semibold text-white bg-emerald-600 px-6 py-2.5 rounded-full hover:bg-emerald-700 shadow-lg shadow-emerald-600/20 transition-all">Join Us</a>

            <button @click="mobileMenuOpen = true" class="lg:hidden w-12 h-12 bg-slate-50 text-slate-900 rounded-2xl flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-all" type="button">
                <i class="ph ph-list text-2xl"></i>
            </button>
        </div>
    </div>
    <div class="nav-border-animate"></div>
</nav>

<!-- Mobile Menu -->
<div x-show="mobileMenuOpen" x-cloak class="fixed inset-0 z-50 lg:hidden">
    <div class="absolute inset-0 bg-black/50" @click="mobileMenuOpen = false"></div>
    <div class="absolute right-0 top-0 h-full w-80 max-w-full bg-white shadow-2xl overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ getSiteUrl() }}" class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-xl object-contain bg-white p-2">
                        <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772609946/4_lqe3dl.png" alt="FeedTan Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-black tracking-tighter text-slate-900 leading-none">FeedTan</span>
                        <span class="text-xs font-bold text-slate-500 leading-none mt-1">Community Microfinance Group</span>
                    </div>
                </a>
                <button @click="mobileMenuOpen = false" class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center hover:bg-slate-200 transition-colors">
                    <i class="ph ph-x text-slate-600"></i>
                </button>
            </div>

            <nav class="space-y-2">
                <a href="{{ getSiteUrl() }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Home</a>

                <div class="py-4">
                    <h3 class="font-black text-slate-900 mb-4">Campaigns</h3>
                    <ul class="space-y-3 ml-4">
                        <li><a href="{{ getSiteUrl('campaigns') }}" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-emerald-50 transition-all">
                            <i class="ph ph-bowl-food text-emerald-600"></i>
                            <div>
                                <div class="font-bold text-slate-900">School Nutrition</div>
                                <div class="text-sm text-slate-600">Daily meal programs</div>
                            </div>
                        </a></li>
                        <li><a href="{{ getSiteUrl('campaigns') }}" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-emerald-50 transition-all">
                            <i class="ph ph-first-aid-kit text-blue-600"></i>
                            <div>
                                <div class="font-bold text-slate-900">Emergency Relief</div>
                                <div class="text-sm text-slate-600">Crisis assistance</div>
                            </div>
                        </a></li>
                        <li><a href="{{ getSiteUrl('campaigns') }}" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-emerald-50 transition-all">
                            <i class="ph ph-plant text-green-600"></i>
                            <div>
                                <div class="font-bold text-slate-900">Community Gardens</div>
                                <div class="text-sm text-slate-600">Sustainable food sources</div>
                            </div>
                        </a></li>
                    </ul>
                </div>

                <a href="{{ getSiteUrl('about') }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">About</a>
                <a href="{{ getSiteUrl('impact') }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Impact</a>
                <a href="{{ getSiteUrl('get-involved') }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-emerald-600">Get Involved</a>
            </nav>

            <div class="mt-8 pt-8 border-t border-slate-200">
                <a href="{{ getSiteUrl('donate') }}" class="w-full inline-block py-4 bg-emerald-500 text-white font-black text-xs uppercase tracking-widest text-center rounded-2xl shadow-xl shadow-emerald-500/20">Donate Now</a>
            </div>
        </div>
    </div>
</div>
