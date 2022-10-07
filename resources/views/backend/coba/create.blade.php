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
      <form class="bg-white border p-5 " method="POST"  action="{{route('admin-insert')}}" enctype="multipart/form-data">
        {{ csrf_field()}}
       
       <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" required>
        </div>

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" required>
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