<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogs;
use App\Http\Controllers\Auth;
use App\Models\Bloog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [Blogs::class, 'index']);

Route::get("blogs/{id}", [Blogs::class, 'blog_details']);

Route::get("blogs/{id}/delete/", [Blogs::class, 'delete_blog']);

Route::get("create/blog/", [Blogs::class, 'create_blog_render']);

Route::post("create/", [Blogs::class, 'create_blog']);

Route::get("reg_view/", [Auth::class, 'register_view']);

Route::post("register", [Auth::class, 'register_user']);

Route::get("login_view/", [Auth::class, 'login_view']);

Route::post("login", [Auth::class, 'login_user']);

Route::get("logout/", [Auth::class, 'logout']);


Route::get("profile/{username}", [Blogs::class, 'get_profile']);


