@extends('layouts.master')

@section('content')
  


<form class="needs-validation p-4" action="{{ route('book.store')}}" method="post" novalidate>
  <h2>Add Book</h2>
  @csrf
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Book Title</label>
      <input type="text" class="form-control" name="book_title" id="validationCustom01" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Author</label>
      <input type="text" class="form-control" name="author" id="validationCustom02" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Year Publish</label>
      <input type="date" class="form-control" name= "year_published" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Category</label>
      <select class="form-control" name="category" id="category">
        <option selected disabled value="">Choose...</option>
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
      <select class="form-control" name="area_section" id="areaSection">
        <option selected disabled value="">Choose...</option>
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
      <select class="form-control" name="description" id="description">
        <option selected disabled value="">Choose...</option>
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
      <input type="number" name="copies" class="form-control" id="validationCustom02" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Book Type</label>
      <select class="form-control" name="book_type" id="bookType">
        <option selected disabled value="">Choose...</option>
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
      <select class="custom-select" name="recommendation" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>BSIT</option>
        <option>BSENT</option>
        <option>BBTLE</option>
        <option>All Courses</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
  </div>

  <button class="btn btn-primary" type="submit" value="Submit Form">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection