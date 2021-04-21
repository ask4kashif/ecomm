@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td scope="row"><img src="{{$product->gallery}}" alt="Not available" class="w-25"></td>
                        <td>{{ucfirst($product->name)}}</td>
                        <td>{{ucfirst($product->category)}}</td>
                        <td>{{$product->price}}</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
