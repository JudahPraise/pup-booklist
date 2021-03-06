@extends('recommendation.index')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('filter')

<div class="table-responsive p-4">
<h1>BBTLE</h1>
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
          @forelse($bbtleBooks as $forBbtle)
            <tr>
              <td>{{ $forBbtle->id   }}</td>
              <td>{{ $forBbtle->book_title }}</td>
              <td>{{ $forBbtle->author }}</td>
              <td>{{ \Carbon\Carbon::parse($forBbtle->year_published)->format('Y') }}</td>
              <td>{{ $forBbtle->area_section }}</td>
              <td>
                  <a href="{{ route('book.show', $forBbtle->id ) }}" class="btn text-white" style="background-color: #1265B8">Show Book</a>
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