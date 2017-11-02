<?php namespace App\Http\Controllers;

use App\Video;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index()
    {
        $videos = Auth::user()->favourites()->favouritedByUser(Auth::id())->get();
        return view('video.index')
            ->withVideos($videos)
            ->withTitle('Your Favourite Videos');
    }

    public function toggleFavourite(Video $video)
    {
        if(Auth::user()->favourites->contains($video))
        {
            Auth::user()->favourites()->detach($video);
        } else {
            Auth::user()->favourites()->attach($video);
        }

        return redirect()->back();
    }
}