<?php

use Illuminate\Support\Facades\Route;

Route::get('/', PagesController::class, 'home');
Route::get('/blog', PagesController::class, 'blog');
Route::get('/contact', PagesController::class, 'contact');
Route::get('/about', PagesController::class, 'about');