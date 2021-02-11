<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Research;
use App\Authors;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research= Research::with('authors')->get();
        return view('research.index', compact('research', $research));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('research.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $research = Research::create([
            'year'=>$request->input('year'),
            'research_title'=>$request->input('research_title'),
            'course_section'=>$request->input('course_section'),
            'instructor'=>$request->input('instructor')
        ]);

        $authors = [];

        foreach ($request['name'] as $author) {
            $authors[] = new Authors([
                'research_id' => $research->id,
                'name' => $author,
            ]);
        }

        $research->authors()->saveMany($authors);

        return redirect()->route('research.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $research= Research::where('id','=',$id)->with('authors')->first();
        return view('research.edit', compact('research', $research));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $research = Research::where('id','=',$id)->update([
            'year'=>$request->input('year'),
            'research_title'=>$request->input('research_title'),
            'course_section'=>$request->input('course_section'),
            'instructor'=>$request->input('instructor')
        ]);

        return redirect()->route('research.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
