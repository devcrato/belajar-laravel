<?php

use Illuminate\Support\Facades\Route;

Route::get('/profil', function () {
    $nama = 'Zein';
    $kelas = 'XI PPLG C';

    return view('profil', [
        'nama' => $nama,
        'kelas' => $kelas
    ]);
});