@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Edit Player')
<div id="app">
  <div class="container">
    <h1 class="font-weight-bolder text-center">UPDATE PLAYER</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('player-home')}}" class="btn btn-sm btn-danger mt-2">
            Close
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('player-update', ['id' => $players -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Team</label>         
          <select  class="form-control select-2" name="id_team" id="id_team">
          
            <option value="{{$players->id_team}}">{{$players->myteam->nama}}</option>


            @foreach($teams as $item)
            <option value="{{$item->id}}" name="id_team">{{$item->nama}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <div>
           @if(!empty($players->image))
             <img src="{{asset('image/player/'.$players->image)}}"alt=""  style="width:60px;height:70px;" class="img-thumbnail">
             @endif
             <input type="file" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" values="{{asset('image/player/'.$players->image)}}">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="{{$players->nama}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nasionality</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="kebangsaan" value="{{$players->kebangsaan}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Position</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="posisi" value="{{$players->posisi}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age</label>

          <input type="text" class="form-control" id="exampleInputPassword1" name="umur" value="{{$players->umur}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">seasons</label>

          <input type="text" class="form-control" id="exampleInputPassword1" name="seasons" value="{{$players->seasons}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">games</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="games" value="{{$players->games}}">

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Points</label>

          <input type="text" class="form-control" id="exampleInputPassword1" name="points" value="{{$players->points}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">About</label>
          <textarea type="text" class="form-control" id="exampleInputPassword1" name="about" >{{$players->about}}</textarea>
        </div >
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