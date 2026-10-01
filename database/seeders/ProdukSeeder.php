<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Produk::create([
            'nama_produk' => 'Samsung Galaxy S23',
            'harga' => 7000000,
            'stok' => 7
        ]);

        \App\Models\Produk::factory(35)->create();
    }
}
