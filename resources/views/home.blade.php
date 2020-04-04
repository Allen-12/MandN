@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrator Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="card" style="width: 18rem;">
                    <div class="card-header text-center">Product Category</div>
                    <div class="card-body text-center">
                        <a href="/categories/create" class="btn btn-primary mb-4">Create New Category</a>

                        <a href="/categories" class="btn btn-primary mb-4">View Categories</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
