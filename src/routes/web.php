<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\BlogsController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/portfolio/{slug}', [MainController::class, 'portfolioDetail'])->name('portfolio.detail');
Route::get('/services/{slug}', [MainController::class, 'serviceDetail'])->name('service.detail');
Route::get('/blog/{slug}', [MainController::class, 'blogDetail'])->name('blog.detail');


//Admin routes
Route::prefix('doniyor')->middleware(['auth', 'verified'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('settings', SettingsController::class);
    Route::resource('blogs', BlogsController::class);
}
);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
