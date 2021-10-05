@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Motorcycle') }}</div>


                <div class="card-body">
                <form method="POST" action="{{ route('motorcycleupdate', $motorcycle)}}" >
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="name" class="form-control" id="type" name="type" value="{{ $motorcycle->type }}" placeholder="type">
                </div>
                <div class="mb-3">
                    <label for="colour" class="form-label">Colour</label>
                    <input type="name" class="form-control" id="colour" name="colour" value="{{ $motorcycle->colour }}" placeholder="colour">
                </div>

                <button type="submit" class="btn btn-light">Submit</button>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection