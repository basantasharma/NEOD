@extends('base')
@section('content')
<div class="p-3 mt-5" style="margin-left: 20%; margin-right:20%;">

  {{-- @dd($read) --}}
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Edit Welcome Page</span></div>
  <hr>
  <form class="p-3" method="post" action="{{route('admin.updateIndex')}}?id={{$pagedata->id}}" >
    @csrf
    <div class="row col-12">
        <div class="col-5 text-center">
          <label for="title" class="p-2">
            Change Title
          </label>
        </div>
        <div class="col-7">
         <input type="text" class="form-control" value="{{$pagedata->title}}" placeholder="" name="title" id="title" required >
         @error('title')
         <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      </div><br>  

      <div class="row col-12">
        <div class="col-5 text-center">
          <label for="description" class="p-2">
            Change Description
          </label>
        </div>
        <div class="col-7">
         <textarea name="description" id="description" rows="5" class="form-control" required>
@if($pagedata->description)
{{$pagedata->description}}
@endif

         </textarea>
         @error('description')
         <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      </div><br>  

    <div class="d-flex justify-content-center mt-3">
      <button type="submit" class="btn btn-success">Update</button>
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
   
var x=  document.getElementById('page').classList.add("menu-open");
    var xy=  document.getElementById('viewIndex').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);
</script>
@endsection