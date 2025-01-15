<?php
include "conn.php";
if(isset($_POST["studentid"]))
{
 $stdid=$_POST['studentid'];
 $sql="select * from studentregistration where studentid='$stdid'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
 {
  $student=mysqli_fetch_assoc($result);
  $query=http_build_query($student);
  header("location:update2.php?$query");
  exit();
 }
 else
 {
  echo "no student found ";
 }
mysqli_close($conn);
}
else
{
?>
<html>
<body>
<form action="" method="POST">
Studentid:
<input type="textbox" name="studentid" id="studentid"><br>
<input type="submit" name="submit" value="retrieve">
</form>
</body>
</html>
<?php
}
?>

 