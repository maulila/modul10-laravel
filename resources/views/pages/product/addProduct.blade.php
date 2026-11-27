@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        Tambah Data Produk
    </div>

    <div class="card-body">
        {{-- Mengirim data form ke route POST /product (ProductController@store) --}}
        <form action="/product" method="POST">
            {{-- Token keamanan CSRF wajib ada untuk request POST di Laravel --}}
            @csrf

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        {{-- old('name_product') mempertahankan input user jika validasi gagal --}}
                        <input type="text"
                            name="name_product"
                            class="form-control"
                            value="{{ old('name_product') }}">

                        {{-- Menampilkan pesan error validasi untuk name_product --}}
                        @error('name_product')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Stock Produk</label>
                        <input type="number"
                            name="stock_product"
                            class="form-control"
                            value="{{ old('stock_product') }}">

                        @error('stock_product')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Harga Produk</label>
                        <input type="number"
                            name="price_product"
                            class="form-control"
                            value="{{ old('price_product') }}">

                        @error('price_product')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <textarea
                            class="form-control"
                            name="desc_product"
                            rows="10">{{ old('desc_product') }}</textarea>

                        <label>Deskripsi Produk</label>

                        @error('desc_product')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 mt-3">
                    <button type="submit" class="btn btn-primary">
                        Tambah Data
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection