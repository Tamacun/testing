<?php
///  Database Connection and Fetch

$q = intval($_GET['q']);

$con = mysqli_connect('localhost', 'root', 'mysql', 'streamclimb');
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}


?>

<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="strapped.js"></script>
<link rel="stylesheet" type="text/css" href="strapped.php">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Economica|Gruppo|Jura" rel="stylesheet">
	<title></title>
</head>
<body>
<div class='header'>
		<img class='logo' src='logo_1.svg'>
		<h2 class='name'>Stream Climb</h2>
		<h3 class='tagline'>Get Carried</h3>
		<div class='header-links'>
				<div class='header-box'>
					<a href="javascript:randomlink()" class="random-button">Random Stream</a>
				</div>
					<div class='header-box'>
						<a href='customstrapped.php' class='random-button'>Custom View Port</a>
					</div>
						<div class='header-box'>
							<a href='javascript:showBuy()' class='random-button'>Promote Your Stream</a>
						</div>
							<div class='header-box'>
								<a href='terms.php' class='random-button'>What is Stream Climb?</a>
							</div>
		</div>
</div>


<div class='container'>
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r1'>
			<div class='box b1'>
			</div>
			<div class="picture p1">
			</div>
			<div class='video v1'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 1 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
			<div class='buy-btn' id='product-component-afa97577e5b'></div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r2'>
			<div class='box b2'>
			</div>
			<div class='picture p2'>
			</div>
			<div class='video v2'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 2 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
			<div class='buy-btn' id='product-component-12404dea423'></div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r3'>
			<div class='box b3'>
			</div>
			<div class='picture p3'>
			</div>
			<div class='video v3'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 3 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
			<div class='buy-btn' id='product-component-69b438f4a27'></div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r4'>
			<div class='box b4'>
			</div>
			<div class='picture p4'>
			</div>
			<div class='video v4'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 4 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r5'>
			<div class='box b5'>
			</div>
			<div class='picture p5'>
			</div>
			<div class='video v5'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 5 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r6'>
			<div class='box b6'>
			</div>
			<div class='picture p6'>
			</div>
			<div class='video v6'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 6 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r7'>
			<div class='box b7'>
			</div>
			<div class='picture p7'>
			</div>
			<div class='video v7'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 7 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r8'>
			<div class='box b8'>
			</div>
			<div class='picture p8'>
			</div>
			<div class='video v8'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 8 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r9'>
			<div class='box b9'>
			</div>
			<div class='picture p9'>
			</div>
			<div class='video v9'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 9 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r10'>
			<div class='box b10'>
			</div>
			<div class='picture p10'>
			</div>
			<div class='video v10'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 10 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r11'>
			<div class='box b11'>
			</div>
			<div class='picture p11'>
			</div>
			<div class='video v11'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 11 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 rectangle r12'>
			<div class='box b12'>
			</div>
			<div class='picture p12'>
			</div>
			<div class='video v12'>
				<?php
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 12 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo " <iframe id='onesource' class='block-player' src='http://player.twitch.tv/?channel=$twitch_id&autoplay=true&muted=true' height='120' width='<width>' frameborder='<frameborder>' scrolling='<scrolling>' allowfullscreen='<allowfullscreen>'></iframe>"


?>
			</div>
		</div>

	</div>
</div>

</body>
</html>
