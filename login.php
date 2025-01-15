<?php
include 'dbconnection.php';

if(isset($_POST['submit'])) {	
	$uname = $_POST['username'];
	$psswrd = $_POST['password'];
	$sql = "SELECT * FROM userregistration where username='$uname' and password='$psswrd'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		header("location:welcome.php");
	} else {
		header("location:error.php");
	}
	mysqli_close($conn);
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Form container */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px; /* Reduced width */
            text-align: center;
        }

        /* Form heading */
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Input fields and labels styling */
        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
            display: block;
            text-align: left;
            width: 100%;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Submit button styling */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Button hover effect */
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Link styling */
        a {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        /* Link hover effect */
        a:hover {
            text-decoration: underline;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
                width: 90%;
            }

            input[type="text"], input[type="password"], input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Login</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <a href="registration.php">New User? Sign Up</a><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>
</html>

<?php } ?>
