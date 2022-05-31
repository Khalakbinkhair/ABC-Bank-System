<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegController;

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
Route::get('/registration',[RegController::class,'reg'])->name('registration');
Route::post('/registration',[RegController::class,'regsubmit'])->name('regsubmit');

Route::get('/login',[RegController::class,'login'])->name('login');