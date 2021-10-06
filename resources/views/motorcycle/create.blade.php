@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Motorcycle') }}</div>


                <div class="card-body">
                <form method="POST" action="{{ route('motorcyclestore')}}" enctype="multipart/form-data"  >
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="type">
                    @foreach($type as $types)
                    <option value="{{ $types->id}}">{{ $types->type}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="colour" class="form-label">Colour</label>
                    <select name="colour" id="colour">
                    @foreach($colour as $colours)
                    <option value="{{ $colours->id}}">{{ $colours->colour}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Add Picture</label>
                    <input class="form-control" type="file" name="file" >
                </div>

                <button type="submit" class="btn btn-light">Submit</button>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection