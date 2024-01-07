<?php
include('db.php');
function auth($Name, $PhoneNum, $Password, $currentEmail){
    $con = getConnection();
    
    $sql = "UPDATE registration SET Name='$Name',Password='$Password',PhoneNumber='$PhoneNum' WHERE Email='$currentEmail'";

  
   
    if(mysqli_query($con, $sql)){
        return true;
    }
    else{
        return false;
    }

}
?>