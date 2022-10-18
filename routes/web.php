<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::post('/products/filter', [ProductsController::class, 'filter']);
Route::get('/products/{slug}', [ProductsController::class, 'show'])->name('products.show');

Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['AdminCheck'], 'prefix' => 'admin'], function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin');
  Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
  Route::get('/banners', [AdminController::class, 'banners'])->name('dashboard.banners');

  Route::post('/text-update', [TextsController::class, 'update']);
  Route::post('/map-update', [TextsController::class, 'updateMap']);

  Route::post('/insert-social-link', [AdminController::class, 'insertSocialLink']);
  Route::post('/update-social-link', [AdminController::class, 'updateSocialLink']);
  Route::get('/destroy-social-link', [AdminController::class, 'destroySocialLink']);

  Route::get('/drug-create', [DrugsController::class, 'createDrug']);
  Route::post('/drug-store', [DrugsController::class, 'storeDrug']);
  Route::get('/drug-edit', [DrugsController::class, 'editDrug']);
  Route::post('/drug-update', [DrugsController::class, 'updateDrug']);
  Route::get('/drug-destroy', [DrugsController::class, 'destroyDrug']);

  Route::post('/banners-store', [BannersController::class, 'store']);
  Route::get('/banners-destroy', [BannersController::class, 'destroy']);
  Route::post('/banners-update', [BannersController::class, 'update']);
});
