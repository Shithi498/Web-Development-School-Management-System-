<?php
include('../Models/db.php');
function auth(){
    $con = getConnection();
    $sql = "SELECT * FROM notices";
    $res = mysqli_query($con, $sql);
    $count=mysqli_num_rows($res);
    if($count>0){
        $notices = [];
        while ($row = $res->fetch_assoc()) {
            //while ($row = mysqli_fetch_assoc($res)) {
                $noticeTitle = $row['title'];
                $noticeContent = $row['content'];
                $noticeDate = $row['date'];

                $notices[] = [
                    'title' => $noticeTitle,
                    'content' => $noticeContent,
                    'date' => $noticeDate
                ];
            }
            return $notices;
              
            }
    
    else{
        return false;
    }

}
?>