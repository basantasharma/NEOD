@extends('base')
@section('content')

{{-- <a href="{{route('admin.country')}}" class="d-flex justify-content-end me-4 text-decoration-none"><button class="btn btn-success ">Add Country</button></a> --}}

<div class="mt-3 mb-3" style="margin-left: 2%; margin-right:2%;">
  <div id="abcd" class="align-items-center mt-1 mb-3"  style="margin-left: 35%; margin-right:35%;">
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
            <a href="{{route('admin.deleteCountry',['id'=>$items->id])}}"><button class="bg-danger  me-2">Delete</button></a> 
            <a href="{{route('admin.editCountry')}}?id={{ $items->id }}"><button class="bg-primary">Edit Image</button></a>            
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
<script>
  setTimeout(function () {
   document.getElementById("abcd").style.display = "none";
   }, 2000);  

   var x=  document.getElementById('country').classList.add("menu-open");
    var xy=  document.getElementById('viewCountry').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);
</script>
@endsection