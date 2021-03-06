@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
                <div class="card-body">
                    <a href="{{ route('admin:motorcycle')}}" type="button" class="btn btn-primary">Motorcycle</a>
                    <a href="{{ route('admin:user')}}" type="button" class="btn btn-primary">User</a>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection