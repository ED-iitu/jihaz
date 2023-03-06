<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('categories-with-count', [\App\Http\Controllers\Api\v1\CategoryController::class, 'getWithCount']);
Route::get('menu', [\App\Http\Controllers\Api\v1\MenuController::class, 'getMenu']);
Route::get('bestsellers', [\App\Http\Controllers\Api\v1\ItemController::class, 'getBestsellers']);
Route::get('items/room/{id}', [\App\Http\Controllers\Api\v1\RoomController::class, 'getById']);
Route::get('item/{id}', [\App\Http\Controllers\Api\v1\ItemController::class, 'getById']);
Route::get('items/category/{categoryId}', []);

Route::group(['prefix' => 'v1'], function () {
    Route::get('rooms', [\App\Http\Controllers\Api\v1\RoomController::class, 'index']);
    Route::post('order/create', [\App\Http\Controllers\Api\v1\OrderController::class, 'create']);
});

Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
    return $request->user();
});
