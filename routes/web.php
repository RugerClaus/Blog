<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Response;

Route::get('/', [PagesController::class, 'home']);
Route::get('/blog', [PagesController::class, 'blog']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/about', [PagesController::class, 'about']);
Route::get("/games", [PagesController::class, 'games']);
Route::get('/games/snowblitz', [PagesController::class, 'snowblitz']);

Route::get('/download/{filename}', [DownloadController::class, 'SnowBlitz']);