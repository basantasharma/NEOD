@extends('base')
@section('content')
<div class="mt-5" style="margin-left: 20%; margin-right:20%;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Sub Description Form</span></div>
  <hr>
  <form class="p-3" method="post" action="{{route('admin.postdescription')}}" >
    @csrf      
      

        <div class="row col-12">
          <div class="col-5 text-center">
            <label for="country " class="p-2">
              Select a Country
            </label>
          </div>
          <div class="col-7 ">
            <select class="form-select " id="country" name="country" required>
              <option class="text-center" selected>Select a Country</option>
             
                  <option value="" class="text-center text-success"></option>
          
            </select>
            @error('country')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div><br>

        <div class="row col-12">
          <div class="col-5 text-center">
            <label for="country " class="p-2">
              Select a Description
            </label>
          </div>
          <div class="col-7 ">
            <select class="form-select " id="country" name="country" required>
              <option class="text-center" selected>Select a Country</option>
             
                  <option value="" class="text-center text-success"></option>
          
            </select>
            @error('country')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div><br>


        <div class="row col-12">
          <div class="col-5 text-center">
            <label for="description" class="p-2">
             Sub Description
            </label>
          </div>
        <div class="col-7 ">
         <textarea name="description" id="description" rows="5" class="form-control" required></textarea>
         @error('description')
         <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      </div><br>

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
      
    <div class="d-flex justify-content-center mt-3">
      <button type="submit" class="btn btn-success">Add Sub Description</button>
    </div>
  </form>
</div>
<script>
  setTimeout(function () {
   document.getElementById("countryStatus").style.display = "none";
   }, 3000);  
</script>
@endsection