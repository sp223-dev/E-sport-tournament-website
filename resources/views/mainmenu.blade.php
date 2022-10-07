@extends('layouts.master')

@section('content')
@section('title', ' E-sport | Main Menu')

@section('addJavascript')
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Oct 3, 2022 15:37:25").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      var hari =  document.getElementById('hari').innerHTML;
      var jam =  document.getElementById('jam').innerHTML;
      var menit =  document.getElementById('menit').innerHTML;
      var detik =  
  
      document.getElementById('detik').innerHTML = seconds;
      document.getElementById('menit').innerHTML= minutes;
      document.getElementById('jam').innerHTML= hours;
      document.getElementById('hari').innerHTML= days;


    //   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    //   + minutes + "m "  + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);


    $('.coach-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
    
@endsection
<div class="main-slider-section">
    <div class="main-slider">
        <div id="main-slider" class="carousel slide" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="main-slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="match-date">26 Sep 2022 / 9:30 PM / Salatiga Sport Center</div>
                                    <div class="team"> Evos Esport
                                        <div class="big-count">
                                            1:0
                                        </div>
                                        Alter Ego
                                    </div>                                    
                                    <div class="booking">
                                        <a href="{{route('matchpage')}}">
                                            Match Page
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="match-date">26 Sep 2022 / 9:30 PM / Salatiga Sport Center</div>
                                    <div class="team"> Geek Fam - RRQ Hoshi
                                    </div>                                        
                                    <div id = "demo" class="counter" data-date="1534185200000">
                                        <ul>
                                            <li>
                                                <div class="digit" id="hari"></div>
                                                <div class="descr">Days</div>
                                            </li>
                                            <li>
                                                <div class="digit hours" id="jam"></div>
                                                <div class="descr">Hours</div>
                                            </li>
                                            <li>
                                                <div class="digit minutes" id="menit"></div>
                                                <div class="descr">Minutes</div>
                                            </li>
                                            <li>
                                                <div class="digit seconds" id="detik"></div>
                                                <div class="descr">Seconds</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="booking">
                                        <a href="{{ route('comingsoon') }}">
                                            Upcoming match
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="main-slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="match-date">26 Sep 2022 / 9:30 PM / Salatiga Sport Center</div>
                                    <div class="team"> Bigetron
                                        <div class="big-count">
                                            2:0
                                        </div>
                                        Aura Esport
                                    </div>                                                                          
                                    <div class="booking">
                                        <a href="{{ route('matchpage2') }}">
                                            Live Match
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
            <!-- Controls -->
                        <a class="nav-arrow left-arrow" href="#main-slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only"></span>
            </a>
            <a class="nav-arrow right-arrow" href="#main-slider" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only"></span>
            </a>

            <div class="event-nav">
                <div class="container">
                    <div class="row no-gutter carousel-indicators">

                        <div class="col-sm-4 active" data-slide-to="0" data-target="#main-slider">
                            <a href="#" class="nav-item">
                                <span class="championship">E-sport Pro Season 6 - Quarterfinal</span>
                                <span class="teams-wrap">
                                    <span class="team"><img src="images/logo/logo-evos.png" alt="team-logo"></span>
                                    <span class="score">
                                        <span>1:0</span>
                                    </span>

                                    <span class="team1">
                                        <span><img src="images/logo/logo-alterego.png" alt="team-logo"></span>
                                    </span>
                                </span>
                                <span class="game-result">(5-4) Full Game</span>
                            </a>
                        </div>

                        <div class="col-sm-4" data-slide-to="1" data-target="#main-slider">
                            <a href="#" class="nav-item">
                                <span class="championship">Geek esport  - rrq hoshi</span>
                                <span class="teams-wrap">

                                    <span class="team"><img src="images/logo/logo-geek.png" alt="team-logo"></span>
                                    <span class="score countdown" data-date="1534185200000">
                                        <span class="days"></span>
                                        <span class="hours"></span>
                                        <span class="minutes"></span>
                                        <span class="seconds"></span>
                                    </span>

                                    <span class="team1">
                                        <span><img src="images/logo/logo-rrq.png" alt="team-logo"></span>
                                    </span>

                                </span>
                                <span class="game-result">26 Sep 2022 / 9:30 PM / Salatiga Sport Center</span>
                            </a>
                        </div>
                        
                        <div class="col-sm-4" data-slide-to="2" data-target="#main-slider">
                            <a href="#" class="nav-item">
                                <span class="championship">E-sport Pro Season 6 - Quarterfinal</span>
                                <span class="teams-wrap">
                                    <span class="team"><img src="images/logo/logo-bigetron.png" alt="team-logo"></span>
                                    <span class="score">
                                        <span>VS</span>
                                    </span>

                                    <span class="team1">
                                        <span><img src="images/logo/logo-aura.png" alt="team-logo"></span>
                                    </span>
                                </span>
                                <span class="game-result">(5-4) Full Game</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

    <div class="main-news-list">
    <div class="owl-carousel owl-theme match-page-slider">
        <a href="" class="item">
            <img src="images/dota/news1.jpg" class="img-responsive" alt="">
            <span class="caption">
                <span class="date">20 sep 2022</span>
                <span class="name">Chelsea claims Premier League lead after</span>
            </span>
        </a>
        <a href="" class="item">
            <img src="images/dota/news2.jpg" class="img-responsive" alt="">
            <span class="caption">
                <span class="date">20 sep 2022</span>
                <span class="name">Chelsea claims Premier League lead after</span>
            </span>
        </a>
        <a href="" class="item">
            <img src="images/dota/news3.jpg" class="img-responsive" alt="">
            <span class="caption">
                <span class="date">20 sep 2022</span>
                <span class="name">Chelsea claims Premier League lead after</span>
            </span>
        </a>
    </div>
</div>

    <!--MAIN MACTH SHEDULE BEGIN-->

    <section class="main-match-shedule" style="background-color: #161616;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h6>Next match</h6>
                    
<div class="main-next-match bg-cover">
    <img src="images/dota/next-match-bg.jpg" class="next-match-background-img" alt="next-image"> 
    <div class="wrap">
        <div class="place" >Salatiga Sport Center</div>
        <div class="date" >28 Septemer 2022 / 8:30 PM</div>

        {{-- @foreach($teams as $team)
        <div class="place" >{{$team->ground}}</div>
        @endforeach --}}
        {{-- <div class="date" >28 septemer 2022 / 8:30 PM</div> --}}
        <div class="teams-wrap" >
                <a href="staff.html" class="team">
                    @foreach($upcoming as $next)
          
                    <span>{{$next->nama1}}</span>         
                    <span>
                        @if(!empty($next->gambar1))
                        <img src="{{asset('image/teams/'.$next->gambar1)}}" alt="">
                        @endif
                    </span>
                </a>
                <div class="vs">
                   vs
                </div>
                <a href="staff.html" class="team1">
                    <span>
                        @if(!empty($next->gambar2))
                        <img src="{{asset('image/teams/'.$next->gambar2)}}" alt="">
                        @endif
                    </span>
                    <span>{{$next->nama2}}</span>
                </a>
                @endforeach
        </div>
        <a class="booking">UPCOMING MATCH</a>
    </div>
</div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h6>Latest matches</h6>
                        
<div class="main-lates-matches">
 @foreach($matches as $match)
    <a class="item">

        <span class="championship">E-sport Pro Season 6 - Quarterfinal</span>
        <span class="teams-wrap">
                <span class="team">
                    <span>
                        @if(!empty($match->myteam->image))
                        <img src="{{asset('image/teams/'.$match->myteam->image)}}"alt="logo-team">
                        @endif
                    </span>
                    <span>{{$match->myteam->nama}}</span>
                </span>
                <span class="score">
                    <span>{{$match->score1}} : {{$match->score2}}</span>

                </span>
                <span class="team1">
                    <span>{{$match->myteam2->nama}}</span>
                    <span>
                        @if(!empty($match->myteam2->image))
                        <img src="{{asset('image/teams/'.$match->myteam2->image)}}"alt="logo-team">
                        @endif
                    </span>
                </span>
        </span>
        <span class="game-result">({{$match->score1}}-{{$match->score2}}) Full Game</span>
        @endforeach
    </a>
    {{-- <a class="item">
        <span class="championship">E-sport Pro Season 6 - quarterfinal</span>
        <span class="teams-wrap">
                <span class="team">
                    <span>
                        <img src="images/logo/logo-geek.png" alt="team-image">
                    </span>
                    <span>geek</span>
                </span>
                <span class="score">
                    <span>3:2</span>

                </span>
                <span class="team1">
                    <span>onic</span>
                    <span><img src="images/logo/logo-onic.png" alt="team-image"></span>
                </span>
                </span>
                <span class="game-result">(5-4) Full Game</span>
            </a>
            <a class="item">
                <span class="championship">E-sport Pro Season 6 - quarterfinal</span>
                <span class="teams-wrap">
                        <span class="team">
                            <span>
                                <img src="images/logo/logo-rebellion.png" alt="team-image">
                            </span>
                            <span>Rebellion</span>
                        </span>
                        <span class="score">
                            <span>3:2</span>

                        </span>
                        <span class="team1">
                            <span>RRQ HOSHI</span>
                            <span><img src="images/logo/logo-rrq.png" alt="team-image"></span>
                        </span>
                </span>
                <span class="game-result">(5-4) Full Game</span>
            </a>
            <a class="item">
                <span class="championship">E-sport Pro Season 6 - quarterfinal</span>
                <span class="teams-wrap">
                        <span class="team">
                            <span>
                                <img src="images/logo/logo-aura.png" alt="team-image">
                            </span>
                            <span>aura</span>
                        </span>
                        <span class="score">
                            <span>3:2</span>

                        </span>
                        <span class="team1">
                            <span>Bigetron</span>
                            <span><img src="images/logo/logo-bigetron.png" alt="team-image"></span>
                        </span>
                </span>
                <span class="game-result">(5-4) Full Game</span>
            </a>
            <a class="item">
                <span class="championship">E-sport Pro Season 6 - quarterfinal</span>
                <span class="teams-wrap">
                        <span class="team">
                            <span>
                                <img src="images/logo/logo-bigetron.png" alt="team-image">
                            </span>
                            <span>bigetron</span>
                        </span>
                        <span class="score">
                            <span>3:2</span>

                        </span>
                        <span class="team1">
                            <span>evos</span>
                            <span><img src="images/logo/logo-evos.png" alt="team-image"></span>
                        </span>
                </span>
                <span class="game-result">(5-4) Full Game</span>
            </a> --}}
        </div>
        </div>
    </div>
</div>
</section>

    <!--MAIN MACTH SHEDULE END-->

    <!--MAIN PLAYERS STAT BEGIN-->

    <section class="main-players-stat bg-cover" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="hockey-stats-h4">Players stats</h4>
                    

<div class="single-player-stats players_statistic_slider">
    <ul class="player-filters" role="tablist">        
        <li class="active">
            <a href="#goalkeepers" role="tab" data-toggle="tab">
                Kills
            </a>
        </li>
        <li>
            <a href="#defenders" role="tab" data-toggle="tab">
                Assists
            </a>
        </li>

    </ul>
    <div class="player-stat-slider tab-content">      
        <div id="slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner tab-content" role="listbox">
                <div class="item active tab-pane" id="goalkeepers">

                    <div class="wrap">
                        <div class="stat">
                            <div class="top-info with_number">
                                <div class="number">1</div>
                                <a class="name">
                                    Onic CW
                                </a>
                            </div>
                            <div class="position">
                                Goldlaner
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">played</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-1" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">saves</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-2" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">missing</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-3" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <a href="{{ route('player') }}" title="player-image">
                                <img src="images/team-player/bigetron/player-stats.png" alt="player-image">
                            </a>
                        </div>	
                    </div>
                </div>
                <div class="item tab-pane" id="defenders">
                    <div class="wrap">
                        <div class="stat">
                            <div class="top-info with_number">
                                <div class="number">1</div>
                                <a href="player.html" class="name">
                                    RRQ VYN
                                </a>
                            </div>
                            <div class="top-info">
                                <a href="player-second-page.html" class="name">
                                </a>
                            </div>
                            <div class="position">
                                Midlane
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">played</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-4" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">saves</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-5" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">missing</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-6" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <a href="player-second-page.html" title="player-image">
                                <img src="images/team-player/evos/player-stats.png" alt="player-image">
                            </a>
                        </div>	
                    </div>
                </div>


                <div class="arrow-wrap">
                    <!-- Controls -->
                    <a class="nav-arrow left-arrow" href="#slider" role="button" data-slide="prev">
                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="nav-arrow right-arrow" href="#slider" role="button" data-slide="next">
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>  
            </div>
        </div>
    </div>
</div>
                </div>
                <div class="col-md-5">
                    <h4 class = "hockey-stats-h4">Best players</h4>
                    <div class="team-best-player">
    <div class="">
        <ul class="player-filters" role="tablist">
            <li class="active">
                <a href="#goals" role="tab" data-toggle="tab">Top 5 Kills</a>
            </li>
            <li>
                <a href="#assist" role="tab" data-toggle="tab">Top 5 Assists</a>
            </li>
        </ul>    
    </div>
    <div class="tab-content">
        <div class="best-players-list tab-pane active" id="goals">
            <a class="item">
                <span class="number">1</span>
                <span>Onic CW</span>
                <span class="achievement">94</span>
            </a>
            <a class="item">
                <span class="number">2</span>
                <span>Aura Kabuki</span>
                <span class="achievement">88</span>
            </a>
            <a class="item">
                <span class="number">3</span>
                <span>Aura High</span>
                <span class="achievement">85</span>
            </a>
            <a class="item">
                <span class="number">4</span>
                <span>Bigetron Maxxx</span>
                <span class="achievement">85</span>
            </a>
            <a class="item">
                <span class="number">5</span>
                <span>RRQ Albert</span>
                <span class="achievement">83</span>
            </a> 
        </div>
        <div class="best-players-list tab-pane" id="assist">
            <a class="item">
                <span class="number">1</span>
                <span>RRQ VYN</span>
                <span class="achievement">177</span>
            </a>
            <a class="item">
                <span class="number">2</span>
                <span>Bigetron Kyy</span>
                <span class="achievement">176</span>
            </a>
            <a class="item">
                <span class="number">3</span>
                <span>Aura Facehungger</span>
                <span class="achievement">174</span>
            </a>
            <a class="item">
                <span class="number">4</span>
                <span>Aura god1va</span>
                <span class="achievement">170</span>
            </a>
            <a class="item">
                <span class="number">9</span>
                <span>Alterego LeoMurphy</span>
                <span class="achievement">150</span>
            </a>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>

    <!--MAIN PLAYERS STAT END-->

    <!--SUCCESS STORY BEGIN-->
<section class="success-story sport">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h4>League of <br>elite teams</h4>
                <p>Since Season 1, the E-sport Pro has grown to feature 8 elite teams from around Indonesia and new exciting new stage of the tournament.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon"><img src="images/common/success-icon.png" alt="succes-icon"></div>
                        <div class="title">Team List</div>
                        <p>The era of the new season is here! with 8 elite teams to win the championship and the best of the best in Indonesia.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="icon"><img src="images/common/success-icon1.png" alt="succes-icon"></div>
                        <div class="title">Match Scedule</div>
                        <p>Every squad must be prepared their finest performance to take on this challenge and emerge victorious!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 position-relative">
                <blockquote class="coach-quote">
                    <p>Austin mustache man bun vice helvetica.</p>
                    <p class="name">Brandon Campbell / head coach</p>
                </blockquote>
                <img class="img-responsive" src="images/dota/coach.png" alt="coach-image">
            </div>
        </div>
    </div>	
</section>
<!--SUCCESS STORY END-->

    <!--SUCCESS STORY BEGIN-->
<section class="success-story-cybersport">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h4>League of <br>elite teams</h4>
                <p>Since Season 1, the E-sport Pro has grown to feature 8 elite teams from around Indonesia and new exciting new stage of the tournament.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon"><img src="images/common/success-icon.png" alt="succes-icon"></div>
                        <div class="title">Team List</div>
                        <p>The era of the new season is here! with 8 elite teams to win the championship and the best of the best in Indonesia.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="icon"><img src="images/common/success-icon1.png" alt="succes-icon"></div>
                        <div class="title">Match Scedule</div>
                        <p>Every squad must be prepared their finest performance to take on this challenge and emerge victorious!</p>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-5">
                <div class="wrap position-relative">
                    <div class="cybersport-slogan">
                        <div class="title">Welcome to</div>
                        <div class="big-title">Championship</div>
                        <p>Get a full list of all our legendary history of champions, players, teams, news. starting with the first season.<p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--SUCCESS STORY END-->

    <!--AWARD BOX BEGIN-->

    <div class="main-award-box">

        <!--TIMELINE BEGIN-->
        <div class="text-center" style="padding-top: 50px !important;
        padding-bottom: 50px !important;">
            <h3>success story <br><span style="color: #b44335;">began here</span></h3>
        </div>

<!--TIMELINE END-->

        
<div class="main-award-slider">
    <div id="main-award-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">  
            <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <div class="award">
                                    <div class="image"><img class="img-responsive" src="images/trophy/trophy-1.png" alt="cup-image"  style="width: 200px; height: 260px; object-fit:cover;"></div>
                                    <div class="name">E-sport Pro Season 6</div>
                                    <div class="year">2022</div>
                                </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="award">
                                    <div class="image"><img class="img-responsive" src="images/trophy/trophy-2.png" alt="cup-image" style="width: 200px; height: 260px; object-fit:cover;"></div>
                                    <div class="name">E-sport Pro Season 5</div>
                                    <div class="year">2021</div>
                                </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="award">
                                    <div class="image"><img class="img-responsive" src="images/trophy/trophy-3.png" alt="cup-image" style="width: 200px; height: 260px; object-fit:cover;"></div>
                                    <div class="name">E-sport Pro Season 4</div>
                                    <div class="year">2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <div class="award">
                                    <div class="image"><img class="img-responsive" src="images/trophy/trophy-4.png" alt="cup-image" style="width: auto; height: 260px;"></div>
                                    <div class="name">E-sport Pro Season 3</div>
                                    <div class="year">2019</div>
                                </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="award">
                                    <div class="image"><img class="img-responsive" src="images/trophy/trophy-5.png" alt="cup-image" style="width: 200px; height: 260px; object-fit:cover;"></div>
                                    <div class="name">E-sport Pro Season 2</div>
                                    <div class="year">2018</div>
                                </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="award">
                                    <div class="image"><img class="img-responsive" src="images/trophy/trophy-6.png" alt="cup-image" style="width: 200px; height: 260px; object-fit:cover;"></div>
                                    <div class="name">E-sport Pro Season 1</div>
                                    <div class="year">2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        <!-- Controls -->
        <a class="nav-arrow left-arrow" href="#main-award-slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="nav-arrow right-arrow" href="#main-award-slider" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    </div>

    <!--MAIN TEAM STORE BEGIN-->

    <section class="main-team-store" style="background-color: #161616;">

        <!--MAIN TEAM STORE CONTAINER BEGIN-->
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="images/logo/logo-about.png" style="height: 100px; "alt="logo">
            <h4>All Master Coach</h4>
        </div>	
        <div class="text-center">
            <ul class="tab-filters">
                <li class="active"><a data-toggle="tab" href="#new">COACH OF THE TEAM</a></li>
                {{-- <li><a data-toggle="tab" href="#hotdeals">hot deals</a></li> --}}
            </ul>
        </div>
        <div class="col-md-2 col-xs-3 text-right">
            
                <a id="show-all-link" href="{{route('store')}}" style="display: none">Show all</a>
            	
        </div>
    </div>
</div>
<!--MAIN TEAM STORE CONTAINER END-->

        <!--MAIN TEAM STORE LIST BEGIN-->
<div class="main-store-list">
    <div class="container">
        <div class="tab-content">
            <div id="new" class="tab-pane fade in active">
                <div class="row">
                    <div class="owl-carousel coach-carousel owl-theme">
                        @foreach ($coaches as $coach)
                        <div class="item">
                            <div class="staff-item item-kuy">
                                <a href="{{route('coach-detail', ['id'=> $coach->id])}}">
                                    <span class="info">
                                        <span class="name">Coach<br>{{$coach->nama}}</span>
                                        <span class="position">{{$coach->myteam->nama}}</span>
                                        <span class="number">14</span>
                                    </span>
                                    <img src="{{asset('image/coach/'.$coach->image)}}"  alt="person-slider" style="margin-left: 60px; background-color: #292929;">
                                </a>	
                            </div>
                        </div> 
                        @endforeach  
                    </div>
                    {{-- <div class="col-md-3 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge new">new</span>
                                    <img src="images/store/CLASSIC-TEE-2-PACK-BUNDLE_img.webp" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">CLASSIC TEE 2 BUNDLE</span>
                                    <span class="price">IDR 950</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <img src="images/store/ESSENTIAL-PULLOVER-(BLACK)_img.webp" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">ESSENTIAL PULLOVER (BLACK)</span>
                                    <span class="price">IDR 350</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <img src="images/store/SECRET-FACE-MASK_img.webp" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">SECRET FACE MASK</span>
                                    <span class="price">IDR 400</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div id="hotdeals" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/EVOLUTION-OVERSIZED-TEE_img.webp" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">EVOLUTION OVERSIZED TEE</span>
                                    <span class="price">IDR 499</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="col-md-3 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/ORIGIN-OVERSIZED-TEE_img.webp" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">ORIGIN OVERSIZED TEE</span>
                                    <span class="price">IDR 600</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/SECRET-FAN-JERSEY_img.webp" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">SECRET FAN JERSEY</span>
                                    <span class="price">IDR. 899</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="store-list-item">
                            <div>
                                <a href="product.html">
                                    <span class="store-badge hot">hot</span>
                                    <img src="images/store/SECRET-PRO-HOODIE-(WHITE)_img.webp" alt="product-image">
                                </a>
                                <div class="info">
                                    <span class="name">SECRET PRO HOODIE (WHITE)</span>
                                    <span class="price">IDR 500</span>	
                                    <div class="btn-wrap">
                                        <button class="btn small">add to cart</button>
                                        <button class="btn small">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN TEAM STORE LIST END-->

    <!--CALL TO ACTION BEGIN-->
<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-9 col-xs-6">
                <div class="text">Any question about us?</div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 text-right">
                <a href="{{route('contact')}}" class="join">Contact us</a>
            </div>
        </div>
    </div>
</div>
<!--CALL TO ACTION END-->



        <!--MAIN SPONSOR SLIDER BEGIN-->
<div class="main-sponsor-slider-background">
<div id="main-sponsor-slider" class="carousel slide main-sponsor-slider" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        {{-- <div class="item active">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <img class="sponsor-icons" src="images/dota/educastudio.png" alt="sponsor-image">	
                    </div>
                    <div class="col-xs-4 text-center">
                        <img class="sponsor-icons" src="images/dota/gamelab.png" alt="sponsor-image">	
                    </div>
                    <div class="col-xs-4 text-center">
                        <img  class="sponsor-icons dota-csgo-image" src="images/dota/nvidia.svg" alt="sponsor-image">	
                    </div>
                </div>
            </div>	
        </div> --}}
        <div class="item active">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 logo-col text-center" style="
                    margin-top: 65px;">
                        <img class="sponsor-icons" src="images/logo/logo-nvidia.png" alt="sponsor-image">	
                    </div>
                    <div class="col-xs-4 logo-col text-center logo-gamelab" style="
                    margin-top: 95px;">
                        <img  class="sponsor-icons" src="images/logo/logo-gamelab.png" alt="sponsor-image">	
                    </div>
                    <div class="col-xs-4 logo-col text-center" style="
                    margin-top: 85px;">
                        <img class="sponsor-icons dota-csgo-image" src="images/logo/logo-educa.png" alt="sponsor-image">
                    </div>
                </div>
            </div>	
        </div>
        {{-- <!-- Controls -->
        <a class="nav-arrow left-arrow" href="#main-sponsor-slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
        </a>
        <a class="nav-arrow right-arrow" href="#main-sponsor-slider" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
        </a> --}}
        
    </div>	
</div>
</div>
<!--MAIN SPONSOR SLIDER END-->


    </section>

    <!--MAIN TEAM STORE END-->

    {{-- <div class="main-breaking-news">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-12 ">
                <div class="break-title">
                    <span>Breaking news</span>
                </div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <div id="main-breaking-list" class="carousel slide main-breaking-list" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>	
                                <span class="news">Curabitur id tellus mi. In laoreet lacinia luctus.</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>	
                                <span class="news">Quisque ante lacus, fermentum et ante ultrices, accumsan blandit magna.</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>	
                                <span class="news">Sed tincidunt placerat viverra.</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>	
                                <span class="news">Acts of the week</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>	
                                <span class="news">Nullam feugiat tortor at luctus ultrices.</span>
                            </a>
                        </div>
                    </div>	
                    <div class="arrow-wrap">
                        <!-- Controls -->
                        <a class="nav-arrow left-arrow" href="#main-breaking-list" role="button" data-slide="prev">
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="nav-arrow right-arrow" href="#main-breaking-list" role="button" data-slide="next">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
