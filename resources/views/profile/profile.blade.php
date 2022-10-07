@extends('layouts.master')

@section('content')
@section('title', 'E-sport | My Profile')

<section class="club-wrap">
    
    <div class="container">
        <div class="col-md-12">
            <div class="alert team-alert fade in" role="alert"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button> 
                Complete your profile to enjoy all features, including checkout and more. <a href="{{ route('edit-profile') }}">Complete my profile</a>
            </div>
        </div>
        <div class="row row-eq-height">
            <div class="col-md-9 col-sm-9 col-xs-9">
                <h2>My Profile</h2>
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
                                <img class="img-responsive" src="{{asset('image/profile/'.$user->image)}}"  style="width: 300px; height:300px;" >               
                            </div>
                     </div>
                     
                     <div class="col-md-5">
                        <h4 class="block-title">About</h4>
                        <div class="block-content">{{ $user->about }}</div>
                     </div>
                     <div class="col-md-5">
                        <a href="{{ route('edit-profile') }}" type="button" class="btn btn-danger" style="font-size: 16px; margin-top: 40px;">Edit Profile</a> 
                     </div>
                 </div>
              </div>	
            </div>	
    </div>

<div class="content-wrap">
    <!-- /Banner -->
    <div class="container youplay-content">
        
        <div class="row">
            
            <div class="col-md-9">
                <a><h4 class="mt-0 mb-20"> {{ $user->name }} <span class="badge badge-danger" style="background-color: #b44335 !important;">Nickname</span></h4>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="width: 200px;">
                                <p>Name</p>
                            </td>
                            <td>
                                <p><a href="#">{{ $user->fullname }}</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Nationality</p>
                            </td>
                            <td>
                                <p><a href="#"></a>{{ $user->nasionality }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Born</p>
                            </td>
                            <td>
                                <p>{{ $user->born }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Language</p>
                            </td>
                            <td>
                                <p>{{ $user->language}}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="mt-40 mb-20">Personal Information</h4>
                <table class="table table-bordered" style="margin-bottom: 80px;">
                    <tbody>
                        <tr>
                            <td style="width: 200px;">
                                <p>Phone</p>
                            </td>
                            <td>
                                <p><a href="#">{{ $user->phone }}</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email</p>
                            </td>
                            <td>
                                <p>{{ $user->email }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Hobi</p>
                            </td>
                            <td>
                                <p>{{ $user->hobi }}</p>
                            </td>
                        </tr>
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Right Side -->
            <div class="col-md-3">
                {{-- <div class="side-block">
                    <h4 class="block-title">About</h4>

               
            <!-- Right Side --> 
            <a href="{{ route('edit-profile') }}" type="button" class="btn btn-danger" style="font-size: 16px;
                            padding: 18px 28px 16px 28px; width: 100%; margin-top: 40px;">Edit Profile</a> --}}
        </div>
        
    </div>
</div>


@endsection