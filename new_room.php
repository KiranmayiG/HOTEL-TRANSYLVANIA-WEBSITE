<?php
include 'config.php';

$r_type = $_POST['RoomType'];

$cost = "SELECT r_cost FROM room WHERE r_type = '$r_type'";
$cost_result = mysqli_query($con, $cost) or die(mysqli_error($con));
$row = mysqli_fetch_array($cost_result);
$r_cost = $row['r_cost'];

$new_room_query = "INSERT INTO room (r_type, r_cost) VALUES ('$r_type', '$r_cost')";

$new_room_result = mysqli_query($con, $new_room_query) or die(mysqli_error($con));

header("Location: index.php");
?>

 