@extends('base')
@section('content')
<div class="d-flex justify-content-center">
    <div class="w-75 mt-2  border border-1 p-4">
        <form action="{{route('registering')}}" method="POST" class="mt-3 mb-3" id="register_form">
            @csrf
            <div class="form-group mb-3">
              <label for="full_name" class="mb-2">Full Name</label>
              <input type="text" class="form-control" name="name" id="full_name" aria-describedby="fullname" placeholder="Enter Full Name" >
            </div>
            <div class="form-group mb-3">
                <label for="email" class="mb-2">Email</label>
                <input type="email" class="form-control" name="email" id="full_name" placeholder="Enter Your Email"  >
                </div>
            <div class="form-group mb-3">
              <label for="password" class="mb-2">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
             
            </div>
            <div class="form-group mb-4 ">
                <label for="confirm" class="mb-2">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="password_confrmation'"   placeholder="Confirm Password" >
                </div>
           <div class="d-flex justify-content-center mt-4 mb-3"> <button type="submit" class="btn btn-primary  w-25">Register</button>
            </div>
           <div class="mt-3 mb-5">
            <div class="text-center"> <span >Already have an account?</span></div>
            <div  class="text-center"> <a href=" ">Login now.</a></div>
            </div>
        </form>
    </div>
</div>
@endsection