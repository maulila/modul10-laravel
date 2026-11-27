<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $kategori = CategoryProduct::paginate(5);

        return view('pages.category.show', [
            'kategori' => $kategori,
        ]);
    }
}