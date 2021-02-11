@extends('layouts.master')

@section('content')
    <div class="row w-100">

      <div class="col-lg-12">
        <h2>Update Research Paper</h2>
        <form action="{{ route('research.update', $research->id)}}" method="POST" class="needs-validation" novalidate id="update">
          @csrf
          @method('PUT')
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Year</label>
                <input type="text" class="form-control" name="year" value="{{ $research->year }}" id="validationCustom01" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Research Title</label>
                <input type="text" class="form-control" name="research_title" value="{{ $research->research_title }}" id="validationCustom02" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Course-Section</label>
                <input type="text" class="form-control" name= "course_section" value="{{ $research->course_section }}" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom05">Instructor</label>
                <input type="text" class="form-control" name= "instructor" value="{{ $research->instructor }}" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>

            </div>
          </form>
      </div>
      
      <div class="col-lg-12 mt-3" >
        <div class="row d-flex w-100 ml-2 flex-column" >
          <h2>Researchers</h2>
            {{-- <div class="row w-100 d-flex flex-column"> --}}
                @forelse($research->authors as $author)
                    <div class  ="form-group d-flex w-100 inputs-div-2" >
                      <form action="{{ route('researcher.update',$author->id) }}" method="POST" class=" w-100" id="{{ $author->id }}"> 
                        @csrf
                        @method('PUT')
                       <div class="col-lg-12">
                         <label for="motherSurname">Name</label>
                         <input type="text" class="form-control" name="name" value="{{ $author->name }}" id="motherSurname" aria-describedby="emailHelp">
                       </div>
                      </form>

                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('researcher.create', $research->id)}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" name="name" id="exampleInputEmail1">
                                </div>
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                      
                       <div class="col px-3 d-flex align-items-center mt-4">

                        <form action="{{ route('researcher.delete', $author->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type='submit' class="btn btn-sm btn-danger"><i class="fas fa-trash mr-2"></i><span>Remove</span></button>
                        </form>
                        <a class="btn btn-sm btn-primary ml-2" onclick="document.getElementById({!! json_encode($author->id, JSON_HEX_TAG) !!}).submit();"><i class="fas fa-pen mr-2"></i><span>Update</span></a>

                       </div>
                    </div>
                @empty
                <form action="{{ route('researcher.create', $research->id)}}" method="POST" class="inputs_div">
                  @csrf
                  <div class="form-group d-flex w-100">
                    <div class="col-lg-10">
                      <label for="motherSurname">Name</label>
                      <input type="text" class="form-control" name="name" id="motherSurname" aria-describedby="emailHelp">
                      <a class="addMore">Add more</a>
                    </div>
                    <div class="col-lg-2 d-flex align-items-center mt-2">
                      <button type='submit' class="btn btn-sm btn-primary"><i class="fas fa-plus mr-2"></i><span>Add</span></button>
                    </div>
                  </div>
                </form>
                @endforelse
        </div>
        <a class="addMore ml-3" data-toggle="modal" data-target="#exampleModal">Add Researcher</a>
      </div>

      <div class="row w-100 d-flex justify-content-end">
        <button class="btn btn-primary mt-3" onclick="document.getElementById('update').submit();">Update</button>
      </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  
  $(document).ready(function(){

    $(this).on("click", ".addMore", function(){
      var html = '<div class="form-group  d-flex"><div class="col-lg-10"><label for="motherSurname">NAME</label><input type="text" class="form-control" name="name[]" id="motherSurname" aria-describedby="emailHelp"><a class="addMore">Add more</a></div>'
      html += '<div class="col-lg-2 d-flex align-items-center mt-2"><button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-plus mr-2"></i><span>Add</span></button></div></div>'

      $('.inputs_div').append(html);
    });

    $(this).on("click", ".addMore2", function(){
      var html = '<div class="form-group  d-flex"><div class="col-lg-10"><label for="motherSurname">NAME</label><input type="text" class="form-control" name="name[]" id="motherSurname" aria-describedby="emailHelp"><a class="addMore">Add more</a></div>'
      html += '<div class="col-lg-2 d-flex align-items-center mt-2"><button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-plus mr-2"></i><span>Add</span></button></div></div>'

      $('.inputs-div-2').append(html);
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