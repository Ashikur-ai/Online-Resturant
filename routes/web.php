<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\OrderController;
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

//customer side

//navbar control
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/restaurant', [HomeController::class, 'restaurant'])->name('restaurant.show');
Route::get('/meal', [HomeController::class, 'meal'])->name('meal.show');
Route::get('/about', [HomeController::class, 'about'])->name('about.show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.show');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart.show');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout.show');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout.show');

//HomePage urls
Route::get('/Details/{id}', [HomePageController::class, 'detail'])->name('product.detail');
Route::get('/weeklyPayment/', [HomePageController::class, 'weekly'])->name('week.payment');
Route::get('/mart/', [HomePageController::class, 'mart'])->name('mart.show');


//Meal Order
Route::get('/Product/{id}', [OrderController::class, 'OrderProduct'])->name('orderProduct.now');
Route::get('/Meal/{id}', [OrderController::class, 'OrderMeal'])->name('orderMeal.now');



//customer side ends


//seller side

Route::post('/about', [ProductController::class, 'Upload'])->name('product.upload');
Route::get('/uploaded_product', [ProductController::class, 'Show'])->name('uploaded_product.show');


Route::get('/meal_create', [ProductController::class, 'mealPage'])->name('mealcreate.show');
Route::post('/mealUpload', [ProductController::class, 'UploadMeal'])->name('meal.upload');
Route::get('/allMeal', [ProductController::class, 'allMeal'])->name('allMeal.show');






//Admin site
Route::get('/show_user', [AdminController::class, 'showUser'])->name('user.show');
Route::get('/admin_product', [AdminController::class, 'adminProductShow'])->name('product_admin.show');
Route::get('/admin_meal', [AdminController::class, 'adminMealShow'])->name('meal_admin.show');
Route::get('/all_order', [AdminController::class, 'OrderAll'])->name('allOrder.show');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
