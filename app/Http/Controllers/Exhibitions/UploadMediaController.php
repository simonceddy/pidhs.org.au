<?php

namespace App\Http\Controllers\Exhibitions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\Exhibition;
use App\Exhibitions\Section;
use App\Exhibitions\ExhibitionMedia;
use App\Helpers\ImageHelper;

class UploadMediaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'validate.upload']);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Exhibition $exhibition, Section $section = null)
    {
        $files = $request->file();
        if (isset($files['files'])) {
            foreach ($files['files'] as $file) {
                $item = new ExhibitionMedia([
                    'exhibition_id' => $exhibition->id,
                    'thumbnail' => ImageHelper::storeSectionMedia($file)
                ]);
                if (null !== $section) {
                    $item->section()->associate($section);
                }
                $item->save();
            }
        }
        if (null === $section) {
            return redirect(route('exhibition.media.index', [$exhibition]));
        }
        return redirect(route('section.media.index', [$exhibition, $section]));
    }
}
