<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PagesController::class, 'blogDetails'])->name('blog.details');
