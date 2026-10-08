<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::OrderBy('id', 'asc')->paginate(5);

        return view('produk.index', compact('produks'));
    }

    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }
}
