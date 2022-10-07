<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7COpen+Sans:700,400%7CRaleway:400,800,900" rel="stylesheet" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsif.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{asset('images/logo/logo-navbar-footer.png')}}">
</head>

<body>
	<div class="preloader-wrapper" id="preloader">
    <div class="motion-line dark-big"></div>
    <div class="motion-line yellow-big"></div>
    <div class="motion-line dark-small"></div>
    <div class="motion-line yellow-normal"></div>
    <div class="motion-line yellow-small1"></div>
    <div class="motion-line yellow-small2"></div>
</div>

    @include('layouts.navbar')
    
    {{-- <div class="main-slider-section"> --}}
        @yield('content')
    </div>

    @include('layouts.footer')
    


<script type="text/javascript" src="{{asset('js/library/jquery.js') }}"></script>
<script type="text/javascript" src="{{asset('js/library/jquery-ui.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/bootstrap.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/jquery.sticky.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/jquery.jcarousel.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/jcarousel.connected-carousels.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/owl.carousel.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/progressbar.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/jquery.bracket.min.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/chartist.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/Chart.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/fancySelect.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/isotope.pkgd.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/imagesloaded.pkgd.js ') }}"></script>

<script type="text/javascript" src="{{asset('js/jquery.team-coundown.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/matches-slider.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/header.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/matches_broadcast_listing.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/news-line.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/match_galery.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/main-club-gallery.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/product-slider.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/circle-bar.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/standings.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/shop-price-filter.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/timeseries.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/radar.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/slider.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/preloader.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/diagram.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/bi-polar-diagram.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/label-placement-diagram.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/donut-chart.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/animate-donut.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/advanced-smil.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/svg-path.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/pick-circle.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/horizontal-bar.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/gauge-chart.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/stacked-bar.js ') }}"></script>

<script type="text/javascript" src="{{asset('js/library/chartist-plugin-legend.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/chartist-plugin-threshold.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/library/chartist-plugin-pointlabels.js ') }}"></script>

<script type="text/javascript" src="{{asset('js/treshold.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/visible.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/anchor.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/landing_carousel.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/landing_sport_standings.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/twitterslider.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/champions.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/landing_mainnews_slider.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/carousel.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/video_slider.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/footer_slides.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/player_test.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/calender.js ') }}"></script>
<script type="text/javascript" src="{{asset('js/main.js ') }}"></script>
    
@yield('addJavascript')
	
</body>

</html>