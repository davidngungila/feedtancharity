@extends('layouts.app')

@section('title', $slug . ' - FeedTan Charity Blog')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
                <p class="text-xl opacity-90">Community Stories and Updates</p>
            </div>
        </div>
    </div>

    <!-- Blog Post Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Featured Image -->
            <div class="h-96 bg-gradient-to-r from-emerald-400 to-teal-400"></div>
            
            <!-- Article Content -->
            <div class="p-8">
                <!-- Article Meta -->
                <div class="flex items-center text-sm text-gray-600 mb-6">
                    <span class="mr-4">📅 March 18, 2024</span>
                    <span class="mr-4">👤 FeedTan Team</span>
                    <span class="mr-4">🏷️ Community Impact</span>
                    <span>⏱️ 5 min read</span>
                </div>

                <!-- Article Body -->
                <div class="prose prose-lg max-w-none">
                    <h2 class="text-2xl font-bold mb-4">Making a Difference Together</h2>
                    <p class="text-gray-600 mb-6">
                        This month has been incredible for our community thanks to your unwavering support. Through your generous donations and volunteer efforts, we've been able to reach more families than ever before, providing essential services that truly change lives.
                    </p>

                    <h3 class="text-xl font-bold mb-3">Food Security Initiative</h3>
                    <p class="text-gray-600 mb-6">
                        Our food security program has served over 500 families this month, ensuring that no one in our community goes to bed hungry. We've distributed fresh produce, pantry staples, and prepared meals to families facing food insecurity.
                    </p>

                    <blockquote class="border-l-4 border-emerald-600 pl-4 my-6 italic text-gray-700">
                        "The food assistance we received helped us get through a difficult time. We're so grateful for the support from FeedTan Charity." - Maria, Community Member
                    </blockquote>

                    <h3 class="text-xl font-bold mb-3">Educational Support</h3>
                    <p class="text-gray-600 mb-6">
                        Our educational programs continue to make a significant impact. We've provided school supplies to 200 children and offered tutoring services to help students succeed academically. The results have been remarkable, with improved grades and increased confidence among participants.
                    </p>

                    <!-- Call to Action -->
                    <div class="bg-emerald-50 border-l-4 border-emerald-600 p-6 my-8">
                        <h3 class="text-xl font-bold mb-3">You Can Help Too!</h3>
                        <p class="text-gray-700 mb-4">
                            Every donation, no matter the size, helps us continue our mission. Consider making a contribution today to support families in need.
                        </p>
                        <div class="flex space-x-4">
                            <a href="/donate" class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-700 transition">
                                Donate Now
                            </a>
                            <a href="/volunteer" class="border border-emerald-600 text-emerald-600 px-6 py-3 rounded-lg font-semibold hover:bg-emerald-50 transition">
                                Volunteer
                            </a>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold mb-3">Looking Ahead</h3>
                    <p class="text-gray-600 mb-6">
                        As we look to the coming months, we're excited to expand our programs and reach even more families. With your continued support, we can make an even greater impact in our community.
                    </p>
                </div>

                <!-- Share Section -->
                <div class="border-t mt-8 pt-8">
                    <h3 class="text-lg font-bold mb-4">Share This Story</h3>
                    <div class="flex space-x-4">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Share on Facebook
                        </button>
                        <button class="bg-sky-500 text-white px-4 py-2 rounded hover:bg-sky-600 transition">
                            Share on Twitter
                        </button>
                        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                            Share on WhatsApp
                        </button>
                    </div>
                </div>

                <!-- Related Posts -->
                <div class="border-t mt-8 pt-8">
                    <h3 class="text-lg font-bold mb-4">Related Stories</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">Winter Campaign Success</h4>
                            <p class="text-sm text-gray-600 mb-2">How we helped 300 families during the winter months.</p>
                            <a href="/blog/winter-campaign" class="text-emerald-600 text-sm font-semibold">Read More →</a>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">Volunteer Spotlight</h4>
                            <p class="text-sm text-gray-600 mb-2">Meet the amazing volunteers who make our work possible.</p>
                            <a href="/blog/volunteer-spotlight" class="text-emerald-600 text-sm font-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection
