<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false, donationType: 'one-time', amount: 50, customAmount: '' }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Donate - FeedTan Hope Foundation | Make a Difference Today</title>
    <meta name="description" content="Support FeedTan Hope Foundation's mission with a secure donation. Help provide food assistance, emergency relief, and housing support to communities in need.">
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
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        @include('components.header')

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
                <form id="donation-form" data-payment-form="donation-form" x-data="{ 
                    amount: 50000, 
                    customAmount: '',
                    init() {
                        console.log('Tanzania Mobile Money form initializing...');
                        // Set default values for Tanzania
                        this.amount = 50000; // 50,000 TZS default
                        this.customAmount = 50000;
                    },
                    formatAmount(amount) {
                        return 'TSh ' + amount.toLocaleString();
                    }
                }">
                    <div class="bg-white rounded-3xl shadow-2xl p-12">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">Support FeedTan Charity</h2>
                            <p class="text-slate-600">Your generous donation helps communities in need across Tanzania</p>
                            <div class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-emerald-100 rounded-full">
                                🇹🇿 <span class="text-emerald-700 font-semibold">Tanzania Mobile Money</span>
                            </div>
                            <div class="mt-2" id="token-status">
                                <span class="text-yellow-600">⏳ Initializing payment system...</span>
                            </div>
                        </div>

                        <!-- Amount Selection -->
                        <div class="mb-12">
                            <h3 class="text-xl font-bold text-slate-900 mb-6">Select Amount (TZS)</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                                <button type="button" @click="amount = 25000; customAmount = 25000" :class="amount === 25000 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                    TSh 25,000
                                </button>
                                <button type="button" @click="amount = 50000; customAmount = 50000" :class="amount === 50000 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                    TSh 50,000
                                </button>
                                <button type="button" @click="amount = 100000; customAmount = 100000" :class="amount === 100000 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                    TSh 100,000
                                </button>
                                <button type="button" @click="amount = 250000; customAmount = 250000" :class="amount === 250000 ? 'active' : ''" class="amount-button bg-white border-2 border-slate-200 rounded-xl p-4 font-semibold text-slate-700">
                                    TSh 250,000
                                </button>
                            </div>
                            
                            <div class="relative">
                                <input x-model="customAmount" @input="amount = customAmount" type="number" name="amount" placeholder="Enter custom amount (TSh)" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl text-lg font-semibold focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all">
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                                    TSh
                                </div>
                            </div>
                            <input type="hidden" name="amount" :value="customAmount || amount">
                            <input type="hidden" name="currency" value="TZS">
                            <input type="hidden" name="country" value="Tanzania">
                            <input type="hidden" name="donation_type" value="one_time">
                            <input type="hidden" name="payment_method" value="ussd">
                            <input type="hidden" name="mobile_provider" value="auto">
                        </div>

                        <!-- Personal Information -->
                        <div class="mb-12">
                            <h3 class="text-xl font-bold text-slate-900 mb-6">Your Information</h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Full Name *</label>
                                    <input type="text" name="donor_name" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="John Doe">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Email Address *</label>
                                    <input type="email" name="donor_email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="john@example.com">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Mobile Money Phone Number *</label>
                                    <input type="tel" name="phone_number" required placeholder="255712345678" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all">
                                    <p class="text-sm text-slate-500 mt-2">Enter your Tanzania mobile number for mobile money payment (e.g., 255712345678). We'll auto-detect your provider.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="px-12 py-5 bg-gradient-to-r from-emerald-600 to-emerald-500 text-white font-bold rounded-full shadow-2xl hover:shadow-emerald-600/50 transition-all hover:scale-105 text-lg">
                                <i class="ph-bold ph-device-mobile text-xl mr-3"></i>
                                Donate with Mobile Money
                            </button>
                            <p class="mt-6 text-sm text-slate-500">
                                <i class="ph ph-lock text-emerald-500"></i>
                                You will receive a USSD prompt on your phone to confirm the payment. All transactions are secure and encrypted.
                            </p>
                        </div>
                    </div>
                </form>
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Automatically generate ClickPesa token on page load
        generateClickPesaToken();
        
        // Initialize payment form
        if (typeof clickpesaPayment !== 'undefined') {
            clickpesaPayment.initializePaymentForm();
        }
    });

    async function generateClickPesaToken() {
        try {
            console.log('Generating ClickPesa token...');
            
            const response = await fetch('/api/payments/generate-token-on-load', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                }
            });

            console.log('Token response status:', response.status);
            console.log('Token response headers:', response.headers);
            
            const contentType = response.headers.get('content-type');
            console.log('Token response content-type:', contentType);

            let data;
            if (contentType && contentType.includes('application/json')) {
                data = await response.json();
            } else {
                const text = await response.text();
                console.error('Non-JSON response received:', text);
                data = { 
                    error: 'Non-JSON response received',
                    status: response.status,
                    content_type: contentType,
                    raw_response: text.substring(0, 500) + (text.length > 500 ? '...' : '')
                };
            }
            
            if (data.success) {
                console.log('ClickPesa token generated successfully');
                // Store token for later use
                window.clickPesaToken = data.data.token;
                window.tokenExpiresAt = data.data.expires_at;
                
                // Show ready status
                const tokenStatus = document.getElementById('token-status');
                if (tokenStatus) {
                    tokenStatus.innerHTML = '<span class="text-green-600">✅ Payment system ready</span>';
                }
            } else {
                console.error('Failed to generate ClickPesa token:', data);
                const tokenStatus = document.getElementById('token-status');
                if (tokenStatus) {
                    tokenStatus.innerHTML = '<span class="text-red-600">❌ Payment system error</span>';
                }
            }
        } catch (error) {
            console.error('Error generating ClickPesa token:', error);
            const tokenStatus = document.getElementById('token-status');
            if (tokenStatus) {
                tokenStatus.innerHTML = '<span class="text-yellow-600">⚠️ Payment system limited</span>';
            }
        }
    }
    </script>
</body>
</html>
