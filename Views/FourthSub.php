<!DOCTYPE html>
<html>
<head>
    <title>Select Group</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2; 
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #2c3e50; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #3498db; 
        }

        select, input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc; 
        }

        input[type="submit"] {
            background-color: #3498db; 
            color: #fff; 
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9; 
        }

        p {
            color: #3498db; 
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1> Select Group</h1>
        <?php
      

     
        if (!isset($_SESSION['selectedGroup'])) {
           
            echo '<select name="group" required>';
            echo '<option value="arts">Arts</option>';
            echo '<option value="science">Science</option>';
            echo '<option value="cmrs">Commerce</option>';
            echo '</select><br><br>';
            echo '<input type="submit" name="submit" value="Submit">';
        } 
    
        ?>
        <br>
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
    if (isset($_POST['btn2'])) {
        header("location: ../Views/Home.php");
    }
    if (isset($_SESSION['selectedGroup'])) {
       echo "You have already selected your group";
        exit();
    }else if (isset($_POST['submit'])) {
        $selectedGroup = $_POST['group'];

      
       $_SESSION['selectedGroup'] = $selectedGroup;

        $sql = "INSERT INTO selectesubject(Email,`Group`) VALUES ('$currentEmail','$selectedGroup') ";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Record inserted successfully.</p>";
        }
    }
    ?>
</body>
</html>
