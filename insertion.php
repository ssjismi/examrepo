<?php
include "conn.php";
if(isset($_POST['submit']))
{
 $name=$_POST['studentname'];
 $course=$_POST['coursename'];
 $sem=$_POST['semester'];
 $gen=$_POST['gender'];
 if(isset($_POST['hobbies']))
 {
  $hobbies1=implode(",",$_POST['hobbies']);
 }
 else
 {
  $hobbies1="";
 }
 $sql="insert into studentregistration(studentname,coursename,semester,gender,hobbies)values('$name','$course','$sem','$gen','$hobbies1')";
if(mysqli_query($conn,$sql))
{
 header("location:welcome.php");
}
else
{
 mysqli_error($conn);
}
mysqli_close($conn);
}
else
{
?>
<html>
<body>
<form action="" method="POST">
Student name:
<input type="text" name="studentname"><br><br>
Course name:
<input type="text" name="coursename"><br><br>
Semester:
<input type="text" name="semester"><br><br>
Gender:<br>
<input type="radio" name="gender" value="female">Female<br><br>
<input type="radio" name="gender" value="male">Male<br><br>
Hobbies:<br>
<input type="checkbox" name="hobbies[]" value="sports">Sports<br><br>
<input type="checkbox" name="hobbies[]" value="Reading">Reading<br><br>
<input type="checkbox" name="hobbies[]" value="Arts">Arts<br><br>
<input type="checkbox" name="hobbies[]" value="Football">Football<br><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
}
?>


