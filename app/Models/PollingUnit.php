<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PollingUnit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'ward_id',
        'address',
        'location_coordinates',
        'voter_population',
    ];

    /**
     * Get the ward that owns the polling unit.
     */
    public function ward(): BelongsTo
    {
        return $this->belongsTo(Ward::class);
    }

    /**
     * Get the voters for the polling unit.
     */
    public function voters(): HasMany
    {
        return $this->hasMany(Voter::class);
    }

    /**
     * Get the LGA through ward relationship.
     */
    public function lga()
    {
        return $this->ward->lga();
    }

    /**
     * Get the polling unit's full address.
     */
    public function getFullAddressAttribute(): string
    {
        $address = [];
        if ($this->address) $address[] = $this->address;
        if ($this->ward) $address[] = $this->ward->name . ' Ward';
        if ($this->ward && $this->ward->lga) $address[] = $this->ward->lga->name . ' LGA';
        $address[] = 'Sokoto State';

        return implode(', ', $address);
    }
}
