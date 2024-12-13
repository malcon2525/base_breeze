<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/adm', [AdmController::class, 'index']);
