<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jismi";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 die ("not connected".mysqli_connect_error());
}
else
{
 echo "conncted succcesfully";
}
?>