@extends('backend.layout.main')

@section('content')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">Update Player</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
      <form class="bg-white border p-5 " method="POST"  action="{{route('player-update', ['id' => $profile -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" id="editteam" name="id">

        <div class="form-group">
          <label for="exampleInputEmail1">gambar</label>
          <div>
           @if(!empty($profile->image))
             <img src="{{asset('image/player/'.$profile->image)}}"alt=""  style="width:60px;height:70px;" class="img-thumbnail">
             @endif
             <input type="file" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" values="{{asset('image/player/'.$profile->image)}}">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{$profile->name}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nasionality</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="nasionality" value="{{$profile->kebangsaan}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Position</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="posisi" value="{{$profile->posisi}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age</label>

          <input type="text" class="form-control" id="exampleInputPassword1" name="umur" value="{{$profile->umur}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">About</label>
          <textarea type="text" class="form-control" id="exampleInputPassword1" name="about" >{{$profile->about}}</textarea>
        </div >
        <div class=" form-group float-right">

          <button type="submit" class="btn btn-warning">Update</button>
          <a type="button" class="btn btn-secondary" href="{{route('profile-home')}}">Cancel</a>
        </div>
      </form>
      </div>
    </div>
  </div>

  
</div>
@endsection