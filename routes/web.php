<?php

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
Route::get('/drugs/{slug}', [DrugsController::class, 'show'])->name('drugs.show');
Route::post ('/carrier/apply', [CarrierController::class, 'apply'])->name('carrier.apply');
Route::get('/vacancies', [CarrierController::class, 'vacancies']);
Route::get('/vacancy-download', [CarrierController::class, 'downloadVacancy']);
