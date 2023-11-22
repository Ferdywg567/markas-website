<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            "Tempat Duduk", "Mikrofon", "Podium", "Perlengkapan Audio", "Proyektor", " Lighting"
        ];

        $types = [
            "Hall Ukuran Besar",
            "Ruang Workshop",
            "Ruang Meeting",
        ];

        $desc = "Area komunal untuk kegiatan seminar, talkshow, dan workshop.";

        $datas = [
            // Hall Ukuran Besar
            [
                "building_id" => 1,
                "type"        => $types[0],
                "thumbnail"   => "default.png",
                "name"        => "Tjokro Hall",
                "description" => $desc,
                "facilities"  => $facilities,
                "max_person"  => 50,
            ],

            // Ruang Workshop
            [
                "building_id" => 1,
                "type"        => $types[1],
                "thumbnail"   => "default.png",
                "name"        => "Linggarjati",
                "description" => $desc,
                "facilities"  => $facilities,
                "max_person"  => 50,
            ],
            [
                "building_id" => 1,
                "type"        => $types[1],
                "thumbnail"   => "default.png",
                "name"        => "Renville",
                "description" => $desc,
                "facilities"  => $facilities,
                "max_person"  => 50,
            ],
            [
                "building_id" => 1,
                "type"        => $types[1],
                "thumbnail"   => "default.png",
                "name"        => "Roem-Royen",
                "description" => $desc,
                "facilities"  => $facilities,
                "max_person"  => 50,
            ],

            // Ruang Meeting
            [
                "building_id" => 1,
                "type"        => $types[2],
                "thumbnail"   => "default.png",
                "name"        => "Soekarno",
                "description" => $desc,
                "facilities"  => $facilities,
                "max_person"  => 10,
            ],
            [
                "building_id" => 1,
                "type"        => $types[2],
                "thumbnail"   => "default.png",
                "name"        => "Kartini",
                "description" => $desc,
                "facilities"  => $facilities,
                "max_person"  => 10,
            ],
            [
                "building_id" => 1,
                "type"        => $types[2],
                "thumbnail"   => "default.png",
                "name"        => "Soepratman",
                "description" => $desc,
                "facilities"  => $facilities,
                "max_person"  => 10,
            ],
        ];

        foreach ($datas as $key => $value) {
            Room::create($value);
        }
    }
}
