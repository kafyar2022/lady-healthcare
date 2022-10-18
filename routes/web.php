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

Route::group(['middleware' => ['AuthCheck'], 'prefix' => 'admin'], function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin');

  Route::get('/products/{action?}/{product?}', [AdminController::class, 'products'])->name('admin.products');
  Route::post('/products/{action?}', [AdminController::class, 'productsPost'])->name('products.post');

  Route::get('/directions/{action?}/{direction?}', [AdminController::class, 'directions'])->name('admin.directions');
  Route::post('/directions/{action?}', [AdminController::class, 'directionsPost'])->name('directions.post');

  Route::get('/banners', [AdminController::class, 'banners'])->name('admin.banners');
});
