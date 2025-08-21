<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', action: [BlogController::class, 'home'])->name('home');
Route::get('/about', action: [BlogController::class, 'about'])->name('about');
Route::get('/project', action: [BlogController::class, 'project'])->name('project');
Route::get('/contact', action: [BlogController::class, 'contact'])->name('contact') ;
Route::get('/blog', action: [BlogController::class, 'blog'])->name('blog');
