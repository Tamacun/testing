<?php

$con = mysqli_connect('localhost', 'root', 'mysql', 'streamclimb');
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"customer_details");

$webhookContent = "";

$webhook = fopen('php://input' , 'rb');
while (!feof($webhook)) {
    $webhookContent .= fread($webhook, 4096);
    $json = json_decode($webhookContent, true);
    $id = $json['id'];
    $email = $json['email'];
    $block = $json['line_items'][0]['sku'];
}



fclose($webhook);

$block_number = mysqli_real_escape_string($block);
$twitch_id = mysqli_real_escape_string($id);
$email = mysqli_real_escape_string($email);

echo $block_number;

$addUser = "INSERT INTO `customer_details` (block_number, twitch_id, email)
VALUES ('$block_number', '$twitch_id', '$email')";

if ($con->query($addUser) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $addUser . "<br>" . $con->error;
}

$con->close();
?>