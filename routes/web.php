<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [ProjectController::class,'index'])->name('home');

Route::get('/products', [ProjectController::class,'products'])->name('products');

Route::get('/about', function () {
    return view('about');
});

Route::get('/single_product/{id}',[ProjectController::class,'single_product'])->name('single_product');
Route::get('/single_product',function(){
    return redirect('/');
});
