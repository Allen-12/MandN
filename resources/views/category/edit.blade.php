@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Existing Category</div>

                    <div class="card-body">
                        <form action="/categories/{{ $category->id }}" method="POST">
                            @csrf

                            @method('PATCH')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="type" value="{{ $category->type }}" aria-describedby="nameHelp" placeholder="Enter Name">
                                <small id="nameHelp" class="form-text text-muted">Change the name of the category</small>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">Edit Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
