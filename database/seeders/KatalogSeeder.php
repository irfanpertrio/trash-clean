<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('katalog')->insert([
            'id' => '1',
            'nama' => 'Pupuk Kompos',
            'deskripsi' => 'Pupuk untuk tanaman',
            'gambar' => 'logo_trash_clean.png',
            'kuantitas' => '100',
            'kategori' => 'Organik',
        ]);

        DB::table('katalog')->insert([
            'id' => '2',
            'nama' => 'Botol Plastik',
            'deskripsi' => 'Botol plastik siap daur ulang',
            'gambar' => 'logo_trash_clean.png',
            'kuantitas' => '2',
            'kategori' => 'Anorganik',
        ]);
    }
}
