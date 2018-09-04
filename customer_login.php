<?php
    include 'config.php';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['Email']);
      $temp = mysqli_real_escape_string($con,$_POST['Password']); 
      $mypassword= md5($temp);
      
      $sql = "SELECT c_id,c_name FROM customer WHERE c_email = '$myusername' and  
 c_password = '$mypassword'";
      $result = mysqli_query($con,$sql) or die(mysqli_error($con));;
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result) or die(mysqli_error($con));
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['c_email'] = $myusername;
         $_SESSION['c_id']= mysqli_insert_id($con);  
          
         header("Location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
 

