<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'goal_amount',
        'raised_amount',
        'currency',
        'start_date',
        'end_date',
        'featured_image',
        'status',
        'category',
        'metadata',
    ];

    protected $casts = [
        'goal_amount' => 'decimal:2',
        'raised_amount' => 'decimal:2',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'metadata' => 'json',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the donations for the campaign.
     */
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    /**
     * Scope a query to only include active campaigns.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope a query to only include featured campaigns.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Get the progress percentage.
     */
    public function getProgressPercentageAttribute()
    {
        if ($this->goal_amount == 0) {
            return 0;
        }
        
        return min(100, ($this->raised_amount / $this->goal_amount) * 100);
    }

    /**
     * Get formatted goal amount.
     */
    public function getFormattedGoalAmountAttribute()
    {
        $currencySymbols = [
            'TZS' => 'TSh',
            'USD' => '$',
            'EUR' => '€',
        ];

        $symbol = $currencySymbols[$this->currency] ?? $this->currency;
        return $symbol . number_format($this->goal_amount, 2);
    }

    /**
     * Get formatted raised amount.
     */
    public function getFormattedRaisedAmountAttribute()
    {
        $currencySymbols = [
            'TZS' => 'TSh',
            'USD' => '$',
            'EUR' => '€',
        ];

        $symbol = $currencySymbols[$this->currency] ?? $this->currency;
        return $symbol . number_format($this->raised_amount, 2);
    }

    /**
     * Check if campaign is active.
     */
    public function isActive()
    {
        return $this->status === 'active' && 
               (!$this->end_date || $this->end_date->isFuture());
    }
}
