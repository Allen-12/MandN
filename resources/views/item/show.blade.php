@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">Size: {{ $size->size }}</div>
                </div>
            </div>

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Size</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Colour</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
            </table>
        </div>
    </div>
</div>
@endsection
