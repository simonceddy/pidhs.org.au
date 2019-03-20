<?php

namespace App\Http\Controllers\Api;

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
        $this->middleware('auth:api', [
            'except' => ['index', 'show']
        ]);
        $this->middleware('cors');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Exhibition $exhibition)
    {
        return $exhibition->sections()->get([
            'id',
            'exhibition_id',
            'title'
        ]);
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
        return $section;
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
