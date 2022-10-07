@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Create Match')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">ADD MATCH</h1>
    <div class="row ">
      <div class="col-lg-1"></div>
      <div class="col-10">
        <div class="float-right mr-2">
          <a href="{{route('match-home')}}" class="btn btn-sm btn-danger mt-2">
            Close
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('match-insert')}}" enctype="multipart/form-data">
        {{ csrf_field()}}
        <input type="hidden" id="editmatch" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Team 1</label>
          <select  class="form-control select-2" name="team_id" id="team_id">
            <option >Choose team</option>
            @foreach($teams as $item)
            <option value="{{$item->id}}">{{$item->nama}}</option>
            @endforeach
          </select>
        </div>

        
        <div class="form-group">
          <label for="score1">Score 1</label>
          <input type="number" class="form-control" id="score1" aria-describedby="emailHelp" name="score1" >
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Team 2</label>
          <select  class="form-control select-2" name="team_id2" id="team_id2">
            <option >Pilih team</option>
            @foreach($teams2 as $ite)
            <option value="{{$ite->id}}">{{$ite->nama}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="score2">Score 2</label>
          <input type="number" class="form-control" id="score2" aria-describedby="emailHelp" name="score2">
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select  class="form-control select-2" name="status" id="status">
            <option selected>Choose status</option>
     
            <option value="lastgame">Last Game</option>
            <option value="upcoming">Upcoming</option>
            <option value="match-live">Match Live</option>
     
          </select>
        </div>

        <div class="form-group">
          <label for="point">Date</label>
          <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" name="tanggal" required>
        </div>
        <div class="form-group">
          <label for="point">Time</label>
          <input type="time" class="form-control" id="waktu" aria-describedby="emailHelp" name="waktu" required>
        </div>

        <div class="form-group">
          <label for="point">Arena</label>
          <input type="text" class="form-control" id="arena" aria-describedby="emailHelp" name="arena" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" required>
        </div>

        <div class="form-group">
          <label for="point">Weather</label>
          <input type="text" class="form-control" id="weather" aria-describedby="emailHelp" name="weather" required>
        </div>

        <div class="form-group">
          <label for="point">Detail</label>
          <input type="text" class="form-control" id="detail" aria-describedby="emailHelp" name="detail" required>
        </div>

        <div class=" form-group "> 
          <button type="submit" class="btn btn-primary">Add</button>
          <button type="reset" class="btn btn-warning text-white" >Delete</button>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection