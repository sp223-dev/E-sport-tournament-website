@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Match')
<div id="app">
   <div class="container-fluid" >
    <div class="row">
      <h1 class="py-3 font-weight-bold ml-2">MATCH TEAM</h1>
      <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">
    </div>
    <div class="row ">
      <div class=""></div>
      <div class="col bg-white">
      <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('admin-create')}}">
        <h6 class="text-white font-weight-bold">+ Add Match1</h6>
      </a>


      <table class="table text-center" id="myTable">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">image</th>
          <th scope="col">nama</th>
          {{-- <th scope="col">Score 1</th>
          <th scope="col">Score 2</th> --}}
          {{-- <th scope="col">Status</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Arena</th>
          <th scope="col">Weather</th>
          <th scope="col">Detail</th>
          <th scope="col">Action</th> --}}
        </tr>
      </thead>
      <tbody>
      @foreach($match as $mat)
  
        <tr >
          <td scope="row">{{ $loop->index + 1}}</td>
                      <td>
            @if(!empty($mat->image))
            <img src="{{asset('image/coba/'.$mat->image)}}"alt=""  style="width:60px;" class="img-thumbnail">
            @endif
          </td> 
          <td>{{$mat->nama}}</td> 
          {{-- <td>{{$match->score2}}</td> 
          <td>{{$match->status}}</td> 
          <td>{{$match->tanggal}}</td> 
          <td>{{$match->waktu}}</td> 
          <td>{{$match->weather}}</td> 
          <td>{{$match->detail}}</td>  --}}
          <td>
              <a type="button" class="btn btn-warning shadow-sm" href="{{ route('match-edit', ['id'=> $match->id] )}}" >Edit</a>
              <a href="{{route('match-destroy', ['id' => $match -> id])}}" class= "btn btn-danger shadow-sm">Delete</a>
              <a href="{{route('insert1', ['id' => $match -> id])}}" class= "btn btn-success shadow-sm">match1</a>
              <a href="{{route('insert2', ['id' => $match -> id])}}" class= "btn btn-success shadow-sm">match2</a>
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