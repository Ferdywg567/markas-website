<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "title"       => "Apakah Ada Acara atau Aktivitas Sosial di MARKAS?",
                "description" => "Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota untuk berinteraksi, belajar, dan membangun jaringan.",
            ],
            [
                "title"       => "Bagaimana Saya Bisa Bergabung dengan MARKAS?",
                "description" => "Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota untuk berinteraksi, belajar, dan membangun jaringan.",
            ],
            [
                "title"       => "Apakah Ada Jam Operasional Tertentu?",
                "description" => "Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota untuk berinteraksi, belajar, dan membangun jaringan.",
            ],
            [
                "title"       => "Bagaimana dengan Privasi di MARKAS?",
                "description" => "Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota untuk berinteraksi, belajar, dan membangun jaringan.",
            ],
            [
                "title"       => "Bagaimana Saya Menyewa untuk Co-Working Space Sementara?",
                "description" => "Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota untuk berinteraksi, belajar, dan membangun jaringan.",
            ],
        ];

        foreach ($datas as $data) {
            Faq::create($data);
        }
    }
}
