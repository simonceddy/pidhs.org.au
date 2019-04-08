<?php
namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function storeCollectionItem($image)
    {
        $img = Image::make($image);
        $img->insert(Storage::get('wm.png'))->save();
        $image->store('public/collection');
        $thumb = $image->hashName();
        $img->heighten(200)->save(
            storage_path('app').'/public/collection/thumb/th_'.$thumb
        );
        return $thumb;
    }
}
