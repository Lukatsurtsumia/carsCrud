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
    body {
      background-color: #89b5e1;
    }

    .product-form {
      max-width: 400px;
      margin: 80px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    .product-form h3 {
      margin-bottom: 25px;
      text-align: center;
      font-weight: 600;
    }
  </style>
</head>
<body>
 

<div class="container">
  <div class="product-form">
    <h3>Add Product</h3>
    <form action="{{route('registerCar')}}" method="post" enctype="multipart/form-data">
      <!-- Product Image -->
      <div class="mb-3">
        <label for="productImage" class="form-label">Image</label>
        <input class="form-control" type="file" id="productImage" name="image" accept="image/*" required>
      </div>

      <!-- Product Name -->
      <div class="mb-3">
        <label for="productName" class="form-label">Name</label>
        <input type="text" class="form-control" id="productName" name="name" required>
      </div>

      <!-- Product Price -->
      <div class="mb-3">
        <label for="productPrice" class="form-label">Price ($)</label>
        <input type="number" step="0.01" class="form-control" id="productPrice" name="price" required>
      </div>

      <!-- Product Age -->
      <div class="mb-3">
        <label for="productAge" class="form-label">Age</label>
        <input type="number" class="form-control" id="productAge" name="age" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Submit</button>
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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('loginUser')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" required  >
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100"> login</button>
      </form>
                </div>
            </div>
            <div class="text-center mt-3">
                <small>Don't have an account? <a href="/register">Register here</a></small>
            </div>
        </div>
    </div>
</div>
  
@endauth


</body>
</html>