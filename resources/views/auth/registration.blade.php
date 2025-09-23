@include('header')
<body class="bg-light">
    @include('error')
@auth
<h1>Hello <text style="color: green">{{Auth::user()->name}} </text> You are Logged In!</h1>
<a href="/login"><button class="btn btn-success"> Check Product</button></a>
  <form action="{{route('logout')}}" method="post">
    @csrf
    <button class="btn btn-danger">LogOut</button></form>
@else

<body>
  <div class="login-container">
    <form class="login-form" method="POST" action="{{ route('registerUser') }}">
      @csrf
      <h2>Registration</h2>

      @if (session('error'))
        <div class="alert">{{ session('error') }}</div>
      @endif

      <div class="form-group">
        <label for="name">Name</label>
        <input id="title" name="name" type="title" value="{{ old('name') }}" required autofocus>
        @error('name') <span class="error-msg">{{ $message }}</span> @enderror
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
        @error('email') <span class="error-msg">{{ $message }}</span> @enderror
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>
        @error('password') <span class="error-msg">{{ $message }}</span> @enderror
      </div>

      <button type="submit" class="btn-login">Register</button>

      <p class="register-link">Don't have an account? <a href="{{ route('loginUser') }}">Login</a></p>
    </form>
  </div>
 
 
  
@endauth

 