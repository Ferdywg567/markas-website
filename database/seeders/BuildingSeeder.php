<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'location'     => "Surabaya",
                'sublocation'  => "Sidosermo",
                'full_address' => "Jl. Sidosermo II No.106F, Sidosermo, Kec. Wonocolo, kota Surabaya, Jawa Timur",
                'photos'       => [
                    "photo1.png",
                    "photo2.png",
                    "photo3.png",
                ],
                "facilities" => [
                    "Tempat Parkir",
                    "Perpustakaan",
                    "Air Conditioner",
                    "Dispenser Air",
                    "Rak Sepatu",
                    "lounge",
                    "Toilet",
                    "Internet",
                    "Mini Kafe",
                    "Petugas Teknisi",
                ],
                "longitude" => "112.7495511153438",
                "latitude"  => "-7.3134424613003235"
            ],
        ];

        foreach ($datas as $key => $value) {
            Building::create($value);
        }
    }
}
