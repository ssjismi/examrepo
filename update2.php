<?php
include "conn.php";
if($_SERVER["REQUEST_METHOD"]=== 'POST' && isset($_POST['submit']))
{
 $stdid=$_POST['studentid'];
 $name=$_POST['studentname'];
 $course=$_POST['coursename'];
 $sem=$_POST['semester'];
 $gen=$_POST['gender'];
 $hob=isset($_POST['hobbies']) ? implode(",",$_POST['hobbies']) : "";
 $sql="update studentregistration set studentname='$name',coursename='$course',semester='$sem',gender='$gen',hobbies='$hob' where studentid='$stdid'";
if(mysqli_query($conn,$sql))
{
 header("location.homepage.php");
}
else
{
 echo "Error:".mysqli_error($conn);
}
mysqli_close($conn);
exit();
}
if(isset($_GET['studentid']))
{
 $student=$_GET;
}
else
{
 echo "no stuent data provided";
 exit();
}
?>
<html>
<body>
<form action="" method="POST">
<input type="hidden" name="studentid" value="<?php echo $student['studentid'] ?>" required><br><br>
student Name:
<input type="text" name="studentname" value="<?php echo $student['studentname'] ?>" required ><br><br>
Course name:
<input type='text' name="coursename" value="<?php echo $student['coursename'] ?>" required ><br><br>
Semester:
<input type="text" name="semester" value="<?php echo $student['semester'] ?>" required ><br><br>
Gender:
<input type="radio" name="gender" value="male" <?php if($student['gender']=='male') echo 'checked'; ?> >Male
<input type="radio" name="gender" value="female" <?php if($student['gender']=='female') echo 'checked'; ?> > Female<br><br>

Hobbies:
<?php $existinghobbies=explode(",",$student['hobbies']); ?>
<input type="checkbox" name='hobbies[]' value="sports" <?php if(in_array("sports",$existinghobbies)) echo 'checked'; ?>> Sports
<input type="checkbox" name="hobbies[]" value="music" <?php if(in_array("music", $existinghobbies)) echo 'checked'; ?>> Music
<input type="checkbox" name="hobbies[]" value="dance" <?php if(in_array("dance", $existinghobbies)) echo 'checked'; ?> > Dance
<input type="checkbox" name="hobbies[]" value="reading" <?php if(in_array("reading", $existinghobbies)) echo 'checked'; ?> > Reading
<button type="submit" name="submit">Update</button>
</form>
</body>
</html>



