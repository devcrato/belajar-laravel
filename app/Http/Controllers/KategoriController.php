<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private function dataKategori(){
        return [
            ['nama_kategori' => 'Handphone'],
            ['nama_kategori' => 'Laptop'],
            ['nama_kategori' => 'Komputer'],
            ['nama_kategori' => 'Tablet'],
        ];
    }

    public function index()
    {
        $kategories = $this->dataKategori();
        return view('kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        return "Kategori dengan nama:{$request->nama_kategori} telah berhasil disimpan";
    }

    public function show($id)
    {
        $kategoris = $this->dataKategori();
        if ($id >= count($kategoris)) {
            abort(404);
        }

        $kategori = $kategoris[$id];
        return view('kategori.show', compact('kategori'));
    }

    public function edit(string $id)
    {
        $kategoris = $this->dataKategori();
        if($id >= count($kategoris)) {
            abort(404);
        }

        $kategori = $kategoris($id);
        return view('kategori.edit', compact('id', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        return "Kategori dengan id:{$id} telah berhasil diupdate";
    }

    public function destroy(string $id)
    {
        return "Keategori dengan id:{$id} telah berhasil dihapus";
    }
}
