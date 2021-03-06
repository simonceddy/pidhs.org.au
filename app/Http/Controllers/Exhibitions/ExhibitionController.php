<?php

namespace App\Http\Controllers\Exhibitions;

use App\Exhibitions\Exhibition;
//use App\Exhibitions\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ExhibitionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show']
        ]);
        $this->middleware(['html.purify', 'validate.upload'])
            ->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exhibition.index', [
            'exhibitions' => Exhibition::all(),
            'article' => Article::where([
                'slug' => 'exhibitions'
            ])->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exhibition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->post();
        $exhibition = new Exhibition($data);
        $exhibition->save();
        return redirect(route('exhibitions.show', $exhibition));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exhibitions\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibition $exhibition)
    {
        //$exhibition->loadMissing(['sections']);
        $sections = $exhibition->sections()->orderBy('title')->get();
        return view('exhibition.show', ['exhibition' => $exhibition, 'sections' => $sections]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exhibitions\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibition $exhibition)
    {
        return view('exhibition.edit', $exhibition);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exhibitions\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exhibition $exhibition)
    {
        $data = $request->post();
        $exhibition->fill($data);
        $exhibition->save();
        return redirect(route('exhibitions.show', $exhibition));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibitions\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibition $exhibition)
    {
        $exhibition->media()->delete();
        $exhibition->sections()->delete();
        $exhibition->delete();
        return redirect(route('exhibitions.index'));
    }
}
