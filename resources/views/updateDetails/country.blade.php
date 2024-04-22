@extends('base')
@section('content')
<div class="  mt-5 rounded" style="margin-left: 20%; margin-right:20%;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Update Country Form</span></div>
  <hr>
  <form class="p-3" action="{{route('admin.updateCountry',['id'=>$country->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <label class="mb-2 mt-2" for="countryImage">Choose a Country Flag or Map.</label>
        <div class="input-group mb-4">
        <input type="file" class="form-control" name="countryImage" id="countryImage" required>
        </div>
    <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success">Save</button></div>
  </form>
  <div id="countryStatus" class="align-items-center">
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
   document.getElementById("countryStatus").style.display = "none";
   }, 3000);  
   var x=  document.getElementById('country').classList.add("menu-open");
    var xy=  document.getElementById('viewCountry').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);

</script>
@endsection