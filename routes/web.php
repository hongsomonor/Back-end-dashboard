<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/main' , [ProductController::class,'main'])->name('product-view');

Route::get('/product' , [ProductController::class,'index'])->name('product-list');

Route::get('product/add' , [ProductController::class,'add'])->name('product-add');
Route::post('/product/store', [ProductController::class,'store'])->name('store');