@extends('layouts.master')

@section('content')
<h1>Detail Produk</h1>
<hr>
<div class="card">
    <div class="card-header">
        Detail Produk
    </div>
    <div class="card-body">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://placehold.co/400" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$detail_produk->name_product}}</h5>
                        <p></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Harga: Rp. {{number_format($detail_produk->price_product, 0, ',', '.')}}</li>
                            <li class="list-group-item">Stok: {{$detail_produk->stock_product}} pcs</li>
                            <li class="list-group-item">Tipe Saus: {{$detail_produk->desc_product}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="/product" class="btn btn-primary">Kembali ke product</a>
                        </div>
                    </div>
                </div>
                <p class="card-text p-2"><small class="text-muted">{{$detail_produk->updated_at}}</small></p>
            </div>
        </div>
    </div>
</div>
@endsection
```[cite: 5]

### 2. `resources/views/pages/product/editProduct.blade.php`

```blade
@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">Edit Data Produk</div>
    <div class="card-body">
        <form action="/product/{{$updated_produk->id_product}}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" name="name_product" class="form-control"
                            value="{{old('name_product', $updated_produk->name_product)}}">
                        @error('name_product')
                        <div id="nameHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Stock Produk</label>
                        <input type="number" name="stock_product" class="form-control"
                            value="{{old('stock_product', $updated_produk->stock_product)}}">
                        @error('stock_product')
                        <div id="stockHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Harga Produk</label>
                        <input type="number" name="price_product" class="form-control"
                            value="{{old('price_product', $updated_produk->price_product)}}">
                        @error('price_product')
                        <div id="priceHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="desc_product"
                            rows="10">{{old('desc_product', $updated_produk->desc_product)}}</textarea>
                        <label>Deskripsi Produk</label>
                        @error('desc_product')
                        <div id="descHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
```[cite: 5]

Kalau sudah dibuat dan di-*save*, bilang aja kalau mau lanjut ke kode `navbar.blade.php`, `show.blade.php`, atau `ProductController.php`!