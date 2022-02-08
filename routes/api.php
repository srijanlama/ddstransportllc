<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\DriverController;
use App\Http\Controllers\Api\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('admin')->name('api.admin.')->namespace('Api\Admin')->middleware('api')->group(function(){
    Route::prefix('driver')->name('driver.')->group(function(){
        Route::get('',[DriverController::class , 'all'])->name('all');
        route::post('store',[ DriverController::class , 'store'])->name('store');
        route::post('{id}/update',[ DriverController::class , 'update'])->name('update');
        route::get('{id}/show',[ DriverController::class , 'show'])->name('show');
        route::post('{id}/avatar',[ DriverController::class , 'avatar'])->name('avatar');
    });

    Route::prefix('/setting')->name('setting.')->group(function(){
        Route::post('', [SettingController::class , 'action'])->name('action');
    });
    
});
