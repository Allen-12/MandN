@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">Category: {{ $category->type }}</div>
                    <div class="float-right">Size: {{ $size->size }}</div>
                </div>

                <div class="card-body">
                    <a href="/sizes/{{ $size->id }}/items/create" class="btn btn-dark">Add New Item</a>
                    <a href="/sizes/{{ $size->id }}/items" class="btn btn-dark">View Available Items</a>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
