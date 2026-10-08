<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::OrderBy('nama_produk', 'asc')->paginate(10);

        return view('produk.index', compact('produks'));
    }

    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }
}
