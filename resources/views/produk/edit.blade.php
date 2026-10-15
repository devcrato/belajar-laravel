@extends('layouts.main')

@section('content')
<h1 class="mb-4">Edit Produk</h1>

<div class="card shadow-sm" style="max-width: 600px;">
    <div class="card-body">

        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk"
                value="{{ $produk->nama_produk }}"
                class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga"
                value="{{ $produk->harga }}"
                class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok"
                value="{{ $produk->stok }}"
                class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                    Kembali ke Produk
                </a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection