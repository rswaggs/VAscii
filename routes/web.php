<?php

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::resource('video', 'VideoController');
    Route::get('video/preview/{video}', 'VideoController@preview')
        ->name('video.preview');
    Route::post('video/search', 'VideoController@search')
        ->name('video.search');

    Route::get('community', 'CommunityController@index')
        ->name('community');

    Route::get('favourite', 'FavouriteController@index')
        ->name('favourite.index');
    Route::get('favourite/{video}', 'FavouriteController@toggleFavourite')
        ->name('favourite.toggle');

    Route::get('youtube', 'VideoController@youtube')
        ->name('youtube.create');
    Route::post('youtube', 'VideoController@youtubeImport')
        ->name('youtube.store');

    Route::get('/', function () {
        return redirect()->route('video.index');
    })->name('home');
});
