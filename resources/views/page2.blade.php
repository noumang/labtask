<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/linearicons.css">
	<style type="text/css">
		

ul{
	margin: 0px;
	padding: 0px;
	list-style-type: none;

}
ul li{
	float: left;
	width: 269px;
	height: 50px;
	background-color: black;
	opacity: .9;
	line-height: 50px;
	text-align: center;
	font-size: 18px;


}
ul li a{
	color: white;
	display: block;
	text-decoration: none;
	font-family: 'Hepta Slab';
}
ul li a:hover{
	background-color:#2E8B57;
}
ul li ul li {
	display: none;
}
ul li:hover ul li{
	display: block;

}
.sec .menu2{
	display: none;
}
.sec:hover .menu2{
	display: block;
	margin-left: 267px;
	margin-top: -50px;


}

	</style>

</head>
<body>
	@extends('page1')
	@section('div')
	@parent
	@endsection
	<nav>
		<ul>
	    <li><a href="#"><span><i class="lnr lnr-home"></i>Home</span></a>
        <ul>
        	<li><a href="#">Team</a></li>
        	<li class="sec"><a href="#">Camps</a>
        	<div class="menu2">
           <ul>
           	<li><a href="#">ISl</a></li>
        	<li><a href="#">LHR</a></li>
        	<li><a href="#">RWP</a></li>
           </ul>
           </div>	
        	</li>
        	<li><a href="#">Sports</a></li>
        	<li><a href="#">Activities</a></li>
        	<li><a href="#">Awards</a></li>
        </ul>
	    </li>
	    <li><a href="#"><span><i class="lnr lnr-arrow-down"></i></span>About us</a>
        <ul>
        <li><a href="#">Info</a></li>
        <li><a href="#">Awards</a></li>
        <li><a href="#">Bands</a></li>
        <li><a href="#">Admission</a></li>
        <li><a href="#">Trophies</a></li>
        </ul>
	    </li>
	    <li><a href="#"><span><i class="lnr lnr-paperclip"></i>Categories</span></a>
        <ul>
        	<li><a href="#">Cricket</a></li>
        	<li><a href="#">Football</a></li>
        	<li><a href="#">Badminton</a></li>
        	<li><a href="#">Baseball</a></li>
        </ul>
	    </li>
	    <li><a href="#"><span><i class="lnr lnr-menu-circle"></i>Services</span></a>
         <ul>
         	<li><a href="#">Tourism</a></li>
         	<li><a href="#">Scholar</a></li>
         	<li><a href="#">Silver</a></li>
         	<li><a href="#">Gold</a></li>
         </ul>
	    </li>
	    <li><a href="#"><span><i class="lnr lnr-bookmark"></i>About us</span></a>
        <ul>
        	<li><a href="#">Rank</a></li>
        	<li><a href="#">Prizes</a></li>
        	<li><a href="#">Win ratio</a></li>
        </ul>
	    </li>
		</ul>
	</nav>

</body>
</html>