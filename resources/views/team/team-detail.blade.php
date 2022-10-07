@extends('layouts.master-news')

@section('content')
@section('title', 'E-sport | About Team')

    <section class="club-wrap">
        <div class="container">
            <div class="row row-eq-height">
                <div style="margin-left: 95px;">
                    <h4>{{$teams->nama}}</h4>
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
                    <img class="img-responsive" src="{{asset('image/teams/'.$teams->image)}}" alt="organisation logo" style="height: 300px;" >                
                </div>
            </div>
            <div class="col-md-3">
                <div class="org-club-info">
                                        <div class="item country">
                        <img src="{{asset('images/common/ind.png')}}" alt="flag">
                        {{$teams->country}}</div>
                                        
                    <div class="item"><span>Founded:</span> {{$teams->founded}} </div>
                    <div class="item"><span>Ground:</span> {{$teams->ground}} </div>
                    <div class="item"><span>President:</span> {{$teams->president}} </div>
                    <div class="item"><span>Head coach:</span> {{$teams->head_coach}} </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="org-club-stat">
                    <div class="title">championship</div>
                    <div class="next">
                        <div class="avatar">
                            <a href="matches.html" title="Athleticos Bilbor – AC Ramau">
                                <img src="{{asset('images/logo/logo-navbar-footer.png')}}"  alt="oponent logo"> 
                            </a>
                        </div>
                        <div class="info">
                            <div class="name">{{$teams->championship}}</div>
                            <div class="date">{{$teams->date}} / {{$teams->time}} WIB</div>
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

    {{-- Foreach Masih Erorr --}}
    
     @foreach($players as $player)
    <div class="staff-box">            
    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="{{route('player-participants', ['id'=> $player->id])}}" class="item">
            <span class="info">
                <span class="name">{{$player->nama}}</span>
                <span class="position">{{$player->posisi}}</span>
                <span class="number">{{$player->umur}}</span>
            </span>
            <img src="{{asset('image/player/'.$player->image)}}" alt="team">
        </a>
    </div>   
    @endforeach                 
    {{-- <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="team.html" class="item">
            <span class="info">
                <span class="name">Pieeraluigi Goellaini</span>
                <span class="position">Goalkeeper</span>
                <span class="number">1</span>
            </span>
            <img src="images/dota/bigetron2.png" alt="team">
        </a>
    </div>
    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="team-second-page.html" class="item">
            <span class="info">
                <span class="name">Reemiaro</span>
                <span class="position">Goalkeeper</span>
                <span class="number">29</span>
            </span>
            <img src="images/dota/bigetron3.png" alt="team">
        </a>
    </div>   


    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="team.html" class="item">
            <span class="info">
                <span class="name">Woejcaiech Szeczaesny</span>
                <span class="position">Goalkeeper</span>
                <span class="number">1</span>
            </span>
            <img src="images/dota/bigetron4.png" alt="team">
        </a>
    </div>     
    <div class="col-md-4  col-sm-6 col-xs-12">
        <a href="team-second-page.html" class="item">
            <span class="info">
                <span class="name">Ireaiazoz</span>
                <span class="position">Goalkeeper</span>
                <span class="number">1</span>
            </span>
            <img src="images/dota/bigetron5.png" alt="team">
        </a>
    </div>       
</div> --}}
    </section>

    <!--CLUB STAFF TOP BEGIN-->




@endsection