<?php

namespace App\Http\Controllers\Exhibitions;

use App\Exhibitions\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\Exhibition;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibition $exhibition, Section $section)
    {
        return view('exhibition.section.show', $section);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibitions\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
