<?php
header("Content-type: text/css; charset: UTF-8");


///  Database Connection and Fetch

$q = intval($_GET['q']);

$con = mysqli_connect('localhost', 'root', 'mysql', 'streamclimb');
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}




?>
html {
	height:100%;
}
body {
	background-color:rgb(231,231,231) !important;
	background: linear-gradient(to bottom right, #999999, white) !important;
	margin:0;
}

.header {
	padding-bottom:20px;
	height:70px;


}

.header-links {
	height:30px;
	width:70%;
	max-width:90%;
	border-bottom-width:2px;
	border-bottom:solid #ffff;
	float:right;
}

.logo {
	max-width:10%;
	height:5%;
	padding-top:2px;
	padding-left:2px;
	float:left;
	}

.name {
	float:left;
	font-family: 'Economica', sans-serif;
}

.tagline {
	float:left;
	font-family: 'Economica', sans-serif;
	font-size:small;
}

.rectangle {
	background-color: transparent;
	border-style: none;
	border-width: 2px;
	border-color: black;
	height: auto;
	padding-top: 5px;
	padding-bottom: 5px;
}

.picture {
	background-repeat: no-repeat;
	background-position: right;
	width: 259px;
	height: 119px;
	position: absolute;
	left: 8%;
	top: 4%;
	border-style: none;
	border-radius: 5px;
	border-color: black;
	z-index: -1;
}

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 1 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo1 = $video['logo'];




echo ".p1 {background-image: url(madbow.jpeg); background-size: 120px;}"
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 2 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo2 = $video['logo'];



echo ".p2 {background-image: url($logo2); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 3 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo3 = $video['logo'];



echo ".p3 {background-image: url($logo3); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 4 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo4 = $video['logo'];



echo ".p4 {background-image: url($logo4); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 5 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo5 = $video['logo'];



echo ".p5 {background-image: url($logo5); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 6 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo6 = $video['logo'];



echo ".p6 {background-image: url($logo6); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 7 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo7 = $video['logo'];



echo ".p7 {background-image: url($logo7); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 8 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo8 = $video['logo'];



echo ".p8 {background-image: url($logo8); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 9 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo9 = $video['logo'];



echo ".p9 {background-image: url($logo9); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 10 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo10 = $video['logo'];



echo ".p10 {background-image: url($logo10); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 11 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo11 = $video['logo'];



echo ".p11 {background-image: url($logo11); background-size: 120px;}";
?>

<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 12 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$logo12 = $video['logo'];



echo ".p12 {background-image: url($logo12); background-size: 120px;}";
?>

.box {
	width: 270px;
	height: 120px;
	background-color: rgb(231,231,231);
	position: relative;
	left: 3%;
	top: 12%;
	border-style: solid;
	border-width:1px;
	border-radius: 2px;
	border-color: black;
	transition: width 2s;
	z-index: 1;
}
.box:hover {
	width: 160px;
	z-index: 1;
}

@media screen and (max-width: 980px) {
	.box {
		left: 10%;
		top: 12%;
	}
	.picture {
	left: 13%;
	top: 4%;
	}
}

.video {
	display: none;
	height: 120px;
}

.random-button {
	color: white;
	padding: 10px;
	border-radius: 5px;
	text-decoration: none;
	margin: auto;
	background-image: none;
	transition: background-image 3s;
	font-family: 'Jura', sans-serif;
	font-size:large;
}


.random-button:hover{
	
	background-size: 40px;
	color: white;	
	text-decoration: none;

}

.header-box {
	float:right;
	padding-bottom:12px;
	padding-top:4px;
}

.buy-btn {
	margin: auto;
	padding-top: 15px;
	display: none;
}

#product-component-afa97577e5b, #product-component-12404dea423, #product-component-69b438f4a27 {
	display: none;
}