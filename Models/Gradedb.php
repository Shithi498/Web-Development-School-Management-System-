<?php
include('../Models/db.php');

function getGrades($subject,$email) {
    $con = getConnection();
    $sql = "SELECT * FROM studentgrade WHERE Subject = '$subject' AND Email= '$email' ";
    
    $res = mysqli_query($con, $sql);
    $count=mysqli_num_rows($res);

    $grades = [];
    while ($row = $res->fetch_assoc()) {
        $grades[] = [
          
            'Quiz1'=> $row['Quiz1'], 
             'Quiz2' =>$row['Quiz2'] ,
           'Assignment' =>$row['Assignment'] ,
            'Mid Exam Grade' =>$row['MidGrade'] ,
             'Final Exam Grade' =>$row['FinalGrade'], 
            'Average Grade' =>$row['Grade'] 
        ];
    }
    return $grades;

   
}
?>
