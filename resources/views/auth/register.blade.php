@extends('auth.master')

@section('content')
@section('title', ' E-sport | Sign Up')
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
<style>
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  font-family: Raleway,sans-serif;
}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
	background: #23242a;
}
.box-register 
{
	position: relative;
	width: 690px;
	height: 520px;
	background: #1c1c1c;
	border-radius: 8px;
	overflow: hidden;
}
.box-register::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 690px;
	height: 520px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#d32f2f,#d32f2f);
	animation: animate 6s linear infinite;
}
.box-register::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 520px;
	height: 690px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#d32f2f,#d32f2f);
	animation: animate 6s linear infinite;
	animation-delay: -3s;
}
@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}
form 
{
	position: absolute;
	inset: 2px;
	background: #161616;
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
h2 
{
	color: #d32f2f;
	text-align: center;
  font-family: Raleway,sans-serif;
  font-weight: 900;
}
.inputBox 
{
	position: relative;
	width: 300px;
	margin-top: 35px;
    margin-left: 15px;
}
.inputBox input 
{
	position: relative;
	width: 100%;
	padding: 20px 10px 10px;
	background: transparent;
	outline: none;
	box-shadow: none;
	border: none;
	color: white;
	font-size: 1em;
	letter-spacing: 0.05em;
	transition: 0.5s;
	z-index: 10;
}
.inputBox span 
{
	position: absolute;
	left: 0;
	padding: 20px 0px 10px;
	pointer-events: none;
	font-size: 1em;
	color: #8f8f8f;
	letter-spacing: 0.05em;
	transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span 
{
	color: #d32f2f;
	transform: translateX(0px) translateY(-34px);
	font-size: 0.75em;
}
.inputBox i 
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #d32f2f;
	border-radius: 4px;
	overflow: hidden;
	transition: 0.5s;
	pointer-events: none;
	z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i 
{
	height: 44px;
}
.links 
{
	display: flex;
	justify-content: space-between;
}
.links a 
{
	margin: 10px 0;
	font-size: 0.75em;
	color: #8f8f8f;
	text-decoration: beige;
}
.links a:hover, 
.links a:nth-child(2)
{
	color: #d32f2f;
}
input[type="submit"]
{
	border: none;
	outline: none;
	padding: 11px 25px;
	background: #d32f2f;
	cursor: pointer;
	border-radius: 4px;
	font-weight: 600;
	width: 100px;
	margin-top: 10px;
    display: block;
    margin: auto;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
    /*  */

    .back-video{
      position: fixed;
      right: 0;
      bottom: 0;
      z-index: -1;
      
    }

    .login-form{
    width: 100px;
    margin-left: auto;
    margin-right: auto;
    }
  </style>
  
  <video autoplay loop muted plays-inline class="back-video">
    <source src="../bg-video/dota_montage.mp4" type="video/mp4" alt="video-dota">
  </video>
  <div class="box-register">
	@if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert team-alert fade in" role="alert"> 
            {{Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button><a href="{{route('login')}}">Kembali ke beranda.</a>
            </div>
        </div>
    @endif	
    <form method="POST" action="{{ route('register') }}" autocomplete="off">
        {{ csrf_field() }}
          <img class="login-form" src="../images/logo/logo-about.png" alt="">
          <h2>Sign up</h2>
                <div class="row">
                    <div class="inputBox{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" name="name" value="{{ old('name') }}" type="text" required="required">
                        @if ($errors->has('name'))
                        <span class="help-block" style="margin-bottom: 40px;">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                        <span>Name</span>
                        <i></i>
                    </div>
                    <div class="inputBox{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required="required">
                        @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <span>Email</span>
                        <i></i>
                    </div>
                </div>
                <div class="row">
                    <div class="inputBox{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" id="password" name="password" required="required">
                        @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <span>Password</span>
                        <i></i>
                    </div>
					<div class="inputBox">
						<input id="password-confirm" type="password" name="password_confirmation" required="required">
						<span>Confirm Password</span>
						<i></i>
					</div>
					</div>
					<div class="links">
                        <a href="{{route('login')}}">Have an account ? sign in now.</a>
                        <a href="{{route('login')}}">Sign in</a>
                    </div>
            <input type="submit" value="Sign up">
					<div style="visibility: hidden;">
						<div class="inputBox{{ $errors->has('password') ? ' has-error' : '' }}">
							<input name="level" value="user" type="hidden" id="password" name="password" required="required">
							@if ($errors->has('level'))
							<span class="help-block">
							<strong>{{ $errors->first('level') }}</strong>
							</span>
							@endif
							<span>Confirm Password</span>
							<i></i>
						</div> 
					</div>
    </form>
    </div>
            
@endsection
{{-- 
<div class="inputBox">
	<input id="password-confirm" type="password" class="form-style" name="password_confirmation" required placeholder="Confirm Password">
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mt-2">
  <input id="password" type="hidden" class="form-style" name="level" required placeholder="Your Password" value="admin">
  @if ($errors->has('level'))
		<span class="help-block">
			<strong>{{ $errors->first('level') }}</strong>
		</span>
 @endif
</div> --}}