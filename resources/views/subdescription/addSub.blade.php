{{-- @extends('base')
@section('content')
<div class="border border-2 p-3 mt-5" style="margin-left: 30%; margin-right:30%;">
  <div class="d-flex justify-content-center mb-3 fw-bold fs-4"><span class="text-danger">Add Sub Description</span></div>
  <hr>
  <form class="p-3" method="post" action="{{route('admin.postSub',['id'=>$id])}}" >
    @csrf

      <div class="row col-12">
        <div class="col-5 text-center">
          <label for="description" class="p-2">
            Add Sub Description
          </label>
        </div>
        <div class="col-7 ">
         <textarea name="subdescription" id="description" rows="5" class="form-control" required></textarea>
         @error('subdescription')
         <span class="text-danger">{{$message}}</span>
         @enderror
        </div>
      </div><br>
    <div class="d-flex justify-content-center mt-3">
      <button type="submit" class="btn btn-success">Save</button>
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
   document.getElementById("countryStatus").style.display = "none";
   }, 3000);  
</script>
@endsection --}}