@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Product')
<div id="app" class="mb-3">
   <div class="container-fluid" >
    <div class="row">
      <h1 class="py-3 font-weight-bold ml-2">TOURNAMENT TABLE</h1>
      <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">
    </div>
    <div class="row ">
      <div class=""></div>
      <div class="col bg-white">
      <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('tournament-detail')}}">
        <h6 class="text-white font-weight-bold">+ Add Tournament</h6>
      </a>

      <table class="table text-center" id="myTable">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">TITLE</th>
          <th scope="col">IMAGE</th>
          <th scope="col">PRIZEPOOL</th>
          <th scope="col">SEATS</th>
          <th scope="col">DATE</th>
          <th scope="col">PLACE</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($tournaments as $tournament)
        <tr >
          <th scope="row">{{ $loop->index + 1}}</th>
          <td>{{$tournament->title}}</td>
          <td>
            @if(!empty($tournament->image))
            <img src="{{asset('image/tournament/'.$tournament->image)}}"alt=""  style="width:60px;" class="img-thumbnail">
            @endif
          </td> 
          <td>{{$tournament->prizepool}}</td>
          <td>{{$tournament->seats}}</td>
          <td>{{$tournament->date}}</td>
          <td >{{$tournament->place}}</td>      
          <td>
            <a type="button" class="btn btn-warning shadow-sm" href="{{ route('tournament-edit', ['id'=> $tournament->id] )}}" >Edit</a>
           <a href="{{route('tournament-destroy', ['id' => $tournament -> id])}}" class= "btn btn-danger shadow-sm">Delete</a>
          </td>

        @endforeach
      </tbody>
      </table>
      </div>
      </div>
    </div>
</div>


<script>
</script>
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