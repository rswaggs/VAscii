<?php

namespace App\Http\Controllers;

use App\Helpers\Files;
use App\Helpers\Youtube;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Thumbnail;
use Image;

class VideoController extends Controller
{
	public function favourite(Video $video)
    {
        return Auth::user()->favourites()->attach($video);
    }

    public function unfavourite(Video $video)
    {
        return Auth::user()->favourites()->detach($video);
    }

    public function index()
    {
        $videos = Auth::user()->videos;
        return view('video.index')
            ->withVideos($videos)
            ->withTitle('Your Videos');
    }

    public function create()
    {
        return view('video.create');
    }

    public function youtube()
    {
        return view('video.youtube');
    }

    public function show(Video $video)
    {
        return view('video.show')
            ->withVideo($video);
    }

    public function store(Request $request)
    {
        [$filename, $path, $size, $type, $relative] = Files::upload($request->file('upload'), 'videos');
        $fullPath = $path . '/' . $filename;
        $thumbnailName = 'thumbnail.png';
        $thumbnailSuccess = Thumbnail::getThumbnail($fullPath, $path, $thumbnailName);
        $image = Image::make($path . '/' . $thumbnailName);
        $image->fit(env('THUMBNAIL_IMAGE_WIDTH', 960), env('THUMBNAIL_IMAGE_HEIGHT', 640));
        $image->save();

        $video = new Video();
        $video->path = $relative . '/' . $filename;
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->thumbnail = $relative . '/' . $thumbnailName;

        Auth::user()->videos()->save($video);

        return redirect()->route('video.index')
            ->withSuccess('Video succesfully uploaded!');
    }

    public function youtubeImport(Request $request)
    {
        $link = $request->input('yt-link');
        $title = $request->input('title', '');

        [$file, $title, $relativePath] = Youtube::import($link, $title, 'videos');
        $path = $relativePath . '/' . $file->getFilename();

        $thumbnailName = 'thumbnail.png';
        $thumbnailSuccess = Thumbnail::getThumbnail(public_path($path), $relativePath, $thumbnailName);
        $image = Image::make($relativePath . '/' . $thumbnailName);
        $image->fit(env('THUMBNAIL_IMAGE_WIDTH', 960), env('THUMBNAIL_IMAGE_HEIGHT', 640));
        $image->save();

        $video = new Video();
        $video->path = $path;
        $video->title = $title;
        $video->description = $request->input('description');
        $video->thumbnail = $relativePath . '/' . $thumbnailName;

        Auth::user()->videos()->save($video);

        return redirect()->route('video.index')
            ->withSuccess('Video succesfully downloaded!');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->back()->withSuccess('Successfully deleted video');
    }

    public function preview(Video $video)
    {
        return view('video._preview')
            ->withVideo($video);
    }
}
