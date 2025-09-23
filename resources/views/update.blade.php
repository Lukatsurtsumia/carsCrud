@include('header')
    <form action="/update/{{ $Cars->id}}" method="post" enctype="multipart/form-data"> 
       @csrf
      @method('PUT')
      
 
</head>
<body>

<div class="edit-product-container">
  <div class="edit-product-box">
    <h3>Edit Product</h3>
    <form action="{{ route('registerCar') }}" method="post" enctype="multipart/form-data">
      @csrf
      <!-- Current Image Preview -->
      <div>
        <label>Current Image</label><br>
        @if($Cars->image)
          <img src="{{ asset('storage/'.$Cars->image) }}" alt="Current Product Image" class="preview-image">
        @endif
      </div>

      <!-- Image Upload -->
      <div>
        <label for="productImage">Change Image (optional)</label>
        <input type="file" id="productImage" name="image" accept="image/*">
      </div>

      <!-- Product Name -->
      <div>
        <label for="productName">Name</label>
        <input type="text" id="productName" name="name" value="{{ $Cars->name }}" required>
      </div>

      <!-- Product Price -->
      <div>
        <label for="productPrice">Price ($)</label>
        <input type="number" step="0.01" id="productPrice" name="price" value="{{ $Cars->price }}" required>
      </div>

      <!-- Product Age -->
      <div>
        <label for="productAge">Age</label>
        <input type="number" id="productAge" name="age" value="{{ $Cars->age }}" required>
      </div>

      <button type="submit" class="btn-update">Update Product</button>
    </form>
  </div>
</div>


</body>
</html>