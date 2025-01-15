<?php
include 'conn.php';
if(isset($_POST['submit']))
{
 $stdid=$_POST['studentid'];
 $sql="delete from studentregistration where studentid='$stdid'";
 if(mysqli_query($conn,$sql))
 {
  header("location:welcome.php");
 }
 else
 {
  echo "error".mysqli_error($conn);
 }
 mysqli_close($conn);
}
else
{
?>
<html>
<body>
<form action="" method="POST">
Student Id:
<input type="textbox" name="studentid"><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
}
?>
