@extends('base')
@section('content')

<div class="col-12 d-flex mt-5">
    <div class="col-12">
        <div class="d-flex justify-content-center">
            <h5>Language Proficency Test</h5>
        </div>
        <hr>
        <ul class="p-4 w-100 d-flex justify-content-evenly">  
            <a href="{{route('admin.viewAllDescription')}}"><li class="list1  text-center ps-4 pe-4">Description</li></a>
            <a href="{{route('admin.viewImagePage')}}"><li class="list1  text-center ps-4 pe-4">Images</li></a>          
        </ul>
    </div>
</div>

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