<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TextsController;
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
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/drugs', [DashboardController::class, 'drugs'])->name('dashboard.drugs');
    Route::get('/carrier', [DashboardController::class, 'carrier'])->name('dashboard.carrier');
    Route::get('/banners', [DashboardController::class, 'banners'])->name('dashboard.banners');

    Route::post('/text-update', [TextsController::class, 'update']);
    Route::post('/map-update', [TextsController::class, 'updateMap']);

    Route::post('/insert-social-link', [DashboardController::class, 'insertSocialLink']);
    Route::post('/update-social-link', [DashboardController::class, 'updateSocialLink']);
    Route::get('/destroy-social-link', [DashboardController::class, 'destroySocialLink']);

    Route::get('/drug-create', [DrugsController::class, 'createDrug']);
    Route::post('/drug-store', [DrugsController::class, 'storeDrug']);
    Route::get('/drug-edit', [DrugsController::class, 'editDrug']);
    Route::post('/drug-update', [DrugsController::class, 'updateDrug']);
    Route::get('/drug-destroy', [DrugsController::class, 'destroyDrug']);
  });
});
