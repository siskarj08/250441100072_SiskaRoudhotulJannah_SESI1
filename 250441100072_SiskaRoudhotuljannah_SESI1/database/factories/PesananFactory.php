<?php

namespace Database\Factories;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pesanan>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pelanggan' =>fake()->word(100),
            'tanggal_masuk' =>fake()->word(),
            'jumlah' =>fake()->number_format($float),
            'total_biaya' =>fake()->number_format($int),
            'status' => fake()->randomElement([
                'proses',
                'selesai'
            ])
        ];
    }
}
