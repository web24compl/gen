<?php

use Gabenn\Generator\Http\Controllers\HomeController;
use Gabenn\Generator\Http\Controllers\FooterController;
use Gabenn\Generator\Http\Controllers\EmployeeController;
use Gabenn\Generator\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function(){
  Route::get('/', [HomeController::class, 'index'])->name('home');

  Route::get('/footer/mobile/{id}/{lang}', [FooterController::class, 'mobile_show'])->name('footer.mobile');
  Route::get('/footer/desktop/{id}/{lang}', [FooterController::class, 'desktop_show'])->name('footer.desktop');
  Route::get('/image/mobile/{id}/{lang}', [FooterController::class, 'mobile_image'])->name('image.mobile');
  Route::get('/image/desktop/{id}/{lang}', [FooterController::class, 'desktop_image'])->name('image.desktop');
  
  Route::resource('employees', EmployeeController::class)->except(['show', 'index']);
  Route::resource('companies', CompanyController::class)->except(['show']);
});
