<?php

use App\Http\Controllers\PublicationCategoryController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;


Route::resource("publication", PublicationController::class);
Route::resource("publication_category", PublicationCategoryController::class);