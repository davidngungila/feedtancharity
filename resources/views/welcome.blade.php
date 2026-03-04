<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FeedTan Charity - Together We Can Make a Difference</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        
        <!-- Styles -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                * { margin: 0; padding: 0; box-sizing: border-box; }
                :root { --primary: #2563eb; --secondary: #10b981; --accent: #f59e0b; --dark: #1f2937; --light: #f9fafb; }
                body { font-family: 'Inter', sans-serif; line-height: 1.6; color: var(--dark); }
                .hero-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
                .card-hover { transition: all 0.3s ease; }
                .card-hover:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
                .progress-bar { background: linear-gradient(90deg, #10b981 var(--progress), #e5e7eb var(--progress)); }
                .fade-in { animation: fadeIn 0.8s ease-in; }
                @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
                .pulse { animation: pulse 2s infinite; }
                @keyframes pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
            </style>
        @endif
    </head>
    <body class="bg-gray-50" x-data="{ 
        mobileMenu: false,
        currentCampaign: 0,
        donationAmount: 50,
        monthlyDonation: false,
        stats: {
            mealsServed: 125000,
            familiesHelped: 3500,
            volunteers: 1200,
            campaigns: 15
        }
    }">
    
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-heart text-red-500 text-2xl mr-2"></i>
                        <span class="font-bold text-xl text-gray-800">FeedTan Charity</span>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                    <a href="#campaigns" class="text-gray-700 hover:text-blue-600 transition">Campaigns</a>
                    <a href="#impact" class="text-gray-700 hover:text-blue-600 transition">Impact</a>
                    <a href="#volunteer" class="text-gray-700 hover:text-blue-600 transition">Volunteer</a>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition pulse">
                        Donate Now
                    </button>
                </div>
                
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div x-show="mobileMenu" x-transition class="md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded">Home</a>
                <a href="#about" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded">About</a>
                <a href="#campaigns" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded">Campaigns</a>
                <a href="#impact" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded">Impact</a>
                <a href="#volunteer" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded">Volunteer</a>
                <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Donate Now
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient min-h-screen flex items-center pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                        Together We Can <span class="text-yellow-300">End Hunger</span>
                    </h1>
                    <p class="text-xl text-white/90 mb-8">
                        Join our mission to provide nutritious meals to families in need. Every donation counts, every volunteer matters.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-300 transition transform hover:scale-105">
                            <i class="fas fa-heart mr-2"></i> Donate Today
                        </button>
                        <button class="bg-white/20 backdrop-blur text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/30 transition border border-white/30">
                            <i class="fas fa-hands-helping mr-2"></i> Volunteer
                        </button>
                    </div>
                    
                    <!-- Live Stats -->
                    <div class="grid grid-cols-2 gap-6 mt-12">
                        <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                            <div class="text-3xl font-bold text-yellow-300" x-text="stats.mealsServed.toLocaleString()"></div>
                            <div class="text-white/80">Meals Served</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                            <div class="text-3xl font-bold text-yellow-300" x-text="stats.familiesHelped.toLocaleString()"></div>
                            <div class="text-white/80">Families Helped</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="https://picsum.photos/seed/charity/600/400" alt="Happy Family" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-xl p-4 shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-100 rounded-full p-3">
                                <i class="fas fa-check text-green-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold">Tax Deductible</div>
                                <div class="text-sm text-gray-600">All donations are 501(c)(3)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">About FeedTan Charity</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    For over 15 years, we've been dedicated to fighting hunger and providing hope to families across the nation.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center card-hover p-6">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Nutritious Meals</h3>
                    <p class="text-gray-600">We provide balanced, nutritious meals to ensure proper health and development.</p>
                </div>
                
                <div class="text-center card-hover p-6">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Community Support</h3>
                    <p class="text-gray-600">Building strong communities through mutual support and collaboration.</p>
                </div>
                
                <div class="text-center card-hover p-6">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Education Programs</h3>
                    <p class="text-gray-600">Teaching sustainable practices and nutrition education for long-term impact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Campaigns Section -->
    <section id="campaigns" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Active Campaigns</h2>
                <p class="text-xl text-gray-600">Join our current initiatives and make an immediate impact</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Campaign 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://picsum.photos/seed/campaign1/400/250" alt="School Lunch Program" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">School Lunch Program</h3>
                        <p class="text-gray-600 mb-4">Providing daily nutritious meals to underprivileged children.</p>
                        
                        <div class="mb-4">
                            <div class="flex justify-between text-sm mb-1">
                                <span>Progress</span>
                                <span>75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">$37,500 of $50,000</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                Donate
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Campaign 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://picsum.photos/seed/campaign2/400/250" alt="Emergency Relief" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Emergency Relief Fund</h3>
                        <p class="text-gray-600 mb-4">Rapid response for families facing unexpected crises.</p>
                        
                        <div class="mb-4">
                            <div class="flex justify-between text-sm mb-1">
                                <span>Progress</span>
                                <span>45%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">$22,500 of $50,000</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                Donate
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Campaign 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <img src="https://picsum.photos/seed/campaign3/400/250" alt="Community Gardens" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Community Gardens</h3>
                        <p class="text-gray-600 mb-4">Creating sustainable food sources in local neighborhoods.</p>
                        
                        <div class="mb-4">
                            <div class="flex justify-between text-sm mb-1">
                                <span>Progress</span>
                                <span>90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">$45,000 of $50,000</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                Donate
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section id="impact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Impact</h2>
                <p class="text-xl text-gray-600">Numbers that show the difference we're making together</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2" x-text="stats.mealsServed.toLocaleString()"></div>
                    <div class="text-gray-600">Meals Served</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2" x-text="stats.familiesHelped.toLocaleString()"></div>
                    <div class="text-gray-600">Families Helped</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2" x-text="stats.volunteers.toLocaleString()"></div>
                    <div class="text-gray-600">Volunteers</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-600 mb-2" x-text="stats.campaigns"></div>
                    <div class="text-gray-600">Active Campaigns</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer Section -->
    <section id="volunteer" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Become a Volunteer</h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Join our team of dedicated volunteers and make a direct impact in your community.
                    </p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Flexible Scheduling</h4>
                                <p class="text-gray-600">Choose hours that work for your lifestyle</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Meaningful Work</h4>
                                <p class="text-gray-600">Make a real difference in people's lives</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Community Building</h4>
                                <p class="text-gray-600">Connect with like-minded individuals</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="bg-green-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-green-700 transition">
                        <i class="fas fa-hands-helping mr-2"></i> Sign Up to Volunteer
                    </button>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-semibold mb-6">Volunteer Application</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                            <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Areas of Interest</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option>Food Preparation</option>
                                <option>Delivery & Distribution</option>
                                <option>Community Outreach</option>
                                <option>Administrative Support</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Submit Application
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-heart text-red-500 text-2xl mr-2"></i>
                        <span class="font-bold text-xl">FeedTan Charity</span>
                    </div>
                    <p class="text-gray-400">
                        Fighting hunger and building hope in communities across the nation.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#about" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#campaigns" class="hover:text-white transition">Campaigns</a></li>
                        <li><a href="#impact" class="hover:text-white transition">Our Impact</a></li>
                        <li><a href="#volunteer" class="hover:text-white transition">Volunteer</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> (555) 123-4567</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@feedtan.org</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Charity Lane, Hope City</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 FeedTan Charity. All rights reserved. | 501(c)(3) Non-Profit Organization</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Animate numbers on scroll
        function animateNumbers() {
            const stats = document.querySelectorAll('[x-text*="toLocaleString"]');
            stats.forEach(stat => {
                const target = parseInt(stat.textContent.replace(/,/g, ''));
                let current = 0;
                const increment = target / 100;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current).toLocaleString();
                }, 20);
            });
        }
        
        // Trigger animation when impact section is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateNumbers();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        const impactSection = document.querySelector('#impact');
        if (impactSection) {
            observer.observe(impactSection);
        }
    </script>
</body>
</html>
