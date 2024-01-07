<?php
include('db.php');
function auth($email,$pass){
    $con = getConnection();
    $sql = "SELECT * FROM registration WHERE Email='$email' AND Password='$pass'";
    $res = mysqli_query($con, $sql);
    $count=mysqli_num_rows($res);
    if($count==1){
        return true;
    }
    else{
        echo false;
    }

}
?>