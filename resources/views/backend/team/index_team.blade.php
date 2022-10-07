@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Team')
<div id="app">
   <div class="container-fluid">
    <div class="row">
      <h1 class="py-3 font-weight-bold ml-2">TEAM TABLE</h1>
      <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">

    </div class="row">
      <div class=""></div>
      <div class="col bg-white">
      <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('team-insert')}}">
        <h6 class="text-white font-weight-bold">+ Add Team</h6>
      </a>
 

      <table class="table" id="myTable">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Country</th>
          <th scope="col">Founded</th>
          <th scope="col">President</th>
          <th scope="col">Coach</th>
          <th scope="col">Championship</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($teams as $team)
        <tr >
          <th scope="row">{{ $loop->index + 1}}</th>
          <td>
            @if(!empty($team->image))
            <img src="{{asset('image/teams/'.$team->image)}}"alt=""  style="width:60px;" class="img-thumbnail">
            @endif
          </td>
          <td>{{$team->nama}}</td>         
          <td>{{$team->country}}</td>         
          <td>{{$team->founded}}</td>         
          <td>{{$team->president}}</td>         
          <td>{{$team->head_coach}}</td>         
          <td>{{$team->championship}}</td>         
          <td>{{$team->date}}</td>         
          <td>{{$team->time}}</td>                    
          <td>
              <a type="button" class="btn btn-warning shadow-sm" href="{{ route('team-edit', ['id'=> $team->id] )}}" >Edit</a>
              <a href="{{route('team-destroy', ['id' => $team -> id])}}" class= "btn btn-danger shadow-sm">Delete</a>
          </td>

        @endforeach

      </tbody>
      </table>
{{-- 
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <h1 class="py-3 font-weight-bold ml-2">TEAM TABLE</h1>
        <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">

      </div>
        <div class="row">
        <div class="col bg-white">
          <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('team-insert')}}">
            <h6 class="text-white font-weight-bold">+ Tambah Team</h6>
          </a>
   
  
        <table class="table text-center" id="myTable">
        <thead class="table-dark">
          <tr class="">
            <th class="" scope="col">ID</th>
            <th scope="col">IMAGE</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
          <tr >
            <th scope="row">{{ $loop->index + 1}}</th>
            <td>
              @if(!empty($team->image))
              <img src="{{asset('image/teams/'.$team->image)}}"alt=""  style="width:60px;" class="img-thumbnail">
              @endif
            </td>
            <td>{{$team->nama}}</td>         
        
            <td class="text-center">
                <a type="button" class="btn btn-warning shadow-sm" href="{{ route('team-edit', ['id'=> $team->id] )}}" >Edit</a>
                <a href="{{route('team-destroy', ['id' => $team -> id])}}" class= "btn btn-danger shadow-sm">Hapus</a>
            </td>
  
          @endforeach --}}
  
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

  </section>

@endsection

