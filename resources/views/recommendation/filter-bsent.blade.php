@extends('recommendation.index')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('filter')

<h1>BSIT</h1>

<div class="table-responsive">
    <table class="table table-striped table-bordered dt-responsive wrap" style="width:100%" id="table_id">
        <thead>
          <tr>
            <th scope="col">Book ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Year Published</th>
            <th scope="col">Area Selection</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
          @forelse($bsentBooks as $forBsent)
            <tr>
              <td>{{ $forBsent->id   }}</td>
              <td>{{ $forBsent->book_title }}</td>
              <td>{{ $forBsent->author }}</td>
              <td>{{ $forBsent->year_published->format('Y') }}</td>
              <td>{{ $forBsent->area_section }}</td>
              <td>
                  <a href="#" class="btn text-white" style="background-color: #1265B8">View Profile</a>
              </td>
            </tr>
          @empty
          <tr><td class="text-center font-italic" colspan="6">No Data</td></tr>
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