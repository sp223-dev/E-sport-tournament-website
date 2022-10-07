@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Product')
<div id="app" class="mb-3">
   <div class="container-fluid" >
    <div class="row">
      <h1 class="py-3 font-weight-bold ml-2">PRODUCT TABLE</h1>
      <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">
    </div>
    <div class="row ">
      <div class=""></div>
      <div class="col bg-white">
      <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('product-detail')}}">
        <h6 class="text-white font-weight-bold">+ Add Product</h6>
      </a>

      <table class="table text-center" id="myTable">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Stock</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($products as $product)
        <tr >
          <th scope="row">{{ $loop->index + 1}}</th>
          <td>
            @if(!empty($product->image))
            <img src="{{asset('image/store/'.$product->image)}}"alt=""  style="width:60px;" class="img-thumbnail">
            @endif
          </td> 
          <td>{{$product->nama}}</td>
          <td>{{$product->category->name}}</td>
          <td>{{$product->stok}}</td>
          <td>{{$product->harga}}</td>
          <td ><p style="overflow: hidden;">{{$product->deskripsi}}</p></td>      
          <td>
            <a type="button" class="btn btn-warning shadow-sm" href="{{ route('product-edit', ['id'=> $product->id] )}}" >Edit</a>
           <a href="{{route('product-destroy', ['id' => $product -> id])}}" class= "btn btn-danger shadow-sm">Delete</a>
          </td>

        @endforeach
      </tbody>
      </table>
      </div>
      </div>
    </div>
</div>


<script>
</script>
   <!-- //modal -->
   <script src="https://code.jquery.com/jquery-3.0.0.slim.js" integrity="sha256-Gp6hp0H+A7axg1tErCucWeOc38irtkVWpUbBZSj8KCg=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('adminlte/plugins/js/dataTables.min.js ')}}"></script>
<script >
  $(document).ready( function () {
    $('#myTable').DataTable();
} );

    
</script>

@endsection