<?php

use App\Http\Controllers\Api\v1\Auth\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\BookController;
use App\Http\Controllers\Api\v1\AuthorController;
use App\Http\Controllers\Api\v1\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('v1')->group( function () {
    #---------------Auth----------------#
    Route::post('register', [AuthController::class,'register']);
    Route::Post('login', [AuthController::class, 'login']);

    Route::group(['middleware' => 'jwt.auth'], function() {

        Route::post('me', [AuthController::class,'me']);
        Route::Post('logout', [AuthController::class, 'logout']);
    });
    
    #------------------Books----------------------------#
   Route::apiResource('books',BookController::class);
   Route::apiResource('authors', AuthorController::class);
   Route::apiResource('categories', CategoriesController::class);
});