<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\SettingController;

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
Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function(){
    Route::prefix('/driver')->name('driver.')->group(function(){
        Route::get('', [DriverController::class , 'index'])->name('index');
        Route::get('/create', [DriverController::class , 'create'])->name('create');
        Route::get('/{id}/edit', [DriverController::class , 'edit'])->name('edit');
    });
    Route::prefix('/setting')->name('setting.')->group(function(){
        Route::get('', [SettingController::class, 'form'])->name('form');
        Route::post('', [SettingController::class , 'action'])->name('action');
    });
});
Route::get('/',[PageController::class, 'home'])->name('default');
Route::prefix('drive')->name('drive.')->group(function(){
    Route::get('/create',[PageController::class, 'drive'])->name('create');
    Route::post('/store',[PageController::class, 'store'])->name('store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
