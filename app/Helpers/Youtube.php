<?php namespace App\Helpers;

use Illuminate\Support\Str;
use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;

class Youtube
{

    /**
     * @param $link
     * @param $title
     * @param string $path
     * @return array
     */
    public static function import($link, $title, $path = 'misc'): array
    {
        $uploadFolder = 'uploads/' . $path . '/';
        $relative = $uploadFolder . time() . Str::random(20);
        $path = public_path($relative);

        $dl = new YoutubeDl([
            'continue' => true, // force resume of partially downloaded files. By default, youtube-dl will resume downloads if possible.
            'format' => 'bestvideo[ext=mp4]',
        ]);

        $dl->setDownloadPath(public_path());

        try {
            $video = $dl->download($link);
            $file = $video->getFile(); // \SplFileInfo instance of downloaded file
            if(!file_exists($path)) {
                mkdir($path, 0755, true);
            }
            rename(public_path($file->getFilename()), $path . '/' . $file->getFilename());
            // http://php.net/manual/en/class.splfileinfo.php
        } catch (NotFoundException $e) {
            dd('Video not found');
        } catch (PrivateVideoException $e) {
            dd('Video is private');
        } catch (CopyrightException $e) {
            dd('The YouTube account associated with this video has been terminated due to multiple third-party notifications of copyright infringement');
        } catch (\Exception $e) {
            dd('Failed to download: ' . $e->getMessage());
        }

        $title = $title ?: $video->getTitle();

        return [$file, $title, $relative];
    }

}