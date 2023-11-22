<?php

namespace Database\Seeders;

use App\Models\NearestPlace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NearestPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "building_id"              => 1,
                "name"                     => "Plaza Marina",
                "description"              => "Pusat perbelanjaan dan hiburan",
                "estimed_minute_to_arrive" => 5,
            ],
            [
                "building_id"              => 1,
                "name"                     => "Royal Plaza",
                "description"              => "Pusat perbelanjaan dan hiburan",
                "estimed_minute_to_arrive" => 10,
            ],
            [
                "building_id"              => 1,
                "name"                     => "UK Petra",
                "description"              => "Perguruan Tinggi Universitas",
                "estimed_minute_to_arrive" => 15,
            ],
            [
                "building_id"              => 1,
                "name"                     => "Trans Icon",
                "description"              => "Pusat perbelanjaan dan hiburan",
                "estimed_minute_to_arrive" => 15,
            ],
        ];

        foreach ($datas as $data) {
            NearestPlace::create($data);
        }
    }
}
