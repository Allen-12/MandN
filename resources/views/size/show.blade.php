@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $category->type }}</div>

                <div class="card-body">
                    <a href="#" class="btn btn-dark">Add New Item</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection