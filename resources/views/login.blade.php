@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                  <label for="InputEmail" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="InputPassword" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="InputPassword">
                </div>
                <button type="submit" class="btn btn-default form-control border-primary">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection
