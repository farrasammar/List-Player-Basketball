<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlayerController;
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
Route::get('/beranda', function () {
    return view('HalamanDepan.beranda');
});
Route::get('/home', function () {
    return view('HalamanDepan.home');
});

Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');

//Route::get('/data-player',['PlayerController@index'])->name('data-player');

Route::post('/simpan-player',[PlayerController::class,'store'])->name('simpan-player');
Route::post('/update-player/{id}',[PlayerController::class,'update'])->name('update-player');
Route::get('/delete-player/{id}',[PlayerController::class,'destroy'])->name('delete-player');

Route::group(['middleware' => ['auth','ceklevel:admin,player']], function(){
    Route::get('/data-player',[PlayerController::class,'index'])->name('data-player');
    Route::get('/create-player',[PlayerController::class,'create'])->name('create-player');
    Route::get('/edit-player/{id}',[PlayerController::class,'edit'])->name('edit-player');
});

?>