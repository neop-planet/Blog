<?php

use Illuminate\Support\Facades\Route;
use Neop\Blog\Http\Controllers\Admin\BlogController;
use Neop\Blog\Http\Controllers\Admin\BlogTagsController;

Route::middleware(['web', 'auth:admin'])->name('admin.')->prefix('admin')->group(function () {

   Route::resource('posts', BlogController::class)->except('show');

   Route::name('posts.')->prefix('posts')->group(
      function () {
         Route::resource('tags', BlogTagsController::class)->except('show');
      }
   );
});
