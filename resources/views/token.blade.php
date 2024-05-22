@extends('base')
@section('content')
<div class="mt-5 mb-4 d-flex justify-content-center">
       {{-- <div>
        <small class=" p-1 "><button type="button" class=" me-4 bg-success">Generate New</button></small></a>
       </div> --}}
       <div>
        <small class="border p-2">{{$token->token}}</small>
       </div>

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
</div>

<script>
        var x=  document.getElementById('token').classList.add("active");
    // var xy=  document.getElementById('token').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    // console.log(x);
    // console.log(xy);

    setTimeout(function () {
  document.getElementById("stats").style.display = "none";
  }, 3000); 

</script>
@endsection