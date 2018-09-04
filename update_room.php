<?php
include 'config.php';

$r_type = $_POST['RoomType'];
$cost = $_POST['Price']; 

$update_query = "UPDATE room SET r_cost = '$cost' WHERE r_type = '$r_type'";

$update_result = mysqli_query($con, $update_query) or die(mysqli_error($con));

header("Location: index.php");
?>

 