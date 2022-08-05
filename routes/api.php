<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\UserController;
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

// Public 
Route::post('/register', [AuthApiController::class, 'register']);
Route::post('/login', [AuthApiController::class, 'login']);
Route::get('/posts/search/{title}', [PostController::class, 'search']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

// Route::resource('users', UserController::class);

// Protected

Route::group(['middleware' => ['auth:sanctum']], function() {
	Route::post('/posts', [PostController::class, 'store']);
	Route::put('/posts{id}', [PostController::class, 'update']);
	Route::delete('/posts{id}', [PostController::class, 'destroy']);
	Route::post('/logout', [AuthApiController::class, 'logout']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
