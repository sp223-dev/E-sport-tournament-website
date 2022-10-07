@extends('layouts.master')

@section('content')
@section('title', 'cart')
  
 <!--CART WRAP BEGIN-->
    <section class="cart-wrap">
        <div class="container">
            <div class="row">
              @if(!empty($order))
                        <div class="col-md-12">
                            <h4>Your shopping Cart</h4>
                        </div>
                        <div class="col-md-12 overflow-scroll">
                            
                            <table class="cart-table">
                                <tr>
                                    <th></th>
                                    <th class="product">Product</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th class="total">Total</th>
                                </tr>
                                
                                @foreach ($order_details as $order_detail)
                                <tr class="cart_item">
                                    <form action="{{ url('cart-delete') }}/{{ $order_detail->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <td class="delete"><button type="submit"><a><i class="fa fa-close" aria-hidden="true"></i></a></button></td>
                                    </form>
                                    <td class="name"><img class="product-image" src="{{ asset('image/store/'.$order_detail->product->image) }}" alt="cart-product" style="width: 70px; height: 100px;">{{ $order_detail->product->nama }}</td>
                                    <td class="date">{{ $order->tanggal }}</td>
                                    <td class="cost">IDR {{ number_format($order_detail->product->harga) }}K</td>
                                    <td class="quantity"><input type="number" name="jumlah_order" value="{{ $order_detail->jumlah }}" readonly></td>
                                    <td class="total">IDR {{ number_format($order_detail->jumlah_harga) }}K</td>
                                </tr>
                        @endforeach
                                
                            </table>
                        </div>
                        {{-- <div class="col-md-4 col-sm-6">
                            <div class="coupon">
                                <input type="text">
                                <button><span>Apply coupon</span></button>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="update-wrap">
                                <button class="update" disabled="">update cart</button>
                            </div>
                        </div> --}}
                        <div class="col-md-8 col-sm-12">
                            <div class="cart-offer">
                                <h5>special offer for you</h5>
                                <div class="offer">
                                    <div class="store-badge new">new</div>
                                    <div class="title">official <span>apparel</span></div>
                                    <img src="images/dota/cart-offer.jpg" alt="cart-offer">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="cart-total">
                                <h5>Cart Totals</h5>
                                <div class="delivery-list">
                                    
                                    <label class="item">
                                        <input name="del-check" type="radio">
                                        <span class="name">Cash on delivery</span>	
                                        <span class="price">IDR {{ number_format($order->kode) }}K</span>
                                    </label>
                                    <div class="cart-total-info" style="margin-bottom: 40px;">
                                        <div class="title">Total</div>
                                        <div class="price" style="color: white">IDR {{ number_format($order->jumlah_harga+$order->kode) }}K</div>
                                    </div>
                                    <a href="{{ url('konfirmasi-checkout') }}" class="proceed" style="font-size: 16px;
                                    padding: 18px 28px 16px 28px; width: 100%;">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
        </div>
    </section>
    <!--CART WRAP END-->
 
@endsection