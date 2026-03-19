@extends('layouts.app')

@section('title', 'Events - FeedTan Charity')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6 animate-fade-in">Upcoming Events</h1>
                <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                    Join us for meaningful events that bring our community together and create lasting impact. Every event is an opportunity to make a difference.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="scrollToSection('upcoming')" class="bg-white text-emerald-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition transform hover:scale-105 shadow-xl">
                        📅 View Upcoming Events
                    </button>
                    <button onclick="scrollToSection('past')" class="bg-emerald-700 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-emerald-800 transition transform hover:scale-105 shadow-xl">
                        🏆 See Past Successes
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

    <!-- Event Statistics -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stat-card">
                    <div class="text-4xl font-bold text-emerald-600 mb-2" data-target="25">0</div>
                    <div class="text-gray-600">Events This Year</div>
                </div>
                <div class="stat-card">
                    <div class="text-4xl font-bold text-teal-600 mb-2" data-target="1500">0</div>
                    <div class="text-gray-600">Attendees</div>
                </div>
                <div class="stat-card">
                    <div class="text-4xl font-bold text-cyan-600 mb-2" data-target="100">0</div>
                    <div class="text-gray-600">Volunteers</div>
                </div>
                <div class="stat-card">
                    <div class="text-4xl font-bold text-blue-600 mb-2" data-target="50">0</div>
                    <div class="text-gray-600">Funds Raised ($K)</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section id="upcoming" class="py-16 bg-gradient-to-r from-emerald-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Upcoming Events</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Mark your calendar and join us for these upcoming opportunities to make a difference in our community.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-emerald-400 to-teal-400 relative">
                        <div class="absolute top-4 left-4 bg-white text-emerald-600 px-3 py-1 rounded-full text-sm font-semibold">
                            Featured
                        </div>
                        <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-emerald-600 px-3 py-2 rounded-lg">
                            <div class="text-xs font-semibold">MAR</div>
                            <div class="text-xl font-bold">25</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-emerald-600 font-semibold mb-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            March 25, 2024 • 6:00 PM
                        </div>
                        <h3 class="text-xl font-bold mb-3">Annual Charity Gala</h3>
                        <p class="text-gray-600 mb-4">Join us for an elegant evening of fundraising, dinner, and celebration as we support our community initiatives. Live auction and entertainment included.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            Grand Hotel, City Center
                        </div>
                        <div class="flex gap-2">
                            <button onclick="registerEvent('Annual Charity Gala')" class="flex-1 bg-emerald-600 text-white py-2 rounded-lg hover:bg-emerald-700 transition">
                                Register Now
                            </button>
                            <button onclick="eventDetails('Annual Charity Gala')" class="px-4 py-2 border border-emerald-600 text-emerald-600 rounded-lg hover:bg-emerald-50 transition">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-blue-400 to-indigo-400 relative">
                        <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-blue-600 px-3 py-2 rounded-lg">
                            <div class="text-xs font-semibold">APR</div>
                            <div class="text-xl font-bold">15</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-blue-600 font-semibold mb-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            April 15, 2024 • 9:00 AM
                        </div>
                        <h3 class="text-xl font-bold mb-3">Community Food Drive</h3>
                        <p class="text-gray-600 mb-4">Help us collect and distribute food to families in need across our community. Bring non-perishable food items or volunteer to help sort and distribute.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            Community Center, Main Street
                        </div>
                        <div class="flex gap-2">
                            <button onclick="registerEvent('Community Food Drive')" class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                                Volunteer
                            </button>
                            <button onclick="eventDetails('Community Food Drive')" class="px-4 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-400 relative">
                        <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-purple-600 px-3 py-2 rounded-lg">
                            <div class="text-xs font-semibold">MAY</div>
                            <div class="text-xl font-bold">10</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-purple-600 font-semibold mb-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            May 10, 2024 • 10:00 AM
                        </div>
                        <h3 class="text-xl font-bold mb-3">Educational Workshop</h3>
                        <p class="text-gray-600 mb-4">Free educational workshops for underprivileged children in our community. Topics include math, science, and reading comprehension.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            Learning Center, Oak Street
                        </div>
                        <div class="flex gap-2">
                            <button onclick="registerEvent('Educational Workshop')" class="flex-1 bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                                Register
                            </button>
                            <button onclick="eventDetails('Educational Workshop')" class="px-4 py-2 border border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-orange-400 to-red-400 relative">
                        <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-orange-600 px-3 py-2 rounded-lg">
                            <div class="text-xs font-semibold">JUN</div>
                            <div class="text-xl font-bold">18</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-orange-600 font-semibold mb-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            June 18, 2024 • 2:00 PM
                        </div>
                        <h3 class="text-xl font-bold mb-3">Summer Fun Fair</h3>
                        <p class="text-gray-600 mb-4">Family-friendly carnival with games, food, and entertainment. All proceeds support our summer meal program for children.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                                City Park, Recreation Area
                        </div>
                        <div class="flex gap-2">
                            <button onclick="registerEvent('Summer Fun Fair')" class="flex-1 bg-orange-600 text-white py-2 rounded-lg hover:bg-orange-700 transition">
                                Get Tickets
                            </button>
                            <button onclick="eventDetails('Summer Fun Fair')" class="px-4 py-2 border border-orange-600 text-orange-600 rounded-lg hover:bg-orange-50 transition">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 5 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-green-400 to-teal-400 relative">
                        <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-green-600 px-3 py-2 rounded-lg">
                            <div class="text-xs font-semibold">JUL</div>
                            <div class="text-xl font-bold">22</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-green-600 font-semibold mb-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            July 22, 2024 • 8:00 AM
                        </div>
                        <h3 class="text-xl font-bold mb-3">Community Clean-Up Day</h3>
                        <p class="text-gray-600 mb-4">Join us for a community-wide clean-up initiative. Help beautify our neighborhoods and public spaces. Supplies and refreshments provided.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            Multiple Locations
                        </div>
                        <div class="flex gap-2">
                            <button onclick="registerEvent('Community Clean-Up Day')" class="flex-1 bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                                Join Team
                            </button>
                            <button onclick="eventDetails('Community Clean-Up Day')" class="px-4 py-2 border border-green-600 text-green-600 rounded-lg hover:bg-green-50 transition">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 6 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="h-48 bg-gradient-to-r from-indigo-400 to-purple-400 relative">
                        <div class="absolute bottom-4 right-4 bg-white bg-opacity-90 text-indigo-600 px-3 py-2 rounded-lg">
                            <div class="text-xs font-semibold">AUG</div>
                            <div class="text-xl font-bold">14</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-indigo-600 font-semibold mb-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            August 14, 2024 • 5:00 PM
                        </div>
                        <h3 class="text-xl font-bold mb-3">Back to School Drive</h3>
                        <p class="text-gray-600 mb-4">Help us prepare children for the school year by donating school supplies or volunteering to distribute backpacks and supplies to families in need.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            Town Square, Downtown
                        </div>
                        <div class="flex gap-2">
                            <button onclick="registerEvent('Back to School Drive')" class="flex-1 bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                                Donate Items
                            </button>
                            <button onclick="eventDetails('Back to School Drive')" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 transition">
                                Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Events Section -->
    <section id="past" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Past Events & Success Stories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Celebrating our past achievements and the incredible impact we've made together in our community.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Success Story 1 -->
                <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl p-8 shadow-lg">
                    <div class="flex items-start mb-4">
                        <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            ✓
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Winter Charity Drive 2024</h3>
                            <div class="text-sm text-emerald-600 font-semibold mb-3">Completed: February 2024</div>
                            <p class="text-gray-700 mb-4">
                                Successfully raised funds to provide warm clothing, blankets, and nutritious meals for over 200 families during the winter season. Our community came together with incredible generosity.
                            </p>
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-emerald-600">200+</div>
                                    <div class="text-sm text-gray-600">Families Helped</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-emerald-600">$15K</div>
                                    <div class="text-sm text-gray-600">Raised</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-emerald-600">50</div>
                                    <div class="text-sm text-gray-600">Volunteers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Success Story 2 -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-8 shadow-lg">
                    <div class="flex items-start mb-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            ✓
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Back to School Campaign</h3>
                            <div class="text-sm text-blue-600 font-semibold mb-3">Completed: January 2024</div>
                            <p class="text-gray-700 mb-4">
                                Distributed school supplies, backpacks, and educational materials to over 500 children from low-income families, ensuring they start the school year prepared and confident.
                            </p>
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">500+</div>
                                    <div class="text-sm text-gray-600">Children Helped</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">$8K</div>
                                    <div class="text-sm text-gray-600">Supplies Value</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">30</div>
                                    <div class="text-sm text-gray-600">Partner Schools</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo Gallery -->
            <div class="bg-gray-50 rounded-xl p-8">
                <h3 class="text-2xl font-bold mb-6 text-center">Event Highlights</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-gray-200 rounded-lg h-32 flex items-center justify-center text-gray-500">
                        <span>📸 Charity Gala</span>
                    </div>
                    <div class="bg-gray-200 rounded-lg h-32 flex items-center justify-center text-gray-500">
                        <span>📸 Food Drive</span>
                    </div>
                    <div class="bg-gray-200 rounded-lg h-32 flex items-center justify-center text-gray-500">
                        <span>📸 Workshop</span>
                    </div>
                    <div class="bg-gray-200 rounded-lg h-32 flex items-center justify-center text-gray-500">
                        <span>📸 Fun Fair</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Updated on Events</h2>
            <p class="text-xl text-gray-600 mb-8">
                Get the latest event announcements and updates delivered to your inbox.
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

<!-- Event Registration Modal -->
<div id="eventModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-xl max-w-md w-full p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold">Event Registration</h3>
            <button onclick="closeEventForm()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <form class="space-y-4">
            <input type="hidden" id="eventName">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Number of Attendees</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5+</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Special Requirements</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500" rows="3" placeholder="Any dietary restrictions, accessibility needs, etc."></textarea>
            </div>
            <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700 transition">
                Complete Registration
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

// Event registration functions
function registerEvent(eventName) {
    document.getElementById('eventName').value = eventName;
    document.getElementById('eventModal').classList.remove('hidden');
}

function closeEventForm() {
    document.getElementById('eventModal').classList.add('hidden');
}

function eventDetails(eventName) {
    alert(`Detailed information for "${eventName}" would be displayed here. This would include full event description, schedule, speaker information, and more.`);
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
    
    // Handle event registration form submission
    document.querySelector('#eventModal form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for registering! You will receive a confirmation email shortly.');
        closeEventForm();
    });
});
</script>
@endsection
