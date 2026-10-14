<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Layanan::insert([
            ['nama_layanan' => 'Cuci Kering','layanan_id' => 'LK-001', 'jenis' => 'kiloan', 'tarif_per_satuan' => 6000],
            ['nama_layanan' => 'Cuci Setrika', 'layanan_id' => 'LK-002', 'jenis' => 'kiloan', 'tarif_per_satuan' => 8000],
            ['nama_layanan' => 'Bed Cover', 'layanan_id' => 'LS-001', 'jenis' => 'satuan', 'tarif_per_satuan' => 35000],
            ['nama_layanan' => 'jas', 'layanan_id' => 'LS-002', 'jenis' => 'satuan', 'tarif_per_satuan' => 40000]
        ]);
    }
}
