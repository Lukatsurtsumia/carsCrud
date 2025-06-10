
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $err)
         <il>{{$err}}</il>
        @endforeach
    </ul>
</div>
@endif