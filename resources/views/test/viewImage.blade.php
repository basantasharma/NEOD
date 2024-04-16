@extends('base')
@section('content')


<div class="mt-3 d-flex justify-content-center">
  <h4 class="mt-3">Images</h4>
</div>
<hr>
<div class="d-flex justify-content-end">
    <a href="{{route('admin.addIeltsImagePage')}}" class="me-4  text-decoration-none"><button class="btn btn-success ">Add IELTS photo</button></a>
    <a href="{{route('admin.addPteImagePage')}}" class="me-4  text-decoration-none"><button class="btn btn-success ">Add PTE photo</button></a>
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
<div class="mt-5 d-flex " style="margin-left: 2%; margin-right:2%;">
    <div class="ielts col-6 ">
      <h5 class="text-center">IELTS Certificate Photo</h5>
      @foreach($ieltsimg as $item)
      <div class="image">
        <div class="img1 d-flex justify-content-center">
            <img src="{{ asset('storage/' . $item->images) }}" alt="Ielts.img" style="height: 500px; width:400px;">
        </div>
    </div>
      <div class="name">
          <div class="d-flex justify-content-center mt-3">
            <a href="{{route('admin.deleteIeltsPhoto',['id'=> $item->id])}}"><button class="bg-danger">Delete</button></a>
          </div>
        </div>
        
        @endforeach
    </div>
    <hr>
    <div class="pte col-6">
      <h5 class="text-center">PTE Certificate Photo</h5>

      @foreach($pteimg as $items)
      <div class="image">
        <div class="img2 d-flex justify-content-center">
              <img src="{{ asset('storage/' . $items->images) }}" alt="Pte.img" style="height: 500px; width:400px;">
      </div>
    </div>
      <div class="name">
          <div class="d-flex justify-content-center mt-3">
            <a href="{{route('admin.deletePtePhoto',['id'=> $items->id])}}"><button class="bg-danger">Delete</button></a>
          </div>
        </div>
        
        
        @endforeach
    </div>

    </div>
    <hr>
    
    <div>
      <h6 class="text-center text-danger mb-5">First delete and add again to change photo.</h6>
    </div>


<script>
setTimeout(function(){
  document.getElementById("Status").style.display ="none";
},3000)  

</script>
@endsection