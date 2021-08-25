<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\DetailController;
use Illuminate\Contracts\Cache\Store;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::post('/register',[RegisterController::class, 'post']);
route::get('/v1/shops',[ShopsController::class, 'index']);
// route::get('/v1/shops',[ShopsController::class, 'show']);
route::get('/v1/shops/{shop_id}',[DetailController::class, 'index',]);
Route::post('/v1/shops/{shop_id}/reserve', [ReservesController::class, 'post']);
Route::delete('/v1/shops/reserve/{reserve_id}', [ReservesController::class, 'delete']);

route::get('v1/like', [LikesController::class, 'index']);

