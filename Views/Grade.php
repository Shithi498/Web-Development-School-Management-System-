<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #34495e; 
            border-radius: 8px;
            background-color: #2c3e50; 
        }

        h1 {
            color: #3498db; 
        }
        h3 {
            color: #f0f0f0; 
        }

        select {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            box-sizing: border-box;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #3498db; 
            color: white;
            border: 0;
            cursor: pointer;
        }
    </style>

    <script>
        function validateForm() {
            var selectedSubject = document.getElementsByName('subject')[0].value;
     
         


            if (selectedSubject == "" && document.activeElement.name == 'btn1') {
                alert("Please select a subject.");
                return false;
            }

            return true;
        }
    
    </script>

<head>
    <title>Student Grades</title>
</head>
<body>
    <form action="" method="post">
   
       
        <select name="subject" required>
            <option value="math">Math</option>
            <option value="science">Science</option>
           
        </select><br><br>

        <input type="submit" name="submit" value="Check Grades">
        <input type="submit" value="Home" name="btn2">
    </form>

    <?php
  
  session_start();
  $currentEmail = $_SESSION['currentUser'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web technology";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (isset($_POST['submit'])) {
        
        $subject = $_POST['subject'];
      //  $email = $_POST['email'];

        $sql = "SELECT * FROM studentgrade WHERE Subject='$subject' AND Email = '$currentEmail'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo "<h2>$subject</h2>";

            while ($row = $result->fetch_assoc()) {
                echo "Quiz1: " . $row['Quiz1'] . "<br>";
                echo "Quiz2: " . $row['Quiz2'] . "<br>";
                echo "Assignment: " . $row['Assignment'] . "<br>";
                echo "Mid Exam Grade: " . $row['MidGrade'] . "<br>";
                echo "Final Exam Grade: " . $row['FinalGrade'] . "<br>";
                echo "Average Grade: " . $row['Grade'] . "<br>";
            }
        } else {
            echo "No grades found for the specified and Subject.";
        }
    }
    else if(isset($_REQUEST['btn2']))
{
    header("Location: ../Views/Home.php");
   
}
    ?>
</body>
</html>


