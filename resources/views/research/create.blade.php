@extends('layouts.master')

@section('content')
    <h2>Add Research Paper</h2>
<form action="{{ route('research.store')}}" method="post" class="needs-validation" novalidate>
@csrf
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Year</label>
      <input type="text" class="form-control" name="year" id="validationCustom01" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Research Title</label>
      <input type="text" class="form-control" name="research_title" id="validationCustom02" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Course-Section</label>
      <input type="text" class="form-control" name= "course_section" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Instructor</label>
      <input type="text" class="form-control" name= "instructor" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="row d-flex w-100 ml-2 flex-column">
      <h3>Authors</h3>
      <div class="row w-100 d-flex flex-column inputs_div">
         <div class="form-group d-flex">
            <div class="col-6">
              <label for="motherSurname">NAME</label>
              <input type="text" class="form-control" name="name[]" id="motherSurname" aria-describedby="emailHelp">
            </div>
         </div>
      </div>
      <div class="row ml-1" style="text-decoration: none;">
        <a class=" addMore">Add more</a>
      </div>  
    </div>
  </div>
  <button class="btn btn-primary mt-3" type="submit">Submit form</button>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  
  $(document).ready(function(){

    $(this).on("click", ".addMore", function(){
      var html = '<div class="form-group  d-flex"><div class="col-6"><label for="motherSurname">NAME</label><input type="text" class="form-control" name="name[]" id="motherSurname" aria-describedby="emailHelp"></div>'
      html += '<a class="btn btn-danger remove text-white align-self-center" style="text-decoration: none; position: absolute; right: 39%; margin-top: 2rem;">Remove</a></div>'

      $('.inputs_div').append(html);
    });

    $(this).on("click", ".remove", function(){
      var target_input = $(this).parent();
        target_input.remove();
    });

  });

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