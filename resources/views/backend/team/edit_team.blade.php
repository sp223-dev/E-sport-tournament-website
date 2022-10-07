@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Edit Team')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">UPDATE TEAM</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('team-home')}}" class="btn btn-sm btn-danger mt-2">
            Close
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('team-update', ['id' => $teams -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" id="editteam" name="id">

        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <div>
           @if(!empty($teams->image))
             <img src="{{asset('image/teams/'.$teams->image)}}"alt=""  style="width:60px;height:70px;" class="img-thumbnail">
             @endif
             <input type="file" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" values="{{asset('image/teams/'.$teams->image)}}">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="{{$teams->nama}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Country</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="country" value="{{$teams->country}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Founded</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="founded" value="{{$teams->founded}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Ground</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="ground" value="{{$teams->ground}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">President</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="president" value="{{$teams->president}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Championship</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="championship" value="{{$teams->championship}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Head Coach</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="head_coach" value="{{$teams->head_coach}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Date</label>
          <input type="date" class="form-control" id="exampleInputPassword1" name="date" value="{{$teams->date}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Time</label>
          <input type="time" class="form-control" id="exampleInputPassword1" name="time" value="{{$teams->time}}">
        </div>

        <div class=" form-group">

          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-warning text-white" >Delete</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  
</div>
@endsection