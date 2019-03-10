<?php
// Public route
Route::get('/', 'AuthorController@index');

// Authentication Routes
Auth::routes(['register' => false]);

// Admin routes group
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    // Dashboard routes
    Route::get('/', function() {
        return redirect('admin/dashboard');
    });

    Route::get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'Admin\AdminController@index',
    ]);

    Route::resources([
        'authors' => 'AuthorController',
        'books' => 'BookController'
    ]);
});
