<?php

namespace Database\Seeders;

use App\Models\KriteriaMahasiswa;
use Illuminate\Database\Seeder;

class KriteriaMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KriteriaMahasiswa::insert([
            'id' => 1,
            'nama' => 'Fasilitas',
            'bobot' => 0.316,
        ]);

        KriteriaMahasiswa::insert([
            'id' => 2,
            'nama' => 'Harga Sewa',
            'bobot' => 0.182,
        ]);

        KriteriaMahasiswa::insert([
            'id' => 3,
            'nama' => 'Lokasi',
            'bobot' => 0.103,
        ]);

        KriteriaMahasiswa::insert([
            'id' => 4,
            'nama' => 'Kenyamanan',
            'bobot' => 0.08,
        ]);

        KriteriaMahasiswa::insert([
            'id' => 5,
            'nama' => 'Keamanan',
            'bobot' => 0.063,
        ]);
    }
}
