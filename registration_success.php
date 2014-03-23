<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="ashr1y"; // Mysql password 
$db_name="coppr"; // Database name 
$tbl_name="registration"; // Table name 

$con=mysqli_connect("$host","$username","$password","$db_name");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$name=$_POST['name'];
$usn=$_POST['USN'];
$branch=$_POST['Branch'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$conpassword=$_POST['Confirmpassword'];
if($password==$conpassword)
{
$sql="INSERT INTO $tbl_name VALUES ('$name','$usn','$branch','$email','$password')";
}
else
{
 echo "Probably passwords not matching";
}
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo " record added suceesfully";

mysqli_close($con);

?>