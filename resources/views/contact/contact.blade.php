{{-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel Contact US Form Example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Laravel Contact US Form Example - ItSolutionStuff.com</h3>
                    </div>
                    <div class="card-body">
  
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                     
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}
                              
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Subject:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                     
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}


@extends('layouts.master')

@section('content')
@section('title', 'E-sport | Contact us')

 <!--BREADCRUMBS BEGIN-->
 <section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">Main</a>/</li>
                            <li>Category</li>
                        </ul>
                        <h1>Category</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->


    <!--CONTACT WRAP BEGIN-->
<section class="contacts-wrap" style="background-color: #161616;">
    <div class="container">
        @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert team-alert fade in" role="alert"> 
                {{Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button><a href="{{route('mainmenu')}}">Back to Home.</a>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-5">
                <h4>Head office</h4>	
                <p>We are passionately committed to building the esports community, and rely on a simple but winning philosophy - focus on cultivating the positive culture.</p>
                <div class="contact-office-img">
                    <img class="img-responsive" src="images/dota/office-img.jpg" alt="contact-office-img">	
                </div>
                <ul class="contact-list">
                    <li><i class="fa fa-flag" aria-hidden="true"></i><span>Jl. Kalisombo No.18, Salatiga, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50711</span></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:team@email.com">teamesport1gl@gmail.com</a></li>
                    <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span>+62 852 9193 2739</span></li>
                </ul>
                <ul class="contact-bar">
                    <li><a href="https://id-id.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/i/flow/signup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/i/flow/signup"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                    <li><a href="https://github.com/signup?ref_cta=Sign+up&ref_loc=header+logged+out&ref_page=%2F%3Corg-login%3E&source=header"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/?hl=id"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
    
            <div class="col-md-7">
                <h4>Get in touch</h4>	
                <div class="leave-comment-wrap">
                    <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                    {{ csrf_field() }}	

                        <div class="row">
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Name <i>*</i></span>
                                        <input type="text" name="name" value="{{ old('name') }}" style="color: white !important;">
                                        @if ($errors->has('name'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('name') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Email <i>*</i></span>
                                        <input type="email" name="email" value="{{ old('email') }}" style="color: white !important;">
                                        @if ($errors->has('email'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('email') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Phone</span>
                                        <input type="text" name="phone" value="{{ old('phone') }}" style="color: white !important;">
                                        @if ($errors->has('phone'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Subject</span>
                                        <input type="text" name="subject" value="{{ old('subject') }}" style="color: white !important;">
                                        @if ($errors->has('subject'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Your message<i>*</i></span>
                                        <textarea name="message" style="color: white !important;">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('message') }}</span>
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="comment-submit">Send us message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CONTACT WRAP END-->

@endsection
