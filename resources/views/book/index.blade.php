@extends('layouts.master')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


<div class="row w-100 d-flex justify-content-center p-4">

  <div class="col-lg-7 order-sm-5 w-100 d-flex flex-column justify-content-center ml-5">
    <h1>PUP Library System</h1>
    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h5>
  </div>

  <div class="col-lg-4 order-sm-7 d-flex justify-content-center pl-5">
    <lottie-player src="{{ asset('animation/reading.json') }}" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
  </div>

</div>


<div class="table-responsive p-4">
  <h2 class="mt-5">Book List</h2>
  <table class="table table-striped table-bordered dt-responsive wrap" style="width:100%" id="table_id">
    <thead>
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Title</th>
      <th scope="col">No. of Copies</th>
      <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse($books as $book)
    <tr>
      <td>{{ $book->id }}</td>
      <td>{{ $book->book_title }}</td>
      <td>{{ $book->copies }}</td>
      <td>
        <a href="{{ route('book.show', $book->id) }}" class="btn btn-success m-1">View</a>
        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary m-1">Update</a>
        <a href="{{ route('archive', $book->id) }}" class="btn btn-info m-1">Archive</a>
      </td>
    </tr>
    @empty
      <td><p>Insert Book</p></td>
    @endforelse
    
    </tbody>
  </table>
</div>
@endsection

@section('page_level_scripts')
    <script src="{{ asset('vendor/datatables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                "bLengthChange": false,
            });
        } );
    </script>
@endsection