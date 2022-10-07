@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Edit News')
<div id="app">
  <div class="container mt-4">
    <h1 class="font-weight-bolder text-center">EDIT NEWS</h1>
    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
      <form class="bg-white border p-5 " method="POST"  action="{{route('news-update', ['id' => $news -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value="{{$news->judul}}">
        </div>

        
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" >
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea  type="text" class="form-control" id="exampleInputPassword1" name="deskripsi" >{{$news->deskripsi}}</textarea>
        </div>

        <div class=" form-group float-right"> 
          <button type="submit" class="btn btn-warning">Update</button>
          <a type="button" class="btn btn-secondary" href="{{route('news-home')}}">Cancel</a>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>

@endsection