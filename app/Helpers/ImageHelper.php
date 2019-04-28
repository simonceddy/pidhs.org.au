<?php
namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageHelper
{
    private static $mime_types = [
        'image/jpeg' => 'jpeg'
    ];

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

    public static function storeSectionMedia($image)
    {
        // todo: fix extensions
        
        $img = Image::make($image);
        $ext = self::$mime_types[$img->mime] ?? false;

        if (!$ext) {
            dd($img);
        }

        $fn = Str::random(40).'.'.$ext;
        $img->save(storage_path('app/public/exhibitions').'/'.$fn);
        $img->heighten(200)->save(
            storage_path('app').'/public/exhibitions/thumb/th_'.$fn
        );
        return $fn;
    }
}
