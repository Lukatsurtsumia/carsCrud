@include('header')
    <form action="/update/{{ $Cars->id}}" method="post" enctype="multipart/form-data"> 
       @csrf
      @method('PUT')
      
<style>
    body {
      background-color: #7db1e4;
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

    .preview-image {
      width: 100%;
      height: auto;
      max-height: 200px;
      object-fit: contain;
      border: 1px solid #dee2e6;
      border-radius: 6px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="product-form">
    <h3>Edit Product</h3>
    <form action="{{route('registerCar')}}" method="post" enctype="multipart/form-data">
      
      <!-- Current Image Preview -->
      <div class="mb-3">
        <label class="form-label">Current Image</label><br>
        @if($Cars->image)
        <img src="{{asset('storage/'.$Cars->image)}}" alt="Current Product Image" class="preview-image">
        @endif
      </div>

      <!-- Image Upload -->
      <div class="mb-3">
        <label for="productImage" class="form-label">Change Image (optional)</label>
        <input class="form-control" type="file" id="productImage" name="image" accept="image/*">
      </div>

      <!-- Product Name -->
      <div class="mb-3">
        <label for="productName" class="form-label">Name</label>
        <input type="text" class="form-control" id="productName" name="name" value="{{$Cars->name}}" required>
      </div>

      <!-- Product Price -->
      <div class="mb-3">
        <label for="productPrice" class="form-label">Price ($)</label>
        <input type="number" step="0.01" class="form-control" id="productPrice" name="price" value="{{$Cars->price}}" required>
      </div>

      <!-- Product Age -->
      <div class="mb-3">
        <label for="productAge" class="form-label">Age</label>
        <input type="number" class="form-control" id="productAge" name="age" value="{{$Cars->age}}" required>
      </div>

      <button type="submit" class="btn btn-warning w-100">Update Product</button>
    </form>
  </div>
</div>

</body>
</html>