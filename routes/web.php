<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ekstrakurikuler;

// Route Halaman Depan (Sudah ada sebelumnya)
Route::get('/', function () {
    $ekskuls = Ekstrakurikuler::all();
    return view('welcome', compact('ekskuls'));
});

// --- TAMBAHKAN INI UNTUK HALAMAN DETAIL ---
Route::get('/ekskul/{id}', function ($id) {
    // Cari data berdasarkan ID, kalau gak ketemu tampilkan 404
    $ekskul = Ekstrakurikuler::findOrFail($id);

    // Kirim ke tampilan detail
    return view('detail', compact('ekskul'));
})->name('ekskul.detail');
