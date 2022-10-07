@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Edit Match')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">UPDATE MATCH</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('match-home')}}" class="btn btn-sm btn-danger mt-2">
            Close
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('match-update', ['id' => $matches->id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Team</label>         
          <select  class="form-control select-2" name="team_id" id="team_id">
          
            <option value="{{  $matches ->team_id}}">{{  $matches ->myteam->nama}}</option>


            @foreach($teams as $item)
            <option value="{{$item->id}}" name="team_id">{{$item->nama}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Score 1</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="score1" value="{{  $matches ->score1}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">team</label>         
          <select  class="form-control select-2" name="team_id2" id="team_id2">
          
            <option value="{{  $matches ->team_id2}}">{{  $matches ->myteam->nama}}</option>


            @foreach($teams as $item)
            <option value="{{$item->id}}" name="team_id">{{$item->nama}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Score 2</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="score2" value="{{  $matches ->score2}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Status</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="status" value="{{  $matches ->status}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Date </label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="tanggal" value="{{  $matches ->tanggal}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Time</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="waktu" value="{{  $matches ->waktu}}">
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

        <div class=" form-group float-right">

          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-warning text-white" >Delete</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  
</div>
@endsection