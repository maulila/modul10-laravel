<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\MahasiswaController;

// Halaman Beranda
Route::get('/', function () {
    return view('pages.beranda');
});

// Halaman About
Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Syadza Maulila Najwa',
        'kelas' => 'D4SM-48-05',
        'nim' => '707082430010',
    ]);
});

// Halaman Contact
Route::view('/contact', 'pages.contact');

// Routing Produk
// Menampilkan data produk
Route::get('/product', [ProductController::class, 'index']);

// Menampilkan form tambah produk (wajib di atas /product/{id})
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

// Menyimpan data produk ke database
Route::post('/product', [ProductController::class, 'store']);

// Menampilkan detail data produk berdasarkan id tertentu
Route::get('/product/{id}', [ProductController::class, 'show']);

// Menampilkan halaman form untuk merubah data
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

// Menyimpan data yang sudah dirubah pada form edit data
Route::put('/product/{id}', [ProductController::class, 'update']);

// Menghapus data berdasarkan id yang dipilih
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// Routing Kategori Produk
Route::resource('/category', CategoryController::class);

// Routing Sapa
Route::get('/sapa', [SapaController::class, 'index']);

// Routing Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);