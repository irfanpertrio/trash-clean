<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reward')->insert([
            'nama' => 'Dana',
            'jumlah' => '1',
            'koin' => '1',
            'gambar' => 'dana.png',
            'kategori' => 'ewallet',
        ]);
        DB::table('reward')->insert([
            'nama' => 'Gopay',
            'jumlah' => '1',
            'koin' => '1',
            'gambar' => 'gopay.png',
            'kategori' => 'ewallet',
        ]);
        DB::table('reward')->insert([
            'nama' => 'ShopeePay',
            'jumlah' => '1',
            'koin' => '1',
            'gambar' => 'shopeepay.png',
            'kategori' => 'ewallet',
        ]);
        DB::table('reward')->insert([
            'nama' => 'Sunlight',
            'jumlah' => '20',
            'koin' => '2000',
            'gambar' => 'sunlight.png',
            'kategori' => 'barang',
        ]);
    }
}
