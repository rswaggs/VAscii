<?php

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::resource('video', 'VideoController');

    Route::get('/', function () {
        return view('welcome')
            ->withMedia(range(1,6));
    });

    Route::get('info/{id}', function($id) {
        return view('info')->withImage($id);
    });

    Route::get('player', function() {
        return view('player');
    });
});
