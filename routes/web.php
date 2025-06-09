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

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/dashboard/main' , [ProductController::class,'main'])->name('product-view');

Route::get('/dashboard/product' , [ProductController::class,'index'])->name('product-list');

Route::get('/dashboard/product/add' , [ProductController::class,'add'])->name('product-add');
Route::post('/dashboard/product/store', [ProductController::class,'store'])->name('store');
Route::get('/dashboard/product/edit/{id}' , [ProductController::class,'edit'])->name('product-edit');
Route::put('/dashboard/product/update/{id}' , [ProductController::class,'update'])->name('product-update');
Route::get('/dashboard/product/delete/{id}' , [ProductController::class,'delete'])->name('product-delete');