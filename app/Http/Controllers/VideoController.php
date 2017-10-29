<?php

namespace App\Http\Controllers;

use App\Helpers\Files;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Thumbnail;

// For YouTube download store method
require __DIR__ . '/vendor/autoload.php';
use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;

class VideoController extends Controller
{
	// Favouriting logic (did not try to make video buttons)
	public function favorite(Request $request, $id) {
        $videos = Video::where('id', '=', $request->id)->get();

        return Auth::user()->favourites()->attach($video);
    }

	// Display all community videos
	// maybe want to use latest()->take(10)->get() to limit entries
	// until some AJAX can be used??
	public function community() {
        $videos = Video::all();

        return view('video.index')
            ->withVideos($videos);
    }


    public function index() {
        $videos = Auth::user()->videos;

        return view('video.index')
            ->withVideos($videos);
    }

    public function create() {
        return view('video.create');
    }

    // Upload link for YouTube videos
    public function YTcreate() {
        return view('video.YTcreate');
    }

    public function show(Video $video) {
        return view('video.show')
            ->withVideo($video);
    }

    // YouTube storage logic
    public function YTstore(Request $request) {
    	$link = $request->input('yt-link');
    	$title = $request->input('title');

    	// Download preferances (probably should change this)
		$dl = new YoutubeDl([
    		'continue' => true, // force resume of partially downloaded files. By default, youtube-dl will resume downloads if possible.
    		'format' => 'worstvideo[ext=mp4]',
		]);

		// Where to download on machine
		$dl->setDownloadPath('videos');

		// Download
		try {
    		$video = $dl->download($link);
    		$file = $video->getFile(); // \SplFileInfo instance of downloaded file
    		// http://php.net/manual/en/class.splfileinfo.php
		} catch (NotFoundException $e) {
    		echo "Video not found";
		} catch (PrivateVideoException $e) {
    		echo "Video is private";
		} catch (CopyrightException $e) {
    		echo "The YouTube account associated with this video has been terminated due to multiple third-party notifications of copyright infringement";
		} catch (\Exception $e) {
    		echo "Failed to download";
		}

		// Get title
		@if ($title === '') 
			$title = $video->getTitle();
		@endif


		// No idea if this functionality is in the wrapper, might be disabled
		// Or not a method in wrapper
		$thumbnail = $video->getThumbnail();

		// Create db entry
        $video = new Video();
        $video->path = 'videos/' . $file->getFilename();
        $video->title = $title;
        $video->description = $request->input('description');
        $video->thumbnail = $thumbnail;

        Auth::user()->videos()->save($video);

        return redirect()->route('video.index')
            ->withSuccess('Video succesfully downloaded!');
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
