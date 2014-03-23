<html>
<body>						
<?php
session_start();
$con=mysqli_connect("localhost","root","ashr1y","coppr");
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$topicname = $_GET['topic_sel'];
$required='Stacks';


//print_r($_SESSION['topic']);
 
$sql = "SELECT notetext FROM note where topicname = '$topicname'";
$result = mysqli_query($con,$sql);
$d="";
?>
<div>
<?php
 while($row = mysqli_fetch_object($result))
  {
    $d.=$row->notetext ."<br>";
  }
?>
</div>
<?php
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo $d;

?>
</body>
</html>  
