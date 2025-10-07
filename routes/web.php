<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StatController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/destroy/{product:product_serial_number}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/product/delete/{product:product_serial_number}', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/product/edit/{product:product_serial_number}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{product:product_serial_number}', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/{product:product_serial_number}', [ProductController::class, 'show'])->name('products.show');


// Sellers
Route::get('/sellers', [SellerController::class, 'index'])->name('sellers.index');
Route::get('/seller/{seller:id}', [SellerController::class, 'show'])->name('seller.show');
Route::get('/seller/edit/{seller:id}', [SellerController::class, 'edit'])->name('seller.edit');
Route::post('/seller/update/{seller:id}', [SellerController::class, 'update'])->name('seller.update');
Route::get('/', [StatController::class, 'index'])->name('stats.index');


// Clients
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

// Route::resource('products', [\App\Http\Controllers\ProductController::class, 'product']);

require __DIR__.'/auth.php';
