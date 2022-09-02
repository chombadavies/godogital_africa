<?php


Route::get('/',[App\Http\Controllers\Frontend\IndexController::class,'home'])->name('home');
Route::any('display/{id}',[App\Http\Controllers\Frontend\IndexController::class,'Display'])->name('display');
Route::any('blogs',[App\Http\Controllers\Frontend\IndexController::class,'blogs'])->name('blogs');
Route::any('blog/{id}',[App\Http\Controllers\Frontend\IndexController::class,'blog'])->name('blog');
Route::any('about-us',[App\Http\Controllers\Frontend\IndexController::class,'aboutUs'])->name('about');
Route::any('contact-us',[App\Http\Controllers\Frontend\IndexController::class,'contactUs'])->name('contact');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('cache:clear');
     $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});