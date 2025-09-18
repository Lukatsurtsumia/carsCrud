
<table class="table table-bordered table-hover text-center align-middle">
    <thead class="table-dark">

      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
   
    
    
    <tbody>
        @foreach ($Users as $user )
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
             
            

  
{{-- DELETE  --}}

  <td>
    @if ($user->role == 'admin') 
    Admin
    @else
    <form action="{{route('deleteUser', ['id'=> $user->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
    </form>
        </td>
      </tr>
@endif

        @endforeach
       
    </tbody>