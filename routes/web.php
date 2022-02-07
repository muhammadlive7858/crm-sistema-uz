<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::get('admin/category/index',function(){
    return 'salom';
})->name('admin.category.index');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    // Category
    Route::resource('category',CategoryController::class)->names('category');
    // Product
    Route::resource('product', UserController::class)->names('product');
    // user
    Route::resource('user', UserController::class)->names('user');
    // order
    Route::resource('order', UserController::class)->names('order');
});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
