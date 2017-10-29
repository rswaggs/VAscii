<?php

namespace App\Http\Controllers;

use App\Helpers\Files;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Thumbnail;

class VideoController extends Controller
{
    public function create() {
        return view('video.create');
    }

    public function store(Request $request) {
        [$filename, $path, $size, $type] = Files::upload($request->file('upload'), 'videos');
        $fullPath = $path . '/' . $filename;
        $thumbnailName = 'thumbnail.png';
        $thumbnail = Thumbnail::getThumbnail($fullPath, $path, $thumbnailName);

        $video = new Video();
        $video->path = $fullPath;
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->thumbnail = $path . '/' . $thumbnailName;

        Auth::user()->videos()->save($video);

        return $video;

    }
}
