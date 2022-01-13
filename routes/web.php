<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DriverController;

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
Route::prefix('admin')->namespace('Admin')->name('admin')->group(function(){
    Route::prefix('/driver')->name('driver.')->group(function(){
        Route::get('', [DriverController::class , 'index'])->name('index');
        Route::get('/create', [DriverController::class , 'create'])->name('create');
        Route::get('/{id}/edit', [DriverController::class , 'edit'])->name('edit');
    });
});
Route::get('/',[PageController::class, 'home'])->name('default');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
