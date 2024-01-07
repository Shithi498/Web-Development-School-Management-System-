<!DOCTYPE html>
<html>
<head>
    <title>Student Notices</title>
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
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #3498db; 
            color: white;
            border: 0;
            cursor: pointer;
          
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
    <form action="../Controllers/NoticeCheckController.php" method="post">
        <h1>Student Notices</h1>
        <button name="btn2">Home</button>
    </form>

    <?php
    require_once('../Models/Noticedb.php');
    

    $notices = auth();
    if (!empty($notices)) {
        echo "<h2>Notices:</h2>";
        foreach ($notices  as $notice) {
            $noticeTitle = $notice['title'];
            $noticeContent = $notice['content'];
            $noticeDate = $notice['date'];

            echo "<h3>$noticeTitle</h3>";
            echo "<p>Date: $noticeDate</p>";
            echo "<p>$noticeContent</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No notices available.</p>";
    }
    ?>
</body>
</html>

