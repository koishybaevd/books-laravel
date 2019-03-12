<?php

// Book Api routes
Route::group(['prefix' => 'v1'], function() {
    Route::get('books/list', 'Api\v1\BookController@index');
    Route::get('books/{book}', 'Api\v1\BookController@show');
    Route::post('books/update', 'Api\v1\BookController@update');
    Route::delete('books/{book}', 'Api\v1\BookController@destroy');
});
