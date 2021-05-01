@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="col-md-6">
                <img src="{{$product->gallery}}" alt="" class="h-50 mt-5">
            </div>
            <div class="col-md-6" style="margin-top: 200px">
                <div><b>Category</b>: {{ucfirst($product->category)}}</div>
                <span><b>Brand</b>: {{$product->name}}</span>
                <div><b>Price</b> : {{$product->price}}</div>
                <div><b>Description</b>: {{$product->description}}</div>
                <br>
                <form action="{{route('addToCart')}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="submit" class="btn btn-success" value="Add to Cart">
                </form><br>
                <a href="#" class="btn btn-primary">Buy now</a>
                <a href="/" class="btn btn-outline-info">Go Back</a>
            </div>
        </div>
    </div>
@endsection
