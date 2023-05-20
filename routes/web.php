<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return '<html><body>こんにちは</body></html>';
});

Route::get('/manga/index', [MangaController::class, 'index'])->middleware('auth');

Route::get('/manga/add', [MangaController::class, 'add'])->middleware('auth')->name('manga.add');
Route::post('/manga/add', [MangaController::class, 'create'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/plus/{id}', [MangaController::class, 'plus'])->middleware('auth')->name('manga.plus');

Route::get('/delete/{id}', [MangaController::class, 'delete'])->middleware('auth')->name('manga.delete');