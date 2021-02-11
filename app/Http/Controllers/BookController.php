<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books= Book::all();
        return view('book.index' ,compact('books',$books));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->book_title=$request->input('book_title');
        $book->author=$request->input('author');
        $book->year_published=$request->input('year_published');
        $book->category=$request->input('category');
        $book->area_section=$request->input('area_section');
        $book->description=$request->input('description');
        $book->copies=$request->input('copies');
        $book->book_type=$request->input('book_type');
        $book->recommendation=$request->input('recommendation');

        $book->save();

        return redirect()->route('book.index');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book= Book::where('id','=',$id )->first();
        return view('book.show', compact('book',$book));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book= Book::where('id','=',$id )->first();
        return view('book.edit', compact('book',$book));
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
        $book= Book::where('id','=',$id )->first();
        $book->book_title=$request->input('book_title');
        $book->author=$request->input('author');
        $book->year_published=$request->input('year_published');
        $book->category=$request->input('category');
        $book->area_section=$request->input('area_section');
        $book->description=$request->input('description');
        $book->copies=$request->input('copies');
        $book->book_type=$request->input('book_type');

        $book->save();

        return redirect()->route('book.index');

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
