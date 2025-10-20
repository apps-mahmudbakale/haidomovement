<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LGA extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'state_id',
    ];

    /**
     * Get all wards for the LGA.
     */
    public function wards(): HasMany
    {
        return $this->hasMany(Ward::class, 'lga_id');
    }
}
