<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

// Admin

Route::get('/dashboard/produk', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/dashboard/produk/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
Route::put('/dashboard/produk/edit/{id}', [App\Http\Controllers\AdminController::class, 'update']);
Route::delete('/dashboard/produk/{id}', [App\Http\Controllers\AdminController::class, 'destroy']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/product/detailproduct/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('show.product');
Route::post('/product/detailproduct/{id}', [App\Http\Controllers\ProductController::class, 'store'])->name('store.product');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('show.blog');


Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/singleblog', [App\Http\Controllers\HomeController::class, 'singleblog'])->name('singleblog');
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'edit'])->name('cart');
Route::delete('/cart/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy.cart');
Route::delete('/cart', [App\Http\Controllers\ProductController::class, 'alldelete']);
