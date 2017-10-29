<!-- Copy of create, just trying to clean the webpage up. -->

@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Upload a New Video</h1>
    </div>
    // YouTube download logic, move to separate view later
    <form method="post" action="{{ route('video.YTstore') }}">
        <div class="form-group col-md-12">
            <label class="form-control-label" for="yt-link">Convert YouTube video</label>
            <input type="text" class="form-control" id="yt-link" name="yt-link"
                   placeholder="YouTube video link" />
        </div>
        <div class="form-group col-md-12">
            <label class="form-control-label" for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   placeholder="Title (optional)" />
        </div>
        <div class="form-group col-md-12">
            <label class="form-control-label" for="description">Description</label>
            <textarea name="description" class="form-control" placeholder="Video Description"></textarea>
        </div>
        <div class="form-group col-sm-4">
            <button type="submit" class="btn btn-large btn-block btn-primary">Convert YouTube Video</button>
        </div>
    </form>

@endsection