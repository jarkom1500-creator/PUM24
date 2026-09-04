<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function home()
    {
        $featuredProducts = Product::with(['images', 'variants'])->latest()->take(3)->get();

        return view('home', compact('featuredProducts'));
    }

    public function index()
    {
        $products = Product::with(['images', 'variants'])->latest()->get();

        $makananCount   = $products->where('category', 'makanan')->count();
        $kerajinanCount = $products->where('category', 'kerajinan')->count();

        return view('products.index', compact('products', 'makananCount', 'kerajinanCount'));
    }

    public function show(Product $product)
    {
        $product->load(['images', 'variants']);

        $relatedProducts = Product::with(['images', 'variants'])
            ->where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->latest()
            ->take(3)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }
}