@extends('base')
@section('content')
<div class="p-3 mt-5 rounded" style="margin-left: 20%; margin-right:20%;">
  {{-- @dd($num) --}}
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Update Video Link</span></div>
  <hr>

  <form method="POST" action="{{route('admin.submitVideo')}}?id={{$description->d_id}}" class="p-3">
    @csrf
    {{-- <div class="form-group ">
      <label for="name">Change Name</label><br>
      <input type="text" class="form-control mt-2" name="name" id="name" value="" placeholder="Video link name">
      <div class="mt-1">
        @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div><br> --}}

    <div class="col-12">
      <label for="video " class="p-2">
        Change Video<span class="text-danger">*</span>
      </label>
    </div>
    <div class="col-12 ">
      <select class="form-select " id="video" name="video" required>
        <option class="text-center" selected @readonly(true)>Select a Video</option>
        @foreach($videoDes as $items)
            <option value="{{$items->id}}" class="text-center text-success">{{$items->name}}</option>
            @endforeach
      </select>
      @error('video')
      <span class="text-danger">{{$message}}</span>
      @enderror
<div class="d-flex justify-content-center mt-5">
  <button type="submit" class="btn btn-success">Save</button>
</div>
    </div>
    <div id="videoStatus" class="align-items-center mt-5">
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
  </div><br>
    

<script>
setTimeout(function(){
  document.getElementById("videoStatus").style.display ="none";
},3000)
var x=  document.getElementById('description').classList.add("menu-open");
var xy=  document.getElementById('viewDescription').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
console.log(x);
console.log(xy);
</script>
@endsection