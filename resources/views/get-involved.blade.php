@extends('layouts.app')

@section('title', 'Get Involved - FeedTan Charity')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6 animate-fade-in">Get Involved</h1>
                <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                    Join our community of changemakers. Every contribution, big or small, helps us create lasting impact in the lives of those we serve.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="scrollToSection('volunteer')" class="bg-white text-emerald-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition transform hover:scale-105 shadow-xl">
                        🤝 Become a Volunteer
                    </button>
                    <button onclick="scrollToSection('donate')" class="bg-emerald-700 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-emerald-800 transition transform hover:scale-105 shadow-xl">
                        💚 Make a Donation
                    </button>
                </div>
            </div>
        </div>
        <!-- Wave Animation -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </div>

    <!-- Impact Statistics -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stat-card">
                    <div class="text-4xl font-bold text-emerald-600 mb-2" data-target="5000">0</div>
                    <div class="text-gray-600">Lives Impacted</div>
                </div>
                <div class="stat-card">
                    <div class="text-4xl font-bold text-teal-600 mb-2" data-target="250">0</div>
                    <div class="text-gray-600">Volunteers</div>
                </div>
                <div class="stat-card">
                    <div class="text-4xl font-bold text-cyan-600 mb-2" data-target="50">0</div>
                    <div class="text-gray-600">Active Programs</div>
                </div>
                <div class="stat-card">
                    <div class="text-4xl font-bold text-blue-600 mb-2" data-target="15">0</div>
                    <div class="text-gray-600">Communities</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer Section -->
    <section id="volunteer" class="py-16 bg-gradient-to-r from-emerald-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Volunteer With Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Share your time and skills to make a real difference. We have opportunities for everyone, from one-time events to ongoing commitments.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Volunteer Card 1 -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl">🍎</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Food Distribution</h3>
                    <p class="text-gray-600 mb-4">Help us pack and distribute food to families in need. Weekly opportunities available.</p>
                    <ul class="text-sm text-gray-500 mb-4 space-y-1">
                        <li>• Every Saturday, 9 AM - 12 PM</li>
                        <li>• No experience needed</li>
                        <li>• Groups welcome</li>
                    </ul>
                    <button onclick="openVolunteerForm('Food Distribution')" class="w-full bg-emerald-600 text-white py-2 rounded-lg hover:bg-emerald-700 transition">
                        Sign Up
                    </button>
                </div>

                <!-- Volunteer Card 2 -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl">📚</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Education Support</h3>
                    <p class="text-gray-600 mb-4">Tutor children, help with homework, or assist with educational workshops.</p>
                    <ul class="text-sm text-gray-500 mb-4 space-y-1">
                        <li>• Flexible scheduling</li>
                        <li>• Teaching experience helpful</li>
                        <li>• Background check required</li>
                    </ul>
                    <button onclick="openVolunteerForm('Education Support')" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                        Sign Up
                    </button>
                </div>

                <!-- Volunteer Card 3 -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl">🎉</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Event Support</h3>
                    <p class="text-gray-600 mb-4">Help organize and run our charity events, fundraisers, and community outreach programs.</p>
                    <ul class="text-sm text-gray-500 mb-4 space-y-1">
                        <li>• Weekend availability</li>
                        <li>• Various skill levels needed</li>
                        <li>• Great for groups</li>
                    </ul>
                    <button onclick="openVolunteerForm('Event Support')" class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                        Sign Up
                    </button>
                </div>
            </div>

            <!-- Volunteer Benefits -->
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold mb-6 text-center">Why Volunteer With Us?</h3>
                <div class="grid md:grid-cols-4 gap-6 text-center">
                    <div>
                        <div class="text-3xl mb-2">🌟</div>
                        <h4 class="font-semibold mb-2">Make Impact</h4>
                        <p class="text-sm text-gray-600">See the direct impact of your work on families' lives</p>
                    </div>
                    <div>
                        <div class="text-3xl mb-2">👥</div>
                        <h4 class="font-semibold mb-2">Build Community</h4>
                        <p class="text-sm text-gray-600">Connect with like-minded people who care about giving back</p>
                    </div>
                    <div>
                        <div class="text-3xl mb-2">📈</div>
                        <h4 class="font-semibold mb-2">Develop Skills</h4>
                        <p class="text-sm text-gray-600">Gain valuable experience and develop new abilities</p>
                    </div>
                    <div>
                        <div class="text-3xl mb-2">🏆</div>
                        <h4 class="font-semibold mb-2">Get Recognition</h4>
                        <p class="text-sm text-gray-600">Receive certificates and acknowledgment for your service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section id="donate" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Make a Donation</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Your generosity fuels our mission. Every contribution helps us provide essential services to those who need them most.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Donation Options -->
                <div>
                    <h3 class="text-2xl font-bold mb-6">Choose Your Impact</h3>
                    
                    <!-- Donation Amounts -->
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <button onclick="selectAmount(25)" class="donation-amount-btn border-2 border-gray-300 rounded-lg p-4 hover:border-emerald-500 hover:bg-emerald-50 transition" data-amount="25">
                            <div class="text-2xl font-bold text-emerald-600">$25</div>
                            <div class="text-xs text-gray-600">Feeds a family</div>
                        </button>
                        <button onclick="selectAmount(50)" class="donation-amount-btn border-2 border-gray-300 rounded-lg p-4 hover:border-emerald-500 hover:bg-emerald-50 transition" data-amount="50">
                            <div class="text-2xl font-bold text-emerald-600">$50</div>
                            <div class="text-xs text-gray-600">School supplies</div>
                        </button>
                        <button onclick="selectAmount(100)" class="donation-amount-btn border-2 border-gray-300 rounded-lg p-4 hover:border-emerald-500 hover:bg-emerald-50 transition" data-amount="100">
                            <div class="text-2xl font-bold text-emerald-600">$100</div>
                            <div class="text-xs text-gray-600">Healthcare support</div>
                        </button>
                        <button onclick="selectAmount(250)" class="donation-amount-btn border-2 border-gray-300 rounded-lg p-4 hover:border-emerald-500 hover:bg-emerald-50 transition" data-amount="250">
                            <div class="text-2xl font-bold text-emerald-600">$250</div>
                            <div class="text-xs text-gray-600">Education program</div>
                        </button>
                        <button onclick="selectAmount(500)" class="donation-amount-btn border-2 border-gray-300 rounded-lg p-4 hover:border-emerald-500 hover:bg-emerald-50 transition" data-amount="500">
                            <div class="text-2xl font-bold text-emerald-600">$500</div>
                            <div class="text-xs text-gray-600">Community project</div>
                        </button>
                        <button onclick="selectAmount('custom')" class="donation-amount-btn border-2 border-gray-300 rounded-lg p-4 hover:border-emerald-500 hover:bg-emerald-50 transition" data-amount="custom">
                            <div class="text-2xl font-bold text-emerald-600">Other</div>
                            <div class="text-xs text-gray-600">Custom amount</div>
                        </button>
                    </div>

                    <!-- Custom Amount Input -->
                    <div id="customAmountDiv" class="hidden mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Custom Amount ($)</label>
                        <input type="number" id="customAmount" min="1" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Enter amount">
                    </div>

                    <!-- Recurring Options -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Donation Type</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="donationType" value="once" checked class="mr-2 text-emerald-600">
                                <span>One-time donation</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="donationType" value="monthly" class="mr-2 text-emerald-600">
                                <span>Monthly recurring (make a bigger impact)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Impact Calculator -->
                    <div class="bg-emerald-50 rounded-lg p-6">
                        <h4 class="font-semibold mb-3">Your Impact</h4>
                        <div id="impactInfo" class="text-sm text-gray-600">
                            Select an amount to see your potential impact
                        </div>
                    </div>
                </div>

                <!-- Donation Form -->
                <div>
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-2xl font-bold mb-6">Donation Details</h3>
                        <form id="donationForm" class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="255712345678">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Dedication (Optional)</label>
                                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" rows="3" placeholder="In honor of... or In memory of..."></textarea>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="anonymous" class="mr-2 text-emerald-600">
                                <label for="anonymous" class="text-sm text-gray-700">Make this donation anonymous</label>
                            </div>
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                <p class="text-sm text-yellow-800">
                                    <strong>Payment Method:</strong> We accept mobile money, bank transfers, and credit cards. You'll be redirected to secure payment after submitting this form.
                                </p>
                            </div>
                            <button type="submit" class="w-full bg-emerald-600 text-white py-3 rounded-lg font-semibold hover:bg-emerald-700 transition transform hover:scale-105">
                                Proceed to Payment
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate Partnership -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Corporate Partnership</h2>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">
                    Partner with us to create meaningful change in our community. We offer tailored partnership opportunities for businesses of all sizes.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="text-center">
                    <div class="text-4xl mb-4">🏢</div>
                    <h3 class="text-xl font-bold mb-2">Employee Engagement</h3>
                    <p class="opacity-90">Volunteer programs and team-building activities that make a difference</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">📈</div>
                    <h3 class="text-xl font-bold mb-2">Brand Visibility</h3>
                    <p class="opacity-90">Showcase your commitment to social responsibility</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="text-xl font-bold mb-2">Targeted Impact</h3>
                    <p class="opacity-90">Support specific programs aligned with your values</p>
                </div>
            </div>

            <div class="text-center">
                <button onclick="openPartnershipForm()" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition transform hover:scale-105">
                    Become a Partner
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Connected</h2>
            <p class="text-xl text-gray-600 mb-8">
                Get updates on our work, success stories, and opportunities to get involved.
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                <button type="submit" class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-700 transition">
                    Subscribe
                </button>
            </form>
        </div>
    </section>
