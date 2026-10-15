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

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->all());

        return redirect()
        ->route('produk.index')
        ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $produk->update($request->all());

        return redirect()
        ->route('produk.index')
        ->with('success', 'Produk berhasil diperbarui.');
    }

    // delete
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()
        ->route('produk.index')
        ->with('succes', 'Produk berhasil dihapus.');
    }
}
