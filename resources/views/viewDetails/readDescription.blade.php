@extends('base')
@section('content')


<div class="mt-4 d-flex justify-content-center">
  <h4>Reading Descriptions</h4>
</div>

{{-- <a href="" class="me-4 d-flex justify-content-end text-decoration-none"><button class="btn btn-success ">Add Description</button></a> --}}

<div id="Status" class="align-items-center mt-2 mb-2" style="margin-left: 35%; margin-right:35%;">
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
<div class="mt-3" style="margin-left: 2%; margin-right:2%;">
    <table class="table table-bordered text-center table-hover">
        <thead class="border border-2 ">
          <tr >
            {{-- <th scope="col" class="text-warning">Descripiton ID</th> --}}
            <th scope="col" class="text-warning">Readinng Description</th>        
            <th scope="col" class="text-warning">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($details as $item)
            <tr>
            <td>{{$item->description}}</td>        
            <td>
                <a href="{{route('admin.editTestDescription',['id'=> $item->id])}}"><button class="bg-secondary">Edit</button></a>
                <a href="{{route('admin.deleteTestDescription',['id'=> $item->id])}}"><button class="bg-danger">Delete</button></a>
              </td>
        </tr>
           @endforeach
        </tbody>
      </table>
      <div class="col-12 mt-5">
        <h4 class="text-center mt-3">Add Image for this Reading Link</h4>
        <div class=" d-flex justify-content-end">
          <button class="btn btn-success me-4">Add IELTS Image</button>
          <button class="btn btn-success">Add PTE Image</button>
        </div>
        <div class="images">
          <div class="mt-5 d-flex " style="margin-left: 2%; margin-right:2%;">
            <div class="ielts col-6 ">
              <h5 class="text-center">IELTS Certificate Photo</h5>
              <div class="image">
                <div class="img1 d-flex justify-content-center">
                    <img src="" alt="Ielts.img" style="height: 500px; width:400px;">
                </div>
            </div>
              <div class="name">
                  <div class="d-flex justify-content-center mt-3">
                    <a href=""><button class="bg-danger">Delete</button></a>
                  </div>
                </div>
                
            </div>
            <hr>
            <div class="pte col-6">
              <h5 class="text-center">PTE Certificate Photo</h5>
        
             
              <div class="image">
                <div class="img2 d-flex justify-content-center">
                      <img src="" alt="Pte.img" style="height: 500px; width:400px;">
              </div>
            </div>
              <div class="name">
                  <div class="d-flex justify-content-center mt-3">
                    <a href="}"><button class="bg-danger">Delete</button></a>
                  </div>
                </div>  
        
            </div>
        
            </div>
            <hr>
            <div>
              <h6 class="text-center text-danger mb-5">First delete and add again to change photo.</h6>
            </div>
        </div>

      </div>
</div>
<style>
    .table{
        font-size: 13px;
    }
</style>
<script>
setTimeout(function(){
  document.getElementById("Status").style.display ="none";
},3000)  

</script>
@endsection