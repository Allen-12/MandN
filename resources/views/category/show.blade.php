{{--This shows the details about a category i.e. the available sizes for a category--}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $category->type }}</div>

                <div class="card-body">
                    <a href="/categories/{{ $category->id }}/sizes/create" class="btn btn-dark">Create New Size</a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Sizes</div>

                <div class="card-body">
                    @forelse($category->sizes as $size)
                        <li class="list-group-item mb-4 border-top d-flex justify-content-between">
                            {{ $size->size }}
                            <a href="/categories/{{ $category->id }}/sizes/{{ $size->id }}" class="btn btn-info float-right">View {{ $category->type }}</a>
                        </li>
                    @empty
                        <p class="text-info">No sizes have been created</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
