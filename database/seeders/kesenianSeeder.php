<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kesenianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kesenian')->insert([
            'nama' => 'Barongsai',
            'alamat' => 'Jawa Timur',
            'notelp' => '12',
            'harga' => '7',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kesenian')->insert([
            'nama' => 'Tari Kecak',
            'alamat' => 'Bali',
            'notelp' => '12',
            'harga' => '7',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kesenian')->insert([
            'nama' => 'Pencak Silat',
            'alamat' => 'Jawa Timur',
            'notelp' => '12',
            'harga' => '7',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}

