<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_reference',
        'donor_name',
        'donor_email',
        'donor_phone',
        'amount',
        'currency',
        'payment_method',
        'phone_number',
        'donation_type',
        'campaign_id',
        'payment_id',
        'payment_reference',
        'collected_amount',
        'status',
        'message',
        'metadata',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'collected_amount' => 'decimal:2',
        'metadata' => 'json',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the campaign that owns the donation.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * Scope a query to only include successful donations.
     */
    public function scopeSuccessful($query)
    {
        return $query->whereIn('status', ['success', 'settled']);
    }

    /**
     * Scope a query to only include pending donations.
     */
    public function scopePending($query)
    {
        return $query->whereIn('status', ['pending', 'processing', 'pending_payment']);
    }

    /**
     * Scope a query to only include failed donations.
     */
    public function scopeFailed($query)
    {
        return $query->whereIn('status', ['failed', 'cancelled']);
    }

    /**
     * Scope a query to filter by payment method.
     */
    public function scopeByPaymentMethod($query, $method)
    {
        return $query->where('payment_method', $method);
    }

    /**
     * Scope a query to filter by donation type.
     */
    public function scopeByDonationType($query, $type)
    {
        return $query->where('donation_type', $type);
    }

    /**
     * Scope a query to filter by date range.
     */
    public function scopeDateRange($query, $startDate, $endDate)
    {
        if ($startDate) {
            $query->whereDate('created_at', '>=', $startDate);
        }
        if ($endDate) {
            $query->whereDate('created_at', '<=', $endDate);
        }
        return $query;
    }

    /**
     * Get formatted amount with currency.
     */
    public function getFormattedAmountAttribute()
    {
        $currencySymbols = [
            'TZS' => 'TSh',
            'USD' => '$',
            'EUR' => '€',
        ];

        $symbol = $currencySymbols[$this->currency] ?? $this->currency;
        return $symbol . number_format($this->amount, 2);
    }

    /**
     * Get status with proper formatting.
     */
    public function getFormattedStatusAttribute()
    {
        $statusMap = [
            'pending' => 'Pending',
            'processing' => 'Processing',
            'pending_payment' => 'Pending Payment',
            'success' => 'Successful',
            'settled' => 'Settled',
            'failed' => 'Failed',
            'cancelled' => 'Cancelled',
        ];

        return $statusMap[$this->status] ?? ucfirst($this->status);
    }

    /**
     * Check if donation is successful.
     */
    public function isSuccessful()
    {
        return in_array($this->status, ['success', 'settled']);
    }

    /**
     * Check if donation is pending.
     */
    public function isPending()
    {
        return in_array($this->status, ['pending', 'processing', 'pending_payment']);
    }

    /**
     * Check if donation is failed.
     */
    public function isFailed()
    {
        return in_array($this->status, ['failed', 'cancelled']);
    }
}
