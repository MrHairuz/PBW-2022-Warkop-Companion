<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Auth::routes();

Route::get('/companion', [App\Http\Controllers\CompanionController::class, 'index'])->name('home');

Route::get('/pesanan', [App\Http\Controllers\PesananController::class, 'index'])->name('pesanan');

Route::get('/pesanan/edit/{pesanan_id}', ['as' => 'pesanan.edit', 'uses' => 'App\Http\Controllers\PesananController@edit']);

Route::post('/pesanan/store/{pesanan_id}', ['as' => 'pesanan.store', 'uses' => 'App\Http\Controllers\PesananController@store']);
