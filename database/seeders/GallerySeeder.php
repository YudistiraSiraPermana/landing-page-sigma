<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = [
            [
                'image' => 'foto-mhs1.jpeg',
                'name' => 'Mahasiswa/i',
                'title' => 'Foto Bersama Mahasiswa/i',
            ],
            [
                'image' => 'foto-mhs2.jpeg',
                'name' => 'Mahasiswa/i',
                'title' => 'Foto Bersama Mahasiswa/i',
            ],
        ];

        DB::table('galleries')->insert($galleries);
    }
}
