@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Create Player')
<div id="app">
  <div class="">
    <h1 class="font-weight-bolder text-center mb-3 mt-3">CREATE PLAYER</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('player-home')}}" class="btn btn-sm btn-danger mt-2">
            Close
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('player-store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" id="id" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Team</label>
          <select  class="form-control select-2" name="id_team" id="id_team">
            <option >Choose Team</option>
            @foreach($team as $item)
            <option value="{{$item->id}}" name="id_team" >{{$item->nama}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Nasionality</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="kebangsaan" required>
        </div>
        <div class="form-group">

          <label for="exampleInputPassword1">Position</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="posisi" required>

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="umur" required>
        </div>      
          <div class="form-group">
          <label for="exampleInputPassword1">Seasons</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="seasons" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Games</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="games" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Points</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="points" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">About</label>
          <textarea type="text" class="form-control" id="exampleInputPassword1" name="about" required></textarea>
        </div >

        <div class=" form-group float-right"> 
          <button type="submit" class="btn btn-primary">Add</button>
          <button type="reset" class="btn btn-warning text-white">Delete</button>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection