@extends('layouts.master')

@section('content')
@section('title', 'E-sport | Championship')

<section class="club-wrap club-champ" style="background-color: #161616">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h4>E-sport Pro Season 6</h4>
                <div class="champ-date"><i class="fa fa-calendar" aria-hidden="true"></i>2 Sep 2022 - 2 Okt 2022</div>
            </div>
        </div>
    </div>

<!-- ESPORT CHAMPIONSHIP ABOUT TROPHEY BEGIN -->
<div id="about" class="esport-championship-about-trophey">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5 class="esport-landing-header">About Trophy</h5>
                <div class="trophey-wrap">
                    <span>
                        <img src="images/logo/The-International-Dota-2-Battle-Pass.png" alt="trophey">
                    </span>
                    <span>
                        <span class="name">E-sport Pro</span>
                        <span class="date">2022</span>
                    </span>
                </div>
            </div>
            <div class="col-md-7">
                <h5 class="esport-landing-header">About Event</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="wrap">
                            <span class="head">prize pool</span>
                            <span class="info">IDR 1.000.000</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrap">
                            <span class="head">seats in the arena</span>
                            <span class="info">9 850</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrap">
                            <span class="head">Date of event</span>
                            <span class="info">28-30 Oct</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrap">
                            <span class="head">Place of event</span>
                            <span class="info">Salatiga</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ESPORT CHAMPIONSHIP ABOUT TROPHEY END -->

 <!--MAIN MATCH SHEDULE BEGIN-->

 <section class="main-match-shedule amateurs-match-shedule">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"><h5>Next matches</h5></div>
            <div class="col-md-10 col-sm-9 col-xs-9">

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                
<ul class="tab-filters" role="tablist">
<li class="active"><a href="#all" role="tab" data-toggle="tab" aria-expanded="true">Latest</a></li>
<li><a href="#nationalcup" role="tab" data-toggle="tab" aria-expanded="true">Today</a></li>
<li><a href="#premierleague" role="tab" data-toggle="tab" aria-expanded="true">Tommorrow</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="all">
    <div class="amateurs-main-match">
        <div class="title">E-sport Pro Season 6 - Round 27</div>	
        <a href="matches.html" class="team">
            <span class="image"><img src="images/logo/logo-evos.png" alt="main-match"></span>
            <span class="info">
                <span class="name">EVOS ESPORT</span>
                <span class="city">Salatiga</span>
            </span>
        </a>
        <div class="score">
            <span>3:2</span>	
        </div>
        <a href="matches.html" class="team guest">
            <span class="info">
                <span class="name">ALTER EGO</span>
                <span class="city">Salatiga</span>
            </span>	
            <span class="image"><img src="images/logo/logo-alterego.png" alt="main-match"></span>
        </a>
        <div class="title">26 september / 8:45 PM</div>
    </div>
</div>
<div class="tab-pane" id="nationalcup">
    <div class="amateurs-main-match">
        <div class="title">E-sport Pro Season 6  - Round 28</div>	
        <a href="matches.html" class="team">
            <span class="image"><img src="images/logo/logo-geek.png" alt="main-match"></span>
            <span class="info">
                <span class="name">GEEK</span>
                <span class="city">Salatiga</span>
            </span>
        </a>
        <div class="score">
            <span>3:2</span>	
        </div>
        <a href="matches.html" class="team guest">
            <span class="info">
                <span class="name">RRQ HOSHI</span>
                <span class="city">Salatiga</span>
            </span>	
            <span class="image"><img src="images/logo/logo-rrq.png" alt="main-match"></span>
        </a>
        <div class="title">26 september / 8:45 PM</div>
    </div>
</div>
 <div class="tab-pane" id="premierleague">
    <div class="amateurs-main-match">
        <div class="title">E-sport Pro Season 6  - Round 29</div>	
        <a href="matches.html" class="team">
            <span class="image"><img src="images/logo/logo-bigetron.png" alt="main-match"></span>
            <span class="info">
                <span class="name">Bigetron</span>
                <span class="city">Salatiga</span>
            </span>
        </a>
        <div class="score">
            <span>2:2</span>	
        </div>
        <a href="matches.html" class="team guest">
            <span class="info">
                <span class="name">AURA Esport</span>
                <span class="city">Salatiga</span>
            </span>	
            <span class="image"><img src="images/logo/logo-aura.png" alt="main-match"></span>
        </a>
        <div class="title">26 september / 8:45 PM</div>
    </div>
</div>
</div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><h6>Latest matches</h6></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                    
                <div class="main-lates-matches">
                    <div class="item">
                        <span class="championship">E-sport Pro Season 6 - Quarterfinal</span>
                        <span class="teams-wrap">
                                <span class="team">
                                    <span>
                                        <img src="images/logo/logo-evos.png" alt="team-image">
                                    </span>
                                    <span>EVOS ESPORT</span>
                                </span>
                                <span class="score">
                                    <span>1:0</span>
                
                                </span>
                                <span class="team1">
                                    <span>ALTER EGO</span>
                                    <span><img src="images/logo/logo-alterego.png" alt="team-image"></span>
                                </span>
                        </span>
                        <span class="game-result">(5-4) Full Game</span>
                    </div>
                    <a href="" class="item">
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
                    <a href="" class="item">
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
                    <a href="" class="item">
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
                    <a href="" class="item">
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
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--MAIN MATCH SHEDULE END-->

@endsection