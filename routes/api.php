<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HuntController;
use App\Http\Controllers\WaypointController;
use App\Http\Controllers\UserGroupHuntController;
use Illuminate\Support\Facades\Log;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UserController::class, 'register']);

Route::get('/hunts', [HuntController::class, 'index']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::post('/hunt/create/', [UserGroupHuntController::class, 'create']);
});

Route::get('/waypoints/show/{id}', [WaypointController::class, 'show']);

Route::get('/hunt/show/{id}', [UserGroupHuntController::class, 'show']);

