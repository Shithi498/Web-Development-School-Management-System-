
<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
    <style>
        body {
            text-align: center;
            padding: 15px;
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #3498db; 
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 15px;
            color: #3498db; 
        }

        input[type="text"],
        input[type="password"]
        {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            box-sizing: border-box;
            border: 1px solid #3498db;
            background-color: #ecf0f1; 
            color: #3498db; 
        }
        input[type="radio"] {
            margin-bottom: 10px;
            margin-right: 5px; 
            color: #3498db; 
        }
        input[type="submit"],
        input[type="reset"] {
            width: 49%; 
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

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #2980b9; 
        }
    </style>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var phn = document.getElementById('phn').value;
           
            var pass = document.getElementById('pass').value;
            var cpass = document.getElementById('cpass').value;
          
            if (event.submitter && event.submitter.name == 'btn1') {


            if (!name || !phn || !pass || !cpass) {
                alert("Please fill in all the fields.");
                return false;
            }

            if (pass !== cpass) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }
    }
    </script>
</head>
<body>
    <h1>Update Profile</h1>
    <form action="../Controllers/EditProfileCheckController.php" method="post" onsubmit="return validateForm()">
        Name:
        <input type="text" id="name" name="name" placeholder="Name"><br><br>
        Phone Number:
        <input type="text" id="phn" name="phn" placeholder="Phone Number"><br><br>
      
        Password:
        <input type="password" id="pass" name="pass" placeholder="Password"><br><br>
        Confirm Password:
        <input type="password" id="cpass" name="cpass" placeholder="Confirm Password"><br><br>


        <input type="submit" name="btn1" value="Update">
        <input type="reset" value="Reset">
        <input type="submit" value="Home" name="btn2">
    </form>
</body>
</html>
