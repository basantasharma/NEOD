@extends('base')
@section('content')
<div class="border border-2 p-3 mt-5 rounded" style="margin-left: 30%; margin-right:30%;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Update Country Form</span></div>
  <hr>
  <form class="p-3" action="{{route('admin.updateCountry',['id'=>$country->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- <div class="form-group">
      <label for="name">Edit Country</label><br>
      <input type="text" class="form-control mt-2" name="country" id="name" value="{{ old('country') }}" placeholder="Write a country.">
      <div class="mt-1" id="validateMsg">
        @error('country')
          <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div><br> --}}
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

</script>
@endsection