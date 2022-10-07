@extends('backend.layout.main')

@section('content')
@section('title', 'E-sport Admin | Order Table')
<div id="app" class="mb-3">
   <div class="container-fluid" >
    <div class="row">
      <h1 class="py-3 font-weight-bold ml-2">ORDER TABLE</h1>
      <img src="{{asset('images/logo/logo-about.png') }}" alt="" style="height: 60px; margin: 3px 0px 0px 10px;">
    </div>
    <div class="row ">
      <div class=""></div>
      <div class="col bg-white">
      

      <table class="table text-center" id="myTable">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">Date</th>
          <th scope="col">Status</th>
          <th scope="col">Code</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($orders as $order)
        <tr >
          <th scope="row">{{ $loop->index + 1}}</th>
          <td>{{ $order->tanggal }}</td> 
          <td>@if($order->status == 1)
           
            <span class="badge bg-danger" style="background-color: #198754 !important;">Already Paid</span> 
            @else
            <span class="badge bg-danger">Adding to Cart & Unpaid</span>
            @endif</td>
          <td>{{ $order->kode }}</td>
          <td >IDR {{ number_format($order->jumlah_harga+$order->kode) }}K</td>      
          <td>
           <a href="" class= "btn btn-danger shadow-sm">Delete</a>
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