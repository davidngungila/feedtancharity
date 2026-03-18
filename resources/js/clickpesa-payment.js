class ClickPesaPayment {
    constructor() {
        this.apiBaseUrl = '/api/payments';
        this.isProcessing = false;
    }

    /**
     * Process donation payment
     */
    async processDonation(formData) {
        if (this.isProcessing) {
            throw new Error('Payment is already being processed');
        }

        this.isProcessing = true;

        try {
            const response = await fetch(`${this.apiBaseUrl}/donate`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                },
                body: JSON.stringify(formData)
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Payment processing failed');
            }

            return data;
        } catch (error) {
            console.error('Payment processing error:', error);
            throw error;
        } finally {
            this.isProcessing = false;
        }
    }

    /**
     * Check payment status
     */
    async checkPaymentStatus(orderReference) {
        try {
            const response = await fetch(`${this.apiBaseUrl}/status/${orderReference}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                }
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Failed to check payment status');
            }

            return data;
        } catch (error) {
            console.error('Payment status check error:', error);
            throw error;
        }
    }

    /**
     * Poll payment status until completion
     */
    async pollPaymentStatus(orderReference, maxAttempts = 20, interval = 3000) {
        let attempts = 0;

        return new Promise((resolve, reject) => {
            const poll = async () => {
                attempts++;

                try {
                    const result = await this.checkPaymentStatus(orderReference);
                    
                    // Check if payment is complete (success, settled, or failed)
                    if (result.data && ['success', 'settled', 'failed', 'cancelled'].includes(result.data.status.toLowerCase())) {
                        resolve(result);
                        return;
                    }

                    // Continue polling if not complete and within max attempts
                    if (attempts < maxAttempts) {
                        setTimeout(poll, interval);
                    } else {
                        reject(new Error('Payment status check timeout'));
                    }
                } catch (error) {
                    if (attempts < maxAttempts) {
                        setTimeout(poll, interval);
                    } else {
                        reject(error);
                    }
                }
            };

            poll();
        });
    }

    /**
     * Format amount with currency
     */
    formatAmount(amount, currency = 'TZS') {
        const symbols = {
            'TZS': 'TSh',
            'USD': '$',
            'EUR': '€'
        };

        const symbol = symbols[currency] || currency;
        return `${symbol}${parseFloat(amount).toLocaleString()}`;
    }

    /**
     * Validate phone number
     */
    validatePhoneNumber(phoneNumber) {
        // Remove all non-digit characters
        const cleaned = phoneNumber.replace(/\D/g, '');
        
        // Check if it's a valid Tanzania number (9-12 digits)
        if (cleaned.length < 9 || cleaned.length > 12) {
            return false;
        }

        return true;
    }

    /**
     * Show loading state
     */
    showLoading(button, originalText) {
        button.disabled = true;
        button.innerHTML = `
            <svg class="animate-spin h-5 w-5 mr-3 inline" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Processing...
        `;
    }

    /**
     * Hide loading state
     */
    hideLoading(button, originalText) {
        button.disabled = false;
        button.textContent = originalText;
    }

    /**
     * Show notification
     */
    showNotification(message, type = 'info') {
        // Remove existing notifications
        const existing = document.querySelector('.payment-notification');
        if (existing) {
            existing.remove();
        }

        const notification = document.createElement('div');
        notification.className = `payment-notification fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-md transform transition-all duration-300 translate-x-full`;
        
        const colors = {
            success: 'bg-green-500 text-white',
            error: 'bg-red-500 text-white',
            info: 'bg-blue-500 text-white',
            warning: 'bg-yellow-500 text-white'
        };

        notification.classList.add(...colors[type].split(' '));
        notification.innerHTML = `
            <div class="flex items-center">
                <div class="flex-1">
                    <p class="font-medium">${message}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        `;

        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);

        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    }

    /**
     * Show payment modal
     */
    showPaymentModal(content) {
        // Remove existing modal
        const existing = document.querySelector('.payment-modal');
        if (existing) {
            existing.remove();
        }

        const modal = document.createElement('div');
        modal.className = 'payment-modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50';
        modal.innerHTML = `
            <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 transform transition-all duration-300 scale-95">
                <div class="text-center">
                    ${content}
                </div>
            </div>
        `;

        document.body.appendChild(modal);

        // Animate in
        setTimeout(() => {
            modal.querySelector('.bg-white').classList.remove('scale-95');
            modal.querySelector('.bg-white').classList.add('scale-100');
        }, 100);

        // Close on backdrop click
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                this.closePaymentModal();
            }
        });
    }

    /**
     * Close payment modal
     */
    closePaymentModal() {
        const modal = document.querySelector('.payment-modal');
        if (modal) {
            modal.querySelector('.bg-white').classList.add('scale-95');
            modal.querySelector('.bg-white').classList.remove('scale-100');
            setTimeout(() => modal.remove(), 300);
        }
    }

    /**
     * Initialize payment form
     */
    initializePaymentForm(formId) {
        const form = document.getElementById(formId);
        if (!form) return;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;

            try {
                // Get form data for streamlined mobile money form
                const data = {};
                
                // Get amount - try visible input first, then hidden
                const visibleAmountInput = form.querySelector('input[name="amount"]:not([type="hidden"])');
                const hiddenAmountInput = form.querySelector('input[name="amount"][type="hidden"]');
                
                if (visibleAmountInput && visibleAmountInput.value) {
                    data.amount = visibleAmountInput.value;
                } else if (hiddenAmountInput && hiddenAmountInput.value) {
                    data.amount = hiddenAmountInput.value;
                } else {
                    data.amount = '';
                }
                
                // Get form fields - simplified for auto-detect
                data.donation_type = 'one_time'; // Always one-time
                data.payment_method = 'ussd'; // Always USSD
                data.mobile_provider = 'auto'; // Auto-detect provider
                data.donor_name = form.querySelector('input[name="donor_name"]')?.value || '';
                data.donor_email = form.querySelector('input[name="donor_email"]')?.value || '';
                data.phone_number = form.querySelector('input[name="phone_number"]')?.value || '';
                
                // Fixed currency and country for Tanzania
                data.currency = 'TZS';
                data.country = 'Tanzania';
                
                console.log('Simplified Tanzania Mobile Money form data:', data);

                // Validate required fields
                if (!data.amount || parseFloat(data.amount) <= 0 || isNaN(parseFloat(data.amount))) {
                    this.showNotification('Please enter a valid donation amount', 'error');
                    return;
                }
                
                if (!data.donor_name || data.donor_name.trim() === '') {
                    this.showNotification('Please enter your full name', 'error');
                    return;
                }
                
                if (!data.donor_email || data.donor_email.trim() === '') {
                    this.showNotification('Please enter your email address', 'error');
                    return;
                }
                
                // Validate phone number for mobile money
                if (!data.phone_number || data.phone_number.trim() === '') {
                    this.showNotification('Please enter your mobile money phone number', 'error');
                    return;
                }
                
                if (!this.validatePhoneNumber(data.phone_number)) {
                    this.showNotification('Please enter a valid Tanzania phone number (e.g., 255712345678)', 'error');
                    return;
                }

                // Show loading
                this.showLoading(submitButton, originalText);

                // Process payment
                const result = await this.processDonation(data);

                if (result.success) {
                    this.showNotification('Payment initiated successfully!', 'success');

                    if (result.data.payment_link) {
                        // Card payment - show redirect modal
                        this.showPaymentModal(`
                            <div class="mb-6">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Payment Initiated</h3>
                                <p class="text-gray-600 mb-4">Click the button below to complete your payment.</p>
                                <p class="text-sm text-gray-500 mb-6">Order Reference: ${result.data.order_reference}</p>
                            </div>
                            <a href="${result.data.payment_link}" target="_blank" class="w-full px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">
                                Complete Payment
                            </a>
                            <button onclick="clickPesaPayment.closePaymentModal()" class="w-full mt-3 px-6 py-3 border border-gray-300 text-gray-700 font-bold rounded-full hover:bg-gray-50 transition-all">
                                Close
                            </button>
                        `);
                    } else {
                        // USSD payment - show instructions
                        this.showPaymentModal(`
                            <div class="mb-6">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Check Your Phone</h3>
                                <p class="text-gray-600 mb-4">Please check your phone for the USSD prompt to complete your payment.</p>
                                <p class="text-sm text-gray-500 mb-6">Order Reference: ${result.data.order_reference}</p>
                            </div>
                            <button onclick="clickPesaPayment.closePaymentModal()" class="w-full px-6 py-3 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 transition-all">
                                Got it!
                            </button>
                        `);

                        // Start polling for payment status
                        this.pollPaymentStatus(result.data.order_reference)
                            .then((statusResult) => {
                                if (statusResult.data.status.toLowerCase() === 'success' || 
                                    statusResult.data.status.toLowerCase() === 'settled') {
                                    this.showNotification('Payment completed successfully! Thank you for your donation.', 'success');
                                } else if (statusResult.data.status.toLowerCase() === 'failed') {
                                    this.showNotification('Payment failed. Please try again.', 'error');
                                }
                            })
                            .catch((error) => {
                                console.error('Payment polling error:', error);
                            });
                    }

                    // Reset form
                    form.reset();
                } else {
                    this.showNotification(result.message || 'Payment failed', 'error');
                }
            } catch (error) {
                this.showNotification(error.message || 'An error occurred while processing your payment', 'error');
            } finally {
                this.hideLoading(submitButton, originalText);
            }
        });
    }
}

// Initialize the payment system
const clickPesaPayment = new ClickPesaPayment();

// Auto-initialize forms with data-payment-form attribute
document.addEventListener('DOMContentLoaded', () => {
    const paymentForms = document.querySelectorAll('[data-payment-form]');
    paymentForms.forEach(form => {
        clickPesaPayment.initializePaymentForm(form.id);
    });
});
