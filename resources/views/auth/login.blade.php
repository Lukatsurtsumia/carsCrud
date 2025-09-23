@include('header')


<body class="bg-light">
@include('error')

@auth 
  <form action="{{route('logout')}}" method="post">
    @csrf
    <button class="btn btn-danger">LogOut</button></form>
<body >
    
    <form action="{{route('registerCar')}}" method="post" enctype="multipart/form-data"> 
        @csrf
<style>
  
  </style>
</head>
<body>
 

<div class="product-form-container">
  <div class="product-form-box">
    <h3>Add Product</h3>
    <form action="{{ route('registerCar') }}" method="post" enctype="multipart/form-data">
      @csrf
      <!-- Product Image -->
      <div>
        <label for="productImage">Image</label>
        <input type="file" id="productImage" name="image" accept="image/*" required>
      </div>

      <!-- Product Name -->
      <div>
        <label for="productName">Name</label>
        <input type="text" id="productName" name="name" required>
      </div>

      <!-- Product Price -->
      <div>
        <label for="productPrice">Price ($)</label>
        <input type="number" step="0.01" id="productPrice" name="price" required>
      </div>

      <!-- Product Age -->
      <div>
        <label for="productAge">Age</label>
        <input type="number" id="productAge" name="age" required>
      </div>

      <button type="submit" class="btn-submit">Submit</button>
    </form>
  </div>
</div>


 <!-- Product Crud Just for a Account-->
 
<table class="table table-bordered table-hover text-center align-middle">
    <thead class="table-dark">

      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Age</th>
       
        <th>Action</th>
      </tr>
    </thead>
   
    
    
    <tbody>
      @foreach ($Cars as $item)
        
           <tr>
        <td>{{$item->id}}</td>
        <td>
          @if ($item->image)
          <img src="{{asset('storage/'. $item->image)}}" class="card-img-top" style="height:100px;width:100px">
          @endif
        </td>

        <td>{{$item->name}}</td>
        <td>{{$item->price}} $</td>
         <td>{{$item->age}}</td>
 
        <td>
<a href="{{route('edit',$item->id)}}">
  <button type="submit" class="btn btn-sm btn-warning">Edit</button></a> 
  
{{-- DELETE  --}}
 
          <form action="{{route('delete',['id' =>$item->id])}}" method="post"> 
       @csrf
            @method('DELETE')
    
          <button class="btn btn-sm btn-danger" type="submit">Delete</button>
       </form>
        </td>
      </tr>

   
      @endforeach
      
      <!-- Add more rows here -->
    </tbody>
  </table>
</div>

<div> @if (auth()->user()->role == 'admin')
  @include('auth.admin')
  @endif
 </div>
 
@else

<body>
  <div class="login-container">
    <form class="login-form" method="POST" action="{{ route('loginUser') }}">
      @csrf
      <h2>Login</h2>

      @if (session('error'))
        <div class="alert">{{ session('error') }}</div>
      @endif

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

      <button type="submit" class="btn-login">Login</button>

      <p class="register-link">Don't have an account? <a href="{{ route('registerUser') }}">Register</a></p>
    </form>
  </div>
 
 
  
@endauth


</body>
</html>