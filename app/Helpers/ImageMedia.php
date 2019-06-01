<?php
namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager;
use Intervention\Image\Image;

class ImageMedia
{
    /**
     * Intervention Image instance
     *
     * @var Image
     */
    protected $image;

    public function __construct($image, ImageManager $manager)
    {
        if ((is_string($image) && !file_exists($image))
            && !$image instanceof UploadedFile
        ) {
            throw new \Exception("Invalid image");
        }

        $this->image = $manager->make($image);
    }

    /**
     * Get intervention Image instance
     *
     * @return  Image
     */ 
    public function getImage()
    {
        return $this->image;
    }
}
