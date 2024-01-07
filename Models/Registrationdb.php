<?php
include('db.php');
function auth($Name,$Email,$Password,$Gender,$PhoneNum){
    $con = getConnection();
    $sql = "INSERT INTO registration(Name,Email,Password,Gender,PhoneNumber) VALUES ('$Name','$Email','$Password','$Gender','$PhoneNum')";

  
   
    if(mysqli_query($con, $sql)){
        return true;
    }
    else{
        return false;
    }

}
?>