<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation - FeedTan Charity</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <style>
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .check-animation {
            animation: checkmark 0.6s ease-out;
        }

        @keyframes checkmark {
            0% { transform: scale(0) rotate(45deg); }
            50% { transform: scale(1.2) rotate(45deg); }
            100% { transform: scale(1) rotate(45deg); }
        }
    </style>
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased font-medium">
    @include('components.header')

    <main class="pt-24 lg:pt-28">
        <!-- Confirmation Section -->
        <section class="py-32 bg-gradient-to-br from-emerald-50 to-white">
            <div class="max-w-4xl mx-auto px-6">
                <div class="bg-white rounded-3xl shadow-2xl p-12 text-center fade-in">
                    <!-- Success Icon -->
                    <div class="w-24 h-24 mx-auto mb-8 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center check-animation">
                        <i class="ph-bold ph-check text-white text-5xl"></i>
                    </div>

                    <!-- Success Message -->
                    <h1 class="text-4xl md:text-5xl font-serif text-slate-900 mb-6 font-bold">Thank You!</h1>
                    <p class="text-xl text-slate-600 mb-12 leading-relaxed max-w-2xl mx-auto">
                        Your donation has been received and is being processed. Your generosity will help us continue our mission of growing hope and feeding futures.
                    </p>

                    <!-- Donation Details -->
                    <div class="bg-slate-50 rounded-2xl p-8 mb-12 text-left">
                        <h2 class="text-2xl font-bold text-slate-900 mb-6">Donation Details</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <div class="text-sm text-slate-600 mb-2">Donation Amount</div>
                                <div class="text-2xl font-bold text-emerald-600">
                                    @if(isset($donationDetails['currency']) && $donationDetails['currency'] === 'USD')
                                        ${{ number_format($donationDetails['amount'], 2) }}
                                    @else
                                        TSh {{ number_format($donationDetails['amount'], 0) }}
                                    @endif
                                </div>
                            </div>
                            <div>
                                <div class="text-sm text-slate-600 mb-2">Donation Type</div>
                                <div class="text-lg font-semibold text-slate-900">
                                    {{ ucfirst(str_replace('_', ' ', $donationDetails['donation_type'])) }}
                                </div>
                            </div>
                            <div>
                                <div class="text-sm text-slate-600 mb-2">Payment Method</div>
                                <div class="text-lg font-semibold text-slate-900">
                                    {{ ucfirst(str_replace('_', ' ', $donationDetails['payment_method'])) }}
                                </div>
                            </div>
                            <div>
                                <div class="text-sm text-slate-600 mb-2">Order Reference</div>
                                <div class="text-lg font-semibold text-slate-900">
                                    {{ $donationDetails['order_reference'] }}
                                </div>
                            </div>
                            @if(isset($donationDetails['donor_name']) && $donationDetails['donor_name'] !== 'Anonymous')
                            <div class="md:col-span-2">
                                <div class="text-sm text-slate-600 mb-2">Donor Name</div>
                                <div class="text-lg font-semibold text-slate-900">
                                    {{ $donationDetails['donor_name'] }}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Payment Status -->
                    @if(isset($donationDetails['payment_status']))
                    <div class="mb-12">
                        @if($donationDetails['payment_status'] === 'SUCCESS' || $donationDetails['payment_status'] === 'SETTLED')
                        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6">
                            <div class="flex items-center justify-center gap-3 text-emerald-800">
                                <i class="ph-bold ph-check-circle text-2xl"></i>
                                <span class="font-semibold">Payment Completed Successfully</span>
                            </div>
                        </div>
                        @elseif($donationDetails['payment_status'] === 'PROCESSING' || $donationDetails['payment_status'] === 'PENDING')
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                            <div class="flex items-center justify-center gap-3 text-blue-800">
                                <div class="animate-spin w-5 h-5 border-2 border-blue-600 border-t-transparent rounded-full"></div>
                                <span class="font-semibold">Payment is Processing</span>
                            </div>
                            <p class="text-sm text-blue-700 mt-3">
                                Please wait while we confirm your payment. This may take a few moments.
                            </p>
                        </div>
                        @else
                        <div class="bg-amber-50 border border-amber-200 rounded-xl p-6">
                            <div class="flex items-center justify-center gap-3 text-amber-800">
                                <i class="ph-bold ph-clock text-2xl"></i>
                                <span class="font-semibold">Payment Status: {{ ucfirst($donationDetails['payment_status']) }}</span>
                            </div>
                            <p class="text-sm text-amber-700 mt-3">
                                Your payment is being processed. You will receive a confirmation email once completed.
                            </p>
                        </div>
                        @endif
                    </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="/" class="px-8 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all">
                            <i class="ph-bold ph-house mr-3"></i>
                            Return Home
                        </a>
                        <a href="/impact" class="px-8 py-4 bg-white text-emerald-600 font-bold rounded-full border-2 border-emerald-600 hover:bg-emerald-50 transition-all">
                            <i class="ph-bold ph-chart-line mr-3"></i>
                            See Our Impact
                        </a>
                    </div>

                    <!-- Additional Information -->
                    <div class="mt-12 p-6 bg-slate-50 rounded-xl">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">What Happens Next?</h3>
                        <div class="grid md:grid-cols-3 gap-6 text-left">
                            <div class="text-center">
                                <div class="w-12 h-12 mx-auto mb-3 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <i class="ph-bold ph-envelope text-emerald-600 text-xl"></i>
                                </div>
                                <div class="font-semibold text-slate-900 mb-2">Email Confirmation</div>
                                <div class="text-sm text-slate-600">You'll receive a receipt and thank you email shortly</div>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 mx-auto mb-3 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <i class="ph-bold ph-bank text-emerald-600 text-xl"></i>
                                </div>
                                <div class="font-semibold text-slate-900 mb-2">Payment Processing</div>
                                <div class="text-sm text-slate-600">Your donation will be processed and allocated to your chosen cause</div>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 mx-auto mb-3 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <i class="ph-bold ph-heart text-emerald-600 text-xl"></i>
                                </div>
                                <div class="font-semibold text-slate-900 mb-2">Making Impact</div>
                                <div class="text-sm text-slate-600">Your generosity helps us nourish communities and cultivate futures</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Share Section -->
        <section class="py-24 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-serif text-slate-900 mb-8 font-bold">Share Your Generosity</h2>
                <p class="text-xl text-slate-600 mb-12 leading-relaxed">
                    Inspire others to join our mission by sharing your donation on social media.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <button onclick="shareOnSocial('facebook')" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition-all">
                        <i class="ph-bold ph-facebook-logo mr-2"></i>
                        Share on Facebook
                    </button>
                    <button onclick="shareOnSocial('twitter')" class="px-6 py-3 bg-sky-500 text-white font-semibold rounded-full hover:bg-sky-600 transition-all">
                        <i class="ph-bold ph-twitter-logo mr-2"></i>
                        Share on Twitter
                    </button>
                    <button onclick="shareOnSocial('linkedin')" class="px-6 py-3 bg-blue-700 text-white font-semibold rounded-full hover:bg-blue-800 transition-all">
                        <i class="ph-bold ph-linkedin-logo mr-2"></i>
                        Share on LinkedIn
                    </button>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script>
        function shareOnSocial(platform) {
            const url = window.location.href;
            const text = "I just donated to FeedTan Charity to help grow hope and feed futures. Join me in supporting sustainable food security initiatives!";
            
            let shareUrl;
            
            switch(platform) {
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                    break;
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}&url=${encodeURIComponent(url)}`;
                    break;
                case 'linkedin':
                    shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`;
                    break;
            }
            
            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        }

        // Auto-refresh payment status for processing payments
        @if(isset($donationDetails['payment_status']) && in_array($donationDetails['payment_status'], ['PROCESSING', 'PENDING']))
        let checkCount = 0;
        const maxChecks = 10;
        
        function checkPaymentStatus() {
            if (checkCount >= maxChecks) return;
            
            fetch(`/payment/status/{{ $donationDetails['order_reference'] }}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.data && data.data[0]) {
                        const status = data.data[0].status;
                        if (status !== 'PROCESSING' && status !== 'PENDING') {
                            // Reload page to show updated status
                            window.location.reload();
                        }
                    }
                })
                .catch(error => console.error('Error checking payment status:', error));
            
            checkCount++;
            setTimeout(checkPaymentStatus, 5000); // Check every 5 seconds
        }
        
        // Start checking after 3 seconds
        setTimeout(checkPaymentStatus, 3000);
        @endif
    </script>
</body>
</html>
