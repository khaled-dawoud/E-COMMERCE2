<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.index', compact('categories'));
    }

    public function category($id)
    {
        $products = Product::all();
        $categories = Category::all();
        $category = Category::with('products')->findOrFail($id);
        return view('frontend.category', compact('category', 'categories', 'products'));
    }
}
