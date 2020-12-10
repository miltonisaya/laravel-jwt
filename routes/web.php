<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UsersController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'

], function ($router) {
    Route::post('/login',         [AuthController::class, 'login']);
    Route::post('/register-user', [AuthController::class, 'register']);
    Route::post('/logout',        [AuthController::class, 'logout']);
    Route::post('/refresh',       [AuthController::class, 'refresh']);
    Route::get('/user-profile',   [AuthController::class, 'userProfile']);

    Route::get('users',           [UsersController::class, 'index']);
});
