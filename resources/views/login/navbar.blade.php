@section('addJavascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // var input = document.getElementById("myInput");
    // input.addEventListener("keypress", function() {
    // if (event.key === "Enter") {
    //     var url = "{{route('searchresult')}}";
    //     location.href = url;
    //     // document.getElementById("myBtn").click();
    //  }
    
    // });
</script>
@endsection

<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7 hidden-sm hidden-xs">
                <div class="top-contacts">
                    <ul class="socials">
                        <li><a href="https://id-id.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/signup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/signup"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li><a href="https://github.com/signup?ref_cta=Sign+up&ref_loc=header+logged+out&ref_page=%2F%3Corg-login%3E&source=header"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/?hl=id"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="contacts">
                        <li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i>+61 3 8376 6284</li>
                        <li class="skype"><a href="https://join.skype.com/invite/xTX2qheL3cz0" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i>team.esport</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="top-language">
                    <ul class="list">
                        <li class="">
                            <a href="#"><img src="images/common/ind.png" alt="selected language">IN</a>
                        </li>
                    </ul>
                </div>
                    <div class="top-search">
                        <form id="formSearch" action="{{route('searchresult')}}">
                            <input type="text" name="search" placeholder="Search here" required>
                            <button id="myBtnn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>     
                        </form>
                    </div>
                    <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

    <!--MAIN MENU WRAP BEGIN-->
<div class="main-menu-wrap sticky-menu" style="z-index: 10;">
    <div class="container">
        <a href="index.html" class="custom-logo-link"><img src="images/logo/logo-navbar-footer.png" alt="logo" class="custom-logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#team-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="main-menu nav">
                    <a href="{{route ('login')}}" class="btn btn-danger" style="margin-top:20px">Login</a>
                </ul>
            </div>       
        </nav>
    </div>
</div>
<!--MAIN MENU WRAP END-->