@extends('layouts.master-news')
@section('title', 'E-sport | Teams')

@section('content')
 <!--BREADCRUMBS BEGIN-->
 <section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">E-sport</a>/</li>
                            <li>Team</li>
                        </ul>
                        <h1>All Elite Team</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

    <!--CLUB WRAP END-->

    <section class="club-wrap club-champ" style="background-color: #161616">
        <div class="container">
            <div class="row" style="display: none;">
                <div class="col-md-9">
                    <h4>E-sport Pro Season 6</h4>
                    <div class="champ-date"><i class="fa fa-calendar" aria-hidden="true"></i>2 SEP 2022 - 2 OKT 2022</div>
                </div>
                <div class="col-md-3">
                    <p class="btn small club-top-btn">championship</p>
                </div>
            </div>
        </div>

    <!--CHAMPIONSHIP WRAP BEGIN-->

    <div class="championship-wrap">
        <!--CHAMPIONSHIP NAVIGATION BEGIN -->
<div class="champ-navigation" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="champ-nav-list">
                    <li class="active"><a href="#participants">participants</a></li>
                    <li><a href="#matches">Matches</a></li>
                    <li><a href="#tournamentgrid">Tournament grid</a></li>
                    {{-- <li><a href="#news">News(4)</a></li> --}}
                </ul>		
            </div>
        </div>
    </div>				
</div>
<!--CHAMPIONSHIP NAVIGATION END -->
        <div class="champ-tab-wrap tab-content" style="background-color: #161616;">

            <!--CHAMPIONSHIP PART WRAP BEGIN -->
<div class="tab-item part-wrap tab-pane active" id="participants">
    <div class="part-list">
        <div class="container">
            <div class="row">
                @foreach($teams as $allteams)
                <div class="col-md-3">
                    <a href="{{route('team-detail', ['id'=> $allteams->id])}}" class="item">
                        <span class="logo"><img src="{{asset('image/teams/'.$allteams->image)}}" width="80" height="80" alt="team-logo"></span>
                        <span class="name">{{$allteams ->nama}}</span>
                    </a>
                </div>
                @endforeach
                {{-- <div class="col-md-3">
                    <a href="club-stats.html" class="item">
                        <span class="logo"><img src="images/logo/logo-aura.png" width="80" height="80" alt="team-logo"></span>
                        <span class="name">Aura</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('player-user') }}" class="item">
                        <span class="logo"><img src="images/logo/logo-bigetron.png" width="80" height="80" alt="team-logo"></span>
                        <span class="name">Bigetron</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="club-stats.html" class="item">
                        <span class="logo"><img src="images/logo/logo-evos.png" width="80" height="80" alt="team-logo"></span>
                        <span class="name">Evos</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="club-stats.html" class="item">
                        <span class="logo"><img src="images/logo/logo-geek.png" width="80" height="80" alt="team-logo"></span>
                        <span class="name">Geek</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="club-stats.html" class="item">
                        <span class="logo"><img src="images/logo/logo-onic.png" width="80" height="80" alt="team-logo"></span>
                        <span class="name">Onic</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="club-stats.html" class="item">
                        <span class="logo"><img src="images/logo/logo-rebellion.png" width="80" height="80" alt="team-logo"></span>
                        <span class="name">Rebellion</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="club-stats.html" class="item">
                        <span class="logo"><img src="images/logo/logo-rrq.png" width="80" height="80" alt="team-logo"></span>
                        <span class="name">RRQ</span>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!--CHAMPIONSHIP PART WRAP END -->

            <!--CHAMPIONSHIP MATCH WRAP BEGIN -->
