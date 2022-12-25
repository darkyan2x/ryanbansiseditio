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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('api')->group( function () {
    Route::post('/register',[App\Http\Controllers\AuthController::class,'register']);
    Route::post('/login',[App\Http\Controllers\AuthController::class,'login']);
    Route::post('/add-user/role', [App\Http\Controllers\RoleUserController::class,'store']);
    Route::post('/add-user/facility', [App\Http\Controllers\FacilityUserController::class, 'store']);
    Route::get('/user/{id}/roles', [App\Http\Controllers\UserController::class, 'roles']);
    Route::get('/user/{id}/facilities', [App\Http\Controllers\UserController::class, 'facilities']);
    Route::resource('/roles', App\Http\Controllers\RolesController::class);
});





