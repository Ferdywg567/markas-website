<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "1000 Startup Digital",
                "logo" => "1000.png",
            ],
            [
                "name" => "Kominfo",
                "logo" => "Kominfo.png",
            ],
            [
                "name" => "Startup Studio ID",
                "logo" => "SSI.png",
            ],
            [
                "name" => "Sekolah Beta",
                "logo" => "SekolahBeta.png",
            ],
            [
                "name" => "Sekolah Beta Intensif",
                "logo" => "SekolahBetaIntensif.png",
            ],
            [
                "name" => "Sekolah Beta Kelas Daring",
                "logo" => "SekolahBetaDaring.png",
            ],
            [
                "name" => "Startup Grind",
                "logo" => "StartupGrind.png",
            ],
            [
                "name" => "Indev",
                "logo" => "Indev.png",
            ],
            [
                "name" => "GDG Jakarta",
                "logo" => "GDGJKT.png",
            ],
        ];

        foreach ($datas as $data) {
            Partner::create($data);
        }
    }
}