<div class="tab-item match-wrap tab-pane" id="matches">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
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
                    <a class="item">
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
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--CHAMPIONSHIP MATCH WRAP END -->
            <div class="tab-item tournament-tab tab-pane" id="tournamentgrid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 team-res">
                            <ul class="tab-filters">
                                <li class="active"><a href="#groupstage" data-toggle="tab">Group stage</a></li>
                                <li><a href="#playoff" data-toggle="tab">Playoffs</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 overflow-scroll">
                            <div class="tab-content">
    <div id="groupstage" class="tab-pane fade in active">
        <table class="standing-full">
            <tbody>
                <tr>
                    <th>club</th>
                    <th>played</th>
                    <th>won</th>
                    <th>drawn</th>
                    <th>lost</th>
                    <th>gd</th>
                    <th>points</th>
                    <th>form</th>
                    <th>next</th>
                </tr>
                <tr>
                    <td class="up">
                        <i class="fa fa-caret-up" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-evos.png" width="30" height="30" alt="team-logo"> </span>evos esport
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="win">w</span>
                    </td>
                    <td><a><img src="images/logo/logo-geek.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
                <tr>
                    <td class="down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-aura.png" width="30" height="30" alt="team-logo"> </span>aura esport
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="lose">l</span>
                    </td>
                    <td><a><img src="images/logo/logo-rebellion.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
                <tr>
                    <td class="down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-rrq.png" width="30" height="30" alt="team-logo"> </span>rrq hoshi
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="lose">l</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="win">w</span>
                    </td>
                    <td><a><img src="images/logo/logo-onic.png" width="30" height="30" alt=""></a></td>
                </tr>
                <tr>
                    <td class="down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-bigetron.png" width="30" height="30" alt="team-logo"> </span>bigetron
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="lose">l</span>
                    </td>
                    <td><a><img src="images/logo/logo-alterego.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
                <tr>
                    <td class="none">
                        <i class="fa fa-circle" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-rebellion.png" width="30" height="30" alt="team-logo"> </span>rebellion
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="win">w</span>
                    </td>
                    <td><a><img src="images/logo/logo-aura.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
            </tbody></table>
    </div>
    
    <div id="playoff" class="tab-pane fade">
        <table class="standing-full">
            <tbody>
                <tr>
                    <th>club</th>
                    <th>played</th>
                    <th>won</th>
                    <th>drawn</th>
                    <th>lost</th>
                    <th>gd</th>
                    <th>points</th>
                    <th>form</th>
                    <th>next</th>
                </tr>
                <tr>
                    <td class="up">
                        <i class="fa fa-caret-up" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-geek.png" width="30" height="30" alt="team-logo"> </span>Geek
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="win">w</span>
                    </td>
                    <td><a><img src="images/logo/logo-evos.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
                <tr>
                    <td class="down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-rebellion.png" width="30" height="30" alt="team-logo"> </span>Rebellion
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="lose">l</span>
                    </td>
                    <td><a><img src="images/logo/logo-aura.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
                <tr>
                    <td class="down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-onic.png" width="30" height="30" alt="team-logo"> </span>onic esport
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="lose">l</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="win">w</span>
                    </td>
                    <td><a><img src="images/logo/logo-rrq.png" width="30" height="30" alt=""></a></td>
                </tr>
                <tr>
                    <td class="down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-alterego.png" width="30" height="30" alt="team-logo"> </span>alter ego
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="lose">l</span>
                    </td>
                    <td><a><img src="images/logo/logo-bigetron.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
                <tr>
                    <td class="none">
                        <i class="fa fa-circle" aria-hidden="true"></i> 1 <span class="team"><img src="images/logo/logo-aura.png" width="30" height="30" alt="team-logo"> </span>aura esport
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>+16</td>
                    <td class="points"><span>26</span></td>
                    <td class="form">
                        <span class="win">w</span>
                        <span class="drawn">d</span>
                        <span class="lose">l</span>
                        <span class="win">w</span>
                        <span class="win">w</span>
                    </td>
                    <td><a><img src="images/logo/logo-rebellion.png" width="30" height="30" alt="team-logo"></a></td>
                </tr>
            </tbody></table>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--CHAMPIONSHIP NEWS TAB BEGIN -->
{{-- <div class="tab-item news-tab tab-pane" id="news">
    <div class="news-list">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="item img-top">
                        <div class="img-wrap">
                            <div class="bage highlight">highlight</div>
                            <a href="news-single.html"><img class="news-img" src="images/news/news-1.jpg" alt="news-list-img"></a>
                        </div>
                        <div class="info">
                            <a href="news-single.html" class="name">RRQ Mika dominasi klasemen reguler season WSL dengan 100% Match Rate</a>	
                            <div class="wrap">
                                <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item img-top">
                        <div class="img-wrap">
                            <div class="bage interview">interview</div>
                            <a href="news-single.html"><img class="news-img "src="images/news/news-2.jpg" alt="news-list-img"></a>
                        </div>
                        <div class="info">
                            <a href="news-single.html" class="name">King of Kings, ajang bergengsi bagi gamer amatir berprestasi</a>	
                            <div class="wrap">
                                <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item img-top">
                        <div class="img-wrap">
                            <div class="bage interview">interview</div>
                            <a href="news-single.html"><img class="news-img" src="images/news/news-3.jpg" alt="news-list-img"></a>
                        </div>
                        <div class="info">
                            <a href="news-single.html" class="name">Timnas MLBB Indonesia Raih Medali Perak di SEA Games 2021</a>	
                            <div class="wrap">
                                <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item img-top">
                        <div class="img-wrap">
                            <div class="bage interview">interview</div>
                            <a href="news-single.html"><img src="images/news/news-4.jpg" alt="news-list-img"></a>
                        </div>
                        <div class="info">
                            <a href="news-single.html" class="name">Road to PMPL ID Spring 2022</a>	
                            <div class="wrap">
                                <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div> --}}
<!--CHAMPIONSHIP NEWS TAB END -->
            
        </div>
    </div>
@endsection