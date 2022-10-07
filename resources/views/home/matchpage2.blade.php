@extends('layouts.master')

@section('content')
@section('title', 'E-sport | Match Result')

<!--BREADCRUMBS BEGIN-->
<section class="image-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">E-sport</a>/</li>
                            <li>Championship</li>
                        </ul>
                        <h1>MATCH LIVE</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

<!--MATCH PAGE TOP BEGIN-->

<div class="match-page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="upcoming-match-info">
                    <div class="team">
                        <div class="avatar"><img src="images/logo/logo-geek.png" alt="match-list-team-img"></div>
                        <div class="text">
                            Geek Fam<span>Salatiga</span>
                            <div class="latest">
                                <div class="latest-title">Latest Results</div>
                                <span class="win">w</span>
                                <span class="win">w</span>
                                <span class="win">w</span>
                                <span class="win">w</span>
                                <span class="win">w</span>
                            </div>
                        </div> 
                    </div>
                    <div class="counter text-center">
                        <ul>
                            <li>
                                <div class="digit">2</div>
                            </li>
                            <li>
                                <div class="digit">0</div>
                            </li>
                        </ul>
                    </div>
                    <div class="team right">
                        <div class="text">
                            Bigetron Alpha<span>london</span>
                            <div class="latest">
                                <div class="latest-title">Latest Results</div>
                                <span class="win">w</span>
                                <span class="drawn">d</span>
                                <span class="win">w</span>
                                <span class="lose">l</span>
                                <span class="win">w</span>
                            </div>
                        </div>
                        <div class="avatar"><img src="images/logo/logo-bigetron.png" alt="match-list-team-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MATCH PAGE TOP END-->

    <!--BROADCASTS BEGIN-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>broadcasts</h3>
                
<div class="mathc-live-broadcasts">
    <div class="background">
        <div class="broadcast-tabs-wrapper">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active" role="presentation">
                    <a href="#title1" role="tab" data-toggle="tab"><img src="images/logo/logo-youtube.png" alt="chanel">
                        <span class="info">
                            <span class="title">match 3 game 1</span>
                            <span class="language">Indonesia</span>
                        </span> 	
                    </a>
                </li>
                <li>
                    <a href="#title2"  role="tab" data-toggle="tab"><img src="images/logo/logo-youtube.png" alt="chanel">
                        <span class="info">
                            <span class="title">match 3 game 2</span>
                            <span class="language">Indonesia</span>
                        </span> 	
                    </a>
                </li>
                <li>
                    <a href="#title3"  role="tab" data-toggle="tab"><img src="images/logo/logo-youtube.png" alt="chanel">
                        <span class="info">
                            <span class="title">match 3 game 3</span>
                            <span class="language">Indonesia</span>
                        </span> 	
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in active" role="tabpanel" id="title1">					
                <iframe class="video" src="https://www.youtube.com/embed/ELlIycxERNI" allowfullscreen></iframe>
            </div>	
            <div class="tab-pane fade" role="tabpanel" id="title2">
                <iframe class="video" src="https://www.youtube.com/embed/UKnrIhwMA-I" allowfullscreen></iframe>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="title3">
                <iframe class="video" src="https://www.youtube.com/embed/8Zhy1t7OPMs" allowfullscreen></iframe>
            </div> 
        </div>
    </div>
</div>
            </div>
        </div>
    </div>

    <!--BROADCASTS END-->


<!--LIVE MACTH STAT BEGIN-->

<section class="live-match-stat" style="margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h6>Match details</h6>
                <div class="live-details">Chia celiac street art, raclette bespoke biodiesel try-hard chillwave kinfolk art party. Raclette salvia mumblecore roof party locavore. Normcore man braid snackwave. Tacos coloring book everyday carry farm-to-table forage. Chillwave vaporware la croix keytar lyft disrupt jianbing squid normcore venmo gochujang etsy. Cred tote bag retro, enamel pin put a bird on it af irony scenester.</div>
                <div class="statistics">
                    <h6>weather forecast</h6>
                    
<div class="live-match-weather">
<div class="icon">
    <img src="images/common/wether-sun.png" alt="wether-sun">
</div>	
<div class="info">
    <div class="degree">7 °C</div>
    <div class="text">Partly cloudy night</div>
</div>
</div>
                    <h6>match time</h6>
                    <p>Stamford Bridge Arena<br>7:30 PM, Saturday, 29 Sep 2016</p>
                    <h6>Arena</h6>
                    <div class="arena">
