<?php

use Illuminate\Support\Facades\Route;
use Neop\Blog\Http\Controllers\Admin\BlogController;
use Neop\Blog\Http\Controllers\Admin\BlogTagsController;

Route::middleware(['web', 'auth:admin'])->name('admin.')->prefix('admin')->group(function () {

   Route::resource('posts', BlogController::class)->except('show');
   Route::resource('posts/tags', BlogTagsController::class)->name('index', 'posts.')->except('show');
});
