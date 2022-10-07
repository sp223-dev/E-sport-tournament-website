@extends('myadmin.layout.main')

@section('content')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">Create Player</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
      <form class="bg-white border p-5 " method="POST"  action="{{route('player-store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">gambar</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Kebangsaan</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="kebangsaan" required>
        </div>
        <div class="form-group">

          <label for="exampleInputPassword1">posisi</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="posisi" required>

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">umur</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="umur" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">about</label>
          <textarea type="text" class="form-control" id="exampleInputPassword1" name="about" required></textarea>
        </div >
        <div class=" form-group float-right"> 
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a type="button" class="btn btn-secondary" href="{{route('player-home')}}">Batal</a>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection