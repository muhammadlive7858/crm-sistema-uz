<?php

use App\Http\Controllers\KurslarController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\KassirlarController;
use App\Http\Controllers\MentorlarController;
use App\Http\Controllers\OquvchilarController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/category/index',function(){
    return 'salom';
})->name('admin.category.index');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    // Category
    Route::resource('kurs',KurslarController::class)->names('kurs');
    // Product
    Route::resource('oquvchi', OquvchilarController::class)->names('oquvchi');
    // user
    Route::resource('mentor', MentorlarController::class)->names('mentor');
    // order
    Route::resource('order', OrderController::class)->names('order');
    // kassir
    Route::resource('kassir', KassirlarController::class)->names('kassir');
    // adminstrotor
    Route::resource('adminstrotor', AdminstratorlarController::class)->names('adminstrator');

});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
