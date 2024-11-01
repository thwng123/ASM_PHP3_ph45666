<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;


use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BookController::class, 'index'])->name('client.index');

Route::get('shop-single/{id}', [BookController::class, 'detail'])->name('client.shop-single');

Route::get('popular-book/{id}', [BookController::class, 'popular_book'])->name('client.popular-book');

Route::get('search', [BookController::class, 'search'])->name('client.search');

Route::post('/addToCart', [CartController::class, 'addToCart'])->name('client.addToCart')->middleware('auth');
Route::post('/updateCart', [CartController::class, 'updateCart'])->name('client.updateCart')->middleware('auth');
Route::get('cart', [CartController::class, 'index'])->name('client.cart')->middleware('auth');
Route::get('deleteCart/{id}', [CartController::class, 'deleteCart'])->name('client.deleteCart')->middleware('auth');


//Checkout
Route::get('checkout', [CheckoutController::class, 'index'])->name('client.checkout')->middleware('auth');
Route::post('checkout', [CheckoutController::class, 'checkout'])->name('client.checkoutItem')->middleware('auth');

//My Order
Route::get('myOrders', [OrderController::class, 'myOrders'])->name('myOrders')->middleware('auth');


Route::post('vnpay_payment', [CheckoutController::class, 'vnpay_payment'])->name('client.vnpay_payment')->middleware('auth');




//ADMIN

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/googleLogin', [AuthController::class, 'googleLogin']);
Route::get('/auth/google/callback', [AuthController::class, 'googleHandle']);


Route::middleware(['auth', 'admin'])->prefix('admin')->as('admin.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('index');

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::prefix('books')
        ->as('books.')
        ->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\BookController::class, 'index'])->name('index');
            Route::get('create', [\App\Http\Controllers\Admin\BookController::class, 'create'])->name('create');
            Route::post('store', [\App\Http\Controllers\Admin\BookController::class, 'store'])->name('store');
            Route::get('show/{book}', [\App\Http\Controllers\Admin\BookController::class, 'show'])->name('show');
            Route::get('{book}/edit', [\App\Http\Controllers\Admin\BookController::class, 'edit'])->name('edit');
            Route::put('{book}/update', [\App\Http\Controllers\Admin\BookController::class, 'update'])->name('update');
            Route::delete('{book}/destroy', [\App\Http\Controllers\Admin\BookController::class, 'destroy'])->name('destroy');

        });
    Route::prefix('user')
        ->as('users.')
        ->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('create', [UserController::class, 'create'])->name('create');
            Route::post('store', [UserController::class, 'store'])->name('store');
            Route::get('show/{user}', [UserController::class, 'show'])->name('show');
            Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit');
            Route::put('{user}/update', [UserController::class, 'update'])->name('update');
            Route::delete('{user}/destroy', [UserController::class, 'destroy'])->name('destroy');

        });
    Route::prefix('categories')
        ->as('categories.')
        ->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('create', [CategoryController::class, 'create'])->name('create');
            Route::post('store', [CategoryController::class, 'store'])->name('store');
            Route::get('show/{category}', [CategoryController::class, 'show'])->name('show');
            Route::get('{category}/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::put('{category}/update', [CategoryController::class, 'update'])->name('update');
            Route::delete('{category}/destroy', [CategoryController::class, 'destroy'])->name('destroy');

        });
    Route::prefix('orders')
        ->as('orders.')
        ->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('index');
            Route::get('changeOrderStatus/accepted/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'accept'])->name('accept');
            Route::get('changeOrderStatus/rejected/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'reject'])->name('reject');


        });

});


Route::get('changeOrderStatus/{status}/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'changeOrderStatus']);

//  Route::get('admin/books/',[\App\Http\Controllers\Admin\BookController::class,'index'])->name('admin.books.index');


