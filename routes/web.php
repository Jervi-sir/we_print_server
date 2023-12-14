<?php

use App\Http\Controllers\ExtraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'productShow'])->name('product.show');
Route::get('/products', [ProductController::class, 'productList'])->name('products.list');
Route::get('/shop/{id}', [ShopController::class, 'shopShow'])->name('shop.show');
Route::get('/shops', [ShopController::class, 'shopList'])->name('shop.list');

Route::get('/about-us', [ExtraController::class, 'aboutUs'])->name('aboutus');
Route::get('/blog/{id}', [ExtraController::class, 'blogShow'])->name('blog.show');
Route::get('/blogs', [ExtraController::class, 'blogList'])->name('blog.list');
Route::get('/contact', [ExtraController::class, 'contact'])->name('contact');
Route::get('/faq', [ExtraController::class, 'faq'])->name('faq');
Route::get('/team', [ExtraController::class, 'team'])->name('team');

//Route::get('/service/{id}', [HomeController::class, 'home'])->name('home');
//Route::get('/services', [HomeController::class, 'home'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/cart', [PaymentController::class, 'cart'])->name('cart');
    Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');

    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
