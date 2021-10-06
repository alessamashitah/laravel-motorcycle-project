<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('motorcycle/index', [App\Http\Controllers\MotorcycleController::class, 'index'])->name('motorcycleindex');
Route::get('motorcycle/add', [App\Http\Controllers\MotorcycleController::class, 'create'])->name('motorcycleadd'); 
Route::post('motorcycle/store', [App\Http\Controllers\MotorcycleController::class, 'store'])->name('motorcyclestore'); 
Route::get('motorcycle/{motorcycle}', [App\Http\Controllers\MotorcycleController::class, 'edit'])->name('motorcycleedit');
Route::post('motorcycle/update/{motorcycle}', [App\Http\Controllers\MotorcycleController::class, 'update'])->name('motorcycleupdate');  
Route::get('motorcycle/delete/{motorcycle}', [App\Http\Controllers\MotorcycleController::class, 'delete'])->name('motorcycledelete');


Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
