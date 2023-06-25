<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $products =  Product::all();
            $productsTypes = ProductType::all();
            return view('product.index', compact('products', 'productsTypes'));
        }   catch (\Throwable $th) {
            return back()->with('erro', 'Não foi possível sua ação');
        }
    }
}
