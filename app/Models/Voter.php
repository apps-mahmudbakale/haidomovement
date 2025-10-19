<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'gender',
        'date_of_birth',
        'phone_number',
        'email',
        'residential_address',
        'lga_id',
        'ward_id',
        'polling_unit_id',
        'voters_card_number',
    ];

    /**
     * Get the polling unit that the voter is registered in.
     */
    public function pollingUnit()
    {
        return $this->belongsTo(PollingUnit::class);
    }

    /**
     * Get the ward that the voter belongs to.
     */
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    /**
     * Get the LGA that the voter belongs to.
     */
    public function lga()
    {
        return $this->belongsTo(LGA::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_of_birth' => 'date',
    ];
}
