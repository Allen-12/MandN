@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Create New Size</div>
                        <div class="float-right">Category: {{ $category->type }}</div>
                    </div>

                    <div class="card-body">
                        <form action="/categories/{{ $category->id }}/sizes" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Size</label>
                                <input type="text" class="form-control" id="size" name="size" aria-describedby="sizeHelp" placeholder="Enter Size">
                                <small id="sizeHelp" class="form-text text-muted">Enter the size you want to create for this category</small>
                                @error('size')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">Create Size</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
