@extends('layouts.app')

@section('title', 'Blog - FeedTan Charity')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Our Blog</h1>
                <p class="text-xl opacity-90">Stories, updates, and insights from our charity work</p>
            </div>
        </div>
    </div>

    <!-- Blog Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Blog Posts -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Blog Post 1 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-64 bg-gradient-to-r from-emerald-400 to-teal-400"></div>
                    <div class="p-6">
                        <div class="text-sm text-emerald-600 font-semibold mb-2">March 18, 2024 • Community Impact</div>
                        <h2 class="text-2xl font-bold mb-3">How Your Donations Changed Lives This Month</h2>
                        <p class="text-gray-600 mb-4">Thanks to your generous support, we've been able to provide essential services to over 1,000 families this month. From food assistance to educational support, every donation makes a real difference...</p>
                        <a href="/blog/how-donations-changed-lives" class="text-emerald-600 font-semibold hover:text-emerald-700">
                            Read More →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-64 bg-gradient-to-r from-blue-400 to-indigo-400"></div>
                    <div class="p-6">
                        <div class="text-sm text-blue-600 font-semibold mb-2">March 15, 2024 • Success Stories</div>
                        <h2 class="text-2xl font-bold mb-3">Meet Sarah: A Success Story from Our Educational Program</h2>
                        <p class="text-gray-600 mb-4">Sarah joined our educational program six months ago with limited reading skills. Today, she's reading at grade level and helping other children in her community. Her journey inspires us every day...</p>
                        <a href="/blog/sarah-success-story" class="text-blue-600 font-semibold hover:text-blue-700">
                            Read More →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-64 bg-gradient-to-r from-purple-400 to-pink-400"></div>
                    <div class="p-6">
                        <div class="text-sm text-purple-600 font-semibold mb-2">March 10, 2024 • Updates</div>
                        <h2 class="text-2xl font-bold mb-3">New Partnership with Local Schools</h2>
                        <p class="text-gray-600 mb-4">We're excited to announce our new partnership with three local schools to provide free lunch programs for students in need. This initiative will ensure no child goes hungry during the school day...</p>
                        <a href="/blog/school-partnership" class="text-purple-600 font-semibold hover:text-purple-700">
                            Read More →
                        </a>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="space-y-8">
                <!-- Categories -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-emerald-600 hover:text-emerald-700">Community Impact</a></li>
                        <li><a href="#" class="text-blue-600 hover:text-blue-700">Success Stories</a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-700">Updates</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-700">Events</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-700">Volunteer Spotlight</a></li>
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold mb-4">Recent Posts</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="/blog/winter-campaign-results" class="text-gray-700 hover:text-emerald-600">
                                Winter Campaign Results
                            </a>
                            <div class="text-sm text-gray-500">March 5, 2024</div>
                        </li>
                        <li>
                            <a href="/blog/volunteer-appreciation" class="text-gray-700 hover:text-emerald-600">
                                Volunteer Appreciation Event
                            </a>
                            <div class="text-sm text-gray-500">February 28, 2024</div>
                        </li>
                        <li>
                            <a href="/blog/new-facility-opening" class="text-gray-700 hover:text-emerald-600">
                                New Community Center Opening
                            </a>
                            <div class="text-sm text-gray-500">February 20, 2024</div>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Signup -->
                <div class="bg-emerald-600 text-white rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-4">Stay Updated</h3>
                    <p class="mb-4">Get the latest news and updates delivered to your inbox.</p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Your email" class="w-full px-3 py-2 rounded text-gray-900">
                        <button type="submit" class="w-full bg-white text-emerald-600 px-4 py-2 rounded font-semibold hover:bg-gray-100 transition">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
