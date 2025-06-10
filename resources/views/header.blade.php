<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Table</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Header Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">Product Crud</a>

    <!-- Mobile Toggle Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarButtons"
      aria-controls="navbarButtons" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Buttons -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarButtons">
      <div class="d-flex">
        <a href="/login" class="btn btn-outline-primary me-2">Login</a>
        <a href="/register" class="btn btn-success">Register</a>
      </div>
    </div>
  </div>
</nav>