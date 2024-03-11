<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('super_admin')->insert([
            'id'                        => '24d1fd1a-61ab-11ed-9b6a-0242ac120001',
            'judul_halaman_awal'        => 'Sampah Seseorang Bisa Jadi Harta Bagi Orang Lain',
            'konten_halaman_awal'       => 'Sampah adalah sisa suatu kegiatan manusia yang dianggap sudah tidak berguna lagi dan dibuang ke lingkungan, tetapi masih dapat diolah kembali menjadi barang bernilai.',
            'judul_tentang'             => 'Sampah seseorang bisa jadi harta bagi orang lain!',
            'konten_tentang'            => 'Program InnoVillage 2022 dengan tema : Empowering Young Sociopreneur for National Development dan tagline : Digital untuk Semua merupakan salah satu inovasi Telkom University di bidang Pengabdian Masyarakat oleh Mahasiswa untuk membantu masyarakat desa dalam bidang digitalisasi dengan Tujuan Pembangunan Berkelanjutan atau SDGs',
            'katalog_bahan_organik'     => 'Menyediakan bahan organik',
            'katalog_bahan_anorganik'   => 'Menyediakan bahan anorganik',
            'katalog_bahan_b3'          => 'Menyediakan bahan B3',
            'judul_berita'              => 'Presiden Mundur',
            'foto_berita'               => 'demo.jpg',
            'keterangan_berita'         => 'Presiden mulai dimundurkan oleh masyarakat',
        ]);
    }
}
