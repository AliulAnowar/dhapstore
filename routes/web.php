<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return view('index');
});
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
//////
///Cart

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
///////

Route::get('/demo40-product', [PageController::class, 'demo40product']);
// URL:  /demo40-shop
Route::get('/demo40-shop', [PageController::class, 'shop'])->name('demo40-shop');

//login-register
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/registration', [PageController::class, 'registration'])->name('registration');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/category', [PageController::class, 'category'])->name('category');
Route::get('/login', [PageController::class, 'login'])->name('login');
// Route::get('/product', [PageController::class, 'product'])->name('product');

Route::get('/category-list', [PageController::class, 'categoryList'])->name('category.list');
Route::get('/category-4col', [PageController::class, 'category4col'])->name('category.4col');
Route::get('/category-5col', [PageController::class, 'category5col'])->name('category.5col');
Route::get('/category-6col', [PageController::class, 'category6col'])->name('category.6col');
Route::get('/category-7col', [PageController::class, 'category7col'])->name('category.7col');
Route::get('/category-8col', [PageController::class, 'category8col'])->name('category.8col');