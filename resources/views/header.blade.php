<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Table</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <link rel="stylesheet" href="{{asset('css/product-form.css')}}">
  <link rel="stylesheet" href="{{asset('css/update-form.css')}}">



 

</head>
<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <!-- Left: Brand -->
    <a class="navbar-brand fw-bold" href="{{ route('welcome') }}">
      Product Crud
    </a>

    <!-- Center: User Name -->
    @if (Auth::user())
      <span class="navbar-text text-white position-absolute start-50 translate-middle-x">
        Hello, {{ Auth::user()->name }}
      </span>
      <form action="{{route('logout')}}" method="post">
        @csrf
        <button class="btn btn-danger">LogOut</button>
      </form>
      @else
       <!-- Right: Buttons -->
    <div class="d-flex ms-auto">
      <a href="/login" class="btn btn-outline-primary me-2">Login</a>
      <a href="/register" class="btn btn-success">Register</a>
    </div>
    @endif  

   

  </div>
</nav>
