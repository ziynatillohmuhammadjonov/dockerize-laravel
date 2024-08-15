<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/portfolio/{slug}',[MainController::class, 'portfolioDetail'])->name('portfolio.detail');
Route::get('/services/{slug}',[MainController::class, 'serviceDetail'])->name('service.detail');
Route::get('/blog/{slug}',[MainController::class, 'blogDetail'])->name('blog.detail');


