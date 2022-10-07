@extends('layouts.master')

@section('content')
@section('title', 'E-sport | History')

<section class="cart-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Your History</h4>
            </div>
            <div class="col-md-12 overflow-scroll">
            <table class="cart-table">
                <tr>
                   
                    <th >No</th>
                    <th>Date</th>
                    <th class="total">Total</th>
                    <th>Status</th>
                    <th>Code</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1; ?>
                @foreach($orders as $order)
                    <tr class="cart_item">
                        <td>{{ $no++ }}</td>
                        <td class="date">{{ $order->tanggal }}</td>
                        <td class="total">IDR {{ number_format($order->jumlah_harga+$order->kode) }}K</td>
                        <td class="status">@if($order->status == 1)
                            <span class="badge bg-danger" style="background-color: #198754 !important;">Already Paid</span>
                            @else
                            <span class="badge bg-danger">Unpaid</span>
                            @endif</td>
                            <td>{{ $order->kode }}</td>
                        <td class="aksi"> <a href="{{ url('history') }}/{{ $order->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a></td>
                    </tr>
                @endforeach
                
            </table>
            <a href="{{route('mainmenu')}}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</section>


@endsection