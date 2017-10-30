<?php namespace App\Http\Controllers;

use App\Video;

class CommunityController extends Controller
{
    public function index()
    {
        return view('video.index')
            ->withVideos(Video::all())
            ->withTitle('Community Videos');
    }
}