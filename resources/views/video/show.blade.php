@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h1 class="page-title">{{ $video->title }}</h1>
    </div>
    <div class="container">
        <div class="col-xl-10 col-md-10 col-md-offset-1 col-xl-offset-1">
            <video controls="" style="width:100%;" class="center-block">
                <source src="{{ $video->path }}" type="video/mp4;codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
            </video>
        </div>
    </div>
@endsection