<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ← Import DB Facade

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_profile')->insert([
            'address' => 'Jl. Merdeka No. 123, Jakarta',
            'nomor_tlp' => '081234567890',
            'ttl' => '1990-01-01',
            'foto' => 'path/to/foto.jpg',
        ]);
    }
}