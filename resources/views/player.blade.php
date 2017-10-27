@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Lorem Ipsum</h1>
    </div>
    <div class="container">
        <div class="col-xl-10 col-md-10 col-md-offset-1 col-xl-offset-1">
            <video controls="" style="width:100%;" class="center-block">
                <source src="https://www.html5rocks.com/en/tutorials/video/basics/devstories.webm" type="video/webm;codecs=&quot;vp8, vorbis&quot;">
                <source src="https://www.html5rocks.com/en/tutorials/video/basics/devstories.mp4" type="video/mp4;codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                <track src="https://www.html5rocks.com/en/tutorials/video/basics/devstories-en.vtt  " label="English subtitles" kind="subtitles" srclang="en" default="">
            </video>
        </div>
    </div>
@endsection