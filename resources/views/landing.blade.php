@extends('login.master-landing')

@section('content')
@section('title', ' E-sport | Landing')
    
  
<div  id="contact" class="esport-team-landing-contact">
    <div class="wrapper-img">
        <img src="images/common/landing-bg.png" alt="esport-champ-contact-background">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <img class="img-landing" src="images/logo/logo-about.png" alt="logo" style="height: 100px; margin-top: 40px;">
                </div>
                <div class="information-wrap-left">
                    
                    <div>
                        
                        <span class="header-first">I'll see you in battle arena </span>
                        <span class="header-red" style="color: #b44335;">Let's begin</span>
                    </div>
                    <span>
                        <span>Join now, explore more and get further information</span>
                    </span>
                    <a style="background-color: #b44335; color: white;" href="{{route ('login')}}">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <p>
                            The era of the new season is here! with 8 elite teams to win the championship and the best of the best in Indonesia.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="icon"><img src="images/common/success-icon1.png" alt="succes-icon"></div>
                        <div class="title">Match Schedule</div>
                        <p>Every squad must be prepared their finest performance to take on this challenge and emerge victorious!</p>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-5">
                <div class="wrap position-relative">
                    <div class="cybersport-slogan">
                        <div class="title">Welcome to</div>
                        <div class="big-title">Championship</div>
                        <p>Get a full list of all our legendary history of champions, players, teams, news. starting with the first season.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


 

@endsection