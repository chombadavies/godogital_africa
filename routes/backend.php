
<?php
Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[App\Http\Controllers\Auth\Admin\LoginController::class, 'adminLogin'])->name('admin.login.form');
    Route::post('/login',[App\Http\Controllers\Auth\Admin\LoginController::class, 'Login'])->name('admin.login');


});


Route::group(['prefix'=>'admin','middleware' => ['admin']],function(){
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'admin'])->name('admin');
    Route::resource('services', \App\Http\Controllers\Admin\ServicesController::class);
    Route::resource('subservices', \App\Http\Controllers\Admin\SubServicesController::class);
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogsController::class);
    Route::resource('skills', \App\Http\Controllers\Admin\SkillsController::class);
    Route::resource('industries', \App\Http\Controllers\Admin\IndustriesController::class);
    Route::resource('clients', \App\Http\Controllers\Admin\ClientsController::class);
    Route::resource('questions', \App\Http\Controllers\Admin\QuestionsController::class);
    Route::resource('whatwedo', \App\Http\Controllers\Admin\WhatwedoController::class);
    Route::resource('subwhatwedo', \App\Http\Controllers\Admin\SubfunctionsController::class);
    Route::any('/fetchservices',[App\Http\Controllers\Admin\ServicesController::class, 'fetchServices']);
    Route::any('/fetchsubservices',[App\Http\Controllers\Admin\SubServicesController::class, 'fetchSubServices']);
    Route::any('/fetchfunctions',[App\Http\Controllers\Admin\WhatwedoController::class, 'fetchFunction']);
    Route::any('/fetchsubfunctions',[App\Http\Controllers\Admin\SubfunctionsController::class, 'fetchSubfunctions']);
    Route::any('/fetchclients',[App\Http\Controllers\Admin\ClientsController::class, 'fetchClients']);
    Route::any('/product/fetchproducts','App\Http\Controllers\Admin\ProductsController@fetchList');
  
});

Route::any('/messages-status/{id}',[App\Http\Controllers\Admin\ServicesController::class, 'messageStatus'])->name('message.status');