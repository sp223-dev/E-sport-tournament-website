@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | User Table')
<div id="app">
   <div class="container-fluid" >
    <div class="row">
      <h1 class="py-3 font-weight-bold ml-2">USER TABLE</h1>
      <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">
    </div>
    <div class="row ">
    
      <div class="col-12 bg-white">
      {{-- <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('player-insert')}}"> --}}
        <h6 class="text-white font-weight-bold">+ Add User</h6>
      </a>
 

      <table class="table text-center"  id="myTable">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">Image</th>
          <th scope="col">Nickname</th>
          <th scope="col">Name</th>
          <th scope="col">Nationality</th>
          <th scope="col">Born</th>
          <th scope="col">Language</th>
          <th scope="col">Phone</th>
          <th scope="col">Hobby</th>
          <th scope="col">About</th>
          <th scope="col">E-mail</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($profile as $user)
        <tr >
          <th scope="row">{{ $loop->index + 1}}</th>
          <td>
            @if(!empty($user->image))
            <img src="{{asset('image/profile/'.$user->image)}}"alt=""  style="width:60px;" class="img-thumbnail">
            @endif
          </td>
          <td>{{$user->name}}</td>
          <td>{{$user->fullname}}</td>
          <td>{{$user->nasionality}}</td>
          <td>{{$user->born}}</td>
          <td>{{$user->language}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->hobi}}</td>
          <td>{{$user->about}}</td>
          <td>{{$user->email}}</td>
          
          <td>
            {{-- <a type="button" class="btn btn-warning shadow-sm" href="{{ route('profile-edit', ['id'=> $user->id] )}}" >Edit</a> --}}
           <a href="{{ route('profile-destroy', ['id'=> $user->id] )}}" class= "btn btn-danger shadow-sm">Delete</a>
          </td>

        @endforeach

      </tbody>
      </table>
      </div>
      </div>
    </div>
</div>
   <!-- //modal -->
   <script src="https://code.jquery.com/jquery-3.0.0.slim.js" integrity="sha256-Gp6hp0H+A7axg1tErCucWeOc38irtkVWpUbBZSj8KCg=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('adminlte/plugins/js/dataTables.min.js ')}}"></script>
<script >
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection