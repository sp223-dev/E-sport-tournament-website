@extends('backend.layout.main')

@section('content')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">UPDATE COACH</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('coach-home')}}" class="btn btn-sm btn-danger mt-2">
            Close
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('coach-update', ['id' => $coaches -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Team</label>         
          <select  class="form-control select-2" name="team_id" id="team_id">
          
            <option value="{{$coaches->team_id}}">{{$coaches->myteam->nama}}</option>


            @foreach($teams as $item)
            <option value="{{$item->id}}" name="team_id">{{$item->nama}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <div>
           @if(!empty($coaches->image))
             <img src="{{asset('image/player/'.$coaches->image)}}"alt=""  style="width:60px;height:70px;" class="img-thumbnail">
             @endif
             <input type="file" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" values="{{asset('image/player/'.$coaches->image)}}">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Coach Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="{{$coaches->nama}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nasionality</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="kebangsaan" value="{{$coaches->kebangsaan}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Position</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="posisi" value="{{$coaches->posisi}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age</label>

          <input type="text" class="form-control" id="exampleInputPassword1" name="umur" value="{{$coaches->umur}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Seasons</label>
          <textarea type="text" class="form-control" id="exampleInputPassword1" name="seasons" >{{$coaches->seasons}}</textarea>
        </div >
        <div class="form-group">
          <label for="exampleInputPassword1">About</label>

          <input type="text" class="form-control" id="exampleInputPassword1" name="about" value="{{$coaches->about}}">
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