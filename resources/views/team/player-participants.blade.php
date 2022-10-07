@extends('layouts.master-news')

@section('content')
@section('title', 'E-sport | Player Detail')

    <!--PLAYER SINGLE WRAP BEGIN-->
{{-- {{$players}} --}}
    <section class="player-single-wrap">
        <div class="container">
            <div class="row">
             
                <div class="col-md-12">
                    <div class="captain-bage">{{$players->posisi}}</div>
                    <h4 class="player-name">{{$players->myteam->nama}}</h4>
                </div>
                <div class="col-md-6">
                    
                <div class="player-photo">
                    <div class="number">{{$players->umur}}</div>
             
                    <img class="img-responsive" src="{{asset('image/player/'.$players->image)}}" alt="player">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="player-info">
                        <h6 class="player-info-title">{{$players->nama}}</h6>	
                        <div class="summary">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Nasionality:</div>
                                </div>                                     
                                <div class="col-md-9 col-sm-9 col-xs-9"><img src="{{asset('images/common/ind.png')}}" alt="flag"> {{$players->kebangsaan}} </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Position:</div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">{{$players->posisi}}</div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Age:</div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">{{$players->umur}}</div>
                            </div>
                        </div>
                   
                        <h6>club stats</h6>
                        <div class="overflow-scroll">
                            <table>
                                <tr>
                                    <th>Seasons</th>
                                    <th class="club">Club</th>
                                    <th>Games</th>
                                    <th>Points</th>
                                </tr>
                                <tr>
                                    <td>{{$players->seasons}}</td>
                                   
                                    <td class="club">
                                        
                                        <img src="{{asset('image/teams/'.$players->myteam->image)}}" width="30" height="30" alt="trophy">{{$players->myteam->nama}}
                                    </td>
                                  
                                    <td>{{$players->games}}</td>
                                    <td><span>{{$players->points}}</span></td>
                                </tr>
                                <tr>
                                    <td>{{$players->seasons}}</td>
                                    <td class="club"><img src="{{asset('image/teams/'.$players->myteam->image)}}" width="30" height="30" alt="trophy">{{$players->myteam->nama}}</td>
                                    <td>{{$players->games}}</td>
                                    <td><span>{{$players->points}}</span></td>
                                </tr>
                            </table>
                        </div>
                        <h6>About</h6>
                        <p>{{$players->about}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--PLAYER SINGLE WRAP END-->
@endsection