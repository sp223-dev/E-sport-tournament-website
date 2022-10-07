@extends('layouts.master2')
@section('content')
@section('title', 'Error 404')

<body class="error-page">
    
    <!--ERROR WRAP BEGIN-->

    <div class="error-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.html" class="error-logo"><img src="images/logo/logo-about.png" alt="logo" class="image-erorr" style="object-fit: cover; width: 120px;"></a>
                </div>
            </div>
        </div>
        <div class="error-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="big-text">404</span>
                        <span class="small-text">Error <br>Page not found</span>
                        <br>
                        <a href="{{route('mainmenu')}}" class="back" style="color: #b44335;"><i class="fa fa-long-arrow-left" aria-hidden="true" style="color: #b44335;"></i>Back</a>
                    </div>
                </div>
            </div>
        </div>
@endsection