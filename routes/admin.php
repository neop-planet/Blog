<?php

use Illuminate\Support\Facades\Route;
use Neop\Blog\Http\Controllers\Admin\BlogController;

Route::middleware(['web', 'auth:admin'])->name('admin.')->prefix('admin')->group(function () {

   Route::resource('posts', BlogController::class)->except('show');
   Route::resource('blog-tags', BlogController::class)->except('show');
});
