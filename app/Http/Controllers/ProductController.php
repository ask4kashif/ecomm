<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
    public function search(Request $request)
    {
        $products = DB::table('products')
            ->where('name', 'like', '%' . $request->input("search") . '%')
            ->OrWhere('category', 'like', '%' . $request->input("search") . '%')
            ->get();
        return view('search', compact('products'));
    }
    public function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->user_id = $request->session()->get('user')->id;
            $cart->save();
            return redirect()->back()->with('success', 'Product added successfully');
        } else {
            return redirect('login');
        }
    }
    static function cartItem()
    {
        $user_id=session()->get('user')->id;
        return Cart::where('user_id',$user_id)->count();
    }
}
