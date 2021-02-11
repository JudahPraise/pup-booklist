@extends('layouts.master')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

  <h2 class="mt-5">Archive Books</h2>
  <div class="table-responsive">
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
      @forelse($archives as $archived)
      <tr>
        <td>{{ $archived->id }}</td>
        <td>{{ $archived->book_title }}</td>
        <td>{{ $archived->copies }}</td>
        <td>
          <a href="{{ route('retrieve', $archived->id) }}" class="btn btn-primary">Retrieve</a>
        </td>
  
      </tr>
      @empty
        <td colspan="4" class="text-center font-italic"><p>No Archived Books</p></td>
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