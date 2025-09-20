<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Table</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    @endif  

    <!-- Right: Buttons -->
    <div class="d-flex ms-auto">
      <a href="/login" class="btn btn-outline-primary me-2">Login</a>
      <a href="/register" class="btn btn-success">Register</a>
    </div>

  </div>
</nav>
