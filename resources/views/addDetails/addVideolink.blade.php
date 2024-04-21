@extends('base')
@section('content')
<div class="border border-2 p-3 mt-5 rounded" style="margin-left: 30%; margin-right:30%; height: 450px;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Video Link Form</span></div>
  <hr>

  <form method="POST" action="{{route('admin.postvideolink')}}" class="p-3">
    @csrf
    <div class="form-group ">
      <label for="name">Name</label><br>
      <input type="text" class="form-control mt-2" name="name" id="name" placeholder="Video link name">
      <div class="mt-1">
        @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div>

    <div class="form-group mt-4">
      <label for="videolink">Link</label><br>
      <input type="text" class="form-control mt-2" name="link" id="videolink" placeholder="Video link">
     <div class="mt-1">
      @error('link')
      <span class="text-danger">{{$message}}</span>
      @enderror
     </div>
    </div><br>
    <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success">Add Video Link</button></div>
  </form>
<div id="videoStatus" class="align-items-center mt-1">
@if(Session::has('success'))
<div class="alert alert-success">
  <p class="text-light text-small text-center align-items-center">{{session::get('success')}}</p>
</div>
@endif

  @if(Session::has('fail'))
  <div class="alert alert-danger">
    <p class="text-light text-small text-center align-items-center">{{session::get('fail')}}</p>
  </div>
  @endif
</div>
</div>

<script>
setTimeout(function(){
  document.getElementById("videoStatus").style.display ="none";
},3000)

var x=  document.getElementById('videoLink').classList.add("menu-open");
var xy=  document.getElementById('addVideoLink').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
console.log(x);
console.log(xy);
</script>
@endsection