@extends('base')
@section('content')


<div class="mt-3 d-flex justify-content-center">
  <h4>Descriptions</h4>
</div>

<a href="{{route('admin.addTestDescription')}}" class="me-4 d-flex justify-content-end text-decoration-none"><button class="btn btn-success ">Add Description</button></a>

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
<div class="mt-3" style="margin-left: 2%; margin-right:2%;">
    <table class="table table-bordered text-center table-hover">
        <thead class="border border-2 ">
          <tr >
            <th scope="col" class="text-warning">Description</th>        
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