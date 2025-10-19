<?php

namespace Database\Seeders;

use App\Models\Ward;
use App\Models\PollingUnit;
use Illuminate\Database\Seeder;

class PollingUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all wards
        $wards = Ward::all();
        
        // Common polling unit types for naming
        $unitTypes = [
            'Primary School', 'Secondary School', 'Town Hall', 'Mosque', 'Church', 
            'Health Center', 'Village Square', 'Community Hall', 'Open Space', 'Court'
        ];

        foreach ($wards as $ward) {
            // Each ward will have between 5-15 polling units
            $numberOfUnits = rand(5, 15);
            
            for ($i = 1; $i <= $numberOfUnits; $i++) {
                $unitType = $unitTypes[array_rand($unitTypes)];
                $unitName = "$ward->name $unitType $i";
                $code = 'PU' . str_pad($ward->id, 3, '0', STR_PAD_LEFT) . str_pad($i, 2, '0', STR_PAD_LEFT);
                
                PollingUnit::create([
                    'name' => $unitName,
                    'code' => $code,
                    'ward_id' => $ward->id,
                    'address' => $unitName . ', ' . $ward->name . ' Ward',
                    'voter_population' => (string)rand(100, 1000),
                ]);
            }
        }
    }
}
