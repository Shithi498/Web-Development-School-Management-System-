<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
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
           
        }

       
    </style>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var phn = document.getElementById('phn').value;
            var email = document.getElementById('email').value;
            var pass = document.getElementById('pass').value;
            var cpass = document.getElementById('cpass').value;
            var gender = document.querySelector('input[name="gender"]:checked');

            if (event.submitter && event.submitter.name == 'btn1') {


            if (!name || !phn || !email || !pass || !cpass || !gender) {
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
    <h1>Registration Form</h1>
    <form action="../Controllers/RegistrationCheckController.php" method="post" onsubmit="return validateForm()">
        Name:
        <input type="text" id="name" name="name" placeholder="Name"><br><br>
        Phone Number:
        <input type="text" id="phn" name="phn" placeholder="Phone Number"><br><br>
        Email:
        <input type="text" id="email" name="email" placeholder="Email"><br><br>
        Password:
        <input type="password" id="pass" name="pass" placeholder="Password"><br><br>
        Confirm Password:
        <input type="password" id="cpass" name="cpass" placeholder="Confirm Password"><br><br>

        <input type="radio" id="male" name="gender" value="Male"> Male
        <input type="radio" id="Female" name="gender" value="Female"> Female
        <input type="radio" id="other" name="gender" value="Other"> Other<br><br>

        <input type="submit" name="btn1" value="Register">
        <input type="reset" value="Reset">
        <input type="submit" value="Home" name="btn2">
    </form>
</body>
</html>
