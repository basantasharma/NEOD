@extends('base')
@section('content')
<div class="mt-3 d-flex justify-content-center">
  <h4>All Reading</h4>
</div>

{{-- <a href="" class="me-4 d-flex justify-content-end text-decoration-none"><button class="btn btn-success ">Add Reading Link</button></a> --}}

@if(Session::has('success'))
<div id="abcd" class="form-control bg-success align-items-center" style="margin-left: 35%; margin-right:35%;">
 <p class="text-small text-center text-light align-items-center">{{session::get('success')}}</p>
</div>
 @endif
 @if (Session::has('fail'))
 <div class="form-control bg-success  align-items-center" id="abc" style="margin-left: 35%; margin-right:35%;">
   <p class="text-small text-center text-light align-items-center">{{Session::get('fail')}}</p>
 </div>
 @endif

<script>
 setTimeout(function () {
  document.getElementById("abcd").style.display = "none";
  }, 3000); 
  
  setTimeout(function () {
  document.getElementById("abc").style.display = "none";
  }, 3000);   

</script>
<div class="mt-3" style="margin-left: 2%; margin-right:2%;">
    <table class="table table-bordered text-center table-hover">
        <thead class="border border-2 ">
          <tr >
            <th class="text-warning" scope="col">id</th>
            {{-- <th scope="col" class="text-warning">Name</th> --}}
            <th scope="col" class="text-warning">Reading Description</th>
            <th scope="col" class="text-warning">Actions</th>
          </tr>
        </thead>
        <tbody>
            <tr>  
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href=""><button class="bg-danger">Delete</button></a>
                <a href=""><button class="bg-primary">Edit</button></a>
            </td>
        </tr>
            {{-- @endforeach --}}
        </tbody>
      </table>
</div>
<style>
    .table{
        font-size: 13px;
    }
</style>
@endsection