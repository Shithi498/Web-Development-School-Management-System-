<?php
session_start();
if (isset($_SESSION['currentUser'])) {
    echo "Welcome ".$_SESSION['currentUser'];
} else {
    echo "currentUser not set in the session.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif;
        }

        form {
          max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            border: 1px solid #34495e;
            border-radius: 8px;
            background-color: #2c3e50; 
        }

        button {
            width: 45%; 
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #3498db; 
            color: white;
            border: 0;
            cursor: pointer;
            display: inline-block;
        }

    </style>
</head>
<body>
    <form action="../Controllers/HomeCheckController.php" method="post">
        <button name="logout">Logout</button>
        <button name="profile">Profile</button><br>

        <button name="grade">Grade</button>
        <button name="classmate">Classmates</button><br>

        <button name="notice">Notice</button>
        <button name="4thSub">Select Group</button>
        <button name="EditProfile">Edit Profile</button>
    </form>
</body>
</html>
