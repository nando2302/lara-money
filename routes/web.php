<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SettingController;
// use App\Models\CompanyProfile;
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
Route::resource('/companyprofile', CompanyController::class);
Route::resource('/setting', SettingController::class);
