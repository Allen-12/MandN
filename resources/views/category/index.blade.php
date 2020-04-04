@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>

                    <div class="card-body">

                            <ul class="list-group">
                                @foreach($categories as $category)
                                    <div class="mb-3">
                                        <li class="list-group-item d-flex justify-content-between">
                                            {{ $category->type }}
                                            <a href="/categories/{{ $category->id }}" class="btn btn-info">View</a>
                                            <a href="/categories/{{ $category->id }}/edit" class="btn btn-warning">Edit</a>
                                        </li>
                                    </div>
                                @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
