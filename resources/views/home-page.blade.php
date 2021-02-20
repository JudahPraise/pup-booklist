@extends('layouts.master')

@section('page_level_css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid background d-flex flex-column justify-content-end align-items-end w-100">
    <div class="row w-100 mb-5 d-flex justify-content-center">
        <div class="col-lg-2 d-flex justify-content-center">
            <img src="{{ asset('image/PUPLogo.png')}}" alt="PUPLogo" style= "height: 10rem; width: 10rem;" >
        </div>

        <div class="col-lg-10">
            <h1 class="font-weight-bold text-white mt-5" style="font-size: 4rem;">PUPCC Book List</h1>
            {{-- <h1 class="font-weight-bold text-white" style="font-size: 4rem;">Calauan Campus</h1> --}}
        </div>
        <div class="col-lg-8 text-white" style="width: 75rem;">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>
        </div>
    </div>

    <div class="row d-flex justify-content-center align-content-center w-1000">
        
    </div>
</div>

@endsection