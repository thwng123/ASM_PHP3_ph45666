<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;


use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BookController::class, 'index'])->name('client.index');

Route::get('shop-single/{id}', [BookController::class, 'detail'])->name('client.shop-single');

Route::get('popular-book/{id}', [BookController::class, 'popular_book'])->name('client.popular-book');

Route::get('search', [BookController::class, 'search'])->name('client.search');

//ADMIN

Route::get('/login',[AuthController::class,'getLogin'])->name('login');
Route::post('/login',[AuthController::class,'postLogin'])->name('postLogin');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('index');

    Route::get('/',[DashboardController::class,'index'])->name('index');

    Route::prefix('books')
            ->as('books.')
            ->group(function () {
                Route::get('/',                 [\App\Http\Controllers\Admin\BookController::class, 'index'])->name('index');
                Route::get('create',            [\App\Http\Controllers\Admin\BookController::class, 'create'])->name('create');
                Route::post('store',            [\App\Http\Controllers\Admin\BookController::class, 'store'])->name('store');
                Route::get('show/{book}',         [\App\Http\Controllers\Admin\BookController::class, 'show'])->name('show');
                Route::get('{book}/edit',         [\App\Http\Controllers\Admin\BookController::class, 'edit'])->name('edit');
                Route::put('{book}/update',       [\App\Http\Controllers\Admin\BookController::class, 'update'])->name('update');
                Route::delete('{book}/destroy',   [\App\Http\Controllers\Admin\BookController::class, 'destroy'])->name('destroy');

            });
    Route::prefix('user')
            ->as('users.')
            ->group(function () {
                Route::get('/',                 [UserController::class, 'index'])->name('index');
                Route::get('create',            [UserController::class, 'create'])->name('create');
                Route::post('store',            [UserController::class, 'store'])->name('store');
                Route::get('show/{user}',         [UserController::class, 'show'])->name('show');
                Route::get('{user}/edit',         [UserController::class, 'edit'])->name('edit');
                Route::put('{user}/update',       [UserController::class, 'update'])->name('update');
                Route::delete('{user}/destroy',   [UserController::class, 'destroy'])->name('destroy');

            });
    Route::prefix('categories')
            ->as('categories.')
            ->group(function () {
                Route::get('/',                 [CategoryController::class, 'index'])->name('index');
                Route::get('create',            [CategoryController::class, 'create'])->name('create');
                Route::post('store',            [CategoryController::class, 'store'])->name('store');
                Route::get('show/{category}',         [CategoryController::class, 'show'])->name('show');
                Route::get('{category}/edit',         [CategoryController::class, 'edit'])->name('edit');
                Route::put('{category}/update',       [CategoryController::class, 'update'])->name('update');
                Route::delete('{category}/destroy',   [CategoryController::class, 'destroy'])->name('destroy');

            });
        
});


//  Route::get('admin/books/',[\App\Http\Controllers\Admin\BookController::class,'index'])->name('admin.books.index');


