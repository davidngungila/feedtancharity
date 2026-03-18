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
                <div class="bg-white rounded-3xl shadow-2xl p-12">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">Make Your Donation</h2>
                        <p class="text-slate-600">Secure payment powered by ClickPesa</p>
                    </div>

                    <!-- ClickPesa Payment Form -->
                    <div x-data="clickPesaPayment()" x-init="init()">
                        <!-- Loading State -->
                        <div x-show="loading" x-transition class="text-center py-12">
                            <div class="inline-flex items-center gap-3 text-emerald-600">
                                <div class="w-8 h-8 border-4 border-emerald-200 border-t-emerald-600 rounded-full animate-spin"></div>
                                <span class="text-lg font-semibold">Initializing payment system...</span>
                            </div>
                        </div>

                        <!-- Error State -->
                        <div x-show="error" x-transition class="bg-rose-50 border border-rose-200 rounded-2xl p-6 mb-8">
                            <div class="flex items-start gap-4">
                                <div class="bg-rose-100 rounded-full p-2">
                                    <i class="ph-bold ph-warning text-rose-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-rose-900 mb-2">Payment Error</h4>
                                    <p class="text-rose-700" x-text="error"></p>
                                </div>
                                <button @click="error = null" class="text-rose-400 hover:text-rose-600">
                                    <i class="ph-bold ph-x text-xl"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Success State -->
                        <div x-show="success" x-transition class="bg-emerald-50 border border-emerald-200 rounded-2xl p-8 mb-8">
                            <div class="text-center">
                                <div class="bg-emerald-100 rounded-full p-4 w-20 h-20 mx-auto mb-4">
                                    <i class="ph-bold ph-check-circle text-emerald-600 text-4xl"></i>
                                </div>
                                <h4 class="font-bold text-emerald-900 text-xl mb-2">Payment Successful!</h4>
                                <p class="text-emerald-700 mb-4">Thank you for your generous donation to FeedTan Charity.</p>
                                <div class="bg-white rounded-xl p-4 text-left">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-600">Transaction ID:</span>
                                        <span class="font-semibold" x-text="paymentDetails.id"></span>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-600">Amount:</span>
                                        <span class="font-semibold" x-text="formatCurrency(paymentDetails.amount)"></span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-slate-600">Status:</span>
                                        <span class="font-semibold text-emerald-600" x-text="paymentDetails.status"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Form -->
                        <form x-show="!loading && !success" @submit.prevent="processPayment()" class="space-y-8">
                            <!-- Donation Amount -->
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-6">Select Amount (TZS)</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                                    <template x-for="preset in [50000, 100000, 250000, 500000]" :key="preset">
                                        <button type="button" 
                                                @click="amount = preset; customAmount = ''"
                                                :class="amount === preset ? 'bg-emerald-600 text-white border-emerald-600' : 'bg-white text-slate-700 border-slate-200 hover:border-emerald-500'"
                                                class="p-4 rounded-xl font-semibold border-2 transition-all">
                                            <span x-text="formatCurrency(preset)"></span>
                                        </button>
                                    </template>
                                </div>
                                
                                <div class="relative">
                                    <input x-model="customAmount" 
                                           @input="amount = customAmount; validateAmount()"
                                           type="number" 
                                           placeholder="Enter custom amount (TZS)" 
                                           class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl text-lg font-semibold focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all">
                                    <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                                        <i class="ph-bold ph-currency-tanzanian-shilling text-xl"></i>
                                    </div>
                                </div>
                                <p x-show="amountError" class="text-rose-600 text-sm mt-2" x-text="amountError"></p>
                            </div>

                            <!-- Payment Method -->
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-6">Payment Method</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <button type="button" 
                                            @click="paymentMethod = 'mobile'"
                                            :class="paymentMethod === 'mobile' ? 'bg-emerald-600 text-white border-emerald-600' : 'bg-white text-slate-700 border-slate-200 hover:border-emerald-500'"
                                            class="p-6 rounded-2xl font-semibold border-2 transition-all">
                                        <i class="ph-bold ph-device-mobile text-3xl mb-3"></i>
                                        <div class="text-lg font-bold">Mobile Money</div>
                                        <div class="text-sm opacity-75">M-Pesa, Tigo Pesa, Airtel Money</div>
                                    </button>
                                    <button type="button" 
                                            @click="paymentMethod = 'card'"
                                            :class="paymentMethod === 'card' ? 'bg-emerald-600 text-white border-emerald-600' : 'bg-white text-slate-700 border-slate-200 hover:border-emerald-500'"
                                            class="p-6 rounded-2xl font-semibold border-2 transition-all">
                                        <i class="ph-bold ph-credit-card text-3xl mb-3"></i>
                                        <div class="text-lg font-bold">Card Payment</div>
                                        <div class="text-sm opacity-75">Visa, Mastercard, American Express</div>
                                    </button>
                                </div>
                            </div>

                            <!-- Mobile Money Form -->
                            <div x-show="paymentMethod === 'mobile'" x-transition class="space-y-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-3">Phone Number *</label>
                                    <input x-model="phoneNumber" 
                                           @input="validatePhoneNumber()"
                                           type="tel" 
                                           placeholder="255712345678" 
                                           class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl text-lg font-semibold focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all">
                                    <p class="text-slate-500 text-sm mt-2">Enter phone number with country code (e.g., 255712345678)</p>
                                    <p x-show="phoneError" class="text-rose-600 text-sm mt-2" x-text="phoneError"></p>
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <div class="space-y-6">
                                <h3 class="text-xl font-bold text-slate-900">Your Information</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-3">Full Name *</label>
                                        <input x-model="fullName" 
                                               type="text" 
                                               placeholder="John Doe" 
                                               class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl text-lg font-semibold focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all"
                                               required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-3">Email Address *</label>
                                        <input x-model="email" 
                                               type="email" 
                                               placeholder="john@example.com" 
                                               class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl text-lg font-semibold focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all"
                                               required>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="bg-slate-50 rounded-xl p-6">
                                <label class="flex items-start gap-4 cursor-pointer">
                                    <input x-model="agreeTerms" type="checkbox" class="text-emerald-600 mt-1" required>
                                    <div>
                                        <div class="font-semibold text-slate-900">I agree to the terms and conditions</div>
                                        <div class="text-sm text-slate-600 mt-1">
                                            By proceeding, you authorize FeedTan Charity to process this donation through ClickPesa's secure payment system.
                                            Your payment information is encrypted and secure. All donations are tax-deductible as permitted by law.
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" 
                                        :disabled="processing || !isFormValid()"
                                        class="px-12 py-5 bg-gradient-to-r from-emerald-600 to-emerald-500 text-white font-bold rounded-full shadow-2xl hover:shadow-emerald-600/50 transition-all hover:scale-105 text-lg disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100">
                                    <span x-show="!processing">
                                        <i class="ph-bold ph-heart text-xl mr-3"></i>
                                        Complete Donation - <span x-text="formatCurrency(amount || 0)"></span>
                                    </span>
                                    <span x-show="processing" class="flex items-center gap-3">
                                        <div class="w-6 h-6 border-3 border-white border-t-transparent rounded-full animate-spin"></div>
                                        Processing Payment...
                                    </span>
                                </button>
                                
                                <div class="mt-6 flex items-center justify-center gap-6 text-sm text-slate-500">
                                    <div class="flex items-center gap-2">
                                        <i class="ph ph-lock text-emerald-500"></i>
                                        <span>Secure Payment</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph ph-shield-check text-emerald-500"></i>
                                        <span>SSL Encrypted</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph ph-certificate text-emerald-500"></i>
                                        <span>501(c)(3) Certified</span>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Payment Status Polling -->
                        <div x-show="pollingPayment" x-transition class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
                            <div class="flex items-center gap-4">
                                <div class="bg-blue-100 rounded-full p-3">
                                    <div class="w-6 h-6 border-3 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-blue-900 mb-1">Waiting for Payment Confirmation</h4>
                                    <p class="text-blue-700">Please check your phone and complete the payment. We're waiting for confirmation...</p>
                                </div>
                                <button @click="cancelPayment()" class="text-blue-400 hover:text-blue-600">
                                    <i class="ph-bold ph-x text-xl"></i>
                                </button>
                            </div>
                        </div>
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
    </main>

    @include('components.footer')

    <script>
        // ClickPesa Payment Integration
        function clickPesaPayment() {
            return {
                // Configuration
                config: {
                    clientId: 'ID6t2Itw6oIepcDEYGQORZNaAcEvqIGZ',
                    apiKey: 'SKmOjYqsWbDcROwxdDiC7XpLavqpbMjcyE33JHcvl2',
                    baseUrl: 'https://api.clickpesa.com/third-parties'
                },
                
                // State
                loading: false,
                processing: false,
                success: false,
                error: null,
                pollingPayment: false,
                authToken: null,
                
                // Form data
                amount: 100000,
                customAmount: '',
                paymentMethod: 'mobile',
                phoneNumber: '',
                fullName: '',
                email: '',
                agreeTerms: false,
                
                // Validation errors
                amountError: '',
                phoneError: '',
                
                // Payment details
                paymentDetails: {
                    id: '',
                    amount: 0,
                    status: ''
                },
                
                // Polling interval
                pollInterval: null,
                
                // Initialize
                async init() {
                    // Generate auth token
                    await this.generateToken();
                },
                
                // Generate authentication token
                async generateToken() {
                    this.loading = true;
                    try {
                        const response = await fetch(`${this.config.baseUrl}/generate-token`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'client-id': this.config.clientId,
                                'api-key': this.config.apiKey
                            }
                        });
                        
                        const data = await response.json();
                        
                        if (data.success && data.token) {
                            this.authToken = data.token;
                            this.error = null;
                        } else {
                            throw new Error('Failed to generate authentication token');
                        }
                    } catch (error) {
                        this.error = 'Unable to initialize payment system. Please refresh the page and try again.';
                        console.error('Token generation error:', error);
                    } finally {
                        this.loading = false;
                    }
                },
                
                // Format currency
                formatCurrency(amount) {
                    return new Intl.NumberFormat('en-TZ', {
                        style: 'currency',
                        currency: 'TZS',
                        minimumFractionDigits: 0
                    }).format(amount || 0);
                },
                
                // Validate amount
                validateAmount() {
                    this.amountError = '';
                    const amount = parseFloat(this.amount);
                    
                    if (!amount || amount <= 0) {
                        this.amountError = 'Please enter a valid amount';
                        return false;
                    }
                    
                    if (amount < 1000) {
                        this.amountError = 'Minimum donation amount is TZS 1,000';
                        return false;
                    }
                    
                    if (amount > 10000000) {
                        this.amountError = 'Maximum donation amount is TZS 10,000,000';
                        return false;
                    }
                    
                    return true;
                },
                
                // Validate phone number
                validatePhoneNumber() {
                    this.phoneError = '';
                    
                    if (this.paymentMethod === 'mobile' && !this.phoneNumber) {
                        this.phoneError = 'Phone number is required for mobile money payments';
                        return false;
                    }
                    
                    if (this.phoneNumber && !/^255\d{9}$/.test(this.phoneNumber)) {
                        this.phoneError = 'Please enter a valid Tanzanian phone number (e.g., 255712345678)';
                        return false;
                    }
                    
                    return true;
                },
                
                // Check if form is valid
                isFormValid() {
                    return this.validateAmount() && 
                           this.validatePhoneNumber() && 
                           this.fullName.trim() && 
                           this.email.trim() && 
                           this.agreeTerms &&
                           this.authToken;
                },
                
                // Process payment
                async processPayment() {
                    if (!this.isFormValid()) {
                        return;
                    }
                    
                    this.processing = true;
                    this.error = null;
                    
                    try {
                        const orderReference = this.generateOrderReference();
                        
                        if (this.paymentMethod === 'mobile') {
                            await this.processMobilePayment(orderReference);
                        } else {
                            await this.processCardPayment(orderReference);
                        }
                    } catch (error) {
                        this.error = error.message || 'Payment processing failed. Please try again.';
                        console.error('Payment error:', error);
                    } finally {
                        this.processing = false;
                    }
                },
                
                // Process mobile money payment
                async processMobilePayment(orderReference) {
                    // First preview the payment
                    const previewResponse = await fetch(`${this.config.baseUrl}/payments/preview-ussd-push-request`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': this.authToken
                        },
                        body: JSON.stringify({
                            amount: this.amount.toString(),
                            currency: 'TZS',
                            orderReference: orderReference,
                            phoneNumber: this.phoneNumber,
                            fetchSenderDetails: false
                        })
                    });
                    
                    if (!previewResponse.ok) {
                        throw new Error('Unable to preview payment. Please check your phone number and try again.');
                    }
                    
                    const previewData = await previewResponse.json();
                    
                    // Initiate the payment
                    const initiateResponse = await fetch(`${this.config.baseUrl}/payments/initiate-ussd-push-request`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': this.authToken
                        },
                        body: JSON.stringify({
                            amount: this.amount.toString(),
                            currency: 'TZS',
                            orderReference: orderReference,
                            phoneNumber: this.phoneNumber
                        })
                    });
                    
                    if (!initiateResponse.ok) {
                        throw new Error('Unable to initiate payment. Please try again.');
                    }
                    
                    const initiateData = await initiateResponse.json();
                    
                    // Start polling for payment status
                    this.pollingPayment = true;
                    this.pollPaymentStatus(orderReference);
                },
                
                // Process card payment
                async processCardPayment(orderReference) {
                    const response = await fetch(`${this.config.baseUrl}/payments/initiate-card-payment`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': this.authToken
                        },
                        body: JSON.stringify({
                            amount: this.amount.toString(),
                            currency: 'USD',
                            orderReference: orderReference,
                            customer: {
                                id: this.email,
                                name: this.fullName,
                                email: this.email
                            }
                        })
                    });
                    
                    if (!response.ok) {
                        throw new Error('Unable to initiate card payment. Please try again.');
                    }
                    
                    const data = await response.json();
                    
                    // Redirect to card payment page
                    if (data.cardPaymentLink) {
                        window.location.href = data.cardPaymentLink;
                    } else {
                        throw new Error('Card payment link not available');
                    }
                },
                
                // Poll payment status
                async pollPaymentStatus(orderReference) {
                    this.pollInterval = setInterval(async () => {
                        try {
                            const response = await fetch(`${this.config.baseUrl}/payments/${orderReference}`, {
                                method: 'GET',
                                headers: {
                                    'Authorization': this.authToken
                                }
                            });
                             
                            if (response.ok) {
                                const data = await response.json();
                                 
                                if (data && data.length > 0) {
                                    const payment = data[0];
                                    
                                    if (payment.status === 'SUCCESS' || payment.status === 'SETTLED') {
                                        this.handlePaymentSuccess(payment);
                                    } else if (payment.status === 'FAILED') {
                                        this.handlePaymentFailure(payment);
                                    }
                                }
                            }
                        } catch (error) {
                            console.error('Polling error:', error);
                        }
                    }, 5000); // Poll every 5 seconds
                    
                    // Stop polling after 5 minutes
                    setTimeout(() => {
                        this.stopPolling();
                    }, 300000);
                },
                
                // Handle payment success
                handlePaymentSuccess(payment) {
                    this.stopPolling();
                    this.pollingPayment = false;
                    this.success = true;
                    this.paymentDetails = {
                        id: payment.id,
                        amount: payment.collectedAmount,
                        status: payment.status
                    };
                    
                    // Send confirmation email (optional)
                    this.sendConfirmationEmail(payment);
                },
                
                // Handle payment failure
                handlePaymentFailure(payment) {
                    this.stopPolling();
                    this.pollingPayment = false;
                    this.error = `Payment failed: ${payment.message || 'Unknown error'}`;
                },
                
                // Cancel payment
                cancelPayment() {
                    this.stopPolling();
                    this.pollingPayment = false;
                },
                
                // Stop polling
                stopPolling() {
                    if (this.pollInterval) {
                        clearInterval(this.pollInterval);
                        this.pollInterval = null;
                    }
                },
                
                // Generate order reference
                generateOrderReference() {
                    const timestamp = Date.now();
                    const random = Math.floor(Math.random() * 1000);
                    return `FTDON${timestamp}${random}`;
                },
                
                // Send confirmation email (placeholder)
                async sendConfirmationEmail(payment) {
                    // This would typically call your backend to send a confirmation email
                    console.log('Confirmation email sent for payment:', payment);
                }
            }
        }
        
        // Smooth scrolling for navigation links
        document.addEventListener('DOMContentLoaded', function() {
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
        });
    </script>
</body>
</html>
