 <?php
$con = mysqli_connect("localhost", "root", "", "hotel") or die(mysqli_error($con));
$name = $_POST['Name']; 
$email = $_POST['Email'];
$phone = $_POST['Number'];
$add = $_POST['Address'];
$dob = $_POST['DOB'];
$pass=$_POST['Password'];  
$encrypted= md5($pass);
$user_registration_query = "insert into customer(c_name,c_email,c_password,c_phone,c_add,c_dob) values ('$name', '$email','$encrypted','$phone','$add','$dob')";
$result_set = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
header("Location: index.php");
?>

 
