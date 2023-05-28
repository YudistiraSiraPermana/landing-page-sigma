<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = [
            [
                'video' => 'vidio-sigma1.mp4',
                'name' => 'Universitas Sigma',
                'title' => 'Profil',
            ],
            [
                'video' => 'vidio-sigma2.mp4',
                'name' => 'Universitas Sigma',
                'title' => 'Fasilitas Kampus',
            ]

        ];

        DB::table('videos')->insert($video);
    }
}
