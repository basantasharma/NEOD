@extends('base')
@section('content')

{{-- <a href="" class="me-4 d-flex justify-content-end text-decoration-none"><button class="btn btn-success ">Add Description</button></a> --}}


<div class="mt-3" style="margin-left: 2%; margin-right:2%;">
  <div id="stats">
    @if(Session::has('success'))
  <div id="abcd" class="form-control bg-success align-items-center" style="margin-left: 35%; margin-right:35%;">
   <p class="text-small text-center text-light align-items-center">{{session::get('success')}}</p>
  </div>
   @endif
   @if (Session::has('fail'))
   <div class="form-control bg-success  align-items-center" id="abc" style="margin-left: 35%; margin-right:35%;">
     <p class="text-small text-center text-light align-items-center">{{Session::get('fail')}}</p>
   </div>
   @endif
  </div>
  
    <table class="table table-bordered text-center table-hover">
        <thead class="border border-2 ">
          <tr >
            {{-- <th scope="col" class="text-warning">Descripiton ID</th> --}}
            <th scope="col" class="text-warning">Readinng Description</th>        
            <th scope="col" class="text-warning">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($details as $item)
            <tr>
            <td>{{$item->description}}</td>        
            <td>
                <a href="{{route('admin.editTestDescription')}}?id={{ $item->id }}"><button class="bg-secondary">Edit</button></a>
                <a href="{{route('admin.deleteTestDescription',['id'=> $item->id])}}"><button class="bg-danger">Delete</button></a>
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
  
var x=  document.getElementById('description').classList.add("menu-open");
    var xy=  document.getElementById('viewDescription').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);

    setTimeout(function () {
  document.getElementById("stats").style.display = "none";
  }, 3000); 

</script>
@endsection