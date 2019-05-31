<?php
namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class ImageMedia
{
    protected $image;

    public function __construct($image)
    {
        $this->initImage($image);
    }

    private function initImage($image)
    {
        if ((is_string($image) && !file_exists($image))
            && !$image instanceof UploadedFile
        ) {
            throw new \Exception("Invalid image");
        }

        $this->image = Image::make($image);
    }
}
