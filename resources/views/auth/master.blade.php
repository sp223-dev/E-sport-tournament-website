<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7COpen+Sans:700,400%7CRaleway:400,800,900" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/dota/logo2.png')}}">
    <link href="{{asset('css/responsif.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    

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
    

        
        {{-- <div class="main-slider-section"> --}}
            @yield('content')
        </div>
    
        
    
    
        <script type="text/javascript" src="js/library/jquery.js"></script>
    <script type="text/javascript" src="js/library/jquery-ui.js"></script>
    <script type="text/javascript" src="js/library/bootstrap.js"></script>
    <script type="text/javascript" src="js/library/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/library/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/library/jcarousel.connected-carousels.js"></script>
    <script type="text/javascript" src="js/library/owl.carousel.js"></script>
    <script type="text/javascript" src="js/library/progressbar.js"></script>
    <script type="text/javascript" src="js/library/jquery.bracket.min.js"></script>
    <script type="text/javascript" src="js/library/chartist.js"></script>
    <script type="text/javascript" src="js/library/Chart.js"></script>
    <script type="text/javascript" src="js/library/fancySelect.js"></script>
    <script type="text/javascript" src="js/library/isotope.pkgd.js"></script>
    <script type="text/javascript" src="js/library/imagesloaded.pkgd.js"></script>
    
    <script type="text/javascript" src="js/jquery.team-coundown.js"></script>
    <script type="text/javascript" src="js/matches-slider.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/matches_broadcast_listing.js"></script>
    <script type="text/javascript" src="js/news-line.js"></script>
    <script type="text/javascript" src="js/match_galery.js"></script>
    <script type="text/javascript" src="js/main-club-gallery.js"></script>
    <script type="text/javascript" src="js/product-slider.js"></script>
    <script type="text/javascript" src="js/circle-bar.js"></script>
    <script type="text/javascript" src="js/standings.js"></script>
    <script type="text/javascript" src="js/shop-price-filter.js"></script>
    <script type="text/javascript" src="js/timeseries.js"></script>
    <script type="text/javascript" src="js/radar.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/diagram.js"></script>
    <script type="text/javascript" src="js/bi-polar-diagram.js"></script>
    <script type="text/javascript" src="js/label-placement-diagram.js"></script>
    <script type="text/javascript" src="js/donut-chart.js"></script>
    <script type="text/javascript" src="js/animate-donut.js"></script>
    <script type="text/javascript" src="js/advanced-smil.js"></script>
    <script type="text/javascript" src="js/svg-path.js"></script>
    <script type="text/javascript" src="js/pick-circle.js"></script>
    <script type="text/javascript" src="js/horizontal-bar.js"></script>
    <script type="text/javascript" src="js/gauge-chart.js"></script>
    <script type="text/javascript" src="js/stacked-bar.js"></script>
    
    <script type="text/javascript" src="js/library/chartist-plugin-legend.js"></script>
    <script type="text/javascript" src="js/library/chartist-plugin-threshold.js"></script>
    <script type="text/javascript" src="js/library/chartist-plugin-pointlabels.js"></script>
    
    <script type="text/javascript" src="js/treshold.js"></script>
    <script type="text/javascript" src="js/visible.js"></script>
    <script type="text/javascript" src="js/anchor.js"></script>
    <script type="text/javascript" src="js/landing_carousel.js"></script>
    <script type="text/javascript" src="js/landing_sport_standings.js"></script>
    <script type="text/javascript" src="js/twitterslider.js"></script>
    <script type="text/javascript" src="js/champions.js"></script>
    <script type="text/javascript" src="js/landing_mainnews_slider.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/video_slider.js"></script>
    <script type="text/javascript" src="js/footer_slides.js"></script>
    <script type="text/javascript" src="js/player_test.js"></script>
    
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

    @yield('addJavascript')

</body>

</html>