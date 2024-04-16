@extends('base')
@section('content')
<div class="mt-3 d-flex justify-content-center">
  <h4>Countries</h4>
</div>
<a href="{{route('admin.country')}}" class="d-flex justify-content-end me-4 text-decoration-none"><button class="btn btn-success ">Add Country</button></a>
<div id="abcd" class="align-items-center"  style="margin-left: 35%; margin-right:35%;">
    @if(Session::has('success'))
   <div class="form-control bg-success">
    <p class="text-small text-center text-light align-items-center">{{session::get('success')}}</p>
   </div>
    @endif
    @if (Session::has('fail'))
    <div class="form-control bg-success">
      <p class="text-small text-center text-light align-items-center">{{Session::get('fail')}}</p>
    </div>
    @endif
  </div>
  <script>
    setTimeout(function () {
     document.getElementById("abcd").style.display = "none";
     }, 3000);  
  
  </script>

<div class="mt-3" style="margin-left: 2%; margin-right:2%;">
    <table class="table table-bordered text-center table-hover ">
        <thead class="border border-2 ">
          <tr >
            <th class="text-warning" scope="col">id</th>
            <th scope="col" class="text-warning">Name</th>
            <th scope="col" class="text-warning">Logo</th>
            <th scope="col" class="text-warning">Actions</th>
          </tr>
        </thead>
        <tbody>
            <tr >
            @foreach($country as $items)
            <td >{{$items->id}}</td> 
            <td>{{$items->name}}</td>
            <td >
              <img src="{{asset('storage/'.$items->logo)}}" alt="{{$items->name}}.img" class="img-thumbnail" style="width: 120px; height:100px;" >
            </td> 
            <td>        
            <a href="{{route('admin.deleteCountry',['id'=>$items->id])}}"><button class="bg-danger ">Delete</button></a> 
            <a href="{{route('admin.editCountry',['id'=>$items->id])}}"><button class="bg-primary">Edit</button></a>            
          </td>
        </tr>
            @endforeach
        </tbody>
      </table>
</div>
<style>
    .table{
        font-size: 13px;
    }
</style>

@endsection