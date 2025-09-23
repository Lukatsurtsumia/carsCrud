 
@include('header')

{{-- product filter --}}
 

 
 

     <div class="filter-container">

    <!-- Filter Form -->
    <form method="GET" action="{{ route('welcome') }}" class="row g-3 mb-5">
        <div class="col-md-3">
            <input type="text" name="name" value="{{ request('name') }}" class="form-control" placeholder="Search by title">
        </div>
        <div class="col-md-2">
            <input type="number" name="min_price" value="{{ request('min_price') }}" class="form-control" placeholder="Min price">
        </div>
        <div class="col-md-2">
            <input type="number" name="max_price" value="{{ request('max_price') }}" class="form-control" placeholder="Max price">
        </div>
        <div class="col-md-2">
            <input type="number" name="min_age" value="{{ request('min_age') }}" class="form-control" placeholder="Min age">
        </div>
        <div class="col-md-2">
            <input type="number" name="max_age" value="{{ request('max_age') }}" class="form-control" placeholder="Max age">
        </div>
        <div class="col-md-1 d-grid">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
 </div>
  @auth
  <style>
    
</style>
 

  <div class="box">
    
  
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
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <title>Product CRUD</title>
  <style>
    
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
        <div class="product-title">{{$item->name}}</div>
        <div class="product-info">Price: {{$item->price}} $</div>
        <div class="product-info">Age: {{$item->age}} years</div>
        <div class="actions">
          <button class="btn btn-buy">Buy</button>
           
        </div>
      
      </div>
    </div>

    @endforeach
          {{ $Cars->links() }}
  
 
     
  </div>
 
</body>
</html>
