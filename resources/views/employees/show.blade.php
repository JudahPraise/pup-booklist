@extends('layouts.master')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $employee->full_name }}</h1>
    {{-- Favorites --}}
    <div class="row mb-4">
        <div class="col-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Favorite Color</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employee->profile->favorite_color }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Favorite Food</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employee->profile->favorite_food }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Friends --}}
    <h1 class="h3 mb-4 text-gray-800">Friends List</h1>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Friend ID</th>
                            <th>Friend Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employee->friends as $friend)
                            <tr>
                                <td>{{ $friend->id }}</td>
                                <td>{{ $friend->full_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection