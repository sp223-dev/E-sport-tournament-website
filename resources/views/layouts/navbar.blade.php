@section('addJavascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // var input = document.getElementById("myInput");
    // input.addEventListener("keypress", function() {
    // if (event.key === "Enter") {
    //     var url = "{{route('searchresult')}}";
    //     location.href = url;
    //     // document.getElementById("myBtn").click();
    //  }
    
    // });
</script>
@endsection



<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7 hidden-sm hidden-xs">
                <div class="top-contacts">
                    <ul class="socials">
                        <li><a href="https://id-id.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/signup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/signup"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li><a href="https://github.com/signup?ref_cta=Sign+up&ref_loc=header+logged+out&ref_page=%2F%3Corg-login%3E&source=header"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/?hl=id"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="contacts">
                        <li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i>+62 852 9193 2739</li>
                        <li class="skype"><a href="https://join.skype.com/invite/xTX2qheL3cz0" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i>team.esport</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="top-language">
                    <ul class="list">
                        <li class=""> 
                            <a href="#"><img src="{{asset('images/common/ind.png')}}" alt="selected language">IN</a>
                        </li>
                    </ul>
                </div>
                
                    
                    <div class="top-search">
                        <form id="formSearch" action="{{route('searchresult')}}">
                            <input type="text" name="search" placeholder="Search here" required>
                            <button id="myBtnn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>     
                        </form>
                    </div>
                    <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

    <!--MAIN MENU WRAP BEGIN-->
<div class="main-menu-wrap sticky-menu" style="z-index: 10;">
    <div class="container">
        <a href="index.html" class="custom-logo-link"><img src="{{asset('images/logo/logo-navbar-footer.png') }}" alt="logo" class="custom-logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#team-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar">
            <div class="collapse navbar-collapse" id="team-menu">
                <ul class="main-menu nav">
                    <li class="{{Request::routeIs('mainmenu') ? 'active' : ''}}">
                        <a href="{{ route('mainmenu') }}"><span>Home</span></a>
                    </li>
                    <li class="{{Request::routeIs('matches') ? 'active' : ''}}">
                        <a href="{{ route('matches') }}"><span>Championship</span></a>
                    </li>
                    <li class="{{Request::routeIs('team-participants') ? 'active' : ''}}">
                        <a href="{{ route('team-participants') }}"><span>Team</span></a>
                    </li>
                    <li class="{{Request::routeIs('all') ? 'active' : ''}}">
                        <a href="{{ route('all') }}"><span>News</span></a>
                    </li>
                    <li class="{{Request::routeIs('store') ? 'active' : ''}}">
                        <a href="{{ route('store') }}"><span>Store</span></a>
                    </li>
                    <li class="{{Request::routeIs('contact') ? 'active' : ''}}">
                        <a href="{{ route('contact') }}"><span>Contact</span></a>
                    </li>
                    <li class="{{Request::routeIs('about') ? 'active' : ''}}">
                        <a href="{{route('about')}}"><span>About</span></a>
                        {{-- <ul>
                            <li><a href="404.html"><span>404</span></a></li>
                            <li><a href="offline.html"><span>offline</span></a></li>
                            <li><a href="coming-soon.html"><span>comming soon</span></a></li>
                            <li><a href="search.html"><span>search</span></a></li>
                            <li><a href="donations.html"><span>donations</span></a></li>
                            <li><a href="trophies.html"><span>trophies</span></a></li>
                            <li><a href="about-club.html"><span>about club</span></a></li>
                            <li><a href="checkout.html"><span>checkout</span></a></li>
                        </ul> --}}
                    </li>
                    <li class=" hidden-li{{Request::routeIs('profile') ? 'active' : ''}}" style="display: none;">
                        <a href="{{ route('profile') }}"><span>My Profile<i class="fa fa-caret-down" aria-hidden="true" style="padding-left: 3px;"></i></span></a>
                    </li>
                    
                    <li class="cart full cart-kuy">
                        <a href="{{route('cart')}}">
                            <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        </a>
                        {{-- <div class="cart-drop">
                            <table class="ct">
                                <tr>
                                    <td class="delete"><a href="#"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                                    <td class="info">
                                        <img class="product-image" src="images/common/cart-product.jpg" alt="product-image">
                                        <em>Men's T-Shirt<br><em class="price">1 x £ 60</em></em>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="delete"><a href="#"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                                    <td class="info">
                                        <img class="product-image" src="images/common/cart-product.jpg" alt="product-image">
                                        <em>Men's T-Shirt<br><em class="price">1 x £ 60</em></em>
                                    </td>
                                </tr>
                            </table>
                            <div class="wrap">
                                <div class="total-text">Subtotal: </div>
                                <div class="total-digit">£ 120</div>
                            </div>
                            <div class="wrap btn-wrap">
                                <a href="{{route('cart')}}" class="btn view">View cart</a>
                                <a href="{{route('checkout')}}" class="btn check">checkout cart</a>
                            </div>
                        </div> --}}
                    </li>
                    {{-- <li><a href="{{route('profil')}}"><span><i class="fa fa-user" aria-hidden="true"></i></span></a></li> --}}
                
                    <li class="dropdown">
                        <a href="{{route('profile')}}" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user" aria-hidden="true"></i></span></a>
                            <ul class="dropdown-menu" style="min-width: 80px;">
                                <li class="">
                                    <a href="{{route('profile')}}" style="text-transform: none;"><span class="fa fa-cog"></span> Settings </a>
                                </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                    <li>

                                        @auth
                                    @if (Auth::user()->level == 'admin')
                                    <a href="{{route('dashboard')}}" type="submit">
                                         admin
                                    </a>
                                    
                                    @endif
                                    @endauth

                                    </li>

                                    <li class="">
                                        <a href="{{ url ('history')}}" style="text-transform: none;"> History </a>
                                    </li>
                                    
                                    

                                        
                                
                    </li>
                </ul>
            </div>       
        </nav>
    </div>
</div>
<!--MAIN MENU WRAP END-->