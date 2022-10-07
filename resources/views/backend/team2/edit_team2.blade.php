@extends('backend.layout.main')

@section('content')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">Update teams</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('team-home')}}" class="btn btn-sm btn-danger mt-2">
            Tutup
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('team-update2', ['id' => $teams -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" id="editteam" name="id">

        <div class="form-group">
          <label for="exampleInputEmail1">gambar</label>
          <div>
           @if(!empty($teams->image))
             <img src="{{asset('image/teams/'.$teams->image)}}"alt=""  style="width:60px;height:70px;" class="img-thumbnail">
             @endif
             <input type="file" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" values="{{asset('image/teams/'.$teams->image)}}">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">nama</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="{{$teams->nama}}">
        </div>

        <div class=" form-group float-right">

          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-warning text-white" >Hapus</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  
</div>
@endsection