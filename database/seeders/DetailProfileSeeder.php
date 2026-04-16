<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('detail_profiles')->insert([
            'address' => 'Jl. Ambalabu Alamat No. 123, Kota Jember',
            'nomor_tlp' => '081234567890',
            'ttl' => '1990-01-01',
            'foto' => 'foto_profil.jpg',
        ]);
    }
}
