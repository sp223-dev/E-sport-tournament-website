@extends('category.master')
@section('content')
@section('title', 'E-sport | Lifestyle Collection')


<div class="store-banner position-relative banner-hidden" style="height: 350px;
background: url(../images/store/LIFESTYLE-COLLECTION.webp) 70% 70% / cover no-repeat !important;">
    <div class="store-banner-info">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-12">
                    <div class="title">official <span>apparel</span></div>
                    <a href="store.html" class="btn">Details</a>
                </div>	 --}}
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
                {{-- <div class="sidebar-search-wrap">
                    <h6>Search</h6>
                    <form action="/search" method="get">
                        <div class="wrap">
                            <input type="text" name="search-news" required>
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div> --}}
                <div class="sidebar-tags-wrap">
                    <h6>Tags</h6>
                    <div class="tags">
                        <a href="">Official</a>
                        <a href="">Merch</a>
                        <a href="">Black style</a>
                        <a href="">White style</a>
                    </div>
                </div>
                {{-- <div class="filter-wrap">
                    <h6>Filters</h6>
                    <div class="filter-slider">
                        <div class="top">
                            <label for="amount">Price</label>
                            <input type="text" id="amount" readonly="" name="amount">
                        </div>
                        <div class="ui-slider">
                        </div>
                    </div>
                    <div class="filter-items-wrap">
                        <div class="filter-title">Sport</div>
                        <div class="filter-item">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test1">
                                    <label for="test1">Lifestyle</label>
                                </li>
                                <li>
                                    <input checked="" type="checkbox" class="filter-check" id="test2">
                                    <label for="test2">Running</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test3">
                                    <label for="test3">Football</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test4">
                                    <label for="test4">Basketball</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test5">
                                    <label for="test5">Gym &amp; Training</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test6">
                                    <label for="test6">Skateboarding</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test7">
                                    <label for="test7">Tennis</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test8">
                                    <label for="test8">Golf</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test9">
                                    <label for="test9">American Football</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test10">
                                    <label for="test10">Athletics</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test11">
                                    <label for="test11">Surf &amp; Swimming</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-title">Brand</div>	
                        <div class="filter-item">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test12">
                                    <label for="test12">Adidas</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test13">
                                    <label for="test13">Hueabas</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test14">
                                    <label for="test14">Other</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-title">Fit</div>	
                        <div class="filter-item">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test15">
                                    <label for="test15">Slim</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test16">
                                    <label for="test16">Tight</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test17">
                                    <label for="test17">Loose</label>
                                </li>
                            </ul>
                        </div>
                       
                    	
                    </div>
                </div> --}}

            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">
                {{-- <p class="hidden-md hidden-lg">
                    <button type="button" class="btn sidebar-btn" data-toggle="offcanvas" title="Toggle sidebar">sidebar</button>
                </p> --}}
                <h6 id="lifestyle">LIFESTYLE</h6>
                    <div class="row">
                        <div>
                            @foreach ($products as $product )
                                @if ($product->category->name == 'Lifestyle')

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
                                @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection