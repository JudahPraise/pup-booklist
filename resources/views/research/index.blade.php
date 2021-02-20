@extends('layouts.master')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="table-responsive p-4">
  <h2>Research Papers List</h2>
  <table class="table table-striped table-bordered dt-responsive wrap" style="width:100%" id="table_id">
    <thead>
      <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Year</th>
      <th scope="col">Research Title</th>
      <th scope="col">Course</th>
      <th scope="col">Authors</th>
      <th scope="col">Actions</th>
      </tr>
    </thead>

    <tbody>
    @forelse( $research as $item )
      <tr>
      <td>{{ $item->id }}</td>
      <td>{{ $item->year }}</td>
      <td>{{ $item->research_title }}</td>
      <td>{{ $item->course_section }}</td>
      <td class="dropdown dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        View Authors
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <h6 class="mt-3 ml-3 font-weight-bold">Authors</h6>
            @forelse($item->authors as $author)
            {{-- <a class="dropdown-item" href="#">{{ $author->name }} <a href="">Update</a></a> --}}
            <h6 class="d-flex align-items-center m-3">{{ $author->name }}</h6>
            @empty
            <p>No</p>
            @endforelse
          </div>
      </td>
      <td>
        <a href="{{ route('research.edit', $item->id) }}" class="btn btn-primary">Update</a>
      </td>
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center font-italic">
          No data
        </td>
      </tr>
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
