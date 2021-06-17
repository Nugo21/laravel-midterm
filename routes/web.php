<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('category',[CategoryController::class,'index'])->name('category');
    Route::get('category-create',[CategoryController::class,'create'])->name('categoryCreateView');
    Route::post('categoryCreate',[CategoryController::class,'store'])->name('categoryCreate');

    Route::get('product-creat',[ProductController::class,'create'])->name('productCreateView');
    Route::post('productCreate',[ProductController::class,'store'])->name('productCreate');
    Route::get('productCategory/{id}',[ProductController::class,'productCategory'])->name('productCategory');

//    Route::resource('category', Home::class)
//        ->name('index', 'categoryIndex')
//        ->name('create', 'categoryCreateView')
//        ->name('store', 'categoryCreate')
////        ->name('edit', 'categoryEditView')
////        ->name('update', 'localizationUpdate')
//        ->name('destroy', 'localizationDestroy');
//        ->name('show', 'localizationShow');
});

