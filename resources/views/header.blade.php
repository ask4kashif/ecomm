<?php
use App\Http\Controllers\ProductController;
$total=0;
if(session()->has('user')){
    $total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Ecommerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Orders</a>
          </li>
            <li>
                <form class="d-flex" method="POST" action="/search">
                    @csrf
                    <input class="form-control me-2 " style="width:500px" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Cart ({{$total}})</a></li>&nbsp;&nbsp;
            @if(session()->has('user'))
                <li><a href="logout">Logout</a></li>
            @else
            <li><a href="login">Login</a></li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
