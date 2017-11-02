@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h1 class="page-title">{{ $title }}</h1>
        <div class="page-header-actions">
            <form method="post" action="{{ route('video.search') }}">
                <div class="input-search input-search-dark">
                    <i class="input-search-icon wb-search" aria-hidden="true"></i>
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
    <div id="mediaContent" class="page-content page-content-table" data-plugin="selectable">
        <div class="page-content-actions">
            <div class="float-right">
                <div class="btn-group media-arrangement" role="group">
                    <button class="btn btn-outline btn-default active" id="arrangement-grid" type="button"><i class="icon wb-grid-4" aria-hidden="true"></i></button>
                    <button class="btn btn-outline btn-default" id="arrangement-list" type="button"><i class="icon wb-list" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="actions-inner">
                <div class="checkbox-custom checkbox-primary checkbox-lg">
                    <input type="checkbox" id="media_all" class="selectable-all">
                    <label for="media_all"></label>
                </div>
            </div>
        </div>
        <div class="media-list is-grid" data-plugin="animateList" data-animate="fade"
             data-child="li" style="padding-bottom: 400px">
            <ul class="blocks blocks-100 blocks-xxl-4 blocks-xl-3 blocks-lg-3 blocks-md-2 blocks-sm-2"
                data-plugin="animateList" data-child=">li">
                @each('video._list', $videos, 'video')
            </ul>
        </div>
    </div>
@endsection

{{--@section('action')--}}
{{--@include('layouts.partials.actions')--}}
{{--@endsection--}}