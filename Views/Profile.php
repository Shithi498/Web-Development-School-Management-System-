<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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
        }

        h1 {
            color: #3498db; 
        }

        button {
           
            width: 20%;
            margin: 0;
            padding: 10px;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #3498db; 
            color: white;
            border: 0;
            cursor: pointer;
            float: right;
        }

        h2 {
            color: #3498db;
        }

        p {
            margin-bottom: 10px;
        }

        hr {
            border: 0.5px solid #3498db;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <form action="../Controllers/ProfileCheckController.php" method="post">
    <button name="btn2">Home</button>
        <h1>Profile</h1>
       
    </form>

    <?php
    require_once('../Models/Profiledb.php');
   

    $profileInfo = auth();
    if (!empty($profileInfo)) {
       
        foreach ($profileInfo  as $pInfo) {
            $Name = $pInfo['Name'];
            $PhoneNumber = $pInfo['PhoneNumber'];
            $Email = $pInfo['Email'];
            $Gender = $pInfo['Gender'];

            echo "<h3>$Name</h3>";
            echo "<p>$PhoneNumber</p>";
            echo "<p>$Email</p>";
            echo "<p>$Gender</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No information available.</p>";
    }
    ?>
     
</body>
</html>

