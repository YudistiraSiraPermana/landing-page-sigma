<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'nama_perusahaan' => 'Universitas Siguntang Mahaputra',
            'emails' => 'admin@universitas-sigma.com',
            'locations' => 'Jl. Perintis Kemerdekaan No.62, Lawang Kidul, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30111',
            'phone' => '082177335790',
            'image' => 'graduation.png',
            'text' => 'Graduation',
            'title' => 'Wisuda yang dilaksanakan oleh S1-Sistem Informasi, S1-Tekmik informatika, S1-Manajemen, S1-Hukum, S1-Kesehatan S1-Masyarakat, D3-Manajemen Informatika, D3-Teknik Komputer, D1-Manajemen Imformatika.',
        ]);
    }
}
