@extends('layouts.app')

@section('title', 'Events - FeedTan Charity')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Upcoming Events</h1>
                <p class="text-xl opacity-90">Join us in making a difference through our charity events</p>
            </div>
        </div>
    </div>

    <!-- Events Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-emerald-400 to-teal-400"></div>
                <div class="p-6">
                    <div class="text-sm text-emerald-600 font-semibold mb-2">March 25, 2024</div>
                    <h3 class="text-xl font-bold mb-2">Annual Charity Gala</h3>
                    <p class="text-gray-600 mb-4">Join us for an evening of fundraising and celebration as we support our community initiatives.</p>
                    <button class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 transition">
                        Learn More
                    </button>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-blue-400 to-indigo-400"></div>
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">April 15, 2024</div>
                    <h3 class="text-xl font-bold mb-2">Community Food Drive</h3>
                    <p class="text-gray-600 mb-4">Help us collect and distribute food to families in need across our community.</p>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        Volunteer
                    </button>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-400"></div>
                <div class="p-6">
                    <div class="text-sm text-purple-600 font-semibold mb-2">May 10, 2024</div>
                    <h3 class="text-xl font-bold mb-2">Educational Workshop</h3>
                    <p class="text-gray-600 mb-4">Free educational workshops for underprivileged children in our community.</p>
                    <button class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">
                        Register
                    </button>
                </div>
            </div>
        </div>

        <!-- Past Events Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-center mb-8">Past Events</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold mb-2">Winter Charity Drive 2024</h3>
                    <p class="text-gray-600 mb-4">Successfully raised funds to provide warm clothing and meals for 200+ families.</p>
                    <div class="text-sm text-gray-500">Completed: February 2024</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold mb-2">Back to School Campaign</h3>
                    <p class="text-gray-600 mb-4">Distributed school supplies to over 500 children in our community.</p>
                    <div class="text-sm text-gray-500">Completed: January 2024</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
