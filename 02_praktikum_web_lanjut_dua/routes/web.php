<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
    echo('Selamat Datang');
});
Route::get('/about', function () {
    echo('1941720135 - Savina Lintang');
});
Route::get('/articles/{id}', function ($id) {
    echo('Halaman Artikel Dengan Id '.$id);
});

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/articles/{id}', [HomeController::class, 'articles']);

Route::get('/', [AboutController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [AboutController::class, 'articles']);

Route::get('/', [ArticleController::class, 'index']);
Route::get('/about', [ArticleController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);