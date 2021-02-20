<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class RecommendationController extends Controller
{
    public function index(){

        $countBsitBooks = Book::where('recommendation','LIKE','BSIT')->count();
        $countBsentBooks = Book::where('recommendation','LIKE','BSENT')->count();
        $countBbtleBooks = Book::where('recommendation','LIKE','BBTLE')->count();
        $countAllBooks = Book::where('recommendation','LIKE','All Courses')->count();
        return view('recommendation.filter-bsit')->with('countBsitBooks', $countBsitBooks)
                                            ->with('countBsentBooks', $countBsentBooks)
                                            ->with('countBbtleBooks', $countBbtleBooks)
                                            ->with('countAllBooks', $countAllBooks);
    }

    public function filterBsit(){

        $bsitBooks = Book::where('recommendation','LIKE','BSIT')->get();
        $countBsitBooks = Book::where('recommendation','LIKE','BSIT')->count();
        $countBsentBooks = Book::where('recommendation','LIKE','BSENT')->count();
        $countBbtleBooks = Book::where('recommendation','LIKE','BBTLE')->count();
        $countAllBooks = Book::where('recommendation','LIKE','All Courses')->count();
        return view('recommendation.filter-bsit')->with('bsitBooks', $bsitBooks)
        ->with('countBsitBooks', $countBsitBooks)
        ->with('countBsentBooks', $countBsentBooks)
        ->with('countBbtleBooks', $countBbtleBooks)
        ->with('countAllBooks', $countAllBooks);

    }

    public function filterBsent(){

        $bsentBooks = Book::where('recommendation','LIKE','BSENT')->get();
        $countBsitBooks = Book::where('recommendation','LIKE','BSIT')->count();
        $countBsentBooks = Book::where('recommendation','LIKE','BSENT')->count();
        $countBbtleBooks = Book::where('recommendation','LIKE','BBTLE')->count();
        $countAllBooks = Book::where('recommendation','LIKE','All Courses')->count();
        return view('recommendation.filter-bsent')->with('bsentBooks', $bsentBooks)
        ->with('countBsitBooks', $countBsitBooks)
        ->with('countBsentBooks', $countBsentBooks)
        ->with('countBbtleBooks', $countBbtleBooks)
        ->with('countAllBooks', $countAllBooks);

    }

    public function filterBbtle(){

        $bbtleBooks = Book::where('recommendation','LIKE','BBTLE')->get();
        $countBsitBooks = Book::where('recommendation','LIKE','BSIT')->count();
        $countBsentBooks = Book::where('recommendation','LIKE','BSENT')->count();
        $countBbtleBooks = Book::where('recommendation','LIKE','BBTLE')->count();
        $countAllBooks = Book::where('recommendation','LIKE','All Courses')->count();
        return view('recommendation.filter-bbtle')->with('bbtleBooks', $bbtleBooks)
        ->with('countBsitBooks', $countBsitBooks)
        ->with('countBsentBooks', $countBsentBooks)
        ->with('countBbtleBooks', $countBbtleBooks)
        ->with('countAllBooks', $countAllBooks);

    }

    public function filterAll(){

        $allBooks = Book::where('recommendation','LIKE','All Courses')->get();
        $countBsitBooks = Book::where('recommendation','LIKE','BSIT')->count();
        $countBsentBooks = Book::where('recommendation','LIKE','BSENT')->count();
        $countBbtleBooks = Book::where('recommendation','LIKE','BBTLE')->count();
        $countAllBooks = Book::where('recommendation','LIKE','All Courses')->count();
        return view('recommendation.filter-all')->with('allBooks', $allBooks)
        ->with('countBsitBooks', $countBsitBooks)
        ->with('countBsentBooks', $countBsentBooks)
        ->with('countBbtleBooks', $countBbtleBooks)
        ->with('countAllBooks', $countAllBooks);

    }
}

