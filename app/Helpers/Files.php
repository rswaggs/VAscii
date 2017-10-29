<?php namespace App\Helpers;

use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use wapmorgan\FileTypeDetector\Detector;

class Files
{
    /**
     * @param UploadedFile $file
     * @param string $path
     * @return array
     */
    public static function upload(UploadedFile $file, string $path = 'misc'): array
    {

        $filename = $file->getClientOriginalName();
        $filename = str_replace(' ', '', $filename);

        $uploadFolder = 'uploads/' . $path . '/';
        $path = public_path($uploadFolder . time() . Str::random(20));

        $newFileObject = $file->move($path, $filename);

        $size = 0;
        $type = Detector::detectByFilename($newFileObject->getRealPath())[2];

        return [$filename, $path, $size, $type];
    }

}
