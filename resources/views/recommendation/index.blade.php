@extends('layouts.master')

@section('content')
<h1 class="p-5">Recommendations</h1>
@include('recommendation._counter')

@yield('filter')

@endsection