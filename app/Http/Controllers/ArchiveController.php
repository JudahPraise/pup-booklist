<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;
use App\Book;
// use App\ResearchArchive;
// use App\Research;

class ArchiveController extends Controller
{
    public function index(){
        $archives = Archive::all();
        return view('archive.index', compact('archives', $archives));
    }

    public function archive($id){

        Book::query()
        ->where('id','=',$id)
        ->each(function ($book) {
          $archived = $book->replicate();
          $archived->setTable('archives');
          $archived->save();
      
          $book->delete();
        });

        return redirect()->route('home');
    }

    public function retrieve($id){

        Archive::query()
        ->where('id','=',$id)
        ->each(function ($archives) {
          $books = $archives->replicate();
          $books->setTable('books');
          $books->save();
          
          $archives->delete();
        });
        return redirect()->route('book.index');
    }

    public function research_archive($id){

      Research::query()
      ->where('id','=',$id)
      ->each(function ($research) {
        $archived = $research->replicate();
        $archived->setTable('research-archives');
        $archived->save();
    
        $research->delete();
      });

      return redirect()->route('home');
  }

  // public function research_retrieve($id){

  //   ResearchArchive::query()
  //     ->where('id','=',$id)
  //     ->each(function ($archives) {
  //       $research = $archives->replicate();
  //       $research->setTable('research');
  //       $research->save();
        
  //       $archives->delete();
  //     });
  //     return redirect()->route('book.index');
  // }
}
