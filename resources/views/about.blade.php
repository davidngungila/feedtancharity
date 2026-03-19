<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About FeedTan Hope Foundation | Restoring Hope, Building Futures</title>
    <meta name="description" content="FeedTan Hope Foundation is a non-profit charitable organization dedicated to improving lives across Tanzania through food assistance, emergency relief, and housing support.">
    <link rel="icon" href="{{ asset('charity_logo_icon.png') }}" type="image/png">
    
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
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #064e3b 0%, #10b981 50%, #34d399 100%);
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
    @include('components.header')

    <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-20 hero-gradient text-white overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center animate-fade-in">
                    <div class="flex justify-center mb-8">
                        <div class="w-32 h-32 bg-white rounded-2xl p-4 shadow-2xl">
                            <img src="{{ asset('charity_logo_icon.png') }}" alt="FeedTan Hope Foundation Logo" class="w-full h-full object-contain">
                        </div>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 font-serif">About FeedTan Hope Foundation</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-4xl mx-auto">
                        Restoring hope, dignity, and opportunity for vulnerable individuals and families across Tanzania through compassionate support and sustainable solutions.
                    </p>
                </div>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-fade-in">
                        <h2 class="text-4xl font-bold mb-6 font-serif">Who We Are</h2>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            FeedTan Hope Foundation is a non-profit charitable organization dedicated to improving the lives of vulnerable individuals and families across Tanzania. Established as the humanitarian arm of FeedTan Community Microfinance Group, the foundation focuses on addressing critical social challenges including hunger, poverty, lack of shelter, and limited access to basic needs.
                        </p>
                        <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                            Our mission is to restore hope, dignity, and opportunity by providing immediate support while building sustainable solutions for long-term community development.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ url('/donate') }}" class="px-8 py-3 bg-emerald-600 text-white rounded-lg font-semibold hover:bg-emerald-700 transition">
                                Support Our Mission
                            </a>
                            <a href="{{ url('/contact') }}" class="px-8 py-3 border-2 border-emerald-600 text-emerald-600 rounded-lg font-semibold hover:bg-emerald-50 transition">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="animate-fade-in">
                        <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Our Work in Action" class="rounded-2xl shadow-xl w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg feature-card">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                            <i class="ph ph-target text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 font-serif">🎯 Our Mission</h3>
                        <p class="text-gray-700 leading-relaxed">
                            To empower vulnerable communities through food assistance, emergency relief, and housing support, ensuring every individual has the opportunity to live a healthy and dignified life.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg feature-card">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <i class="ph ph-eye text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 font-serif">🌟 Our Vision</h3>
                        <p class="text-gray-700 leading-relaxed">
                            A Tanzania where no family goes hungry, no child is left behind, and everyone has a safe place to call home.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Do -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">💙 What We Do</h2>
                    <p class="text-xl text-gray-600">We implement impactful programs that respond to both urgent needs and long-term development</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Feeding Programs -->
                    <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl p-8 feature-card">
                        <div class="w-16 h-16 bg-emerald-600 rounded-full flex items-center justify-center mb-6">
                            <i class="ph ph-bowl-food text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">🍽️ Feeding Programs</h3>
                        <p class="text-gray-700 mb-6">
                            Providing daily meals, school feeding initiatives, and food support to families facing hunger.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Daily meal programs
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                School nutrition initiatives
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Weekend food packages
                            </li>
                        </ul>
                    </div>

                    <!-- Emergency Support -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 feature-card">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-6">
                            <i class="ph ph-first-aid-kit text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">🚨 Emergency Support</h3>
                        <p class="text-gray-700 mb-6">
                            Responding to disasters and crises with food aid, emergency supplies, and rapid assistance.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-blue-600 mr-2"></i>
                                24/7 emergency response
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-blue-600 mr-2"></i>
                                Disaster relief efforts
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-blue-600 mr-2"></i>
                                Emergency supply distribution
                            </li>
                        </ul>
                    </div>

                    <!-- Housing Support -->
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 feature-card">
                        <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mb-6">
                            <i class="ph ph-house text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">🏠 Housing Support</h3>
                        <p class="text-gray-700 mb-6">
                            Building and improving homes for families living in unsafe or unstable conditions.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Shelter programs
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Home construction
                            </li>
                            <li class="flex items-center">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Housing assistance
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Approach -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">🤝 Our Approach</h2>
                    <p class="text-xl text-gray-600">We believe in combining compassion with sustainability</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-xl p-6 text-center feature-card">
                        <div class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-heart text-emerald-600 text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Deliver Immediate Relief</h4>
                        <p class="text-sm text-gray-600">Rapid response to those in urgent need</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 text-center feature-card">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-graduation-cap text-blue-600 text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Empower Communities</h4>
                        <p class="text-sm text-gray-600">Through knowledge and resources</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 text-center feature-card">
                        <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-users text-purple-600 text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Work With Local Leaders</h4>
                        <p class="text-sm text-gray-600">And community partners</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 text-center feature-card">
                        <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-shield-check text-orange-600 text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Promote Dignity</h4>
                        <p class="text-sm text-gray-600">Transparency and accountability</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Commitment -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gradient-to-r from-emerald-600 to-teal-600 rounded-3xl p-12 text-white">
                    <div class="grid lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-4xl font-bold mb-6 font-serif">🌱 Our Commitment</h2>
                            <p class="text-xl mb-6 leading-relaxed opacity-90">
                                FeedTan Hope Foundation is committed to creating lasting impact, not just temporary aid. We strive to build stronger, healthier, and self-reliant communities across Tanzania.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ url('/feeding-programs') }}" class="px-8 py-3 bg-white text-emerald-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                                    Our Programs
                                </a>
                                <a href="{{ url('/donate') }}" class="px-8 py-3 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-emerald-600 transition">
                                    Donate Now
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold mb-2">50,000+</div>
                                <div class="text-emerald-100">Lives Impacted</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold mb-2">25+</div>
                                <div class="text-emerald-100">Communities</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold mb-2">15+</div>
                                <div class="text-emerald-100">Years Service</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold mb-2">100%</div>
                                <div class="text-emerald-100">Dedication</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-bold mb-6 font-serif">Join Us in Making a Difference</h2>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Together, we can restore hope and build brighter futures for vulnerable communities across Tanzania. Your support makes our work possible.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/donate') }}" class="px-8 py-4 bg-emerald-600 text-white rounded-lg font-semibold hover:bg-emerald-700 transition text-lg">
                        Donate Today
                    </a>
                    <a href="{{ url('/get-involved') }}" class="px-8 py-4 border-2 border-emerald-600 text-emerald-600 rounded-lg font-semibold hover:bg-emerald-50 transition text-lg">
                        Get Involved
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script>
        // Add animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
