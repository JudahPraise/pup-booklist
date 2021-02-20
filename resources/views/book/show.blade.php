@extends('layouts.master')
@section('content')
<div class="p-5">
    <h3>Book Details</h3>
    <p>-----------------------------------------------------------------------</p>
    <p>Book Title: {{ $book->book_title }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Year Published: {{ $book->year_published->format('Y') }}</p>
    <p>Category: {{ $book->category }}</p>
    <p>Area/Section: {{ $book->area_section }}</p>
    <p>Description: {{ $book->description }}</p>
    <p>Number of Copies: {{ $book->copies }}</p>
    <p>Book Type: {{ $book->book_type }}</p>
</div>


@endsection