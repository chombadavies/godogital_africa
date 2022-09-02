<?php


Route::get('/',[App\Http\Controllers\Frontend\IndexController::class,'home'])->name('home');
Route::any('display/{id}',[App\Http\Controllers\Frontend\IndexController::class,'Display'])->name('display');
Route::any('blog/{id}',[App\Http\Controllers\Frontend\IndexController::class,'blog'])->name('blog');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('cache:clear');
     $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});