<?php
include 'conn.php';
if(isset($_POST['submit']))
{
 $first=$_POST["firstname"];
 $last=$_POST["lastname"];
 $cont=$_POST["contactnumber"];
 $email=$_POST["email"];
 $user=$_POST["username"];
 $pass=$_POST["password"];
 $sql="insert into userregistration(firstname,lastname,contactnumber,email,username,password)values('$first','$last','$cont','$email','$user','$pass')";
if(mysqli_query($conn,$sql))
{
 echo "values added!";
}
else
{
 echo "error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
}
else
{
?>
<html>
<body>
<form action="" method="POST">
<label for="firstname">firstname</label>
<input type="text" name="firstname" id="firstname" required><br><br>
<label for="lastname">Last name</label>
<input type="text" name="lastname" id="lastname" required><br><br>

<label for="contact number">Contactnumber</label>
<input type="text" name="contactnumber" id="contnum" required><br><br>

<label for="email">Email</label>
<input type="mail" name="email" id="mail" required><br><br>

<label for="username">Username</label>
<input type="text" name="username" id="userna" required><br><br>

<label for="password">Password</label>
<input type="password" name="password" id="passwo" required><br><br>

<input type="submit" name="submit" value="register">
</form>
</body>
</html>
<?php
}
?>
