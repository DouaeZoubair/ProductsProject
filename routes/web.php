<?php

use Illuminate\Support\Facades\Route;
/*use app\http\controller\Computers;*/
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

/*use App\Http\Controllers\ManipuCollections;
Route::get('/' , [ManipuCollections::class , 'index']);*/

use App\Http\Controllers\ProductController;

/*Route::resource('products' , [ProductController::class]);*/

Route::get('/products' , [ProductController::class , 'index'])->name('products.index');
Route::get('/products/create' , [ProductController::class , 'create'] )->name('products.create');
Route::post('/products' , [ProductController::class , 'store'])->name('products.store');
Route::get('/products/{id}' , [ProductController::class , 'show'])->name('products.show');
Route::get('/products/{id}/edit' , [ProductController::class , 'edit'])->name('products.edit');
Route::put('/products/{id}' , [ProductController::class , 'update'])->name('products.update');
Route::delete('products/{id}' , [ProductController::class, 'destroy'])->name('products.destroy');





