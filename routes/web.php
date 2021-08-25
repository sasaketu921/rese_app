<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ReservesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');

Route::prefix('api/v1')->group(function () {
    Route::get('user', [UsersController::class, 'index']);
    Route::post('shops/{shop_id}/like', [LikesController::class, 'post']);
    Route::delete('shops/{shop_id}/unlike', [LikesController::class, 'delete']);
});
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
