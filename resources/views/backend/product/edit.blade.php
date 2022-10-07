@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Edit Product')
<div id="app">
  <div class="container mt-4">

    <h1 class="font-weight-bolder text-center">EDIT PRODUCT</h1>

    <div class="row ">
      <div class="col-lg-2"></div>
      <div class="col-8">
      <form class="bg-white border p-5 " method="POST"  action="{{route('product-update', ['id' => $product -> id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" id="id" name="id">

        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" required>
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
        </div>

        
        <div class="form-group">
          <label for="exampleInputEmail1">Stock</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" required>
          </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea  type="text" class="form-control" id="exampleInputPassword1" name="deskripsi" required></textarea>
        </div>

        <div class=" form-group float-right"> 
          <button type="submit" class="btn btn-primary">Add</button>
          <a type="button" class="btn btn-secondary" href="{{route('product-table')}}">Cancel</a>
        </div>
     </form>
   
      </div>
    </div>
  </div>

  
</div>


@endsection