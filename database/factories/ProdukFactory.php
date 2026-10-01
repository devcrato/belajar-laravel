<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => fake()->unique()->word(2, true),
            'harga' => fake()->numberBetween(1000, 100000),
            'stok' => fake()->numberBetween(5, 100)
        ];
    }
}
