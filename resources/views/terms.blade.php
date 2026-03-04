<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - FeedTan Charity</title>
    <meta name="description" content="Read FeedTan Charity's terms and conditions. Understand the rules and guidelines for using our website and services.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
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
                    <span class="text-emerald-100 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Legal</span>
                    <h1 class="text-4xl md:text-6xl font-serif text-white mb-8 font-bold leading-tight">
                        Terms & <span class="text-emerald-200">Conditions</span>
                    </h1>
                    <p class="text-xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
                        Please read these terms and conditions carefully before using our website and services.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="#terms-content" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Read Terms</a>
                        <a href="/contact" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-envelope text-3xl"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Terms Content -->
        <section id="terms-content" class="py-32 bg-white">
            <div class="max-w-4xl mx-auto px-6">
                <div class="bg-white rounded-3xl shadow-lg border border-slate-100 p-12">
                    <!-- Last Updated -->
                    <div class="bg-emerald-50 rounded-2xl p-6 mb-12">
                        <div class="flex items-center gap-4">
                            <i class="ph-bold ph-calendar text-emerald-600 text-xl"></i>
                            <div>
                                <div class="font-bold text-slate-900">Last Updated</div>
                                <div class="text-slate-600">January 1, 2024</div>
                            </div>
                        </div>
                    </div>

                    <!-- Agreement -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Agreement to Terms</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            By accessing and using FeedTan Charity's website ("Website") and services, you agree to be bound by these Terms & Conditions ("Terms"). If you do not agree to these Terms, please do not use our Website or services.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            FeedTan Charity reserves the right to modify these Terms at any time. Changes will be effective immediately upon posting on the Website.
                        </p>
                    </div>

                    <!-- Use of Website -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Use of Website</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            You may use our Website for lawful purposes and in accordance with these Terms. You agree not to:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li>Use the Website for any illegal or unauthorized purpose</li>
                            <li>Modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information obtained from the Website</li>
                            <li>Use any robot, spider, scraper, or other automated means to access the Website</li>
                            <li>Attempt to gain unauthorized access to any portion of the Website</li>
                            <li>Interfere with or disrupt the Website or servers connected to the Website</li>
                        </ul>
                    </div>

                    <!-- Donations -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Donations and Contributions</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            When you make a donation to FeedTan Charity:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li>All donations are non-refundable unless required by law</li>
                            <li>You represent that you have the legal right to make the donation</li>
                            <li>You will receive an automatic tax receipt for your donation</li>
                            <li>FeedTan Charity reserves the right to refuse any donation</li>
                            <li>Donations may be used where most needed unless specifically designated</li>
                        </ul>
                    </div>

                    <!-- Intellectual Property -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Intellectual Property</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            All content, trademarks, service marks, logos, and other intellectual property on the Website are owned by FeedTan Charity and are protected by applicable copyright, trademark, and other intellectual property laws.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            You may not use, copy, reproduce, distribute, transmit, display, sell, license, or otherwise exploit any content from the Website without our prior written consent.
                        </p>
                    </div>

                    <!-- User Content -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">User Content</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            When you submit content to our Website (such as comments, reviews, or volunteer applications), you grant FeedTan Charity a non-exclusive, royalty-free, perpetual, and worldwide license to use, reproduce, modify, adapt, publish, translate, distribute, and display such content.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            You represent that you own or have the necessary rights to use the content you submit and that such content does not violate the rights of any third party.
                        </p>
                    </div>

                    <!-- Privacy -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Privacy</h2>
                        <p class="text-slate-600 leading-relaxed">
                            Your privacy is important to us. Please review our Privacy Policy, which also governs your use of the Website, to understand our practices regarding the collection and use of your personal information.
                        </p>
                    </div>

                    <!-- Disclaimers -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Disclaimers</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            The Website and all content are provided on an "as is" and "as available" basis, without any warranties of any kind, either express or implied.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            FeedTan Charity makes no warranties that the Website will be uninterrupted, timely, secure, or error-free. We do not guarantee the accuracy, reliability, or completeness of any information on the Website.
                        </p>
                    </div>

                    <!-- Limitation of Liability -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Limitation of Liability</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            To the fullest extent permitted by law, FeedTan Charity shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, use, or other intangible losses, resulting from your use of the Website.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            Our total liability to you for any cause of action whatsoever shall not exceed the amount you paid to FeedTan Charity, if any.
                        </p>
                    </div>

                    <!-- Indemnification -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Indemnification</h2>
                        <p class="text-slate-600 leading-relaxed">
                            You agree to indemnify, defend, and hold harmless FeedTan Charity, its officers, directors, employees, and agents from and against any and all claims, liabilities, damages, losses, and expenses, including reasonable attorneys' fees, arising from or in connection with your use of the Website or violation of these Terms.
                        </p>
                    </div>

                    <!-- Termination -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Termination</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            FeedTan Charity may terminate or suspend your access to the Website immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            Upon termination, your right to use the Website will cease immediately.
                        </p>
                    </div>

                    <!-- Governing Law -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Governing Law</h2>
                        <p class="text-slate-600 leading-relaxed">
                            These Terms shall be governed by and construed in accordance with the laws of the United States, without regard to its conflict of law provisions.
                        </p>
                    </div>

                    <!-- Changes to Terms -->
                    <div class="terms-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Changes to Terms</h2>
                        <p class="text-slate-600 leading-relaxed">
                            FeedTan Charity reserves the right to modify these Terms at any time. We will notify you of any changes by posting the new Terms on this page and updating the "Last Updated" date. Your continued use of the Website after such changes constitutes acceptance of the new Terms.
                        </p>
                    </div>

                    <!-- Contact Information -->
                    <div class="terms-section">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Contact Us</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            If you have any questions about these Terms & Conditions, please contact us:
                        </p>
                        <div class="bg-slate-50 rounded-2xl p-6">
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <i class="ph-bold ph-envelope text-emerald-600"></i>
                                    <span>legal@feedtan.org</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <i class="ph-bold ph-phone text-emerald-600"></i>
                                    <span>(555) 123-4567</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <i class="ph-bold ph-map-pin text-emerald-600"></i>
                                    <span>123 Green Way, Hope City, United States</span>
                                </div>
                            </div>
                        </div>
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
