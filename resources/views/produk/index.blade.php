<h1>Daftar Produk</h1>

<table border="1" callpadding="5">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Harga</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($produks as $key => $produk)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $produk['nama_produk'] }}</td>
                <td>
                    {{  number_format($produk['harga']) }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>