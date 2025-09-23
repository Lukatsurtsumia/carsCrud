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
<div class="containers mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('registerUser')}}">
                        <!-- Laravel CSRF Token -->
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" >
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
 
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
            </div>

            <div class="text-center mt-3">
                <small>Already have an account? <a href="/login">Login here</a></small>
            </div>
@endauth