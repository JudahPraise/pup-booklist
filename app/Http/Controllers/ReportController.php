<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = Book::count();
        $old = Book::where('book_type', 'Old Library Books')->count();
        $main = Book::where('book_type', 'From PUP Main')->count();
        $faculty = Book::where('book_type', 'Faculty Books')->count();
        $combined = Book::where('book_type', 'Combined')->count();
        $book_alpha = Book::where('book_type', 'Book-Alpha')->count();

        return view('report')->with('total',$total)->with('old',$old)->with('main',$main)->with('faculty',$faculty)->with('combined',$combined)->with('book_alpha',$book_alpha);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
