<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('home',compact('products'));
    }
    public function detail($id)
    {
        $product=Product::findOrFail($id);
        return view('product',compact('product'));
    }
    public function search(Request $request)
    {
        $products= DB::table('products')
        ->where('name', 'like', '%'.$request->input("search").'%')
        ->OrWhere('category', 'like', '%'.$request->input("search").'%')
        ->get();
        return view('search',compact('products'));
    }
}
