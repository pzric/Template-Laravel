<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\BenefitedController;
use App\Http\Controllers\Admin\UserController;

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

Route::resource('/benefited', BenefitedController::class)->names('benefited');

Route::resource('/countries', CountryController::class)->names('countries');

Route::resource('/concept', ConceptController::class)->names('concept');

Route::resource('/reports', ReportController::class)->names('reports');
