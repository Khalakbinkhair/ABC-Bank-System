<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\ourbankingController;

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
Route::post('/login',[RegController::class,'logsubmit'])->name('logsubmit');
Route::get('/logout',[RegController::class,'logout'])->name('logout');


Route::get('/dashboard/dashboard',[dashController::class,'dashboard'])->name('dashboard');
Route::get('/home',[dashController::class,'home'])->name('home');
Route::get('/ourbanking',[dashController::class,'ourbanking'])->name('ourbanking');
Route::get('/location',[dashController::class,'location'])->name('location');
Route::get('/mediacorner',[dashController::class,'mediacorner'])->name('mediacorner');
Route::get('/financialhighlights',[dashController::class,'financialhighlights'])->name('financialhighlights');
Route::get('/notice',[dashController::class,'notice'])->name('notice');
Route::get('/contactus',[dashController::class,'contactus'])->name('contactus');
Route::get('/career',[dashController::class,'career'])->name('career');




Route::get('/aboutus/corporate_profile',[aboutusController::class,'Corporate_Profile'])->name('Corporate_Profile');
Route::get('/aboutus/corporate_governance',[aboutusController::class,'Corporate_Governance'])->name('Corporate_Governance');

Route::get('/ourbanking/deposit_products',[ourbankingController::class,'deposit_products'])->name('Deposit_Products');
Route::get('/ourbanking/NRB_banking',[ourbankingController::class,'NRB_banking'])->name('NRB_Banking');
Route::get('/ourbanking/women_banking',[ourbankingController::class,'women_banking'])->name('Women_Banking');
Route::get('/ourbanking/digital_banking',[ourbankingController::class,'digital_banking'])->name('Digital_Banking');
Route::get('/ourbanking/other_banking',[ourbankingController::class,'other_banking'])->name('Other_Banking');


Route::get('/ourbanking/deposit_products/FDR',[ourbankingController::class,'FDR'])->name('FDR');
Route::get('/ourbanking/deposit_products/business_acc',[ourbankingController::class,'business_acc'])->name('business_acc');
Route::get('/ourbanking/deposit_products/current_acc',[ourbankingController::class,'current_acc'])->name('current_acc');







