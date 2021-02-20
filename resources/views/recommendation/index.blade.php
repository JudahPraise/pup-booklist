@extends('layouts.master')

@section('content')
<h1 class="pl-4 pt-4">Recommendations</h1>
@include('recommendation._counter')

@yield('filter')

@endsection