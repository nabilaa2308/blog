<?php

use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostHomeController;
use App\Http\Controllers\tagController;
use App\Models\Kategori;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/kategori', function () {
    return view('kategori',[
        "title" => "kategori",
    ]);
});

Route::get('/posts', function () {
    return view('posts',[
        "title" => "Posts"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/kategori', DashboardKategoriController::class);

Route::group(['prefix' => 'filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::resource('/dashboard/post', PostController::class);

Route::resource('/dashboard/tag', tagController::class);



// Auth::routes();

// Route::get('/dashboard/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Auth::routes();

// Route::get('/dashboard/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');