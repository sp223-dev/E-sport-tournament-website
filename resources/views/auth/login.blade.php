@extends('auth.master')

@section('content')
@section('title', ' E-sport | Sign In')
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
.box 
{
	position: relative;
	width: 400px;
	height: 520px;
	background: #1c1c1c;
	border-radius: 8px;
	overflow: hidden;
}
.box::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 400px;
	height: 520px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#d32f2f,#d32f2f);
	animation: animate 6s linear infinite;
}
.box::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
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
    width: 80px;
    margin-left: auto;
    margin-right: auto;
    }
  </style>
  
  <video autoplay loop muted plays-inline class="back-video">
    <source src="../bg-video/dota_montage.mp4" type="video/mp4" alt="video-dota">
  </video>
  <div class="box">
		<form method="POST" action="{{ route('login') }}" autocomplete="off">
    {{ csrf_field() }}
      <img class="login-form" src="../images/logo/logo-about.png" alt="">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input id="email" name="email" value="{{ old('email') }}" type="email" required="required">
        @if ($errors->has('email'))
        <span class="help-block" style="margin-bottom: 40px;">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
				<span>Email</span>
				<i></i>
        
			</div>
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
			<div class="links">
				<a href="{{route('register')}}">Don't have an account ?</a>
				<a href="{{route('register')}}">Signup</a>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
  


</div>



@endsection