<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BKController;

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

Route::resource('/bk', BKController::class);
// Route::get('/create', [BKController::class, 'create']);
// Route::post('/bk', [BKController::class, 'store']);
// Route::get('/show/{bk:id}', [BKController::class, 'show']);
// Route::get('/edit/{bk:id}', [BKController::class, 'edit']);
// Route::post('/edit/{bk:id}', [BKController::class, 'update']);
// Route::post('/delete/{bk:id}', [BKController::class, 'destroy']);