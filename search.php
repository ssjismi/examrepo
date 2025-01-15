<?php
include "conn.php";
if(isset($_POST['submit']))
{
 $stuid=$_POST["studentid"];
 $sql="select * from studentregistration where studentid='$stuid'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
 {
  while($row=mysqli_fetch_assoc($result))
  { 
   echo "<br>id:".$row["studentid"]."<br>name:".$row["studentname"]."<br>course:".$row["coursename"]."<br>semester:".$row["semester"]."<br>Gender:".$row["gender"]."<br>hobbies:".$row["hobbies"]."<br>";
  }
 }
 else
 {
  echo "0 rows";
 }
mysqli_close($conn);
}
else
{
?>
<html>
<body>
<form action="" method="POST">
StudentId:
<input type="textbox" name="studentid"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
}
?>