<div class="img-wrap">
    <div class="title">Arena Bridge</div>
    <img src="images/dota/arena-img.jpg" alt="arena-img">
</div>
<div class="arena-info">
    <div class="name">Arena Bridge Arena</div>
    <div class="date">7:30 PM, Saturday, 29 Sep 2016</div>
</div>
</div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6>supposed lineups</h6>
                <div class="match-lineup">
<div class="no-gutter">
    <div class="col-sm-6">
        <div class="head">
            <div class="name">Bigetron Esport</div>
        </div>
        <div class="team-wrap">	
            <div class="member">
                <a href="player.html"</a>
                <div class="info">
                    <div class="wrap">
                        <a href="player.html" class="name">Pasveer (GK)</a>
                        <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                        <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"><img src="images/common/timeline-goal.jpg" alt="timeline-goal"></div>
                    </div>
                    <div class="country"><img src="images/common/ind.png" alt="v">Indonesia</div>
                </div>
            </div>
            <div class="member">
                <a href="player.html"></a>
                <div class="info">
                    <div class="wrap">
                        <a href="player.html" class="name">Pasveer (GK)</a>
                        <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                        <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>

                    </div>
                    <div class="country"><img src="images/common/ind.png" alt="flag">Indonesia</div>
                </div>
            </div>
            <div class="member">
                <a href="player.html"></a>
                <div class="info">
                    <div class="wrap">
                        <a href="player.html" class="name">Pasveer (GK)</a>
                        <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                        <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                    </div>
                    <div class="country"><img src="images/common/ind.png" alt="flag">Indonesia</div>
                </div>
            </div>
            <div class="member">
                <a href="player.html"></a>
                <div class="info">
                    <div class="wrap">
                        <a href="player.html" class="name">Pasveer (GK)</a>
                        <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                        <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>

                    </div>
                    <div class="country"><img src="images/common/ind.png" alt="">Indonesia</div>
                </div>
            </div>
            <div class="member">
                <a href="player.html"></a>
                <div class="info">
                    <div class="wrap">
                        <a href="player.html" class="name">Pasveer (GK)</a>
                        <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                        <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>

                    </div>
                    <div class="country"><img src="images/common/ind.png" alt="">Indonesia</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="head">
            <div class="name right">Aura Esport</div>
        </div>
            <div class="team-wrap right">	
                <div class="member">
                    <div class="info">
                            <div class="wrap">
                                <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"><img src="images/common/timeline-goal.jpg" alt="timeline-goal"></div>
                                <a href="player.html" class="name">Pasveer (GK)</a>
                            </div>
                            <div class="country">Indonesia<img src="images/common/ind.png" alt="flag"></div>
                        </div>
                        <a href="player.html"></a>
                </div>
                <div class="member">
                    <div class="info">
                        <div class="wrap">
                            <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                            <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"><img src="images/common/timeline-goal.jpg" alt="timeline-goal"></div>
                            <a href="player.html" class="name">Pasveer (GK)</a>
                        </div>
                        <div class="country">Indonesia<img src="images/common/ind.png" alt="flag"></div>
                    </div>
                    <a href="player.html"></a>
                </div>
                <div class="member">
                    <div class="info">
                        <div class="wrap">
                            <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                            <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"><img src="images/common/timeline-goal.jpg" alt="timeline-goal"></div>
                            <a href="player.html" class="name">Pasveer (GK)</a>
                        </div>
                        <div class="country">Indonesia<img src="images/common/ind.png" alt="flag"></div>
                    </div>
                    <a href="player.html"></a>
                </div>
                <div class="member">
                    <div class="info">
                        <div class="wrap">
                            <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                            <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"><img src="images/common/timeline-goal.jpg" alt="timeline-goal"></div>
                            <a href="player.html" class="name">Pasveer (GK)</a>
                        </div>
                        <div class="country"> Indonesia <img src="images/common/ind.png" alt="flag"></div>
                    </div>
                    <a href="player.html"></a>
                </div>
                <div class="member">
                    <div class="info">
                        <div class="wrap">
                            <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                            <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"><img src="images/common/timeline-goal.jpg" alt="timeline-goal"></div>
                            <a href="player.html" class="name">Pasveer (GK)</a>
                        </div>
                        <div class="country"> Indonesia <img src="images/common/ind.png" alt="flag"></div>
                    </div>
                    <a href="player.html"></a>
                </div>
         
            </div>
        </div>
    </div>					
</div>
</section>

<!--LIVE MACTH STAT END-->
@endsection