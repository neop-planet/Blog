<?php

use Illuminate\Support\Facades\Route;
use Neop\Blog\Http\Controllers\Website\BlogController;

Route::middleware('web')->group(function () {
   // Route::resource('posts', BlogController::class)->parameters([
   //    'posts' => 'posts:slug',
   // ])->only('index', 'show');

   Route::get('posts', [BlogController::class, 'index'])->name('posts.index');
   Route::get('posts/{posts:slug}', [BlogController::class, 'show'])->name('posts.show');
});
