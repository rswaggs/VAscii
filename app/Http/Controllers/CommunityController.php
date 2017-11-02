<?php namespace App\Http\Controllers;

use App\Video;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function index()
    {
        $videos = Video::favouritedByUser(Auth::id())->get();
        return view('video.index')
            ->withVideos($videos)
            ->withTitle('Community Videos');
    }
}