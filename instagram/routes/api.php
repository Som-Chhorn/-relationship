<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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

///Public routes of user
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);

///Private route of User
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);


///Public route of profile
Route::get('profiles', [ProfileController::class, 'index']);
Route::post('profiles', [ProfileController::class, 'store']);
Route::get('profiles/{id}', [ProfileController::class, 'show']);

///Private route of Profile
Route::put('profiles/{id}', [ProfileController::class, 'update']);
Route::delete('profiles/{id}', [ProfileController::class, 'destroy']);



////Public route of Post
Route::get('posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'store']);
Route::get('posts/{id}', [PostController::class, 'show']);

///Private route of Post
Route::put('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);


//Publice Comment route
Route::get('comments', [CommentController::class, 'index']);
Route::post('comments', [CommentController::class, 'store']);
Route::get('comments/{id}', [CommentController::class, 'show']);
///Private route of Comment
Route::put('comments/{id}', [CommentController::class, 'update']);
Route::delete('comments/{id}', [CommentController::class, 'destroy']);

///Public route of Role
Route::get('roles', [RoleController::class, 'index']);
Route::post('roles', [RoleController::class, 'store']);
Route::get('roles/{id}', [RoleController::class, 'show']);
///Private route of Role
Route::put('roles/{id}', [RoleController::class, 'update']);
Route::delete('roles/{id}', [RoleController::class, 'destroy']);