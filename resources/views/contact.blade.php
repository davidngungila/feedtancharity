<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false, formSubmitted: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FeedTan Charity | Get in Touch</title>
    <meta name="description" content="Contact FeedTan Charity. Find our headquarters, call us, or send a message. We're here to help you get involved or answer any questions.">
    
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
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-32 bg-gradient-to-br from-emerald-600 to-emerald-700 overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
                <div class="fade-in">
                    <span class="text-emerald-100 font-black text-xs uppercase tracking-[0.4em] mb-6 inline-block">Get in Touch</span>
                    <h1 class="text-4xl md:text-6xl font-serif text-white mb-8 font-bold leading-tight">
                        We're Here to <span class="text-emerald-200">Help</span>
                    </h1>
                    <p class="text-xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
                        Whether you have questions, want to get involved, or need support, our team is ready to assist you on your journey.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="#contact-form" class="px-12 py-5 bg-white text-emerald-600 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Contact Us</a>
                        <a href="/donate" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-heart text-3xl"></i> Quick Donate
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Information -->
        <section class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Reach Out Anytime</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        We're here to answer your questions, discuss partnerships, or help you get involved with our mission.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                    <div class="contact-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-phone text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Call Us</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Speak directly with our team during business hours for immediate assistance.</p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-phone text-emerald-600"></i>
                                <span class="font-semibold text-slate-900">Main Office</span>
                            </div>
                            <div class="text-emerald-600 font-bold">(555) 123-4567</div>
                        </div>
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-clock text-emerald-600"></i>
                                <span class="text-sm text-slate-600">Mon-Fri: 9:00 AM - 6:00 PM EST</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-lifebuoy text-emerald-600"></i>
                                <span class="text-sm text-slate-600">Emergency Hotline</span>
                            </div>
                            <div class="text-emerald-600 font-bold">1-800-HELP-FOOD</div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="contact-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-envelope text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Email Us</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Send us a message anytime and we'll respond within 24 hours.</p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-envelope text-blue-600"></i>
                                <span class="font-semibold text-slate-900">General Inquiries</span>
                            </div>
                            <div class="text-blue-600 font-bold">info@feedtan.org</div>
                        </div>
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-hand-heart text-blue-600"></i>
                                <span class="font-semibold text-slate-900">Donation Questions</span>
                            </div>
                            <div class="text-blue-600 font-bold">donations@feedtan.org</div>
                        </div>
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-users text-blue-600"></i>
                                <span class="font-semibold text-slate-900">Volunteer Information</span>
                            </div>
                            <div class="text-blue-600 font-bold">volunteers@feedtan.org</div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="contact-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-map-pin text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Visit Us</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Stop by our headquarters to meet our team and learn more about our work.</p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-map-pin text-purple-600"></i>
                                <span class="font-semibold text-slate-900">Main Office</span>
                            </div>
                            <div class="text-slate-600">123 Green Way, Hope City, United States</div>
                        </div>
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-clock text-purple-600"></i>
                                <span class="text-sm text-slate-600">Office Hours</span>
                            </div>
                            <div class="text-slate-600">Mon-Fri: 9:00 AM - 6:00 PM</div>
                        </div>
                            <div class="flex items-center gap-4">
                                <i class="ph-bold ph-car text-purple-600"></i>
                                <span class="text-sm text-slate-600">Parking Available</span>
                            </div>
                            <div class="text-slate-600">Free parking on-site</div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="contact-card bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center">
                            <i class="ph-bold ph-chats-circle text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Social Media</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Connect with us online for updates, stories, and community engagement.</p>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center hover:bg-blue-700 transition-colors">
                                <i class="ph-bold ph-facebook-logo text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-sky-500 text-white rounded-xl flex items-center justify-center hover:bg-sky-600 transition-colors">
                                <i class="ph-bold ph-twitter-logo text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 text-white rounded-xl flex items-center justify-center hover:from-purple-700 hover:to-pink-700 transition-all">
                                <i class="ph-bold ph-instagram-logo text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-700 text-white rounded-xl flex items-center justify-center hover:bg-blue-800 transition-colors">
                                <i class="ph-bold ph-linkedin-logo text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section id="contact-form" class="py-32 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6">
                <div class="bg-white rounded-3xl shadow-2xl p-12">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">Send Us a Message</h2>
                        <p class="text-slate-600">Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>

                    <form x-show="!formSubmitted" @submit.prevent="formSubmitted = true" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Full Name *</label>
                                <input type="text" name="name" required class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Email Address *</label>
                                <input type="email" name="email" required class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="john@example.com">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Phone Number</label>
                                <input type="tel" name="phone" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="+1 (555) 123-4567">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Subject</label>
                                <select name="subject" class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all">
                                    <option>General Inquiry</option>
                                    <option>Volunteer Information</option>
                                    <option>Donation Question</option>
                                    <option>Partnership Proposal</option>
                                    <option>Media Inquiry</option>
                                    <option>Technical Support</option>
                                    <option>Feedback</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-3">Message *</label>
                            <textarea name="message" rows="6" required class="w-full px-6 py-4 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all" placeholder="Tell us how we can help..."></textarea>
                        </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="px-12 py-5 bg-gradient-to-r from-emerald-600 to-emerald-500 text-white font-bold rounded-full shadow-2xl hover:shadow-emerald-600/50 transition-all hover:scale-105 text-lg">
                                <i class="ph-bold ph-paper-plane-right mr-3"></i>
                                Send Message
                            </button>
                            <p class="mt-6 text-sm text-slate-500">
                                <i class="ph ph-lock text-emerald-500"></i>
                                Your information is secure and will never be shared
                            </p>
                        </div>
                    </form>

                    <!-- Success Message -->
                    <div x-show="formSubmitted" x-transition class="text-center py-12">
                        <div class="inline-flex items-center gap-4 bg-emerald-100 text-emerald-700 px-6 py-4 rounded-2xl">
                            <i class="ph-bold ph-check-circle text-2xl"></i>
                            <div>
                                <div class="font-bold">Message Sent Successfully!</div>
                                <div class="text-sm">We'll respond within 24 hours.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-8 font-bold">Frequently Asked Questions</h2>
                    <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                        Find answers to common questions about FeedTan Charity and how you can get involved.
                    </p>
                </div>

                <div class="space-y-6 max-w-4xl mx-auto">
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">How can I volunteer?</h3>
                        <p class="text-slate-600 leading-relaxed">You can sign up on our Get Involved page, attend our events, or contact us directly about volunteer opportunities.</p>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Is my donation tax-deductible?</h3>
                        <p class="text-slate-600 leading-relaxed">Yes! FeedTan Charity is a registered 501(c)(3) organization, so all donations are tax-deductible to the extent allowed by law.</p>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">How does my donation help?</h3>
                        <p class="text-slate-600 leading-relaxed">Your donation provides nutritious meals, supports community gardens, funds emergency relief, and helps us expand our programs to reach more families.</p>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Can I specify where my donation goes?</h3>
                        <p class="text-slate-600 leading-relaxed">Yes! You can designate your donation to specific programs like school nutrition, community gardens, or emergency relief, or let us use it where needed most.</p>
                    </div>
                </div>

                <div class="text-center mt-16">
                    <a href="/faq" class="px-12 py-5 bg-emerald-600 text-white font-bold rounded-full shadow-2xl hover:bg-emerald-700 transition-all hover:scale-105 text-lg">
                        View All FAQs
                    </a>
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
