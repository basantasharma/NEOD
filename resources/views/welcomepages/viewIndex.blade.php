@extends('base')
@section('content')
<div class="me-2 ms-2 mt-3">
    <div id="Status" class="align-items-center" style="margin-left: 35%; margin-right:35%;">
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
    <table class="table table-bordered text-center table-hover" style="font-size: 11px;">
        <tr>
            <th class="text-warning">Title</th>
            <th class="text-warning">Description</th>
         
            <th class="text-warning">Action</th>
        </tr>
       @foreach ($pagedata as $item)
       <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>  
            <a href="{{route('admin.editIndex')}}?id={{ $item ->id}}"><button class="bg-primary">Edit</button></a>
            <a href="{{route('admin.deleteIndex')}}?id={{ $item ->id}}"> <button class="bg-danger">Delete</button></a>        
        </td>
    </tr>
       @endforeach
    </table>
</div>
<script>
    setTimeout(function(){
      document.getElementById("Status").style.display ="none";
    },3000)  
    
    var x=  document.getElementById('page').classList.add("menu-open");
        var xy=  document.getElementById('viewIndex').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
        console.log(x);
        console.log(xy);
    </script>
@endsection