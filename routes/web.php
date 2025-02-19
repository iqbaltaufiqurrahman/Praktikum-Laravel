<?php

use App\Http\Controllers\CourtsController;
use App\Http\Controllers\CourtTypeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/form', function () {
    return view('form');
});
*/

//Routing ke halaman Courts
Route::get('/courts', [CourtsController::class, 'index']);

//Routing ke halaman Court Type
Route::get('/type', [CourtTypeController::class, 'index']);

Route::post('/', [CourtTypeController::class, 'store']);

Route::resource('court', CourtsController::class);

?>