<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q =intval($_GET['q']);

$con = mysqli_connect('localhost', 'root', 'mysql', 'streamclimb');
if (!$con) {
	die('Could not connect: ' .mysqli_error($con));
}

/// Get Most Recent
mysqli_select_db($con,"customer_details");
$most_recent="SELECT * FROM `customer_details` WHERE `block_number` = 1 ORDER BY `date` DESC LIMIT 1";
$result = mysqli_query($con,$most_recent);




$video = mysqli_fetch_array($result);
$twitch_id = $video['twitch_id'];

echo $twitch_id;




echo "
<table>
<tr>
<th>Block ID</th>
<th>Twitch ID</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['block_number'] . "</td>";
	echo "<td>" . $row['twitch_id'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>
</body>
</html>