@extends('layouts.master')

@section('content')
    <h2>Edit Book Details</h2>
<form action="{{ route('book.update', $book->id )}}" method="post">
@csrf
@method('PUT')
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Book Title</label>
      <input type="text" class="form-control" name="book_title" value="{{ $book->book_title }}"  id="validationCustom01" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Author</label>
      <input type="text" class="form-control" name="author" value="{{ $book->author }}"  id="validationCustom02" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Year Publish</label>
      <input type="date" class="form-control" name= "year_published" value="{{ $book->year_published }}" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Category</label>
      <select class="form-control" name="category" value="{{ $book->category }}" id="category">
        <option value="{{ $book->category }}" @if(old('type', $book->category) === 'Swiss System') 'selected' @endif>{{ $book->category }}</option>
        <option>Filipiniana</option>
        <option>Circulation</option>
        <option>Reference Section</option>
        <option>Serials</option>
        <option>Special Collection</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Area Selection</label>
      <select class="form-control" name="area_section" value="{{ $book->area_section }}"  id="areaSection">
        <option value="{{ $book->area_section }}" @if(old('type', $book->area_section) === 'Swiss System') 'selected' @endif>{{ $book->area_section }}</option>
        <option>History</option>
        <option>Dictionary E</option> 
        <option>Accounting</option> 
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Description</label>
      <select class="form-control" name="description" value="{{ $book->description }}" id="description">
        <option value="{{ $book->description }}" @if(old('type', $book->description) === 'Swiss System') 'selected' @endif>{{ $book->description }}</option>
        <option>Hard bound</option>
        <option>Soft bound</option>
        <option>Manuals</option>
        <option>Leaflets</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom02">Number of Copies</label>
      <input type="number" name="copies" value="{{ $book->copies }}" class="form-control" id="validationCustom02" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Book Type</label>
      <select class="form-control" name="book_type" value="{{ $book->book_type }}" id="bookType">
        <option value="{{ $book->book_type }}" @if(old('type', $book->book_type) === 'Swiss System') 'selected' @endif>{{ $book->book_type }}</option>
        <option>Old Library Books</option>
        <option>From PUP Main Books</option>
        <option>Faculty Books</option>
        <option>Combined</option>
        <option>Book-alpha</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Recommendation</label>
      <select class="custom-select" value="{{ $book->recommendation }}" name="recommendation" id="validationCustom04" required>
        <option value="{{ $book->recommendation }}" @if(old('type', $book->recommendation) === 'Swiss System') 'selected' @endif>{{ $book->recommendation }}</option>
        <option>BSIT</option>
        <option>BSENT</option>
        <option>BBTLE</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
  </div>

  <button type="submit" value="Submit Form" class="btn btn-primary">Submit</button>
</form>
@endsection