<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('product', function(){
    return view('pages.product');
});

/*
products page (PLP)
*/

Route::get('plants', [ProductController::class, 'index'])->name('plants');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

/*
product page (PDP)s
*/
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/add-to-cart/{id}/{quantity?}', [ProductController::class, 'addToCart']);

Route::get('/search', [SearchController::class, "index"])->name('search');


Route::get('/products/{species}', [ProductController::class, 'showBySpecies']);


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/place-order', [CheckoutController::class, 'placeAnOrder'])->name('checkout.placeAnOrder');


require __DIR__.'/auth.php';
