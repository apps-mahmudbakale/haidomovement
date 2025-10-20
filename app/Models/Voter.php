<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\LGA;
use App\Models\Ward;
use App\Models\PollingUnit;

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
        'age_range',
        'phone_number',
        'email',
        'residential_address',
        'lga_id',
        'ward_id',
        'polling_unit_id',
        'voters_card_number',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'age_range' => 'string',
    ];

    /**
     * Get the available age ranges.
     *
     * @return array
     */
    public static function getAgeRanges()
    {
        return [
            '18-25' => '18-25 years',
            '26-30' => '26-30 years',
            '31-40' => '31-40 years',
            '41-50' => '41-50 years',
            '51-60' => '51-60 years',
            '61-70' => '61-70 years',
            '71+' => '71+ years',
        ];
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_of_birth' => 'date',
    ];

    /**
     * Get the LGA that the voter belongs to.
     */
    public function lga()
    {
        return $this->belongsTo(LGA::class);
    }

    /**
     * Get the ward that the voter belongs to.
     */
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    /**
     * Get the polling unit that the voter is registered in.
     */
    public function pollingUnit()
    {
        return $this->belongsTo(PollingUnit::class);
    }
}
