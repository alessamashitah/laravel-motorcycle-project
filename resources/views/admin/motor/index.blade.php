@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('alert-message'))
                <div class="alert {{session()->get('alert-type')}}">
                    {{ session()->get('alert-message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                
                <div class="card-body">
                    <a href="{{ route('admin.home')}}" type="button" class="btn btn-dark">Back</a>
                </div> 

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Colour</th>
                        <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($motorcycles as $key=>$motorcycle)
                        <tr>
                        <th scope="row">{{ $key + 1}}</th>
                        <td>{{$motorcycle->motorType->type}}</td>
                        <td>{{$motorcycle->motorColour->colour}}</td>
                        <td>
                        <img src="{{ asset('/storage/motorcycle/'.$motorcycle->image) }}" width="50px;" height="50px;" alt="">
                        </td>
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