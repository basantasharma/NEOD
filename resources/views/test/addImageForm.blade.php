
  @extends('base')
@section('content')
<div class="border border-2 p-3 mt-5" style="margin-left: 28%; margin-right:28%;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Choose Image</span></div>
  <hr>
  <form class="p-3" method="post" action="{{route('admin.postImagePage',['id'=>$image->d_id])}}" enctype="multipart/form-data" >
    @csrf
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
</script>
@endsection