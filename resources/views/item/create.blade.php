@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Create New Item</div>
                        <div class="float-right">Size: {{ $size->size }}</div>
                    </div>

                    <div class="card-body">
                        <form action="/sizes/{{ $size->id }}/items" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand" aria-describedby="brandHelp" placeholder="Enter Brand">
                                <small id=brandHelp" class="form-text text-muted">Enter the brand of the item  you want to create</small>
                                @error('brand')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="colour">Colour</label>
                                <input type="color" class="form-control" id="colour" name="colour" aria-describedby="colourHelp">
                                <small id=colourHelp" class="form-text text-muted">Enter the colour of the item  you want to create</small>
                                @error('colour')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" aria-describedby="quantityHelp">
                                <small id=quantityHelp" class="form-text text-muted">Enter the quantity in stock of item</small>
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">Create Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
