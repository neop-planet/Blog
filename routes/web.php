<?php

use Illuminate\Support\Facades\Route;
use Neop\Blog\Http\Controllers\Website\BlogController;

Route::middleware('web')->group(function () {
   Route::resource('posts', BlogController::class);
});
