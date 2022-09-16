<?php

use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\tagController;
use App\Models\Kategori;
use App\Models\Tag;

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


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/post/{slug}', [HomeController::class, 'showPostDetail'])->name('post-detail');

Route::get('/kategori', [HomeController::class, 'listKategori'])->name('kategori');

Route::get('/search', [HomeController::class, 'searchPosts'])->name('search-post');

Route::get('/kategori/{slug}', [HomeController::class, 'showPostByKategori'])->name('post-kategori');

Route::get('/tag/{slug}', [HomeController::class, 'showPostByTag'])->name('post-tag');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/dashboard/kategori', DashboardKategoriController::class);

Route::group(['prefix' => 'filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::resource('/dashboard/post', PostController::class);

Route::resource('/dashboard/tag', tagController::class);
// Route::post('/meta', [MetaController::class, 'MetaController@store']);
Route::resource('/dashboard/meta', MetaController::class);


