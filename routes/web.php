<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;


Route::resource('buildings', BuildingController::class)->except('destroy');
Route::resource('sections', SectionController::class)->except('destroy');
