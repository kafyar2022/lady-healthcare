<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/drugs', [DrugsController::class, 'index'])->name('drugs');
Route::get('/drugs/download-instruction/{id}', [DrugsController::class, 'downloadInstruction'])->name('drugs.download-instruction');
Route::post('/drugs/filter', [DrugsController::class, 'filterDrugs']);
Route::get('/drugs/{slug}', [DrugsController::class, 'show'])->name('drugs.show');

Route::post('/carrier/apply', [CarrierController::class, 'apply'])->name('carrier.apply');
Route::get('/vacancies', [CarrierController::class, 'vacancies']);
Route::get('/vacancy-download', [CarrierController::class, 'downloadVacancy']);

Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function () {
  Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

  Route::group(['middleware' => ['AdminCheck'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [HomeController::class, ''])->name('dashboard.index');
    // other dashboard routes
  });
});
