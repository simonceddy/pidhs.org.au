<?php

namespace App\Http\Controllers\Exhibitions;

use App\Exhibitions\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\Exhibition;
use App\Helpers\ImageHelper;

class SectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show']
        ]);
        $this->middleware(['html.purify', 'validate.upload'])
            ->only(['store', 'update']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Exhibition $exhibition)
    {
        return view('exhibition.section.create', [
            'exhibition' => $exhibition
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Exhibition $exhibition, Request $request)
    {
        // handle section media uploads - separate into nested controllers
        $files = $request->file();
        $media = [];
        if (!empty($files['files'])) {
            foreach ($files['files'] as $file) {
                $media[] = [
                    'exhibition_id' => $exhibition->id,
                    'thumbnail' => ImageHelper::storeSectionMedia($file)
                ];
            }
        }
        $data = $request->post();
        $data['exhibition_id'] = $exhibition->id;
        $section = new Section($data);
        $section->save();
        if (!empty($media)) {
            $section->media()->createMany($media);
        }
        return redirect(route('section.show', [$exhibition, $section]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibition $exhibition, Section $section)
    {
        return view('exhibition.section.show', $section, [
            'exhibition' => $exhibition
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibition $exhibition, Section $section)
    {
        return view('exhibition.section.edit', $section, [
            'exhibition' => $exhibition,
            'media' => $section->media()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(
        Request $request,
        Exhibition $exhibition,
        Section $section
    ) {
        $files = $request->file();
        $media = [];
        if (isset($files['files'])) {
            foreach ($files['files'] as $file) {
                $media[] = [
                    'exhibition_id' => $exhibition->id,
                    'thumbnail' => ImageHelper::storeSectionMedia($file)
                ];
            }
        }
        $data = $request->post();
        $section->fill($data);
        $section->save();
        if (!empty($media)) {
            $section->media()->createMany($media);
        }
        return redirect(route('section.show', [$exhibition, $section]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibition $exhibition, Section $section)
    {
        $section->media()->delete();
        $section->delete();
        return redirect(route('exhibitions.show', $exhibition));
    }
}
