@extends('layouts.master-news')

@section('content')
@section('title', 'Store | Details Product')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--PRODUCT SINGLE BEGIN-->

<section class="product-single" style="padding-bottom: 50px;">
    <div class="container">
        @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert team-alert fade in" role="alert"> 
                {{Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button><a href="{{route('mainmenu')}}">Back to Home.</a>
            </div>
        </div>
        @endif
        <div class="row">
            {{-- <div class="col-md-12"><h4><span class="store-badge hot-new">{{ $product->category->name }}</span></h4></div> --}}
            <div class="col-md-7">
                <div class="product-slider">
                    <div class="connected-carousels">
                        <div class="navigation jcarousel-skin-default">
                            <div class="carousel carousel-navigation jcarousel-vertical">
                                <ul>
                                    <li>
                                        <img src="{{ url('image/store') }}/{{ $product->image }}" alt="product-thumb" style="
                                        width: 110px;
                                        height: 160px;">
                                    </li>
                                    <li>
                                        <img src="{{ url('image/store') }}/{{ $product->image }}" alt="product-thumb" style="
                                        width: 110px;
                                        height: 160px;">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="stage">
                            <div class="carousel carousel-stage">

                                <ul>
                                    <li class="stage-item">
                                        <span class="store-badge hot-new">{{ $product->category->name }}</span>
                                        <img src="{{ url('image/store') }}/{{ $product->image }}" alt="product-main-img" style="
                                        width: 545px;
                                        height: 790px;">
                                    </li>
                                </ul>
                                <a href="#" class="prev prev-stage"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
                                <a href="#" class="next next-stage"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="product-right-info">
                    {{-- <div class="rating-wrap">
                        <div class="rating four"></div>
                        <div class="quantity">( 2 reviews )</div>
                    </div> --}}
                    <div class="product-description">
                    <h4 class="h4-product">{{ $product->nama }}</h4>
                    <div class="price price-product">IDR {{ $product->harga}}K</div>
                    <div class="product-header" style="margin-bottom: 10px;">Description</div>
                    <p>{{ $product->deskripsi }}</p>
                    
                    
                    <form action="{{ url('store/product') }}/{{ $product->id }}" method="POST">
                        {{ csrf_field() }}
                    <div class="title">Quantity</div>
                    <div class="quantity-wrap">
                        <input type="number" placeholder="1" name="jumlah_order"
                                class="text-dark" style="color: black">
                                <button type="submit" class="btn small">Add to cart</button>
                    
                                {{-- <script>
                                    function myalert () {
                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Your work has been saved',
                                            showConfirmButton: false,
                                            timer: 1500
                                            })
                                        
                                    }
                                </script> --}}
                    </div>

                    </form>
                    <div class="details">
                        <ul>
                            <li><span>SKU: </span>300-200-503</li>
                            <li><span>Categories: </span>{{ $product->category->name }}, Fashion, Apparel</li>
                            <li>
                                <span>Tags: </span>
                                <a href="#">{{ $product->category->name }},</a>
                                <a href="#">{{ $product->nama }},</a>
                                <a href="#">official,</a>
                                <a href="#">apparel,</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="socials">
                        <li><a href="https://id-id.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/signup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.google.com/"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/?hl=id"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--FEATURED PRODUCTS BEGIN-->

<!--FEATURED PRODUCTS END-->

        {{-- <div class="tab-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="comments-wrap">
                            <h6>Reviews</h6>
                            <div class="comment-item">
                                <div class="avatar"><img src="images/common/author-avatar.jpg" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="date">
                                        <a href="#">25 Sep 2016</a> by <a href="#">Ian Finch</a>
                                        <a href="#" class="quote">#</a>
                                    </div>
                                    <div class="rating four"></div>
                                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="avatar"><img src="images/common/author-avatar.jpg" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="date">
                                        <a href="#">25 Sep 2016</a> by <a href="#">Ian Finch</a>
                                        <a href="#" class="quote">#</a>
                                    </div>
                                    <div class="rating two"></div>
                                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="avatar"><img src="images/common/author-avatar.jpg" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="date">
                                        <a href="#">25 Sep 2016</a> by <a href="#">Ian Finch</a>
                                        <a href="#" class="quote">#</a>
                                    </div>
                                    <div class="rating five"></div>
                                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                                </div>
                            </div>
                        </div>	
                    </div>
                    <div class="col-md-5">
                        <div class="leave-comment-wrap">
                            <h6>Add a review </h6>	
                            {{-- <form action method="POST">		
                            {{ csrf_field() }}						
                                <div class="row">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="parent" value="0">
                                    <div class="col-md-12">
                                        <div class="item">
                                            <label>
                                                <span>Your comment</span>
                                                <textarea name="comment"></textarea>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="comment-submit" type="submit">post a review</button>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>

<!--PRODUCT SINGLE END-->

@endsection