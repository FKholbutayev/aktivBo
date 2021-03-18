<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


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
    return view('welcome');
});

Route::get('/dashboard/articles', [DashboardController::class, 'index'])->name('article.index');
Route::get('/dashboard/articles/{article}', [DashboardController::class, 'show'])->name('article.show');

require __DIR__.'/auth.php';
