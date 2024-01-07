<!DOCTYPE html>
<html>
<head>
    <title>View Classmates</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #34495e; 
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db; 
            color: white;
        }

        h1 {
            color: #3498db; 
        }

        input[type="submit"] {
            width: 20%;
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
           
            return true;
        }
    </script>
</head>
<body>
    <form action="" method="post" onsubmit="return validateForm()">
        <h1>View Classmates</h1>
        
        <table>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Phone Number</th>
            </tr>

            <?php
            session_start();
            $currentEmail = $_SESSION['currentUser'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "web technology";
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM registration WHERE Email != '$currentEmail'";
            $res = mysqli_query($conn, $sql);

            if ($res->num_rows > 0) {
                while ($classmate = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<td>" . $classmate['Email'] . "</td>";
                    echo "<td>" . $classmate['Name'] . "</td>";
                    echo "<td>" . $classmate['PhoneNumber'] . "</td>";
                    echo "</tr>";
                }
            }

            if (isset($_POST['btn2'])) {
                header("location: ../Views/Home.php");
            }
            ?>
        </table>

        <input type="submit" value="Home" name="btn2">
    </form>
</body>
</html>
