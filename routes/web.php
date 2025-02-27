<?php

use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;


Route::resource('buildings', BuildingController::class)->except('destroy');
