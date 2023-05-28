<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            [
                'header' => '1',
                'image' => 'prodi-s1.png',
                'text' => 'Program Studi S1',
                'title' => 'Sistem Informasi, Tekmik informatika, Manajemen, Hukum, Kesehatan Masyarakat',
            ],
            [
                'header' => '2',
                'image' => 'prodi-d3.png',
                'text' => 'Program Studi D3',
                'title' => 'Manajemen Informatika, Teknik Komputer',
            ],
            [
                'header' => '3',
                'image' => 'prodi-d1.png',
                'text' => 'Program Studi D1',
                'title' => 'Manajemen Imformatika',
            ],
        ];

        DB::table('cards')->insert($cards);
    }
}
