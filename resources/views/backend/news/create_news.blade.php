@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Create News')
<div id="app">
  <div class="container mt-4">

    <h1 class="font-weight-bolder text-center">CREATE NEWS</h1>

    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
      <form class="bg-white border p-5 " method="POST"  action="{{route('news-store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" id="editteam" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" required>
        </div>

        <select  class="form-control select-2" name="category_id" id="category_id">
          <option >Category</option>
          @foreach ($kategori as $k)
          <option value="{{$k->id}}">{{$k->name}}</option>
          @endforeach
        </select>

        
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" required>
        </div>

        {{-- <div class="form-group">
          <label for="exampleInputEmail1">Date</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Author</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="author" required>
        </div> --}}

        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea  type="text" class="form-control" id="exampleInputPassword1" name="deskripsi" required></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Date</label>
          <input  type="date" class="form-control" id="exampleInputPassword1" name="dates" required></input>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">author</label>
          <input  type="text" class="form-control" id="exampleInputPassword1" name="author" required></input>
        </div>

        <div class=" form-group float-right"> 
          <button type="submit" class="btn btn-primary">Add</button>
          <a type="button" class="btn btn-secondary" href="{{route('player-home')}}">Cancel</a>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection