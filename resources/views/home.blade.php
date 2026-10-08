@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">
                    Selamat datang di {{ config('app.name') }}!
                </h5>
                <p class="card-text">
                    Toko kami menyediakan berbagai produk berkualitas.
                </p>
                <a href="{{ route('produk.index') }}" class="btn btn-primary">
                    Lihat Produk
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
