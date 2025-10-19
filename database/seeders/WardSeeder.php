<?php

namespace Database\Seeders;

use App\Models\LGA;
use App\Models\Ward;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wardsByLga = [
            // LGAs and their wards in Sokoto State
            'Binji' => [
                'Binji', 'Bunkari', 'Gawazzai', 'Inname', 'Jammali', 'Jinau', 'Maikilili', 'Samama', 'Soro', 'Tara' 
            ],
            'Bodinga' => [
                'Bodinga/Tauma', 'Chimmola', 'Dingyadi', 'Dingyadi/Badawa', 'Gande East', 'Gande West', 'Sifawa', 'Takatuku', 'Tulun Doya', 'Wajake' 
            ],
            'Dange Shuni' => [
                'Dange', 'Fajaldu', 'Gangam', 'Gudu Manga', 'Kebbe', 'Kwanar Kimba', 'Rikina', 'Rudun Buya', 'Shuni', 'Tsafanade' 
            ],
            'Gada' => [
                'Dodoro', 'Gada', 'Gilbaden', 'Kaddi', 'Kadadin Buda', 'Kaffe', 'Kwarma', 'Kyadawa', 'Mazange', 'Sarkin Darai', 'Tsitse', 'Wajake' 
            ],
            'Goronyo' => [
                'Boyeka', 'Chofe', 'Dande', 'Gayari', 'Giyawa', 'Goronyo', 'Kofar Durbawa', 'Kware', 'Kyadawa', 'Rimawa', 'Shinaka', 'Takakume' 
            ],
            'Gudu' => [
                'Bachaka', 'Gangara', 'Gatawa', 'Gudu', 'Jaredi', 'Kalanjeni', 'Kambama', 'Maraken Bori', 'Mamman Suka', 'Rikina', 'Sanyinna', 'Tsafanade' 
            ],
            'Gwadabawa' => [
                'Asara', 'Atakwanyo', 'Balle', 'Gamau', 'Gidan Kaya', 'Gudu', 'Gudu Dange', 'Huchi', 'Jigawa', 'Kurya', 'Mamman Suka', 'Sifawa', 'Tamarame' 
            ],
            'Illela' => [
                'Araba', 'Damba', 'Darna', 'Darna/Sabon Gari', 'Garu', 'Kalmalo', 'Rudun Buya', 'Sakkwai', 'Shiraddi', 'Tozai', 'Tsitse' 
            ],
            'Isa' => [
                'Bargaja', 'Burkusuma', 'Gebe', 'Isa North', 'Isa South', 'Isa West', 'Tidibale', 'Turba', 'Yanfako', 'Yanfako South' 
            ],
            'Kebbe' => [
                'Bakaya', 'Bamba', 'Dankemu', 'Fakku', 'Kebbe', 'Kuchi', 'Kurya', 'Nasarawa', 'Sangi', 'Sanyinna', 'Tungar Kaya' 
            ],
            'Kware' => [
                'Achida', 'Gumburawa', 'Kware', 'Kwasare', 'Rakuma', 'Rikina', 'Sifawa', 'Tunga', 'Wajake', 'Wamakko' 
            ],
            'Rabah' => [
                'Gandi', 'Gawakuke', 'Gwaddodi', 'Gwadabawa', 'Kurya', 'Rabah', 'Rarah', 'Riji/Maikujera', 'Rikina', 'Tursa' 
            ],
            'Sabon Birni' => [
                'Gatawa', 'Gawaka', 'Gudu', 'Kadadin Buda', 'Kalgo', 'Kurya', 'Lajinge', 'Lambar Tureta', 'Makuwana', 'S/Birni East', 'S/Birni West', 'Tsamaye' 
            ],
            'Shagari' => [
                'Dandin Mahe', 'Gangam', 'Kambama', 'Kware', 'Lambara', 'Lambara Gabas', 'Lambara Yamma', 'Rikina', 'Sanyinna', 'Shagari' 
            ],
            'Silame' => [
                'Bilbis', 'Gande', 'Katami', 'Kubodu', 'Labani', 'Lambar Tureta', 'Marafa', 'Silame', 'Tantama', 'Tsamaye' 
            ],
            'Sokoto North' => [
                'Ali Akilu', 'Gagi', 'Gagi Danchadi', 'Gagi Sabon Gari', 'Gagi Sarkin Zamfara', 'Kofar Kade', 'Kofar Kware', 'Kofar Marke', 'Kofar Rini', 'Magajin Gari', 'Sarkin Zamfara', 'Waziri' 
            ],
            'Sokoto South' => [
                'Gagi', 'Gagi Danchadi', 'Gagi Sabon Gari', 'Gagi Sarkin Zamfara', 'Kofar Kade', 'Kofar Kware', 'Kofar Marke', 'Kofar Rini', 'Magajin Gari', 'Sarkin Zamfara', 'Waziri' 
            ],
            'Tambuwal' => [
                'Bakaya', 'Bakura', 'Dankemu', 'Dingyadi', 'Faga', 'Gangam', 'Jabo', 'Kaura Salihu', 'Kaura Sani', 'Kurya', 'Rumbuki', 'Sanyinna', 'Shiyar Kudu', 'Shiyar Yamma', 'Tudun Wada' 
            ],
            'Tangaza' => [
                'Bakale', 'Gidan Madi', 'Goronyo', 'Kalanjeni', 'Kwacce Huru', 'Raka', 'Sakkwai', 'Sutti', 'Tangaza', 'Tidibale', 'Tsehe' 
            ],
            'Tureta' => [
                'Bimasa', 'Dudunni', 'Garin Gada', 'Gudu', 'Kwarare', 'Lambar Tureta', 'Rudun Buya', 'Sakkwai', 'Tureta', 'Yankuzo' 
            ],
            'Wamakko' => [
                'Bado', 'Dankemu', 'Danko', 'Gumburawa', 'Gumburawa Gabas', 'Gumburawa Yamma', 'Kasarawa', 'Kofar Kade', 'Kofar Kware', 'Kofar Marke', 'Maruda', 'Takakume', 'Wajake' 
            ],
            'Wurno' => [
                'Achida', 'Dankemu', 'Dinawa', 'Gudu', 'Jigawa', 'Kadadin Buda', 'Kadassaka', 'Kware', 'Kyadawa', 'Mazuma', 'Rikina', 'Tudun Wada' 
            ],
            'Yabo' => [
                'Bakale', 'Bingaje', 'Birni Ruwa', 'Damba', 'Fakka', 'Gawakuke', 'Gidan Kaya', 'Kilgori', 'Kubodu', 'Rudun Buya', 'Sakkwai', 'Yabo', 'Yardaje' 
            ]
        ];

        foreach ($wardsByLga as $lgaName => $wards) {
            $lga = LGA::where('name', $lgaName)->first();
            
            if ($lga) {
                foreach ($wards as $wardName) {
                    Ward::create([
                        'name' => $wardName,
                        'lga_id' => $lga->id,
                    ]);
                }
            }
        }
    }
}
