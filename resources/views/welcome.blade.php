 
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
</style>
  <div class="box">
  <h1>Hello <text style="color:rgb(232, 111, 111)">{{Auth::user()->name}} </text>You ara logged in!</h1>
  @csrf
  <form action="/login">
    @csrf
  <button class="btn btn-primary">Create item</button>
  </form>
  <form action="{{route('logout')}}" method="post">
    @csrf
    <button class="btn btn-danger">LogOut</button></form>
  </div>

  @endauth



    <div class="container my-5">
    <h2 class="mb-4">Item List</h2>
  <table class="table table-bordered table-hover text-center align-middle">
    <thead class="table-dark">

      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Age</th>
       
        <th>Created</th>
        <th>Edited</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($Cars as $item)
       @csrf
           <tr>
        <td>{{$item->id}}</td>
        <td>
          @if ($item->image)
          <img src="{{asset('storage/'. $item->image)}}" class="card-img-top" style="height:100px;width:100px">
          @endif
        </td>

        <td>{{$item->name}}</td>
         <p><td>{{$item->price}} $</td></p>
         <td>{{$item->age}}</td>
 
        <td>{{$item->created_at}}</td>
   <td>{{$item->updated_at}}</td>
 
      </tr>
      @endforeach
      
      <!-- Add more rows here -->
    </tbody>
  </table>
</div>

<!-- Bootstrap JS (optional, for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
