<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('misis')->insert([
            'Image' => 'unsigma-profil.png',
            'text' => 'Universitas Siguntang Mahaputra',
            'visi' => '-',
            'misi' => '-'
        ]);
    }
}
