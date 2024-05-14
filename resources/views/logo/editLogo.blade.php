@extends('base')
@section('content')
<div class="p-3 mt-5" style="margin-left: 20%; margin-right:20%;">

  {{-- @dd($read) --}}
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Add Logo</span></div>
  <hr>
  <form class="p-3" method="post" action="{{route('admin.updateLogo')}}?id={{$updateLogo->id}}" enctype="multipart/form-data" >
    @csrf
    <div class="row col-12">
        <div class="col-5 text-center">
          <label for="name" class="p-2">
           Edit Name
          </label>
        </div>
        <div class="col-7">
       <input type="text" name="name" id="name" placeholder= "Enter a name" value="{{$updateLogo->name}}" class="form-control" required>
         @error('name')
         <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      </div> <br>
      <div class="row col-12">
        <div class="col-5 text-center">
          <label for="logo" class="p-2">
            Edit Logo
          </label>
        </div>
        <div class="col-7">
         <input type="file" value="{{$updateLogo->logoImage}}" class="form-control" name="logo" id="logo">
         @error('Logo')
         <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      </div><br>  
    <div class="d-flex justify-content-center mt-3">
      <button type="submit" class="btn btn-success">Save</button>
    </div>

  </form>
  <div id="descriptionStatus" class="align-items-center">
    @if(Session::has('success'))
   <div class="alert alert-success">
    <p class="text-small text-center text-light align-items-center">{{session::get('success')}}</p>
   </div>
    @endif
    @if (Session::has('fail'))
    <div class="alert alert-danger">
      <p class="text-small text-center text-light align-items-center">{{Session::get('fail')}}</p>
    </div>
    @endif
  </div>
</div>
<script>
  setTimeout(function () {
   document.getElementById("descriptionStatus").style.display = "none";
   }, 3000);  
   
var x=  document.getElementById('logo').classList.add("menu-open");
    var xy=  document.getElementById('addLogo').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);
</script>
@endsection