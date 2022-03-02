<?php
require 'connection.php';

// check if current user exists in db row
function checkuser($conn, $facebook_id, $username, $email)
{
    $sql1 = "select * from registered_users where facebook_id='$facebook_id'";
    $check = mysqli_query($conn,$sql1);
    $checkdta = mysqli_num_rows($check);
    if (empty($checkdta)) { // New user Insertion       
        $query = "INSERT INTO registered_users (facebook_id,name,email) VALUES ('$facebook_id','$username','$email')";     
        mysqli_query($conn,$query);
         $_SESSION['session'] = "Registered successfully";
          mysqli_error($query);
             
} else { // Returned user data update        
        $queryupdate = "UPDATE registered_users SET name='$username', email='$email' where facebook_id='$facebook_id'";
        mysqli_query($conn,$queryupdate);    
          $_SESSION['session'] = "Log in successfully";
        mysqli_error($query);
    }
}
?>