<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ClientController;
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
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kontakclient', [HomeController::class, 'showKontak']);
Route::get('tentang', [HomeController::class, 'showTentang']);
Route::get('post', [HomeController::class, 'showPost']);


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('artikel/filter',[ArtikelController::class, 'filter']);
    Route::post('user/filter',[UserController::class, 'filter']);
    Route::post('komentar/filter',[KomentarController::class, 'filter']);
    Route::resource('user', UserController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('komentar', KomentarController::class);
});

Route::prefix('user')->group(function(){
    Route::post('client/filterNama',[ClientController::class, 'filterNama']);
    Route::post('client/filterTanggal',[ClientController::class, 'filterTanggal']);
    Route::post('client/filterTag',[ClientController::class, 'filterTag']);
    Route::get('client', [ClientController::class, 'index']);
    Route::get('client/{artikel}', [ClientController::class, 'show']);
    Route::post('client/{artikel}', [ClientController::class, 'storeKomentar']);
});