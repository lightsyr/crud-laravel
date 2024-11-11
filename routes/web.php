<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicationCategoryController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;


Route::resource("publication", PublicationController::class);
Route::resource("publication_category", PublicationCategoryController::class);
Route::get("login", [LoginController::class, 'index'])->name("login");
Route::post("login", [LoginController::class, 'login'])->name('login.store');
Route::get("dashboard", [DashboardController::class, 'index'])->middleware('auth');
Route::get("logout", [LoginController::class, 'logout'])->name('logout');