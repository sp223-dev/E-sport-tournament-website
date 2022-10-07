@extends('layouts.master-news')

@section('content')
@section('title', 'E-sport | Store')

<!--STORE WRAP BEGIN-->

<div class="store-banner position-relative">
    <div class="store-banner-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">official <span>apparel</span></div>
                    <a href="{{ route('store') }}" class="btn">Shop Now</a>
                </div>	
            </div>
        </div>
    </div>
</div>

<div class="store-wrap" style="background-color: #161616;">
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="sidebar col-xs-6 col-sm-6 col-md-3 sidebar-offcanvas" id="sidebar">
                <div class="sidebar-menu-wrap">
                    <h6>Categories</h6>
                    <ul class="categories-list">
                        <li>
                            <a href="{{ route('store') }}"><span class="count">{{DB::table('tbl_products')->count()}}</span>All</a>
                        </li>
                        <li>
                            <a href="{{url('/category/esential')}}"><span class="count">{{DB::table('tbl_products')->where('category_id', 1)->count()}}</span>Essentials</a>
                        </li>
                        {{-- <li>
                            <a href="#"><span class="count">22</span>Competitions & Reviews</a>
                            <ul>
                                <li><a href="#"><span class="count">12</span>News</a></li>
                                <li><a href="#"><span class="count">10</span>Competitions & Reviews</a></li>
                                <li><a href="#"><span class="count">9</span>Interviews</a></li>
                                <li><a href="#"><span class="count">8</span>Highlights</a></li>
                                <li><a href="#"><span class="count">7</span>Other</a></li>	
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{url('/category/lifestyle')}}"><span class="count">{{DB::table('tbl_products')->where('category_id', 2)->count()}}</span>Lifestyle</a>
                        </li>
                        <li>
                            <a href="{{url('/category/performance')}}"><span class="count">{{DB::table('tbl_products')->where('category_id', 3)->count()}}</span>Performance</a>
                        </li>
                        <li>
                            <a href="{{url('/category/limited')}}"><span class="count">{{DB::table('tbl_products')->where('category_id', 4)->count()}}</span>Limited</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-search-wrap">
                    <h6>Search</h6>
                    <form action="{{route('find')}}" method="get">
                        <div class="wrap">
                            <input type="text" name="find" required value="{{request()->input('find')}}">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <div class="sidebar-tags-wrap">
                    <h6>Tags</h6>
                    <div class="tags">
                        <a href="">Official</a>
                        <a href="">Merch</a>
                        <a href="">Black style</a>
                        <a href="">White style</a>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">
                {{-- <p class="hidden-md hidden-lg">
                    <button type="button" class="btn sidebar-btn" data-toggle="offcanvas" title="Toggle sidebar">sidebar</button>
                </p> --}}
                <h6>All Categories</h6>
                <div class="row">

                    @foreach ($products as $product )

                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="{{ url ('store/product') }}/{{ $product->id }}">
                                    <span class="store-badge hot-new">{{ $product->category->name }}</span>
                                    <img src="{{ url('image/store') }}/{{ $product->image }}" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">{{ $product->nama}}</span>
                                    <span class="price">IDR {{ $product->harga}}K</span>	
                                    <div class="btn-wrap" style="
                                    float: left !important;">
                                        <a href="{{ url ('store/product') }}/{{ $product->id }}" class="btn small">VIEW PRODUCT</a>
                                        {{-- <a href="{{ url ('store/product') }}/{{ $product->id }}" class="btn small">Details</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{ $products->links('news.paginator') }}
                    {{-- <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge new">new</span>
                                    <img src="images/store/jacket-black-bmw.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Jacket Black BMW </span>
                                    <span class="price">IDR 950.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <img src="images/store/mouse-orange-bmw.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Mouse Orange BMW </span>
                                    <span class="price">IDR 350.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <img src="images/store/pants-orange-bmw.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Pants Orange BMW </span>
                                    <span class="price">IDR 400.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/headphone-white-orange-juice.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Headphone White Orange Juice</span>
                                    <span class="price">IDR 499.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/headphone-black-origin.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Headphone Black Origin</span>
                                    <span class="price">IDR 600.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/jacket-black-pro.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Jacket Black Pro </span>
                                    <span class="price">IDR. 899.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/tshirt-sport-orange-bmw.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Tshirt Sport Orange BMW </span>
                                    <span class="price">IDR 500.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="{{route('store')}}">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/jacket-orange-bmw.jpg" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">Jacket Orange BMW </span>
                                    <span class="price">IDR 599.000</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pagination-wrap">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</div>

<!--STORE WRAP END-->

@endsection
