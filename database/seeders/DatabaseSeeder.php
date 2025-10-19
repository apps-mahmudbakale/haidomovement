<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LGASeeder::class,
            WardSeeder::class,
            // Use the Sokoto-specific polling unit seeder
            SokotoPollingUnitSeeder::class,
            // PollingUnitSeeder::class, // Comment out the generic seeder
        ]);
    }
}
