<?php
namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageHelper
{
    public static function storeCollectionItem($image)
    {
        //dd($image);
        $img = Image::make($image);
        $img->insert(Storage::get('wm.png'))->save();
        $fn = Str::random(40).'.'.$img->extension;
        $img->save(storage_path('app/public/collection').'/'.$fn);
        $img->heighten(200)->save(
            storage_path('app').'/public/collection/thumb/th_'.$fn
        );
        return $fn;
    }
}
