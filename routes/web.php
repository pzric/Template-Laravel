<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [HomeController::class, 'home'])->name('login');
Route::post('dashboard', [SessionController::class, 'login'])->name('home');
Route::post('logout', [SessionController::class, 'logout'])->name('logout');

Route::get('dashboard', [HomeController::class, 'panel'])->name('panel');

Route::post('/reports/import', [ImportController::class, 'import'])->name('/reports/import');

Route::resource('/users', UserController::class)->names('users');

Route::resource('/countries', CountryController::class)->names('countries');

Route::resource('/reports', ReportController::class)->names('reports');
