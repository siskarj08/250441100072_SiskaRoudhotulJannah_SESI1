<?php

namespace Database\Factories;

use App\Models\Layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_layanan' => fake()->word(15),
            'nama_layanan' =>fake()->word(100),
            'jenis'=> fake()->randomElement([
                'kiloan',
                'satuan'
            ]),
            'tarif_per_satuan' =>fake()->numberBetween(0)
        ];
    }
}
