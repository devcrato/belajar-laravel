@extends('layouts.main')

@section('content')
<h1 class="mb-4">Detil Produk</h1>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white fw-semibold">
                Informasi Produk
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-4 fw-semibold text-secondary">ID</div>
                    <div class="col-8">: {{ $produk->id }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 fw-semibold text-secondary">Nama Produk</div>
                    <div class="col-8">: {{ $produk->nama_produk }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 fw-semibold text-secondary">Harga</div>
                    <div class="col-8">: Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 fw-semibold text-secondary">Stok</div>
                    <div class="col-8">
                        :
                        @if($produk->stok > 0)
                            <span class="badge bg-success">
                                {{ $produk->stok }}
                            </span>
                        @else
                            <span class="badge bg-danger">Stock Habis</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white text-center py-3">
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                    &laquo; Kembali ke Produk
                </a>
            </div>
        </div>
    </div>
</div>
@endsection