<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {

//     return view('welcome');

// });

// Route::get('/', 'App\Http\Controllers\HomePageController@index')->name('landing');

Route::get('/', [HomePageController::class, 'index'])->name('landing');

Route::get('categories', [CategoryController::class, 'index'])->name('allCategories');

Route::get('category/{id}', [CategoryController::class, 'categoryDetails'])->name('categoryDetails');

Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('admin/users', [UserController::class, 'index'])->name('users');

Route::get('posts/show/{id}', [PostController::class, 'show'])->name('singlePost');
Route::resource('categories', CategoryController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
