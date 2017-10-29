@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Upload a New Video</h1>
    </div>
    <form method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
        <div class="form-group col-md-12">
            <div class="example">
                <input name="upload" type="file" id="input-file-now-custom-2" data-plugin="dropify" data-height="500" data-width="500"
                />
            </div>
        </div>
        <div class="form-group col-md-12">
            <label class="form-control-label" for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   placeholder="Title" />
        </div>
        <div class="form-group col-md-12">
            <label class="form-control-label" for="description">Description</label>
            <textarea name="description" class="form-control" placeholder="Video Description"></textarea>
        </div>
        <div class="form-group col-sm-3">
            <button type="submit" class="btn btn-large btn-block btn-primary">Upload</button>
        </div>
    </form>

@endsection