<?php

use App\Http\Controllers\Products\ProuctsController;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

$products =Product::paginate(10);
    
    return view('welcome',compact('products'));
})->name('products.index');

Route::get('products/create',[ProuctsController::class,'create'])->name('products.create');
Route::post('products', [ProuctsController::class, 'store'])->name('products.store');
Route::get('products/{id}', [ProuctsController::class, 'show'])->name('products.show');
Route::get('products/{id}/edit', [ProuctsController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProuctsController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProuctsController::class, 'destroy'])->name('products.destroy');