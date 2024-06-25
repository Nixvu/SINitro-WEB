<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layanan = [
            [
                'jns_layanan' => 'Isi Tambah',
                'jns_kendaraan' => 'Motor',
                'harga' => 3000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jns_layanan' => 'Isi Awal',
                'jns_kendaraan' => 'Motor',
                'harga' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],            
            [
                'jns_layanan' => 'Tambal Ban',
                'jns_kendaraan' => 'Motor',
                'harga' => 8000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jns_layanan' => 'Isi Tambah',
                'jns_kendaraan' => 'Mobil',
                'harga' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jns_layanan' => 'Isi Awal',
                'jns_kendaraan' => 'Mobil',
                'harga' => 7000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'jns_layanan' => 'Tambal Ban',
                'jns_kendaraan' => 'Mobil',
                'harga' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Layanan::insert($layanan);
    }
}
