@extends('backend.layout.main')

@section('content')
<div id="app">
  <div class="container mt-4 mb-3 ">
    <h1 class="font-weight-bolder text-center">Add Team</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
        <div class="float-right mr-2">
          <a href="{{route('team-home')}}" class="btn btn-sm btn-danger mt-2">
            Tutup
          </a>
        </div>
      <form class="bg-white border p-5 " method="POST"  action="{{route('team-store2')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
   
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">country</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="country" required>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">founded</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="founded" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">ground</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ground" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">president</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="president" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">head coach</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="head_coach" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">championship</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="championship" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">date</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">time</label>
          <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="time" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">gambar</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" required>
        </div>

        <div class=" form-group "> 
          <button type="submit" class="btn btn-primary">Tambah</button>
          <button type="reset" class="btn btn-warning text-white" >Hapus</button>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection