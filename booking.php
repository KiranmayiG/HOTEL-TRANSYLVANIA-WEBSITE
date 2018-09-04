  <?php
include 'config.php';

$c_email = $_SESSION['c_email'];
$sql = "SELECT * FROM customer WHERE c_email ='$c_email'";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$c_id = $row['c_id'];

$name = $row['c_name'];
$r_type = $_POST['room_type'];
$start = $_POST['start_date'];
$end = $_POST['end_date'];
$no_of_rooms = $_POST['no_of_rooms'];
$spa = $_POST['spa'];
$dining = $_POST['in_room_dining'];
$transport = $_POST['transport'];
 

$sql_room = "SELECT r_id FROM booking WHERE ((start_date>='$start' AND '$end'>=start_date) "
            . "OR (start_date<='$start' AND '$end'<=end_date)"
            . " OR (end_date>='$start' AND '$end'>=end_date)) AND r_type= '$r_type'";    
$result_room = mysqli_query($con, $sql_room) or die(mysqli_error($con));
$r_booked= mysqli_num_rows($result_room);

$sql_count = "Select r_id from room where r_type='$r_type'";    
$result_count = mysqli_query($con, $sql_count) or die(mysqli_error($con));
$r_count= mysqli_num_rows($result_count);

$r_available= $r_count - $r_booked;

if($start > $end){
    $message = "Please enter valid dates";
}else if($no_of_rooms > $r_available || $no_of_rooms <= 0){
    $message = "You are exceeding number of available rooms. ".$r_available." room(s) is/are available.";
}else{
    $sql_room = "SELECT r_id, r_cost FROM room WHERE r_type='$r_type' AND "
            . " r_id NOT IN ( SELECT r_id FROM booking WHERE ((start_date>='$start' AND '$end'>=start_date) "
            . "OR (start_date<='$start' AND '$end'<=end_date)"
            . " OR (end_date>='$start' AND '$end'>=end_date)) AND r_type= '$r_type') ";
    
    $result_room = mysqli_query($con, $sql_room) or die(mysqli_error($con));
while($no_of_rooms >0){
    
    
    $row_room = mysqli_fetch_array($result_room);
    $r_id = $row_room['r_id'];
    
    $total_cost = $row_room['r_cost'];
    $booking = "insert into booking(c_id,r_id,start_date,end_date,total_cost,r_type)"
        . "values ('$c_id', '$r_id','$start','$end','$total_cost','$r_type')";
$result_set = mysqli_query($con, $booking) or die(mysqli_error($con));

$row_booking = mysqli_fetch_array($result_set);
$b_id = $row_booking['b_id'];

if(isset($spa)){
    $spa_query = "SELECT s_charge FROM services WHERE s_name='$spa'";
         $r_spa = mysqli_query($con, $spa_query) or die(mysqli_error($con));
         $row_spa = mysqli_fetch_array($r_spa);
    $s_charge = $row_spa['s_charge'];
        $spa_cost_add = "UPDATE booking SET total_cost = (total_cost+'$s_charge') WHERE b_id = '$b_id'";
         $r_spa_cost = mysqli_query($con, $spa_cost_add) or die(mysqli_error($con));
    }
    if(isset($dining)){
        $dining_query = "SELECT s_charge FROM services WHERE s_name='$dining'";
         $r_dining = mysqli_query($con, $dining_query) or die(mysqli_error($con));
         $row_dining = mysqli_fetch_array($r_dining);
    $s_charge = $row_dining['s_charge'];
        $dining_cost_add = "UPDATE booking SET total_cost = (total_cost+'$s_charge') WHERE b_id = '$b_id'";
         $r_dining_cost = mysqli_query($con, $dining_cost_add) or die(mysqli_error($con));
    }
    if(isset($transport)){
        $transport_query = "SELECT s_charge FROM services WHERE s_name='$transport'";
         $r_transport = mysqli_query($con, $transport_query) or die(mysqli_error($con));
         $row_transport = mysqli_fetch_array($r_transport);
    $s_charge = $row_transport['s_charge'];
        $transport_cost_add = "UPDATE booking SET total_cost = (total_cost+'$s_charge') WHERE b_id = '$b_id'";
         $r_transport_cost = mysqli_query($con, $transport_cost_add) or die(mysqli_error($con));
    }

$no_of_rooms = $no_of_rooms - 1;
}

$message = "Booking successful!";
$update_points = "UPDATE customer SET c_points = c_points + 10 WHERE c_id = '$c_id'";
$result_set_2 = mysqli_query($con, $update_points) or die(mysqli_error($con));
}
header("Location: cust_display_booking.php?message=".$message);
?>