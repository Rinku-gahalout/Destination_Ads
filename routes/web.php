<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogsController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::middleware('adminguest')->group(function () {
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login/authentication', [AdminController::class, 'authentication'])->name('admin.login.authentication');
});

Route::middleware('adminauth')->group(function () {
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// blog routes
Route::get('/admin/blogs', [BlogsController::class, 'showblog'])->name('admin.blogs');
Route::get('/admin/add/blog',[BlogsController::class,'addblog'])->name('admin.addblog');
Route::post('/admin/store/blog',[BlogsController::class,'storeblog'])->name('admin.storeblog');
Route::get('/admin/edit/blog/{id}',[BlogsController::class,'editblog'])->name('admin.editblog');
Route::put('/admin/update/blog/{id}',[BlogsController::class,'updateblog'])->name('admin.updateblog');
Route::delete('/admin/delete/{id}', [BlogsController::class, 'destroyblog'])->name('admin.deleteblog');
});

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/{category}/{blog_url}', [PagesController::class, 'blogDetails'])->name('blog.details');