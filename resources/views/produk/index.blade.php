@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Produk</h1>
    <span class="badge bg-primary fs-6">
        Total: {{ $produks->total() }} Produk
    </span>
</div>

<div class="card shadow-sm">
    <div class="table-resposive">
        <table class="table table-hover table-striped align-middle mb-0">
            <thead class="table-darkk">
                <tr>
                    <th class="text-center style="width:70px;">ID</th>
                    <th>Nama Produk</th>
                    <th class="text-end">Harga</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center" style="width: 130px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
              @forelse ($produks as $index => $produk)
              <tr>
                <td class="text-center">{{ $produk->id}}</td>
                <td class="fw-semibold">{{ $produk->nama_produk }}</td>
                <td class="text-end">
                    Rp {{ number_format($produk->harga,0, ',', '.') }}
                </td>
                <td class="text-center">
                    @if ($produk->stok > 0)
                    <span class="badge bg-succes text-dark">
                      Tersedia {{ $produk->stok }}
                    </span>
                    @else
                    <span class="badge bg-danger">Habis</span>
                    @endif
                </td>
                <td class="text-center">
                    <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-sm btn-primary">
                        Lihat Detil
                    </a>
                </td>
              </tr>
              @empty
                  <tr>
                    <td colspan="5" class="text-center text-muted py-4 fst-italic">
                        Data produk belum tersedia.
                    </td>
                  </tr>
              @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="d-flex flex-column flex-md-row justify-content-between align-item-center gap-2 mt-3">
    <small class="text-muted">
        Menampilkan
        <strong>{{ $produks->firstItem()}}</strong>
        -
        <strong>{{ $produks->lastItem()}}</strong>
        dari
        <strong>{{ $produks->total() }}</strong>
        produk
    </small>

    <div>
        {{ $produks->links() }}
    </div>
</div>
@endsection