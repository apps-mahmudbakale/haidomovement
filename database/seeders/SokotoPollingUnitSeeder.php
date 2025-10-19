<?php

namespace Database\Seeders;

use App\Models\Ward;
use App\Models\LGA;
use App\Models\PollingUnit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SokotoPollingUnitSeeder extends Seeder
{
    /**
     * The polling units data for Sokoto State
     *
     * @var array
     */
    protected $sokotoData = [
        'state' => 'sokoto',
        'lgas' => [
            // Binji LGA
            [
                'lga' => 'binji',
                'wards' => [
                    [
                        'ward' => 'binji',
                        'polling_units' => [
                            'shiyyar-ss-fawa',
                            'bajagawa',
                            'shiyar-darai-pry-sch-shiyar-darai',
                            'shiyar-darai-govt-tech-college-binji',
                            'shiyar-u-dawaki',
                            'filin-bande',
                            'shiyar-sarkin-aski',
                            'shiyar-sarki-fawa',
                            'shiyar-s-fawa-dan-fili'
                        ]
                    ],
                    [
                        'ward' => 'bunkari',
                        'polling_units' => [
                            'shiyar-uban-dawaki-bunkari',
                            'shiyar-uban-dawaki-fili',
                            'shiyar-basharu-garkar-basharu',
                            'baliyo-hausa-fulani',
                            'danmali-gidan-magaji',
                            'dan-mali-gidan-baliyo',
                            'gidan-jauro-gidan-hakimi-g-jauga',
                            'gida-dilo-gidan-buji'
                        ]
                    ],
                    // Add more wards and polling units as needed
                ]
            ],
            // Bodinga LGA
            [
                'lga' => 'bodinga',
                'wards' => [
                    [
                        'ward' => 'badau-darhela',
                        'polling_units' => [
                            'pry-sch-darhela',
                            'lungun-darhela-p-s',
                            'hilin-darhela-kaura',
                            'kwarwara-darhela-kaura',
                            'badau-sh-fulani-sh-hakimi',
                            'badau-sh-dangiwa-sh-hakimi',
                            'damalle-pry-sch',
                            'ruggar-igge-sh-hakimi',
                            'jangebe-islamic-school',
                            'rafin-sabo-primary-sch',
                            'shiyar-hakimi-gwastu',
                            'shiyar-hakimi-dunka',
                            'badau-bakin-kasuwa'
                        ]
                    ],
                    [
                        'ward' => 'bagarawa',
                        'polling_units' => [
                            'model-pry-sch-shiyar-manu',
                            'shiyar-hakimi-gugari',
                            'pry-sch-r-yarde',
                            'shiyar-harimi-r-garba',
                            'shiyar-harimi-mallawa',
                            'pry-sch-bengel',
                            'shiyar-hakimi-saulana',
                            'dispensary-bagarawa'
                        ]
                    ]
                ]
            ]
            // Add more LGAs and their wards/polling units as needed
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks to avoid constraint issues
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PollingUnit::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $createdCount = 0;
        
        try {
            $this->command->info('Seeding polling units data...');
            
            // Process each LGA in the data
            foreach ($this->sokotoData['lgas'] as $lgaData) {
                $lgaName = ucfirst(strtolower(trim($lgaData['lga'])));
                
                // Find the LGA in our database
                $lga = LGA::where('name', $lgaName)->first();
                
                if (!$lga) {
                    $this->command->warn("LGA not found in database: $lgaName");
                    continue;
                }
                
                // Process each ward in the LGA
                foreach ($lgaData['wards'] as $wardData) {
                    $wardName = ucwords(strtolower(trim($wardData['ward'])));
                    
                    // Find the ward in our database
                    $ward = Ward::where('name', $wardName)
                               ->where('lga_id', $lga->id)
                               ->first();
                    
                    if (!$ward) {
                        $this->command->warn("Ward not found in database: $wardName (LGA: $lgaName)");
                        continue;
                    }
                    
                    // Process each polling unit in the ward
                    foreach ($wardData['polling_units'] as $index => $pollingUnitName) {
                        // Clean up the polling unit name
                        $pollingUnitName = trim($pollingUnitName);
                        
                        if (empty($pollingUnitName)) {
                            continue;
                        }
                        
                        // Generate a unique code for the polling unit
                        $code = 'PU' . 
                                str_pad($lga->id, 3, '0', STR_PAD_LEFT) . 
                                str_pad($ward->id, 3, '0', STR_PAD_LEFT) . 
                                str_pad($index + 1, 4, '0', STR_PAD_LEFT);
                        
                        // Create the polling unit
                        PollingUnit::create([
                            'name' => $pollingUnitName,
                            'code' => $code,
                            'ward_id' => $ward->id,
                            'address' => "$pollingUnitName, $ward->name Ward, $lga->name LGA, Sokoto State",
                            'voter_population' => (string)rand(300, 1200), // Random population for demo
                        ]);
                        
                        $createdCount++;
                        
                        // Show progress
                        if ($createdCount % 50 === 0) {
                            $this->command->info("Processed $createdCount polling units...");
                        }
                    }
                }
            }
            
            $this->command->info("Successfully seeded $createdCount polling units for Sokoto State");
            
        } catch (\Exception $e) {
            $this->command->error('Error seeding polling units: ' . $e->getMessage());
            Log::error('Polling unit seeder error: ' . $e->getMessage());
            
            // Fall back to sample data if there's an error
            $this->command->info('Falling back to sample data...');
            $this->seedSampleData();
        }
    }
    
    /**
     * Fallback method to seed sample data if the API call fails
     */
    protected function seedSampleData(): void
    {
        $wards = Ward::with('lga')->get()->keyBy('name');
        
        $sampleData = [
            'Gagi' => ['Gagi Primary School', 'Gagi Model Primary School', 'Gagi Health Centre'],
            'Kofar Kade' => ['Kofar Kade Primary School', 'Kofar Kade Maternity'],
            'Sarkin Zamfara' => ['Sarkin Zamfara Primary School', 'Sarkin Zamfara Islamiyya'],
            'Waziri' => ['Waziri Model Primary School', 'Waziri Islamiyya School']
        ];
        
        $createdCount = 0;
        
        foreach ($sampleData as $wardName => $pollingUnits) {
            $ward = $wards->get($wardName);
            
            if ($ward) {
                foreach ($pollingUnits as $index => $unitName) {
                    $code = 'SMPU' . str_pad($ward->id, 3, '0', STR_PAD_LEFT) . str_pad($index + 1, 3, '0', STR_PAD_LEFT);
                    
                    PollingUnit::create([
                        'name' => $unitName,
                        'code' => $code,
                        'ward_id' => $ward->id,
                        'address' => "$unitName, $ward->name Ward, {$ward->lga->name} LGA, Sokoto State",
                        'voter_population' => (string)rand(500, 1500),
                    ]);
                    
                    $createdCount++;
                }
            }
        }
        
        $this->command->info("Seeded $createdCount sample polling units");
    }
}
