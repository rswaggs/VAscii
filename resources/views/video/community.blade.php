<!-- Exact same as index, made a partial (video-display) 
    to eliminate duplicate content on views -->

@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Community Videos</h1>
        <div class="page-header-actions">
            <form>
                <div class="input-search input-search-dark">
                    <i class="input-search-icon wb-search" aria-hidden="true"></i>
                    <input type="text" class="form-control" name="" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
    {{--@section('video-display')--}}
    {{--@include('layouts.partials.video-display')--}}
    {{--@endsection--}}
    
@endsection

{{--@section('action')--}}
{{--@include('layouts.partials.actions')--}}
{{--@endsection--}}