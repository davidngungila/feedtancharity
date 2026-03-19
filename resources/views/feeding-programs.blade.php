<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenuOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feeding Programs - FeedTan Hope Foundation | Nourishing Communities, Changing Lives</title>
    <meta name="description" content="FeedTan's comprehensive feeding programs provide nutritious meals to children, families, and communities in need. Join us in fighting hunger and building healthier futures.">
    
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
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #064e3b 0%, #10b981 50%, #34d399 100%);
        }
        .program-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .program-card:hover {
            transform: translateY(-5px);
            border-color: #10b981;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        .swiper {
            width: 100%;
            height: 400px;
        }
        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
    @include('components.header')

    <main class="pt-24 lg:pt-28">
        <!-- Hero Section -->
        <section class="relative py-20 hero-gradient text-white overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Feeding Programs" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/90 to-emerald-600/80"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center animate-fade-in">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <i class="ph ph-bowl-food mr-2"></i>
                        <span class="text-sm font-semibold">Core Program</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 font-serif">Feeding Programs</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                        Providing nutritious meals and fighting hunger in our communities through comprehensive feeding programs that nourish bodies and transform lives.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="scrollToSection('programs')" class="bg-white text-emerald-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                            Explore Programs
                        </button>
                        <button onclick="scrollToSection('contribute')" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-emerald-600 transition">
                            Contribute Now
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Statistics -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">50,000+</div>
                        <div class="text-gray-600">Meals Served Monthly</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">25</div>
                        <div class="text-gray-600">School Locations</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-purple-600 mb-2">10,000+</div>
                        <div class="text-gray-600">Children Fed Daily</div>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl font-bold text-orange-600 mb-2">100%</div>
                        <div class="text-gray-600">Nutritional Standards</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Programs Section -->
        <section id="programs" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Our Feeding Programs</h2>
                    <p class="text-xl text-gray-600">Comprehensive nutrition solutions for every community need</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- School Nutrition Program -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-graduation-cap text-emerald-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">School Nutrition</h3>
                        <p class="text-gray-600 mb-6">Daily nutritious meals for students in 25 schools, ensuring children can focus on learning while receiving proper nutrition.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Daily breakfast & lunch
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Nutritionally balanced meals
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-emerald-600 mr-2"></i>
                                Local sourcing support
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('school-nutrition')" class="w-full bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                            Support This Program
                        </button>
                    </div>

                    <!-- Daily Meal Programs -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-restaurant text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Daily Meal Programs</h3>
                        <p class="text-gray-600 mb-6">Community kitchens serving hot meals to families in need, with special programs for elderly, disabled, and vulnerable populations.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-blue-600 mr-2"></i>
                                5 community kitchens
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-blue-600 mr-2"></i>
                                Home delivery service
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-blue-600 mr-2"></i>
                                Cultural meal preferences
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('daily-meals')" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Support This Program
                        </button>
                    </div>

                    <!-- Weekend Backpacks -->
                    <div class="program-card bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ph ph-backpack text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Weekend Backpacks</h3>
                        <p class="text-gray-600 mb-6">Food-filled backpacks sent home with students on Fridays to ensure they have nutritious meals throughout the weekend.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                2,000+ backpacks weekly
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Nutritious non-perishable foods
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="ph ph-check-circle text-purple-600 mr-2"></i>
                                Parent education included
                            </li>
                        </ul>
                        <button onclick="contributeToProgram('weekend-backpacks')" class="w-full bg-purple-600 text-white py-2 rounded-lg font-semibold hover:bg-purple-700 transition">
                            Support This Program
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Success Stories</h2>
                    <p class="text-xl text-gray-600">Real lives transformed through our feeding programs</p>
                </div>
                
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Success Story" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "The school nutrition program changed my daughter's life. She's healthier, more focused in class, and has hope for a better future."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">Sarah M.</div>
                                        <div class="text-gray-600">Parent, Dar es Salaam</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Success Story" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "The weekend backpack program ensures my children have food when I can't provide. It's a blessing for our family."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">James K.</div>
                                        <div class="text-gray-600">Father of 3, Arusha</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 max-w-2xl mx-auto shadow-lg">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Success Story" class="w-full h-48 object-cover rounded-lg mb-6">
                                <blockquote class="text-lg text-gray-700 mb-4 italic">
                                    "Daily meals at the community kitchen gave me strength to find work and rebuild my life."
                                </blockquote>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <div class="font-semibold">Maria L.</div>
                                        <div class="text-gray-600">Community Member, Mwanza</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- How to Help -->
        <section id="contribute" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">How You Can Help</h2>
                    <p class="text-xl text-gray-600">Multiple ways to make a difference in fighting hunger</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-hand-heart text-emerald-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Donate Funds</h3>
                        <p class="text-gray-600 mb-4">Your financial contribution helps us purchase nutritious food and maintain our feeding programs.</p>
                        <button onclick="openDonationModal('funds')" class="bg-emerald-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                            Donate Now
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-package text-blue-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Donate Food</h3>
                        <p class="text-gray-600 mb-4">Non-perishable food items help us stock our community kitchens and weekend backpacks.</p>
                        <button onclick="openDonationModal('food')" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Donate Food
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ph ph-users text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Volunteer</h3>
                        <p class="text-gray-600 mb-4">Join our team of volunteers helping prepare and serve meals to communities in need.</p>
                        <button onclick="openDonationModal('volunteer')" class="bg-purple-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-purple-700 transition">
                            Volunteer
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 font-serif">Our Impact in Action</h2>
                    <p class="text-xl text-gray-600">See how we're making a difference in communities</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="School Nutrition" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Community Kitchen" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Volunteers" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Happy Children" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <!-- Contribution Modal -->
    <div id="contributionModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Make a Contribution</h3>
                <button onclick="closeContributionModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="ph ph-x text-2xl"></i>
                </button>
            </div>
            <form class="space-y-4">
                <input type="hidden" id="contributionType">
                <input type="hidden" id="contributionProgram">
                
                <div id="fundsContribution" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Donation Amount</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                            <option value="25">$25 - Feeds 10 children</option>
                            <option value="50">$50 - Feeds 20 children</option>
                            <option value="100">$100 - Feeds 40 children</option>
                            <option value="250">$250 - Feeds 100 children</option>
                            <option value="custom">Custom Amount</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Custom Amount</label>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500" placeholder="Enter amount">
                    </div>
                </div>
                
                <div id="foodContribution" class="space-y-4 hidden">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Food Items</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Rice (5kg bags)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Beans (2kg bags)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Cooking Oil (1L bottles)</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div id="volunteerContribution" class="space-y-4 hidden">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Volunteer Role</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                            <option value="kitchen">Kitchen Helper</option>
                            <option value="delivery">Food Delivery</option>
                            <option value="packaging">Weekend Backpack Packaging</option>
                            <option value="fundraising">Fundraising Support</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                    <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                    <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                    <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>
                
                <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                    Submit Contribution
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
            },
        });

        // Smooth scroll to section
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }

        // Contribution functions
        function contributeToProgram(program) {
            document.getElementById('contributionProgram').value = program;
            document.getElementById('contributionType').value = 'funds';
            updateContributionForm('funds');
            document.getElementById('contributionModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function openDonationModal(type) {
            document.getElementById('contributionType').value = type;
            updateContributionForm(type);
            document.getElementById('contributionModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function updateContributionForm(type) {
            // Hide all contribution sections
            document.getElementById('fundsContribution').classList.add('hidden');
            document.getElementById('foodContribution').classList.add('hidden');
            document.getElementById('volunteerContribution').classList.add('hidden');
            
            // Show relevant section
            if (type === 'funds') {
                document.getElementById('fundsContribution').classList.remove('hidden');
            } else if (type === 'food') {
                document.getElementById('foodContribution').classList.remove('hidden');
            } else if (type === 'volunteer') {
                document.getElementById('volunteerContribution').classList.remove('hidden');
            }
        }

        function closeContributionModal() {
            document.getElementById('contributionModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('contributionModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeContributionModal();
            }
        });

        // Form submission
        document.querySelector('#contributionModal form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your contribution! We will contact you shortly with next steps.');
            closeContributionModal();
        });

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
