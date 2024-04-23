@extends('base')
@section('content')
<div class="  mt-3 mb-3" style="margin-left: 20%; margin-right:20%;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Description Form</span></div>
  <hr>
  <div id="descriptionStatus" class="align-items-center mt-1">
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
  <form class="p-3" method="post" action="{{route('admin.postdescription')}}" >
    @csrf
    <div class="form-group">
      <div class="row col-12">
        <div class="col-5 text-center">
          <label for="country " class="p-2">
            Country<span class="text-danger">*</span>
          </label>
        </div>
        <div class="col-7 ">
          <select class="form-select " id="country" name="country" required>
            <option class="text-center" selected>Select a Country</option>
            @foreach ($countrydetails as $country)
                <option value="{{$country->id}}" class="text-center text-success">{{$country->name}}</option>
            @endforeach
          </select>
          @error('country')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
      </div><br>

      <div class="row col-12">
        <div class="col-5 text-center">
          <label for="video_link " class="p-2">
            Video Link<span class="text-danger">*</span>
          </label>
        </div>
        <div class="col-7 ">
          <select class="form-select " id="video_link" name="video_link" required>
            <option class="text-center" selected>Select a Video Link</option>
            @foreach ($videolinkdetails as $video)
              <option value="{{$video->id}}" class="text-success">{{$video->name}} or {{$video->v_link}}   </option>                
            @endforeach
          </select>
          @error('video_link')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
      </div><br>

      <div class="row col-12">
        <div class="col-5 text-center">
          <label for="description" class="p-2">
            Description<span class="text-danger">*</span>
          </label>
        </div>
        <div class="col-7 ">
         <textarea name="description" id="description" rows="5" class="form-control" required></textarea>
         @error('description')
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
        <div class="abc col-7 ">
         <textarea name="subdescription" id="description" placeholder="(optional)" rows="5" class="form-control" ></textarea>
         @error('subdescription')
         <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      </div><br>    
      
    <div class="d-flex justify-content-center mt-3">
      <button type="submit" class="btn btn-success">Add Description </button>
    </div>
  </form>
 
</div>
<script>
  setTimeout(function () {
   document.getElementById("descriptionStatus").style.display = "none";
   }, 3000);  

   var x=  document.getElementById('description').classList.add("menu-open");
var xy=  document.getElementById('addDescription').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
console.log(x);
console.log(xy);
   
</script>

@endsection