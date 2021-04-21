@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      @foreach ($products->take(3) as $product)
                        <div class="carousel-item {{$loop->first?'active':''}}" data-bs-interval="10000">
                            <img src="{{$product->gallery}}" class="d-block w-50 h-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>{{$product->name}}</h5>
                            <p>{{$product->description}}</p>
                            </div>
                        </div>
                      @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
        <br><br>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>
                    Trending Products
                </h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-md-evenly">
            <br><br>
            @foreach($products->take(4) as $product)
            <div class="card  mt-4" style="width: 16rem;">
                <img src="{{$product->gallery}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">{{$product->name}}</h5>
                  <p class="card-text">{{$product->description}}</p>
                  <a href="detail/{{$product->id}}" class="btn btn-primary text-center">View Product</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">

        </div>
    </div>
@endsection
