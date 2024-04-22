@extends('base')
@section('content')


<div>
  {{-- <div class="mt-3 d-flex justify-content-center">
    <h4 class="mt-3">Images</h4>
  </div> --}}
  {{-- <hr> --}}
  <div class="d-flex justify-content-end mt-2">
      <a href="{{route('admin.addImagePage')}}?id={{ $image->d_id }} " class="me-4  text-decoration-none"><button class="btn btn-success ">Add Image</button></a>
  </div>
  
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
  
  @if(count($photo)>0)
  <div class="mt-5 d-flex" style="margin-left: 2%; margin-right:2%;">
  @foreach($photo as $item)
    <div class="col-6 ">
      <div class="d-flex justify-content-center">
        <img src="{{asset('storage/'. $item->images)}}" style="height:450px; width:380px;" alt="...." class="border p-4">
      </div>
      
      <div class="d-flex justify-content-center">
        <a href="{{route('admin.deletePhoto',['id'=> $item->id])}}"><button class="bg-danger mt-3">Delete</button></a>
      </div>
    </div>
  @endforeach 
  </div>
  <div class="mt-4">
    <h6 class="text-center text-danger mb-5">First delete and add again to change photo.</h6>
  </div>
  @else
  
  <div>
    <h6 class="text-center mt-5 text-danger">No image Found for this description.</h6>
  </div>
  
  @endif
</div>
<script>
setTimeout(function(){
  document.getElementById("Status").style.display ="none";
},3000)  

var x=  document.getElementById('description').classList.add("menu-open");
    var xy=  document.getElementById('viewDescription').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);

</script>
@endsection