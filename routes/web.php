<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandController;
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
Route::middleware('auth')->group(function () {
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/destroy/{product:product_serial_number}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/product/delete/{product:product_serial_number}', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/product/edit/{product:product_serial_number}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{product:product_serial_number}', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/{product:product_serial_number}', [ProductController::class, 'show'])->name('products.show');
});


// Sellers
Route::middleware('auth')->group(function () {
    Route::get('/sellers', [SellerController::class, 'index'])->name('sellers.index');
    Route::get('/seller/create', [SellerController::class, 'create'])->name('sellers.create');
    Route::get('/seller/store', [SellerController::class, 'store'])->name('sellers.store');
    Route::post('/seller/logout', [SellerController::class, 'logout'])->name('sellers.logout');
    Route::get('/seller/{seller:id}', [SellerController::class, 'show'])->name('seller.show');
    Route::get('/seller/edit/{seller:id}', [SellerController::class, 'edit'])->name('seller.edit');
    Route::post('/seller/update/{seller:id}', [SellerController::class, 'update'])->name('seller.update');
    Route::get('/', [StatController::class, 'index'])->name('stats.index');
});
Route::middleware('auth', 'admin')->group(function () {
    Route::get('/seller/create', [SellerController::class, 'create'])->name('sellers.create');
    Route::get('/seller/store', [SellerController::class, 'store'])->name('sellers.store');
    Route::get('/seller/edit/{seller:id}', [SellerController::class, 'edit'])->name('seller.edit');
    Route::post('/seller/update/{seller:id}', [SellerController::class, 'update'])->name('seller.update');
});





// Clients
Route::middleware('auth')->group(function () {
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/client/{client:client_id}', [ClientController::class, 'show'])->name('clients.show');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/client/store', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/client/edit/{client:client_id}', [ClientController::class, 'edit'])->name('clients.edit');
    Route::post('/client/update/{client:client_id}', [ClientController::class, 'update'])->name('clients.update');
    Route::get('/client/delete/{client:client_id}', [ClientController::class, 'delete'])->name('clients.delete');
    Route::delete('/client/destroy/{client:client_id}', [ClientController::class, 'destroy'])->name('clients.destroy');
});
// Route::resource('products', [\App\Http\Controllers\ProductController::class, 'product']);


// Categories
Route::middleware('auth')->group(function () {
    Route::get('categories', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::get('categories/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('categories/delete/{productCategory:product_categorie_id}', [CategoriesController::class, 'delete'])->name('categories.delete');
    Route::delete('categories/{productCategory:product_categorie_id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    Route::post('categories/update/{productCategory:product_categorie_id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::get('categories/edit/{productCategory:product_categorie_id}', [CategoriesController::class, 'edit'])->name('categories.edit');
});
// Commandes
Route::middleware('auth')->group(function () {
    Route::get(' commands/{client:client_id}', [CommandController::class, 'index'])->name('commands.index');
    Route::get('commands/create/{client:client_id}', [CommandController::class, 'create'])->name('commands.create');
    Route::post('commands/addCart/{id}', [CommandController::class, 'addCart'])->name('commands.addCart');
    Route::post('commands/command/{client:client_id}', [CommandController::class, 'command'])->name('commands.command');
    Route::get(' commands/edit/{command:command_id}', [CommandController::class, 'edit'])->name('commands.edit');
    Route::post('commands/update/{command:command_id}', [CommandController::class, 'update'])->name('commands.update');
});


// Lignes de commandes
Route::middleware('auth')->group(function () {
    Route::get(' commands/details/{command:command_id}', [\App\Http\Controllers\CommandeLineController::class, 'show'])->name('commandLines.show');
});
require __DIR__.'/auth.php';
