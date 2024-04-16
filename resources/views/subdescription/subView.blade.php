{{-- @extends('base')
@section('content')
<div class="mt-3">
    <div class="text-center">
    <h4>Description:{{$sub->description}}</h4>
    </div>
    <div class="mt-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Sub Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($sub as $items)
              <tr>
                <td>{{$items->description}}</td>
                <td>
                    <a href=""><button class="bg-secondary">Edit</button></a>
                    <a href=""><button class="bg-danger">Delete</button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
  @endsection --}}