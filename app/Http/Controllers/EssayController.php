<?php

namespace App\Http\Controllers;

use App\Essay;
use Illuminate\Http\Request;

class EssayController extends Controller
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
        $articles = Essay::paginate(15);
        //dd($articles[0]);
        return view('essay.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('essay.create');
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
        // todo validate
        $essay = new Essay($data);
        $essay->save();
        return redirect(route('essay.show', $essay->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function show(Essay $essay)
    {
        return view('essay.show', $essay);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function edit(Essay $essay)
    {
        return view('essay.edit', $essay);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Essay $essay)
    {
        $data = $request->post();
        // validate data
        $essay->fill($data);
        $essay->save();
        return redirect(route('essay.show', $essay));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Essay  $essay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Essay $essay)
    {
        $essay->delete();
        return redirect(route('essay.index'));
    }
}
