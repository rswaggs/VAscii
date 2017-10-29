<?php

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::resource('video', 'VideoController');
    Route::get('video/preview/{video}', 'VideoController@preview')
        ->name('video.preview');

    Route::get('/', function () {
        return redirect()->route('video.index');
    });

    Route::get('/community', function () {
        return redirect()->route('video.community');
    });
});
