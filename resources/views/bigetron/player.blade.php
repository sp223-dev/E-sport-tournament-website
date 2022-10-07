@extends('layouts.master')

@section('content')
@section('title', 'Player')

    <section class="club-wrap">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <h4>BIGETRON ESPORTS</h4>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                </div>
            </div>
        </div>
        <div class="club-top-info">
            <div class="organisation-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="club-logo  wpb_animate_when_almost_visible wpb_zoomInLeft zoomInLeft wpb_start_animation animated">
                    <img class="img-responsive" src="images/logo/logo-bigetron.png" alt="organisation logo" >                
                </div>
            </div>
            <div class="col-md-3">
                <div class="org-club-info">
                                        <div class="item country">
                        <img src="images/common/ind.png" alt="flag">
                        Indonesia                    </div>
                                        
                    <div class="item"><span>Founded:</span> 22 July 1927</div>
                    <div class="item"><span>Ground:</span> Stadio Olimpico</div>
                    <div class="item"><span>President:</span> James Pallotta</div>
                    <div class="item"><span>Head coach:</span> Luciano Spalletti</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="org-club-stat">
                    <div class="title">championship</div>
                    <div class="next">
                        <div class="avatar">
                            <a href="matches.html" title="Athleticos Bilbor – AC Ramau">
                                <img src="images/dota/logonew.png"  alt="oponent logo"> 
                            </a>
                        </div>
                        <div class="info">
                            <div class="name">Athleticos Bilbor</div>
                            <div class="date">18 July 2017 / 17:00 UTC</div>
                        </div>
                    </div>
                    <div class="title">team stats</div>
                    <div class="circle-item">
                        <div class="circle-bar" id="circle_3" data-percent="47"></div>
                        <div class="text">Possession </div>
                    </div>
                    <div class="circle-item">
                        <div class="circle-bar" id="circle_4" data-percent="87"></div>
                        <div class="text">Pass Accuracy </div>
                    </div>             
                </div>
            </div>
        </div>	
    </div>	
    </div>
        </div>
        <div class="club-staff-top container">
            <div class="row">
                <div class="col-md-12">
                    <h4>ALL ROASTER</h4>
                </div>
                
    <div class="staff-box">            
    <div class="col-md-4  col-sm-6 col-xs-12">

        <a href="{{ route('player') }}" class="item">

            <span class="info">
                <span class="name">Keevian Treapap</span>
                <span class="position">Goalkeeper</span>
                <span class="number">1</span>
            </span>
            <img src="images/dota/bigetron1.png" alt="player">
        </a>
    </div>                                         
    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="player.html" class="item">
            <span class="info">
                <span class="name">Pieeraluigi Goellaini</span>
                <span class="position">Goalkeeper</span>
                <span class="number">1</span>
            </span>
            <img src="images/dota/bigetron2.png" alt="player">
        </a>
    </div>
    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="player-second-page.html" class="item">
            <span class="info">
                <span class="name">Reemiaro</span>
                <span class="position">Goalkeeper</span>
                <span class="number">29</span>
            </span>
            <img src="images/dota/bigetron3.png" alt="player">
        </a>
    </div>   


    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="player.html" class="item">
            <span class="info">
                <span class="name">Woejcaiech Szeczaesny</span>
                <span class="position">Goalkeeper</span>
                <span class="number">1</span>
            </span>
            <img src="images/dota/bigetron4.png" alt="player">
        </a>
    </div>     
    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="player-second-page.html" class="item">
            <span class="info">
                <span class="name">Ireaiazoz</span>
                <span class="position">Goalkeeper</span>
                <span class="number">1</span>
            </span>
            <img src="images/dota/bigetron5.png" alt="player">
        </a>
    </div>       
</div>
    </section>

    <!--CLUB STAFF TOP BEGIN-->




@endsection