@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Category</div>

                    <div class="card-body">
                        <form action="/categories" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="type" aria-describedby="nameHelp" placeholder="Enter Name">
                                <small id="nameHelp" class="form-text text-muted">Enter the name of the category you want to create</small>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">Create Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
