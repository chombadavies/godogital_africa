<?php


Route::get('/',[App\Http\Controllers\Frontend\IndexController::class,'home'])->name('home');
Route::any('display/{id}',[App\Http\Controllers\Frontend\IndexController::class,'Display'])->name('display');
Route::any('blogs',[App\Http\Controllers\Frontend\IndexController::class,'blogs'])->name('blogs');
Route::any('blog/{id}',[App\Http\Controllers\Frontend\IndexController::class,'blog'])->name('blog');
Route::any('about-us',[App\Http\Controllers\Frontend\IndexController::class,'aboutUs'])->name('about');
Route::any('contact-us',[App\Http\Controllers\Frontend\IndexController::class,'contactUs'])->name('contact');
Route::any('details',[App\Http\Controllers\Frontend\IndexController::class,'communication'])->name('communication');
Route::any('what-we-do',[App\Http\Controllers\Frontend\IndexController::class,'whatWedo'])->name('whatwe.do');



Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('cache:clear');
     $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});