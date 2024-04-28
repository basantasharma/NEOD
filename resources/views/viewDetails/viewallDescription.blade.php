@extends('base')
@section('content')

<div class="mt-3" style="margin-left: 2%; margin-right:2%;">
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
    <table class="table table-bordered text-center table-hover">
        <thead class="border border-2 ">
          <tr >
            {{-- <th scope="col" class="text-warning" >sn</th> --}}
            <th scope="col" class="text-warning" >Country</th>
            <th scope="col" class="text-warning">Description</th>        
            <th scope="col" class="text-warning">Video Link Name</th>        
            <th scope="col" class="text-warning">Sub Description</th>
            <th scope="col" class="text-warning">Reading lists</th>        
            <th scope="col" class="text-warning">Action</th>
          </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($allDetails as $item)  
            <td>{{$item->country->name}}</td>
            <td>{{$item->description}}</td>   
            <td>{{$item->video->name}}</td>   
            <td>{{$item->sub_description}}</td>    
            <td class="p-3">
              <a href="{{route('admin.addTestDescription')}}?id={{ $item->d_id }}"><button class="bg-success">Add</button></a>
              <a href="{{route('admin.viewAllDescription')}}?id={{ $item->d_id }}"><button class="bg-primary">View</button></a>
              <a href="{{route('admin.viewImagePage')}}?id={{ $item->d_id }}"><button style="background-color: rgb(225, 48, 154);">Image</button></a>
            </td>    
                
            <td >
                <a href="{{route('admin.editDescription')}}?id={{ $item->d_id }}"><button class="bg-secondary">Edit</button></a>
                <a href="{{route('admin.deleteDetails',['d_id'=> $item->d_id])}}"><button class="bg-danger">Delete</button></a>
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

var x=  document.getElementById('description').classList.add("menu-open");
    var xy=  document.getElementById('viewDescription').classList.add("menu-open","bg-secondary" ,"bg-opacity-25","text-light","rounded");
    console.log(x);
    console.log(xy);
</script>
@endsection