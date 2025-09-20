 
@include('header')


  @auth
  <style>
    .box {
        display: flex;
         flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 30vh;
        gap: 20px;
    }
    .logout-box {
        margin-top: 30px;
      text-align: center;
      width: 100%
    }
</style>
  <div class="box">
  @csrf
  <form action="/login">
    @csrf
  <button class="btn btn-primary">Create item</button>
  </form>
   
  </div>

  @endauth
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product CRUD</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      margin: 0;
     
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .product-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.2s;
      display: flex;
      flex-direction: column;
      text-align: center;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-image {
      width: 100%;
      height: 180px;
      background: #ddd ;
    }

    .product-body {
      padding: 15px;
      flex: 1;
    }

    .product-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-info {
      font-size: 14px;
      margin: 5px 0;
      color: #555;
    }

    .actions {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }

    .btn {
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.2s;
    }

    .btn-buy {
      background: #007bff;
      color: white;
    }

    .btn-buy:hover {
      background: #0056b3;
    }

    .btn-edit {
      background: #ffc107;
      color: black;
    }

    .btn-edit:hover {
      background: #e0a800;
    }

    .btn-delete {
      background: #dc3545;
      color: white;
    }

    .btn-delete:hover {
      background: #b02a37;
    }
  </style>
</head>
<body>

  <h1>Product List</h1>

  <div class="container">
    <!-- Product Example -->
     @foreach ($Cars as $item )
      <div class="product-card">
        @if($item->image)

      <div class="product-image">
        <img src="{{asset('storage/' . $item->image)}}" alt="" style="width:100%; height:100%; object-fit:cover;">
      </div>
        @endif
      <div class="product-body">
        <div class="product-title">{{$item->title}}</div>
        <div class="product-info">Price: {{$item->price}} $</div>
        <div class="product-info">Age: {{$item->age}} years</div>
        <div class="actions">
          <button class="btn btn-buy">Buy</button>
           
        </div>
      </div>
    </div>

    @endforeach
  
 
     
  </div>

</body>
</html>
