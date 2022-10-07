@extends('layouts.master2')

@section('content')
@section('title', 'E-sport | Coming Soon')

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
</script>
    
@endsection

    <!--COMMING WRAP BEGIN-->
<div class="coming-wrap" style="top: 0px; bottom: 0px;">
    <div class="coming-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.html" class="error-logo"><img src="images/logo/logo-navbar-footer.png" alt="coming-logo" style="
                        margin-bottom: 70px;"></a>
                </div>
                <div class="col-md-12">
                    <span class="small-text">Geek Fam - RRQ Hoshi</span>
                    <span class="big-text">final game</span>
                    <div id="demo" class="counter">
                        <ul>
                            <li>
                                <div class="digit" id="hari"></div>
                                <div class="descr">days</div>
                            </li>
                            <li>
                                <div class="digit" id="jam"></div>
                                <div class="descr">hours</div>
                            </li>
                            <li>
                                <div class="digit" id="menit"></div>
                                <div class="descr">minutes</div>
                            </li>
                            <li>
                                <div class="digit" id="detik"></div>
                                <div class="descr">seconds</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--COMMING WRAP END-->

@endsection