</div>

<!-- Volunteer Modal -->
<div id="volunteerModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-xl max-w-md w-full p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold">Volunteer Registration</h3>
            <button onclick="closeVolunteerForm()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <form class="space-y-4">
            <input type="hidden" id="volunteerType">
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
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Availability</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                    <option>Weekdays</option>
                    <option>Weekends</option>
                    <option>Flexible</option>
                    <option>Specific events only</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tell us why you want to volunteer</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500" rows="3"></textarea>
            </div>
            <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                Submit Application
            </button>
        </form>
    </div>
</div>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}
.donation-amount-btn.selected {
    border-color: #10b981;
    background-color: #f0fdf4;
}
.stat-card {
    transition: transform 0.3s ease;
}
.stat-card:hover {
    transform: translateY(-5px);
}
</style>

<script>
// Smooth scroll to section
function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
}

// Donation amount selection
let selectedAmount = 0;
function selectAmount(amount) {
    selectedAmount = amount;
    
    // Update UI
    document.querySelectorAll('.donation-amount-btn').forEach(btn => {
        btn.classList.remove('selected');
    });
    document.querySelector(`[data-amount="${amount}"]`).classList.add('selected');
    
    // Show/hide custom amount input
    const customDiv = document.getElementById('customAmountDiv');
    if (amount === 'custom') {
        customDiv.classList.remove('hidden');
    } else {
        customDiv.classList.add('hidden');
        updateImpactInfo(amount);
    }
}

