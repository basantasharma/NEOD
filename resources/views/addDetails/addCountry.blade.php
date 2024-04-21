@extends('base')
@section('content')
<div class="border border-2 p-3 mt-5 rounded" style="margin-left: 30%; margin-right:30%; height:450px;">
 
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Country Form</span></div>
  <hr>
  <form class="p-3" action="{{route('admin.postcountry')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Country Name</label><br>
      <input type="text" class="form-control mt-2" name="country" id="name" placeholder="Enter country name">
      <div class="mt-1" id="validateMsg">
        @error('country')
          <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div><br>
    <label class="mb-2 mt-2" for="countryImage">Choose a Country Flag or Map.</label>
        <div class="input-group mb-4">
        <input type="file" class="form-control" name="countryImage" id="countryImage" required>
        </div>
    <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success">Add Country</button></div>
  </form>
  <div  class="align-items-center mt-1">
  @if(Session::has('success'))
 <div id="countryStatus" class="alert alert-success">
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
   document.getElementById("countryStatus").style.display = "none";
   }, 3000);  


 var x=  document.getElementById('country').classList.add("menu-open");
var xy=  document.getElementById('addCountry').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
console.log(x);
console.log(xy);
</script>
@endsection