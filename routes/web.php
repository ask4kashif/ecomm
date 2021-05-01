<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/', [ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('search',[ProductController::class,'search']);
Route::post('addToCart',[ProductController::class,'addToCart'])->name('addToCart');
Route::get('logout',function(){
    if(session()->has('user')){
        session()->forget('user');
        return redirect()->back();
    }
})->name('logout');
