@extends('layouts.master-news')

@section('content')
@section('title', 'E-sport | History')

<section class="cart-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-uppercase">Billing details</h1>
                <h4 class="text-danger mb-0" style="padding-top: 0px !important;">Your billing details</h4>
            </div>
            <div class="col-md-12 overflow-scroll"> 
           
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="product">Product</th>
                            <th>Date</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th class="total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    @foreach($order_details as $order_detail)
                        <tr>
                            <td>{{ $order_detail->product->nama }}</td>
                            <td class="name-detail"><img class="product-image" src="{{ asset('image/store/'.$order_detail->product->image) }}" alt="cart-product" style="width: 70px; height: 100px;"></td>
                            <td>{{ $order->tanggal }}</td>
                            <td>{{ $order_detail->jumlah }}</td>
                            <td>IDR {{ $order_detail->product->harga }}K</td>
                            <td>IDR {{ number_format($order_detail->jumlah_harga) }}K</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <a href="{{route('mainmenu')}}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
        </div>
    </div>
</section>

    

@endsection

