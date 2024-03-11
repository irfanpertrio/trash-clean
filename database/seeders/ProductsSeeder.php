<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jls',
            'nama_barang' => 'Sampah Organik',
            'jumlah_barang' => '3',
            'status_barang' => 'valid',
            'trashcoin_didapat' => '0',
            'trashcoin_sekarang' => '7000',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jlw',
            'nama_barang' => 'Sampah Anorganik',
            'jumlah_barang' => '0.5',
            'status_barang' => 'valid',
            'trashcoin_didapat' => '0',
            'trashcoin_sekarang' => '7000',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jle',
            'nama_barang' => 'Sampah B3',
            'jumlah_barang' => '0.1',
            'status_barang' => 'valid',
            'trashcoin_didapat' => '0',
            'trashcoin_sekarang' => '7000',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

    }
}
