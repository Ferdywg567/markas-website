<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Room;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::all()->pluck('id')->toArray();
        $faker = Factory::create('id_ID');
        $types = ["Talkshow", "Workshop", "Kelas", "Meeting", "Kompetisi"];


        $datas = [
            [
                "room_id"     => $faker->randomElement($rooms),
                "name"        => "Test Event",
                "description" => "Test Event Description",
                "thumbnail"   => "thumbnail1.png",
                "type"        => $faker->randomElement($types),
            ],
            [
                "room_id"     => $faker->randomElement($rooms),
                "name"        => "Test Event",
                "description" => "Test Event Description",
                "thumbnail"   => "thumbnail2.png",
                "type"        => $faker->randomElement($types),
            ],
            [
                "room_id"     => $faker->randomElement($rooms),
                "name"        => "Test Event",
                "description" => "Test Event Description",
                "thumbnail"   => "thumbnail3.png",
                "type"        => $faker->randomElement($types),
            ]
        ];

        for ($i = 0; $i < 2; $i++) {
            foreach ($datas as $key => $value) {
                Event::create($value);
            }
        }
    }
}
