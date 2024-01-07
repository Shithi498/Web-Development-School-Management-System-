<?php
//session_start();
include('../Models/db.php');
function auth(){
    $con = getConnection();
    $currentEmail = $_SESSION['currentUser'];
    $sql = "SELECT * FROM registration WHERE Email = '$currentEmail'";
    $res = mysqli_query($con, $sql);
    $count=mysqli_num_rows($res);
    if($count>0){
        $profileInfo = [];
        while ($row = $res->fetch_assoc()) {
            //while ($row = mysqli_fetch_assoc($res)) {
        

                $Name = $row['Name'];
                $Email = $row['Email'];
                $Gender = $row['Gender'];
                $Phone_Number = $row['PhoneNumber'];
                

                $profileInfo[] = [
                    'Name' => $Name,
                    'Email' => $Email,
                    'Gender' => $Gender,
                    'PhoneNumber' => $Phone_Number
                ];
            }
            return $profileInfo;
              
            }
    
    else{
        return false;
    }

}
?>