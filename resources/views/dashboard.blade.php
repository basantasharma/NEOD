@extends('base')
@section('content')

<div class="col-12 d-flex mt-5">
    <div class="col-12">
        <div class="d-flex justify-content-center">
            <h5>View Details</h5>
        </div>
        <hr>
        <ul class="p-4 w-100 d-flex justify-content-evenly">  
            <a href="{{route('admin.viewCountry')}}"><li class="list1  text-center ps-4 pe-4">Country</li></a>
            <a href="{{route('admin.viewVideo')}}"> <li class="list1 ms-2 text-center ps-4 pe-4">Video Link</li></a>
            <a href="{{route('admin.viewRead')}}"> <li class="list1 ms-2 text-center ps-4 pe-4">Read Link</li></a>               
            <a href="{{route('admin.viewDetails')}}"><li class="list1 ms-2 text-center ps-4 pe-4">Descriptions</li></a>
        </ul>
    </div>
</div>
<hr>
<h6 class="text-danger text-center"> Add Country, Videolink and Reading link before adding description.</h6>
<style>
    a{
        text-decoration: none;
        color: aliceblue;
    }
    .list1{
        list-style: none;
        padding: 5px;
        border: 4px solid green;
        background-color: green;
        font-weight: bolder;       
        border-radius: 8px;
    

    }
</style>

@endsection