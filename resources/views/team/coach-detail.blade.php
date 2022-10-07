@extends('layouts.master-news')

@section('content')
@section('title', 'E-sport | About Pleyer')

    <!--PLAYER SINGLE WRAP BEGIN-->
{{-- {{$coaches}} --}}
    <section class="player-single-wrap">
        <div class="container">
            <div class="row">
             
                <div class="col-md-12">
                    <div class="captain-bage">{{$coaches->posisi}}</div>
                    <h4 class="player-name">{{$coaches->myteam->nama}}</h4>
                </div>
                <div class="col-md-6">
                    
                <div class="player-photo">
                    <div class="number">{{$coaches->umur}}</div>
             
                    <img class="img-responsive" src="{{asset('image/coach/'.$coaches->image)}}" alt="player">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="player-info">
                        <h6 class="player-info-title">{{$coaches->nama}}</h6>	
                        <div class="summary">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Nasionality:</div>
                                </div>                                     
                                <div class="col-md-9 col-sm-9 col-xs-9"><img src="{{asset('images/common/ind.png')}}" alt="flag"> {{$coaches->kebangsaan}} </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Position:</div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">{{$coaches->posisi}}</div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Age:</div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">{{$coaches->umur}}</div>
                            </div>
                        </div>
                   
                        <h6>club stats</h6>
                        <div class="overflow-scroll">
                            <table>
                                <tr>
                                    <th>Seasons</th>
                                    <th class="club">Club</th>
                                </tr>
                                <tr>
                                    <td>{{$coaches->seasons}}</td>
                                   
                                    <td class="club">
                                        
                                        <img src="{{asset('image/teams/'.$coaches->myteam->image)}}" width="30" height="30" alt="trophy">{{$coaches->myteam->nama}}
                                    </td>
                                  
                                </tr>
                                <tr>
                                    <td>{{$coaches->seasons}}</td>
                                    <td class="club"><img src="{{asset('image/teams/'.$coaches->myteam->image)}}" width="30" height="30" alt="trophy">{{$coaches->myteam->nama}}</td>
                                </tr>
                            </table>
                        </div>
                        <h6>About</h6>
                        <p>{{$coaches->about}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--PLAYER SINGLE WRAP END-->
@endsection