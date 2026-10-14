<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pesanan::insert([
            ['layanan_id' => 1, 'nama_pelanggan'=> 'rudi', 'tanggal
            _masuk' => '2026-10-01', 'jumlah'=> 3, 'total_biaya' => 18000], ['status' => 'selesai'],
            ['layanan_id' => 3, 'nama_pelanggan' => 'dewi', 'tanggal_masuk' => '2026-10-08', 'jumlah' => 2, 'total_biaya' => 70000, 'status' => 'selesai']
        ]);
    }
}
