
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
            background-color: #f5f5f5;
            color: #ecf0f1; 
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

        input, button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            box-sizing: border-box;
            border: 1px solid #2c3e50; 
            background-color: #ecf0f1; 
            color: #2c3e50;
        }

        input[type="submit"] {
            background-color: #3498db; 
            color: white;
            border: 0;
        }

        
        label {
            color: #ecf0f1; 
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        label1 {
            color: #2c3e50; 
            display: block;
            margin-bottom: 5px;
            text-align: center;
        }
    </style>

    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('pass').value;
        

            if (event.submitter && event.submitter.name === 'btn1') {

            if (email == "" && password == "") {
                alert("Please fill in both email and password .");
                return false;
            }else  if (email == "") {
                alert("Please fill in email .");
                return false;
            }else  if (password == "") {
                alert("Please fill in password .");
                return false;
            }
           

            return true;
        }
    }
    </script>




</head>
<body>
    <h1>Login</h1>
    <form action="../Controllers/LoginCheckController.php" method="post" onsubmit="return validateForm()">
       
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>

        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass"><br>

        <input type="submit" name="btn1" value="Login">
        <input type="submit" name="btn2" value="Register">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

