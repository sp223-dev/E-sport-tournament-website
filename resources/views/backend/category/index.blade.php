@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Categories')
<div id="app">
   <div class="container-fluid" >
    <div class="row">
      <h1 class="py-3 font-weight-bold ml-2">CATEGORY TABLE</h1>
      <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">
    </div>
    <div class="row ">
      <div class=""></div>
      <div class="col bg-white">
      <a type="button" class="btn btn-dark m-3 shadow-sm" href="{{route('category-create')}}">
        <h6 class="text-white font-weight-bold">+ Add Category</h6>
      </a>

      <table class="table text-center" id="myTable">
      <thead class="table-dark"> 
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($categories as $category)
        <tr >
         <th scope="row">{{ $loop->index + 1}}</th>
          <td>{{$category->name}}</td>
     
          <td>
            <a type="button" class="btn btn-warning shadow-sm" href="{{ route('category-edit', ['id'=> $category->id] )}}" >Edit</a>
           <a href="{{route('category-destroy', ['id' => $category->id] )}}" class= "btn btn-danger shadow-sm">Delete</a>
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