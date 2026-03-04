<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - FeedTan Charity</title>
    <meta name="description" content="Read FeedTan Charity's privacy policy. Learn how we protect your personal information and ensure data security.">
    
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
                        Privacy <span class="text-emerald-200">Policy</span>
                    </h1>
                    <p class="text-xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
                        Your privacy is important to us. Learn how we collect, use, and protect your personal information.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="#policy-content" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Read Policy</a>
                        <a href="/contact" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-envelope text-3xl"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Policy Content -->
        <section id="policy-content" class="py-32 bg-white">
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

                    <!-- Introduction -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Introduction</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            FeedTan Charity ("we," "us," or "our") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, use our services, or interact with our organization.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            By using FeedTan Charity's website and services, you consent to the data practices described in this policy.
                        </p>
                    </div>

                    <!-- Information We Collect -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Information We Collect</h2>
                        
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Personal Information</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We may collect personal information that you voluntarily provide when you:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-8">
                            <li>Make a donation or set up recurring giving</li>
                            <li>Register as a volunteer</li>
                            <li>Subscribe to our newsletter</li>
                            <li>Contact us with questions or feedback</li>
                            <li>Register for events or programs</li>
                        </ul>

                        <h3 class="text-xl font-bold text-slate-900 mb-4">Types of Information</h3>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li><strong>Name and contact information</strong> (email, phone, address)</li>
                            <li><strong>Payment information</strong> (credit card details, bank information)</li>
                            <li><strong>Demographic information</strong> (age, location, interests)</li>
                            <li><strong>Communication preferences</strong> (email, phone, mail)</li>
                            <li><strong>Volunteer information</strong> (skills, availability, background)</li>
                        </ul>
                    </div>

                    <!-- How We Use Information -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">How We Use Your Information</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We use your information to:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li>Process donations and provide tax receipts</li>
                            <li>Coordinate volunteer opportunities and communications</li>
                            <li>Send updates about our programs and impact</li>
                            <li>Respond to your inquiries and requests</li>
                            <li>Improve our services and user experience</li>
                            <li>Comply with legal and regulatory requirements</li>
                        </ul>
                    </div>

                    <!-- Information Sharing -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Information Sharing</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li><strong>Service Providers:</strong> With trusted third-party service providers who assist in processing donations, email communications, and website operations</li>
                            <li><strong>Legal Requirements:</strong> When required by law, court order, or government regulation</li>
                            <li><strong>Safety and Security:</strong> To protect our rights, property, or safety, or that of our users</li>
                            <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets</li>
                        </ul>
                    </div>

                    <!-- Data Security -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Data Security</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li>SSL encryption for all data transmissions</li>
                            <li>Secure payment processing through PCI-compliant providers</li>
                            <li>Regular security audits and vulnerability assessments</li>
                            <li>Employee training on data protection practices</li>
                            <li>Access controls and authentication systems</li>
                        </ul>
                    </div>

                    <!-- Cookies and Tracking -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Cookies and Tracking Technologies</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We use cookies and similar tracking technologies to enhance your experience on our website:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li><strong>Essential Cookies:</strong> Required for basic website functionality</li>
                            <li><strong>Analytics Cookies:</strong> Help us understand how visitors use our site</li>
                            <li><strong>Marketing Cookies:</strong> Used to personalize content and advertisements</li>
                            <li><strong>Social Media Cookies:</strong> Enable social media sharing and integration</li>
                        </ul>
                        <p class="text-slate-600 leading-relaxed mt-6">
                            You can control cookie settings through your browser preferences.
                        </p>
                    </div>

                    <!-- Your Rights -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Your Rights</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            You have the right to:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2">
                            <li><strong>Access:</strong> Request a copy of your personal information</li>
                            <li><strong>Correct:</strong> Update or correct inaccurate information</li>
                            <li><strong>Delete:</strong> Request deletion of your personal information</li>
                            <li><strong>Opt-out:</strong> Unsubscribe from marketing communications</li>
                            <li><strong>Restrict:</strong> Limit how we use your information</li>
                        </ul>
                    </div>

                    <!-- Children's Privacy -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Children's Privacy</h2>
                        <p class="text-slate-600 leading-relaxed">
                            Our website and services are not directed to children under 13. We do not knowingly collect personal information from children under 13. If we become aware that we have collected such information, we will take steps to delete it promptly.
                        </p>
                    </div>

                    <!-- Policy Updates -->
                    <div class="policy-section mb-16">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Policy Updates</h2>
                        <p class="text-slate-600 leading-relaxed">
                            We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on our website and updating the "Last Updated" date above. Continued use of our services after such changes constitutes acceptance of the updated policy.
                        </p>
                    </div>

                    <!-- Contact Information -->
                    <div class="policy-section">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-6">Contact Us</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            If you have questions about this Privacy Policy or our data practices, please contact us:
                        </p>
                        <div class="bg-slate-50 rounded-2xl p-6">
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <i class="ph-bold ph-envelope text-emerald-600"></i>
                                    <span>privacy@feedtan.org</span>
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
