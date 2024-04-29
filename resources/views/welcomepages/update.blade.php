@extends('base')
@section('content')
<div class="d-flex justify-content-center">
<div class="col-6 mt-3 ms-3">
    <p class="text-center fs-5 text-danger">Pages</p>
    <form action="{{route('admin.updatepages')}}?id={{$pagedata->id}}" method="POST" class="p-1" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title" class=" mt-2">Change Title</label>
            <input class="form-control mb-2 mt-2" type="text" value="{{$pagedata->title}}" name="title" id="title" required>
            <div class="mt-1" id="validateMsg">
                @error('title')
                  <span class="text-danger">{{$message}}</span>
              @enderror
              </div>
        </div>
        <div class="mb-4">
            <label for="img">Change Image</label>
            <input type="file" name="image" class="form-control mt-2 mb-2" required>
            <div class="mt-1" >
                @error('file')
                  <span class="text-danger">{{$message}}</span>
              @enderror
              </div>
        </div>
        <div>
<label for="description">Change Description</label>
{{-- <input type="text" class="mt-2 mb-2 form-control" name="description" id="description" required>       --}}
<textarea name="description" id="description" cols="30" class="form-control" rows="10" required>
@if($pagedata->description)
{{$pagedata->description}}
@endif
</textarea>
<div class="mt-1" >
    @error('description')
      <span class="text-danger">{{$message}}</span>
  @enderror
  </div>  
</div>

<div class="d-flex justify-content-center mt-4">
    <button class="btn btn-success" type="submit">Save</button>
</div>
    </form>
</div>
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
<script>
    setTimeout(function(){
      document.getElementById("Status").style.display ="none";
    },3000)  
    
    var x=  document.getElementById('page').classList.add("menu-open");
        var xy=  document.getElementById('addpage').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
        console.log(x);
        console.log(xy);
    </script>
@endsection