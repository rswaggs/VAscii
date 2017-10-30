<?php

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::resource('video', 'VideoController');
    Route::get('video/preview/{video}', 'VideoController@preview')
        ->name('video.preview');
    Route::get('community', 'CommunityController@index')
        ->name('community');
    Route::get('youtube', 'VideoController@youtube')
        ->name('youtube.create');
    Route::post('youtube', 'VideoController@youtubeImport')
        ->name('youtube.store');

    Route::get('/', function () {
        return redirect()->route('video.index');
    })->name('home');
});
