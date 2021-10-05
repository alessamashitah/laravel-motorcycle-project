@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <a href="{{ route('motorcycleadd')}}" type="button" class="btn btn-dark">Add Motorcycle</a>
                </div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Colour</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($motorcycle as $key=>$motorcycle)
                        <tr>
                        <th scope="row">{{ $key + 1}}</th>
                        <td>{{$motorcycle->type}}</td>
                        <td>{{$motorcycle->colour}}</td>
                        <td><a href="{{ route('motorcycleedit', $motorcycle)}}" type="button" class="btn btn-dark">Edit</a></td>
                        <td><a href="{{ route('motorcycledelete', $motorcycle)}}" type="button" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection