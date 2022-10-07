@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Edit Categories')
<div id="app">
  <div class="container mt-4">

    <h1 class="font-weight-bolder text-center">EDIT CATEGORY</h1>

    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
      <form class="bg-white border p-5 " method="POST"  action="{{route('category-update', ['id' => $category -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" id="id" name="id">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
        </div>

        <div class=" form-group float-right"> 
          <button type="submit" class="btn btn-primary">Add</button>
          <a type="button" class="btn btn-secondary" href="{{route('category-table')}}">Cancel</a>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection