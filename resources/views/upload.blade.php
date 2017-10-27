@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Upload a New Video</h1>
    </div>
    <div class="col-xl-12 col-md-12">
        <div class="example">
            <input type="file" id="input-file-now-custom-2" data-plugin="dropify" data-height="500" data-width="500"
            />
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-large btn-block btn-primary">Upload</button>
        </div>
    </div>
@endsection