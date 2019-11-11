<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="vieport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		
.nav{
	border-bottom: 1px solid black;
	text-align: right;
	height: 70px;
	line-height: 70px;

}
.menu{
	margin: 0 30px 0 0;
}
.menu a{
         text-decoration: none;
         margin: 0 10px;
         line-height: 70px;
         color: black;
         clear: right;
}
span{
	color:#DB7093;
}
label{
	margin: 0 40px 0 0;
	font-size: 26px;
	display: none;
	width: 26px;
	float: right;
}
#toggle{
	display: none;
}

@media only screen and (max-width: 500px){
	label{
		display: block;
		cursor:pointer;
	}
	.menu{
		text-align: center;
		width: 100%;
		display: none;
	}
	.menu a{
		display: block;
		border-bottom: 1px solid black;
		margin: 0;
	}
	#toggle:checked + .menu{
		display: block;
	}
}
	</style>
</head>
<body>
	@extends('welcome')
	@section('mydiv')
	@parent
	@endsection
	@section('ydiv')
	<div class="nav">
		<label for="toggle">&#9776;</label>
		<input type="checkbox" id="toggle">
		<div class="menu">
			<a href="#">Business</a>
			<a href="#">Services</a>
			<a href="#">Learn More</a>
			<a href="#"><span>Free trial</span></a>
			
		</div>

		
	</div>

</body>
</html>