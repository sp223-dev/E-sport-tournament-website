@extends('layouts.master')

@section('content')
@section('title', 'E-sport | Profile Edit')

<section class="club-wrap">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-md-9 col-sm-9 col-xs-9">
                <h2>My Profile</h2>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
            </div>
        </div>
    </div>
    
    

    <div class="content-wrap">
        <!-- /Banner -->
        <div class="container youplay-content">
            <form method="POST" action="{{ url('profile') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                            <div class="col-md-5">
                                <div
                                    class="club-logo  wpb_animate_when_almost_visible wpb_zoomInLeft zoomInLeft wpb_start_animation animated">
                                    <img class="img-responsive" src="images/dota/blank-profile.jpg" alt="organisation logo"
                                        style="width: 300px; height:300px;">
                                    <input type="file" style="margin-top: 10px;" name="image" id="image" value="">
                                </div>
                            </div>
                            <div class="col-md-5">
                                
                                    <div class="side-block">
                                        <h4 class="block-title" style="margin-left: 14px; margin-top: 0px;">About</h4>
                                        {{-- <div class="block-content"> </div> --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Describe your self"
                                                    id="about" style="height: 200px;
                                                            background: #292929;
                                                            width: 112%;
                                                            border: none;" name="about" value="{{ $user->about }}" id="about"></textarea>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="col-md-9">

                                {{-- <h4 class="mt-0 mb-20">John Doe</h4> --}}
                                <div class="mt-0">
                                    <div class="item">
                                        <label style="margin-top: 15px;" for="name">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Your new name here..." value="{{ $user->name }}" id="name">
                                        </label>
                                    </div>

                                </div>
                                <section style="margin-top: 30px;">


                                    <div class="mb-3">
                                        <p for="fullname">Name</p>
                                        <input type="text" name="fullname" class="form-control" id="fullname" placeholder=""
                                            value="{{$user->fullname}}">
                                    </div>
                                    <div class="mb-3">
                                        <p for="nasionality">Nasionality</p>
                                        <input type="text" name="nasionality" class="form-control" id="nasionality"
                                            placeholder="" value="{{ $user->nasionality }}">
                                    </div>
                                    <div class="mb-3">
                                        <p class="form-label" for="born">Born</p>
                                        <input type="text" name="born" class="form-control" id="born" placeholder=""
                                            value="{{ $user->born }}">
                                    </div>
                                    <div class="mb-3">
                                        <p for="language" class="form-label">Languages</p>
                                        <input type="text" name="language" class="form-control" id="language" placeholder=""
                                            value="{{ $user->language }}">
                                    </div>
                                </section>
                                <h4 class="mt-40 mb-20">Contact Information</h4>
                                <section>
                                    <div class="mb-3">
                                        <p class="form-label" for="phone">Phone</p>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder=""
                                            value="{{ $user->phone }}">
                                    </div>
                                    <div class="mb-3">
                                        <p for="email" class="form-label">Email</p>
                                        <input type="text" name="email" class="form-control" id="email" placeholder=""
                                            value="{{ $user->email }}">
                                    </div>
                                    <div class="mb-3" style="margin-bottom: 120px;">
                                        <p for="hobi" class="form-label">Hobi</p>
                                        <input type="text" name="hobi" class="form-control" id="hobi" placeholder=""
                                            value="{{ $user->hobi }}">
                                            <button  class="btn btn-danger" type="submit"
                                            style="margin-top: 40px;">Edit Profile</button>
                                    </div>
                                    <div>
                                        
                                    </div>

                                </section>

                            





                            </div>
                            <!-- Right Side -->
                            {{-- <div class="col-md-3">
                                <div class="side-block">
                                    <h4 class="block-title" style="margin-left: 14px; margin-top: 44px;">About</h4> --}}
                                    {{-- <div class="block-content"> </div> --}}
                                    {{-- <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                id="about" style="height: 200px;
                                                        background: #292929;
                                                        width: 112%;
                                                        border: none;" name="about" value="{{ $user->about }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button  class="btn btn-danger" type="submit"
                                style="font-size: 16px;
                                                        padding: 18px 28px 16px 28px; width: 100%; margin-top: 20px; margin-left: 14px;">Edit Profile</button> --}}
                            </div>

                           
                                       
                            
                </div>


            </form>

        </div>
    </div>
</section>

    @endsection