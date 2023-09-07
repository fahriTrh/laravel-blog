<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostsController;
use App\Models\Category;
use App\Http\Controllers\AdminCategoryController;

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

Route::get('/', fn() => redirect('/posts'));

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', fn(Category $category) => view('categories.index',['title' => 'Post Category', 'categories' => $category::all()]));

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', fn() => view('dashboard.index', ['title' => 'dashboard']))->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin')->except('show');
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');