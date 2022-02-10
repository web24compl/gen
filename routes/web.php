<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FooterController;
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

Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/footer/mobile/{id}/{lang}', [FooterController::class, 'mobile_show'])->name('footer.mobile');
// Route::get('/footer/desktop/{id}/{lang}', [FooterController::class, 'desktop_show'])->name('footer.desktop');
// Route::get('/image/mobile/{id}/{lang}', [FooterController::class, 'mobile_image'])->name('image.mobile');
// Route::get('/image/desktop/{id}/{lang}', [FooterController::class, 'desktop_image'])->name('image.desktop');

// Route::resource('employees', EmployeeController::class)->except(['show', 'index']);
// Route::resource('companies', CompanyController::class)->except(['show']);
