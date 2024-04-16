@extends('base')
@section('content')  
    <div class="border border-2 p-3 mt-5" style="margin-left: 29%; margin-right:29%;">
            <div class="d-flex justify-content-center mb-3 fw-bold fs-4">
                <span class="text-danger">Login Form</span>
            </div>
            <hr>
        <div>
            <form action="{{route('logging')}}" class="w-100 p-3" method="POST">
                     @csrf
                <label for="email" >Email</label><br>
                <input type="email" class="mt-3 mb-2 form-control w-100" placeholder="Enter email" id="email" name="email">
                  <div class="mt-2 mb-2">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror 
                </div>              
                <label for="password" >Password</label><br>
                <input type="password" class="mt-3 mb-2 form-control" name="password" placeholder="Enter a password" id="password">
                   <div class="mt-2 mb-2">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   </div>
                <div class="d-flex justify-content-center mt-5">            
                    <button type="submit" class="btn btn-primary">Login</button>  
                </div>
            </form>
        </div>
    </div>
    @endsection