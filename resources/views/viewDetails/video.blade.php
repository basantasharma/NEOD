@extends('base')
@section('content')

<div class="mt-3 d-flex justify-content-center">
  <h4>Video Links</h4>
</div>

<a href="{{route('admin.videolink')}}" class="me-4 d-flex justify-content-end text-decoration-none"><button class="btn btn-success ">Add Video Link</button></a>


<div id="videoStat" class="align-items-center " style="margin-left: 35%; margin-right:35%;">
 
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

<div class="mt-3" style="margin-left: 2%; margin-right:2%;">
    <table class="table table-bordered text-center table-hover">
        <thead class="border border-2 ">
          <tr >
            <th class="text-warning" scope="col">id</th>
            <th scope="col" class="text-warning">Name</th>
            <th scope="col" class="text-warning">Video Link</th>
            <th scope="col" class="text-warning">Actions</th>
          </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($video as $items)
            <td>{{$items->id}}</td>
            
            <td>{{$items->name}}</td>
            <td>{{$items->v_link}}</td>
            <td>
                <a href="{{route('admin.deleteVideo',['id'=> $items->id])}}"><button class="bg-danger ">Delete</button></a>
                <a href="{{route('admin.editVideoLink',['id'=> $items->id])}}"><button class="bg-primary">Edit</button></a>
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
   document.getElementById("videoStat").style.display = "none";
   }, 3000);  
</script>
@endsection