// Update impact information
function updateImpactInfo(amount) {
    const impactInfo = document.getElementById('impactInfo');
    const impacts = {
        25: '🍎 Provides a week\'s worth of nutritious meals for a family of 4',
        50: '📚 Supplies school materials for 2 children for one month',
        100: '🏥 Covers basic healthcare needs for 3 families',
        250: '🎓 Sponsors one child\'s education for 3 months',
        500: '🏘️ Funds a small community improvement project'
    };
    
    if (amount && impacts[amount]) {
        impactInfo.innerHTML = `
            <div class="font-semibold text-emerald-700 mb-2">With $${amount}, you can:</div>
            <div>${impacts[amount]}</div>
        `;
    }
}

// Custom amount input change
document.getElementById('customAmount')?.addEventListener('input', function(e) {
    const amount = parseInt(e.target.value);
    if (amount > 0) {
        updateImpactInfo(amount);
    }
});

// Volunteer form functions
function openVolunteerForm(type) {
    document.getElementById('volunteerType').value = type;
    document.getElementById('volunteerModal').classList.remove('hidden');
}

function closeVolunteerForm() {
    document.getElementById('volunteerModal').classList.add('hidden');
}

// Partnership form
function openPartnershipForm() {
    alert('Partnership form would open here. This would collect company information and contact details.');
}

// Animated statistics
function animateStats() {
    const stats = document.querySelectorAll('.stat-card [data-target]');
    stats.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
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

// Initialize animations when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Start stats animation when page loads
    setTimeout(animateStats, 500);
    
    // Handle donation form submission
    document.getElementById('donationForm')?.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your donation! You would be redirected to secure payment.');
    });
});
</script>
@endsection
    
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
