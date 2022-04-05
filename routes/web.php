<?php

use App\Http\Controllers\obatController;
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

Route::get('/home', function () {
    return view('home');
});

// Route::get('/create', function () {
//     return view('data-create');
// });

Route::get('/', [obatController::class, 'index']);
Route::get('/create', [obatController::class, 'create']);
Route::post('/store', [obatController::class, 'store']);
Route::get('/show/{id}', [obatController::class, 'show']);
Route::get('/destroy/{id}', [obatController::class, 'destroy']);
Route::post('/update/{id}', [obatController::class, 'update']);



