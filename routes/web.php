<?php

// use App\Http\Controllers\CompanyController;

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SettingController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::put('/setting/update', [SettingController::class, 'update'])->name('setting.update');
// Route::post(`/setting/update{$id}`, [SettingController::class, 'update'])->name('setting.update');
Route::resource('/kategori', KategoriController::class);
