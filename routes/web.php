<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\EntityTypeController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('buildings', BuildingController::class)->except(['destroy', 'show']);
Route::resource('sections', SectionController::class)->except('destroy');
Route::resource('entity-types', EntityTypeController::class)->except('destroy');
Route::resource('entities', EntityController::class)->except('destroy');
