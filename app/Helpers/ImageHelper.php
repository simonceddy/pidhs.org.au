<?php
namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class ImageHelper
{
    private static $mime_types = [
        'image/jpeg' => 'jpeg'
    ];

    public static function storeCollectionItem(UploadedFile $image)
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

    public static function relocate(string $image)
    {
        $img = Image::make($image);
        $img->insert(Storage::get('wm.png'))->save();
        $fn = Str::random(40).'.'.$img->extension;
        $img->save(storage_path('app/public/collection').'/'.$fn);
        $img->heighten(200)->save(
            storage_path('app').'/public/collection/thumb/th_'.$fn
        );
        return $fn;
    }

    public static function storeSectionMedia(UploadedFile $image)
    {
        // todo: fix extensions
        $ext = $image->guessExtension();
        $img = Image::make($image);
        $fn = Str::random(40).'.'.$ext;
        $img->save(storage_path('app/public/exhibitions').'/'.$fn);
        $img->heighten(360)->save(
            storage_path('app').'/public/exhibitions/thumb/th_'.$fn
        );
        return $fn;
    }
}
