@extends('layouts.master')

@section('content')

<h1>Detail Produk</h1>
<hr>

<a href="/product" class="btn btn-secondary mb-3">
    Kembali ke Daftar Produk
</a>

<div class="card">
    <div class="card-header">
        Informasi Lengkap Produk
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 200px;">Nama Produk</th>
                <td>{{ $detail_produk->name_product }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $detail_produk->stock_product }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp. {{ number_format($detail_produk->price_product, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $detail_produk->desc_product }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection