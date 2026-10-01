<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    private function dataProduk(){
        return[
            ['nama_produk' => 'Samsung Galaxy S26 Ultra', 'harga' => '24499000'],
            ['nama_produk' => 'Samsung Galaxy S24 Ultra', 'harga' => '21999000'],
            ['nama_produk' => 'Samsung Galaxy S24 Standar', 'harga' => '7800000'],
            ['nama_produk' => 'Samsung Galaxy Z Fold6', 'harga' => '21159619'],
            ['nama_produk' => 'Samsung Galaxy A57 5G', 'harga' => '7599000'],
            ['nama_produk' => 'Samsung Galaxy A55 5G', 'harga' => '5999000'],
        ];
    }

    public function index()
    {
        $produks = $this->dataProduk();
        return view('produk.index', compact('produks'));
    }

    public function show($id)
    {
        $produks = $this->dataProduk();

        if($id >= count($produks)) {
            abort(404);
        }
        $produk = $produks[$id];
        return view('produk.show', compact('produk'));
    }
}
