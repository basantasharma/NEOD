
  @extends('base')
@section('content')
<div class="p-3 mt-5" style="margin-left: 20%; margin-right:20%;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Choose Image</span></div>
  <hr>
  <form class="p-3" method="post" action="{{route('admin.postImagePage',['id'=>$image->d_id])}}" enctype="multipart/form-data" >
    @csrf
    <label for="title">Image name</label>
    <input type="text" name="title" class="form-control mb-2 mt-3" placeholder="write appropriate name for image.">
    <label class="mb-3 mt-1" for="addImage">Choose a Image</label>
        <div class="input-group mb-3">
        <input type="file" class="form-control" name="addImage" id="addImage">
        </div>
        <select name="img_id" id="img_id" hidden>
          <option value="{{$image->d_id}}"></option>
        </select>

    <div class="d-flex justify-content-center mt-4">
      <button type="submit" class="btn btn-success">Save Image</button>
    </div>
  </form>

  <div>
    <p class="text-danger text-center">Please choose your name carefullly.</p>
  </div>
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
var x=  document.getElementById('description').classList.add("menu-open");
    var xy=  document.getElementById('viewDescription').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);


  setTimeout(function () {
   document.getElementById("descriptionStatus").style.display = "none";
   }, 3000);  
</script>
@endsection