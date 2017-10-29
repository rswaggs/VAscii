<?php

namespace App\Http\Controllers;

use App\Helpers\Files;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Thumbnail;

class VideoController extends Controller
{

    public function index() {
        $videos = Auth::user()->videos;

        return view('video.index')
            ->withVideos($videos);
    }

    public function create() {
        return view('video.create');
    }

    public function show(Video $video) {
        return view('video.show')
            ->withVideo($video);
    }

    public function store(Request $request) {
        [$filename, $path, $size, $type, $relative] = Files::upload($request->file('upload'), 'videos');
        $fullPath = $path . '/' . $filename;
        $thumbnailName = 'thumbnail.png';
        $thumbnailSuccess = Thumbnail::getThumbnail($fullPath, $path, $thumbnailName);

        $video = new Video();
        $video->path = $relative . '/' . $filename;
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->thumbnail = $relative . '/' . $thumbnailName;

        Auth::user()->videos()->save($video);

        return redirect()->route('video.index')
            ->withSuccess('Video succesfully uploaded!');
    }

    public function destroy(Video $video) {
        $video->delete();

        return redirect()->back()->withSuccess('Successfully deleted video');
    }

    public function preview(Video $video) {
        return view('video._preview')
            ->withVideo($video);
    }
}
